<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Logcon Controller
 *
 * @property \App\Model\Table\LogconTable $Logcon
 */
class LogconController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Logcon->find();
        $logcon = $this->paginate($query);

        $this->set(compact('logcon'));
    }

    /**
     * View method
     *
     * @param string|null $id Logcon id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logcon = $this->Logcon->get($id, contain: []);
        $this->set(compact('logcon'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logcon = $this->Logcon->newEmptyEntity();
        if ($this->request->is('post')) {
            $logcon = $this->Logcon->patchEntity($logcon, $this->request->getData());
            if ($this->Logcon->save($logcon)) {
                $this->Flash->success(__('The logcon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logcon could not be saved. Please, try again.'));
        }
        $this->set(compact('logcon'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Logcon id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logcon = $this->Logcon->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logcon = $this->Logcon->patchEntity($logcon, $this->request->getData());
            if ($this->Logcon->save($logcon)) {
                $this->Flash->success(__('The logcon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logcon could not be saved. Please, try again.'));
        }
        $this->set(compact('logcon'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Logcon id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logcon = $this->Logcon->get($id);
        if ($this->Logcon->delete($logcon)) {
            $this->Flash->success(__('The logcon has been deleted.'));
        } else {
            $this->Flash->error(__('The logcon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
