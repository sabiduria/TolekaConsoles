<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DeviceSync Controller
 *
 * @property \App\Model\Table\DeviceSyncTable $DeviceSync
 */
class DeviceSyncController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DeviceSync->find()
            ->contain(['Cohbags', 'Cohlots']);
        $deviceSync = $this->paginate($query);

        $this->set(compact('deviceSync'));
    }

    /**
     * View method
     *
     * @param string|null $id Device Sync id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deviceSync = $this->DeviceSync->get($id, contain: ['Cohbags', 'Cohlots']);
        $this->set(compact('deviceSync'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deviceSync = $this->DeviceSync->newEmptyEntity();
        if ($this->request->is('post')) {
            $deviceSync = $this->DeviceSync->patchEntity($deviceSync, $this->request->getData());
            if ($this->DeviceSync->save($deviceSync)) {
                $this->Flash->success(__('The device sync has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The device sync could not be saved. Please, try again.'));
        }
        $cohbags = $this->DeviceSync->Cohbags->find('list', limit: 200)->all();
        $cohlots = $this->DeviceSync->Cohlots->find('list', limit: 200)->all();
        $this->set(compact('deviceSync', 'cohbags', 'cohlots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Device Sync id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deviceSync = $this->DeviceSync->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deviceSync = $this->DeviceSync->patchEntity($deviceSync, $this->request->getData());
            if ($this->DeviceSync->save($deviceSync)) {
                $this->Flash->success(__('The device sync has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The device sync could not be saved. Please, try again.'));
        }
        $cohbags = $this->DeviceSync->Cohbags->find('list', limit: 200)->all();
        $cohlots = $this->DeviceSync->Cohlots->find('list', limit: 200)->all();
        $this->set(compact('deviceSync', 'cohbags', 'cohlots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Device Sync id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deviceSync = $this->DeviceSync->get($id);
        if ($this->DeviceSync->delete($deviceSync)) {
            $this->Flash->success(__('The device sync has been deleted.'));
        } else {
            $this->Flash->error(__('The device sync could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
