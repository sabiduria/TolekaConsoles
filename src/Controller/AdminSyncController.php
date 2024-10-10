<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AdminSync Controller
 *
 * @property \App\Model\Table\AdminSyncTable $AdminSync
 */
class AdminSyncController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AdminSync->find()
            ->contain(['Cohbags', 'Cohlots']);
        $adminSync = $this->paginate($query);

        $this->set(compact('adminSync'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Sync id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminSync = $this->AdminSync->get($id, contain: ['Cohbags', 'Cohlots']);
        $this->set(compact('adminSync'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminSync = $this->AdminSync->newEmptyEntity();
        if ($this->request->is('post')) {
            $adminSync = $this->AdminSync->patchEntity($adminSync, $this->request->getData());
            if ($this->AdminSync->save($adminSync)) {
                $this->Flash->success(__('The admin sync has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin sync could not be saved. Please, try again.'));
        }
        $cohbags = $this->AdminSync->Cohbags->find('list', limit: 200)->all();
        $cohlots = $this->AdminSync->Cohlots->find('list', limit: 200)->all();
        $this->set(compact('adminSync', 'cohbags', 'cohlots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Sync id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminSync = $this->AdminSync->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminSync = $this->AdminSync->patchEntity($adminSync, $this->request->getData());
            if ($this->AdminSync->save($adminSync)) {
                $this->Flash->success(__('The admin sync has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin sync could not be saved. Please, try again.'));
        }
        $cohbags = $this->AdminSync->Cohbags->find('list', limit: 200)->all();
        $cohlots = $this->AdminSync->Cohlots->find('list', limit: 200)->all();
        $this->set(compact('adminSync', 'cohbags', 'cohlots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Sync id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminSync = $this->AdminSync->get($id);
        if ($this->AdminSync->delete($adminSync)) {
            $this->Flash->success(__('The admin sync has been deleted.'));
        } else {
            $this->Flash->error(__('The admin sync could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
