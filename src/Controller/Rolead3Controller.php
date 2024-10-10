<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rolead3 Controller
 *
 * @property \App\Model\Table\Rolead3Table $Rolead3
 */
class Rolead3Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Rolead3->find();
        $rolead3 = $this->paginate($query);

        $this->set(compact('rolead3'));
    }

    /**
     * View method
     *
     * @param string|null $id Rolead3 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolead3 = $this->Rolead3->get($id, contain: []);
        $this->set(compact('rolead3'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolead3 = $this->Rolead3->newEmptyEntity();
        if ($this->request->is('post')) {
            $rolead3 = $this->Rolead3->patchEntity($rolead3, $this->request->getData());
            if ($this->Rolead3->save($rolead3)) {
                $this->Flash->success(__('The rolead3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolead3 could not be saved. Please, try again.'));
        }
        $this->set(compact('rolead3'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rolead3 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolead3 = $this->Rolead3->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolead3 = $this->Rolead3->patchEntity($rolead3, $this->request->getData());
            if ($this->Rolead3->save($rolead3)) {
                $this->Flash->success(__('The rolead3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolead3 could not be saved. Please, try again.'));
        }
        $this->set(compact('rolead3'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rolead3 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolead3 = $this->Rolead3->get($id);
        if ($this->Rolead3->delete($rolead3)) {
            $this->Flash->success(__('The rolead3 has been deleted.'));
        } else {
            $this->Flash->error(__('The rolead3 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
