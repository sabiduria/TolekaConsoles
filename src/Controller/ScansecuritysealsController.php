<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Scansecurityseals Controller
 *
 * @property \App\Model\Table\ScansecuritysealsTable $Scansecurityseals
 */
class ScansecuritysealsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Scansecurityseals->find();
        $scansecurityseals = $this->paginate($query);

        $this->set(compact('scansecurityseals'));
    }

    /**
     * View method
     *
     * @param string|null $id Scansecurityseal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scansecurityseal = $this->Scansecurityseals->get($id, contain: []);
        $this->set(compact('scansecurityseal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scansecurityseal = $this->Scansecurityseals->newEmptyEntity();
        if ($this->request->is('post')) {
            $scansecurityseal = $this->Scansecurityseals->patchEntity($scansecurityseal, $this->request->getData());
            if ($this->Scansecurityseals->save($scansecurityseal)) {
                $this->Flash->success(__('The scansecurityseal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scansecurityseal could not be saved. Please, try again.'));
        }
        $this->set(compact('scansecurityseal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Scansecurityseal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scansecurityseal = $this->Scansecurityseals->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scansecurityseal = $this->Scansecurityseals->patchEntity($scansecurityseal, $this->request->getData());
            if ($this->Scansecurityseals->save($scansecurityseal)) {
                $this->Flash->success(__('The scansecurityseal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scansecurityseal could not be saved. Please, try again.'));
        }
        $this->set(compact('scansecurityseal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Scansecurityseal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scansecurityseal = $this->Scansecurityseals->get($id);
        if ($this->Scansecurityseals->delete($scansecurityseal)) {
            $this->Flash->success(__('The scansecurityseal has been deleted.'));
        } else {
            $this->Flash->error(__('The scansecurityseal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
