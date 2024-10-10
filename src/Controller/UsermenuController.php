<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Usermenu Controller
 *
 * @property \App\Model\Table\UsermenuTable $Usermenu
 */
class UsermenuController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Usermenu->find();
        $usermenu = $this->paginate($query);

        $this->set(compact('usermenu'));
    }

    /**
     * View method
     *
     * @param string|null $id Usermenu id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usermenu = $this->Usermenu->get($id, contain: []);
        $this->set(compact('usermenu'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usermenu = $this->Usermenu->newEmptyEntity();
        if ($this->request->is('post')) {
            $usermenu = $this->Usermenu->patchEntity($usermenu, $this->request->getData());
            if ($this->Usermenu->save($usermenu)) {
                $this->Flash->success(__('The usermenu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usermenu could not be saved. Please, try again.'));
        }
        $this->set(compact('usermenu'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usermenu id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usermenu = $this->Usermenu->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usermenu = $this->Usermenu->patchEntity($usermenu, $this->request->getData());
            if ($this->Usermenu->save($usermenu)) {
                $this->Flash->success(__('The usermenu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usermenu could not be saved. Please, try again.'));
        }
        $this->set(compact('usermenu'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usermenu id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usermenu = $this->Usermenu->get($id);
        if ($this->Usermenu->delete($usermenu)) {
            $this->Flash->success(__('The usermenu has been deleted.'));
        } else {
            $this->Flash->error(__('The usermenu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
