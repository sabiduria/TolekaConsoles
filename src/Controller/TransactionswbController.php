<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Transactionswb Controller
 *
 * @property \App\Model\Table\TransactionswbTable $Transactionswb
 */
class TransactionswbController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Transactionswb->find();
        $transactionswb = $this->paginate($query);

        $this->set(compact('transactionswb'));
    }

    /**
     * View method
     *
     * @param string|null $id Transactionswb id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transactionswb = $this->Transactionswb->get($id, contain: []);
        $this->set(compact('transactionswb'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transactionswb = $this->Transactionswb->newEmptyEntity();
        if ($this->request->is('post')) {
            $transactionswb = $this->Transactionswb->patchEntity($transactionswb, $this->request->getData());
            if ($this->Transactionswb->save($transactionswb)) {
                $this->Flash->success(__('The transactionswb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transactionswb could not be saved. Please, try again.'));
        }
        $this->set(compact('transactionswb'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transactionswb id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transactionswb = $this->Transactionswb->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transactionswb = $this->Transactionswb->patchEntity($transactionswb, $this->request->getData());
            if ($this->Transactionswb->save($transactionswb)) {
                $this->Flash->success(__('The transactionswb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transactionswb could not be saved. Please, try again.'));
        }
        $this->set(compact('transactionswb'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transactionswb id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transactionswb = $this->Transactionswb->get($id);
        if ($this->Transactionswb->delete($transactionswb)) {
            $this->Flash->success(__('The transactionswb has been deleted.'));
        } else {
            $this->Flash->error(__('The transactionswb could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
