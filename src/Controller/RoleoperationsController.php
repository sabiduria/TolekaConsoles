<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Roleoperations Controller
 *
 * @property \App\Model\Table\RoleoperationsTable $Roleoperations
 */
class RoleoperationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Roleoperations->find();
        $roleoperations = $this->paginate($query);

        $this->set(compact('roleoperations'));
    }

    /**
     * View method
     *
     * @param string|null $id Roleoperation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roleoperation = $this->Roleoperations->get($id, contain: []);
        $this->set(compact('roleoperation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roleoperation = $this->Roleoperations->newEmptyEntity();
        if ($this->request->is('post')) {
            $roleoperation = $this->Roleoperations->patchEntity($roleoperation, $this->request->getData());
            if ($this->Roleoperations->save($roleoperation)) {
                $this->Flash->success(__('The roleoperation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roleoperation could not be saved. Please, try again.'));
        }
        $this->set(compact('roleoperation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Roleoperation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roleoperation = $this->Roleoperations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roleoperation = $this->Roleoperations->patchEntity($roleoperation, $this->request->getData());
            if ($this->Roleoperations->save($roleoperation)) {
                $this->Flash->success(__('The roleoperation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roleoperation could not be saved. Please, try again.'));
        }
        $this->set(compact('roleoperation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Roleoperation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roleoperation = $this->Roleoperations->get($id);
        if ($this->Roleoperations->delete($roleoperation)) {
            $this->Flash->success(__('The roleoperation has been deleted.'));
        } else {
            $this->Flash->error(__('The roleoperation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
