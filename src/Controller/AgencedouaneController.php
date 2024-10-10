<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Agencedouane Controller
 *
 * @property \App\Model\Table\AgencedouaneTable $Agencedouane
 */
class AgencedouaneController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Agencedouane->find();
        $agencedouane = $this->paginate($query);

        $this->set(compact('agencedouane'));
    }

    /**
     * View method
     *
     * @param string|null $id Agencedouane id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agencedouane = $this->Agencedouane->get($id, contain: []);
        $this->set(compact('agencedouane'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agencedouane = $this->Agencedouane->newEmptyEntity();
        if ($this->request->is('post')) {
            $agencedouane = $this->Agencedouane->patchEntity($agencedouane, $this->request->getData());
            if ($this->Agencedouane->save($agencedouane)) {
                $this->Flash->success(__('The agencedouane has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agencedouane could not be saved. Please, try again.'));
        }
        $this->set(compact('agencedouane'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agencedouane id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agencedouane = $this->Agencedouane->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agencedouane = $this->Agencedouane->patchEntity($agencedouane, $this->request->getData());
            if ($this->Agencedouane->save($agencedouane)) {
                $this->Flash->success(__('The agencedouane has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agencedouane could not be saved. Please, try again.'));
        }
        $this->set(compact('agencedouane'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agencedouane id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agencedouane = $this->Agencedouane->get($id);
        if ($this->Agencedouane->delete($agencedouane)) {
            $this->Flash->success(__('The agencedouane has been deleted.'));
        } else {
            $this->Flash->error(__('The agencedouane could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
