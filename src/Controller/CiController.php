<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ci Controller
 *
 * @property \App\Model\Table\CiTable $Ci
 */
class CiController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Ci->find();
        $ci = $this->paginate($query);

        $this->set(compact('ci'));
    }

    /**
     * View method
     *
     * @param string|null $id Ci id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ci = $this->Ci->get($id, contain: []);
        $this->set(compact('ci'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ci = $this->Ci->newEmptyEntity();
        if ($this->request->is('post')) {
            $ci = $this->Ci->patchEntity($ci, $this->request->getData());
            if ($this->Ci->save($ci)) {
                $this->Flash->success(__('The ci has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ci could not be saved. Please, try again.'));
        }
        $this->set(compact('ci'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ci id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ci = $this->Ci->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ci = $this->Ci->patchEntity($ci, $this->request->getData());
            if ($this->Ci->save($ci)) {
                $this->Flash->success(__('The ci has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ci could not be saved. Please, try again.'));
        }
        $this->set(compact('ci'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ci id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ci = $this->Ci->get($id);
        if ($this->Ci->delete($ci)) {
            $this->Flash->success(__('The ci has been deleted.'));
        } else {
            $this->Flash->error(__('The ci could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
