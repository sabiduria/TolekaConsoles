<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typeworkflow Controller
 *
 * @property \App\Model\Table\TypeworkflowTable $Typeworkflow
 */
class TypeworkflowController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Typeworkflow->find();
        $typeworkflow = $this->paginate($query);

        $this->set(compact('typeworkflow'));
    }

    /**
     * View method
     *
     * @param string|null $id Typeworkflow id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeworkflow = $this->Typeworkflow->get($id, contain: []);
        $this->set(compact('typeworkflow'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeworkflow = $this->Typeworkflow->newEmptyEntity();
        if ($this->request->is('post')) {
            $typeworkflow = $this->Typeworkflow->patchEntity($typeworkflow, $this->request->getData());
            if ($this->Typeworkflow->save($typeworkflow)) {
                $this->Flash->success(__('The typeworkflow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeworkflow could not be saved. Please, try again.'));
        }
        $this->set(compact('typeworkflow'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeworkflow id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeworkflow = $this->Typeworkflow->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeworkflow = $this->Typeworkflow->patchEntity($typeworkflow, $this->request->getData());
            if ($this->Typeworkflow->save($typeworkflow)) {
                $this->Flash->success(__('The typeworkflow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeworkflow could not be saved. Please, try again.'));
        }
        $this->set(compact('typeworkflow'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeworkflow id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeworkflow = $this->Typeworkflow->get($id);
        if ($this->Typeworkflow->delete($typeworkflow)) {
            $this->Flash->success(__('The typeworkflow has been deleted.'));
        } else {
            $this->Flash->error(__('The typeworkflow could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
