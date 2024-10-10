<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Emballage Controller
 *
 * @property \App\Model\Table\EmballageTable $Emballage
 */
class EmballageController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Emballage->find();
        $emballage = $this->paginate($query);

        $this->set(compact('emballage'));
    }

    /**
     * View method
     *
     * @param string|null $id Emballage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emballage = $this->Emballage->get($id, contain: []);
        $this->set(compact('emballage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emballage = $this->Emballage->newEmptyEntity();
        if ($this->request->is('post')) {
            $emballage = $this->Emballage->patchEntity($emballage, $this->request->getData());
            if ($this->Emballage->save($emballage)) {
                $this->Flash->success(__('The emballage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emballage could not be saved. Please, try again.'));
        }
        $this->set(compact('emballage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Emballage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emballage = $this->Emballage->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emballage = $this->Emballage->patchEntity($emballage, $this->request->getData());
            if ($this->Emballage->save($emballage)) {
                $this->Flash->success(__('The emballage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emballage could not be saved. Please, try again.'));
        }
        $this->set(compact('emballage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Emballage id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emballage = $this->Emballage->get($id);
        if ($this->Emballage->delete($emballage)) {
            $this->Flash->success(__('The emballage has been deleted.'));
        } else {
            $this->Flash->error(__('The emballage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
