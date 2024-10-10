<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Qmslots Controller
 *
 * @property \App\Model\Table\QmslotsTable $Qmslots
 */
class QmslotsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Qmslots->find();
        $qmslots = $this->paginate($query);

        $this->set(compact('qmslots'));
    }

    /**
     * View method
     *
     * @param string|null $id Qmslot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $qmslot = $this->Qmslots->get($id, contain: []);
        $this->set(compact('qmslot'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $qmslot = $this->Qmslots->newEmptyEntity();
        if ($this->request->is('post')) {
            $qmslot = $this->Qmslots->patchEntity($qmslot, $this->request->getData());
            if ($this->Qmslots->save($qmslot)) {
                $this->Flash->success(__('The qmslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The qmslot could not be saved. Please, try again.'));
        }
        $this->set(compact('qmslot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Qmslot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $qmslot = $this->Qmslots->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $qmslot = $this->Qmslots->patchEntity($qmslot, $this->request->getData());
            if ($this->Qmslots->save($qmslot)) {
                $this->Flash->success(__('The qmslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The qmslot could not be saved. Please, try again.'));
        }
        $this->set(compact('qmslot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Qmslot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $qmslot = $this->Qmslots->get($id);
        if ($this->Qmslots->delete($qmslot)) {
            $this->Flash->success(__('The qmslot has been deleted.'));
        } else {
            $this->Flash->error(__('The qmslot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
