<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Classification Controller
 *
 * @property \App\Model\Table\ClassificationTable $Classification
 */
class ClassificationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Classification->find();
        $classification = $this->paginate($query);

        $this->set(compact('classification'));
    }

    /**
     * View method
     *
     * @param string|null $id Classification id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classification = $this->Classification->get($id, contain: []);
        $this->set(compact('classification'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classification = $this->Classification->newEmptyEntity();
        if ($this->request->is('post')) {
            $classification = $this->Classification->patchEntity($classification, $this->request->getData());
            if ($this->Classification->save($classification)) {
                $this->Flash->success(__('The classification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classification could not be saved. Please, try again.'));
        }
        $this->set(compact('classification'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Classification id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classification = $this->Classification->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classification = $this->Classification->patchEntity($classification, $this->request->getData());
            if ($this->Classification->save($classification)) {
                $this->Flash->success(__('The classification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classification could not be saved. Please, try again.'));
        }
        $this->set(compact('classification'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Classification id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classification = $this->Classification->get($id);
        if ($this->Classification->delete($classification)) {
            $this->Flash->success(__('The classification has been deleted.'));
        } else {
            $this->Flash->error(__('The classification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
