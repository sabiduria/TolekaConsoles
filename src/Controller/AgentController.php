<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Agent Controller
 *
 * @property \App\Model\Table\AgentTable $Agent
 */
class AgentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Agent->find();
        $agent = $this->paginate($query);

        $this->set(compact('agent'));
    }

    /**
     * View method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agent = $this->Agent->get($id, contain: []);
        $this->set(compact('agent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agent = $this->Agent->newEmptyEntity();
        if ($this->request->is('post')) {
            $agent = $this->Agent->patchEntity($agent, $this->request->getData());
            if ($this->Agent->save($agent)) {
                $this->Flash->success(__('The agent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent could not be saved. Please, try again.'));
        }
        $this->set(compact('agent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agent = $this->Agent->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agent = $this->Agent->patchEntity($agent, $this->request->getData());
            if ($this->Agent->save($agent)) {
                $this->Flash->success(__('The agent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent could not be saved. Please, try again.'));
        }
        $this->set(compact('agent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agent = $this->Agent->get($id);
        if ($this->Agent->delete($agent)) {
            $this->Flash->success(__('The agent has been deleted.'));
        } else {
            $this->Flash->error(__('The agent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
