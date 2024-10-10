<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rolead1 Controller
 *
 * @property \App\Model\Table\Rolead1Table $Rolead1
 */
class Rolead1Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Rolead1->find();
        $rolead1 = $this->paginate($query);

        $this->set(compact('rolead1'));
    }

    /**
     * View method
     *
     * @param string|null $id Rolead1 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolead1 = $this->Rolead1->get($id, contain: []);
        $this->set(compact('rolead1'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolead1 = $this->Rolead1->newEmptyEntity();
        if ($this->request->is('post')) {
            $rolead1 = $this->Rolead1->patchEntity($rolead1, $this->request->getData());
            if ($this->Rolead1->save($rolead1)) {
                $this->Flash->success(__('The rolead1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolead1 could not be saved. Please, try again.'));
        }
        $this->set(compact('rolead1'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rolead1 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolead1 = $this->Rolead1->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolead1 = $this->Rolead1->patchEntity($rolead1, $this->request->getData());
            if ($this->Rolead1->save($rolead1)) {
                $this->Flash->success(__('The rolead1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolead1 could not be saved. Please, try again.'));
        }
        $this->set(compact('rolead1'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rolead1 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolead1 = $this->Rolead1->get($id);
        if ($this->Rolead1->delete($rolead1)) {
            $this->Flash->success(__('The rolead1 has been deleted.'));
        } else {
            $this->Flash->error(__('The rolead1 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
