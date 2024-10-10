<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rolead2 Controller
 *
 * @property \App\Model\Table\Rolead2Table $Rolead2
 */
class Rolead2Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Rolead2->find();
        $rolead2 = $this->paginate($query);

        $this->set(compact('rolead2'));
    }

    /**
     * View method
     *
     * @param string|null $id Rolead2 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolead2 = $this->Rolead2->get($id, contain: []);
        $this->set(compact('rolead2'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolead2 = $this->Rolead2->newEmptyEntity();
        if ($this->request->is('post')) {
            $rolead2 = $this->Rolead2->patchEntity($rolead2, $this->request->getData());
            if ($this->Rolead2->save($rolead2)) {
                $this->Flash->success(__('The rolead2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolead2 could not be saved. Please, try again.'));
        }
        $this->set(compact('rolead2'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rolead2 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolead2 = $this->Rolead2->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolead2 = $this->Rolead2->patchEntity($rolead2, $this->request->getData());
            if ($this->Rolead2->save($rolead2)) {
                $this->Flash->success(__('The rolead2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolead2 could not be saved. Please, try again.'));
        }
        $this->set(compact('rolead2'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rolead2 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolead2 = $this->Rolead2->get($id);
        if ($this->Rolead2->delete($rolead2)) {
            $this->Flash->success(__('The rolead2 has been deleted.'));
        } else {
            $this->Flash->error(__('The rolead2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
