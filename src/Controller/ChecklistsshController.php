<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Checklistssh Controller
 *
 * @property \App\Model\Table\ChecklistsshTable $Checklistssh
 */
class ChecklistsshController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Checklistssh->find();
        $checklistssh = $this->paginate($query);

        $this->set(compact('checklistssh'));
    }

    /**
     * View method
     *
     * @param string|null $id Checklistssh id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $checklistssh = $this->Checklistssh->get($id, contain: []);
        $this->set(compact('checklistssh'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $checklistssh = $this->Checklistssh->newEmptyEntity();
        if ($this->request->is('post')) {
            $checklistssh = $this->Checklistssh->patchEntity($checklistssh, $this->request->getData());
            if ($this->Checklistssh->save($checklistssh)) {
                $this->Flash->success(__('The checklistssh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The checklistssh could not be saved. Please, try again.'));
        }
        $this->set(compact('checklistssh'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Checklistssh id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $checklistssh = $this->Checklistssh->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $checklistssh = $this->Checklistssh->patchEntity($checklistssh, $this->request->getData());
            if ($this->Checklistssh->save($checklistssh)) {
                $this->Flash->success(__('The checklistssh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The checklistssh could not be saved. Please, try again.'));
        }
        $this->set(compact('checklistssh'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Checklistssh id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $checklistssh = $this->Checklistssh->get($id);
        if ($this->Checklistssh->delete($checklistssh)) {
            $this->Flash->success(__('The checklistssh has been deleted.'));
        } else {
            $this->Flash->error(__('The checklistssh could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
