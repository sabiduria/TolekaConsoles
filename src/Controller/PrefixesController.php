<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Prefixes Controller
 *
 * @property \App\Model\Table\PrefixesTable $Prefixes
 */
class PrefixesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Prefixes->find();
        $prefixes = $this->paginate($query);

        $this->set(compact('prefixes'));
    }

    /**
     * View method
     *
     * @param string|null $id Prefix id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prefix = $this->Prefixes->get($id, contain: []);
        $this->set(compact('prefix'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prefix = $this->Prefixes->newEmptyEntity();
        if ($this->request->is('post')) {
            $prefix = $this->Prefixes->patchEntity($prefix, $this->request->getData());
            if ($this->Prefixes->save($prefix)) {
                $this->Flash->success(__('The prefix has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prefix could not be saved. Please, try again.'));
        }
        $this->set(compact('prefix'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prefix id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prefix = $this->Prefixes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prefix = $this->Prefixes->patchEntity($prefix, $this->request->getData());
            if ($this->Prefixes->save($prefix)) {
                $this->Flash->success(__('The prefix has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prefix could not be saved. Please, try again.'));
        }
        $this->set(compact('prefix'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prefix id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prefix = $this->Prefixes->get($id);
        if ($this->Prefixes->delete($prefix)) {
            $this->Flash->success(__('The prefix has been deleted.'));
        } else {
            $this->Flash->error(__('The prefix could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
