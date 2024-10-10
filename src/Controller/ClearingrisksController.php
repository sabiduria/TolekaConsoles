<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clearingrisks Controller
 *
 * @property \App\Model\Table\ClearingrisksTable $Clearingrisks
 */
class ClearingrisksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Clearingrisks->find();
        $clearingrisks = $this->paginate($query);

        $this->set(compact('clearingrisks'));
    }

    /**
     * View method
     *
     * @param string|null $id Clearingrisk id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clearingrisk = $this->Clearingrisks->get($id, contain: []);
        $this->set(compact('clearingrisk'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clearingrisk = $this->Clearingrisks->newEmptyEntity();
        if ($this->request->is('post')) {
            $clearingrisk = $this->Clearingrisks->patchEntity($clearingrisk, $this->request->getData());
            if ($this->Clearingrisks->save($clearingrisk)) {
                $this->Flash->success(__('The clearingrisk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clearingrisk could not be saved. Please, try again.'));
        }
        $this->set(compact('clearingrisk'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clearingrisk id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clearingrisk = $this->Clearingrisks->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clearingrisk = $this->Clearingrisks->patchEntity($clearingrisk, $this->request->getData());
            if ($this->Clearingrisks->save($clearingrisk)) {
                $this->Flash->success(__('The clearingrisk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clearingrisk could not be saved. Please, try again.'));
        }
        $this->set(compact('clearingrisk'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clearingrisk id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clearingrisk = $this->Clearingrisks->get($id);
        if ($this->Clearingrisks->delete($clearingrisk)) {
            $this->Flash->success(__('The clearingrisk has been deleted.'));
        } else {
            $this->Flash->error(__('The clearingrisk could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
