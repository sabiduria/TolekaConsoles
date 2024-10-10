<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Workflows Controller
 *
 * @property \App\Model\Table\WorkflowsTable $Workflows
 */
class WorkflowsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Workflows->find()
            ->contain(['Statuses', 'Roles']);
        $workflows = $this->paginate($query);

        $this->set(compact('workflows'));
    }

    /**
     * View method
     *
     * @param string|null $id Workflow id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workflow = $this->Workflows->get($id, contain: ['Statuses', 'Roles']);
        $this->set(compact('workflow'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workflow = $this->Workflows->newEmptyEntity();
        if ($this->request->is('post')) {
            $workflow = $this->Workflows->patchEntity($workflow, $this->request->getData());
            if ($this->Workflows->save($workflow)) {
                $this->Flash->success(__('The workflow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The workflow could not be saved. Please, try again.'));
        }
        $statuses = $this->Workflows->Statuses->find('list', limit: 200)->all();
        $roles = $this->Workflows->Roles->find('list', limit: 200)->all();
        $this->set(compact('workflow', 'statuses', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Workflow id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workflow = $this->Workflows->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workflow = $this->Workflows->patchEntity($workflow, $this->request->getData());
            if ($this->Workflows->save($workflow)) {
                $this->Flash->success(__('The workflow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The workflow could not be saved. Please, try again.'));
        }
        $statuses = $this->Workflows->Statuses->find('list', limit: 200)->all();
        $roles = $this->Workflows->Roles->find('list', limit: 200)->all();
        $this->set(compact('workflow', 'statuses', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Workflow id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workflow = $this->Workflows->get($id);
        if ($this->Workflows->delete($workflow)) {
            $this->Flash->success(__('The workflow has been deleted.'));
        } else {
            $this->Flash->error(__('The workflow could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
