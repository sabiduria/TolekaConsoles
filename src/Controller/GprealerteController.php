<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Gprealerte Controller
 *
 * @property \App\Model\Table\GprealerteTable $Gprealerte
 */
class GprealerteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Gprealerte->find();
        $gprealerte = $this->paginate($query);

        $this->set(compact('gprealerte'));
    }

    /**
     * View method
     *
     * @param string|null $id Gprealerte id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gprealerte = $this->Gprealerte->get($id, contain: []);
        $this->set(compact('gprealerte'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gprealerte = $this->Gprealerte->newEmptyEntity();
        if ($this->request->is('post')) {
            $gprealerte = $this->Gprealerte->patchEntity($gprealerte, $this->request->getData());
            if ($this->Gprealerte->save($gprealerte)) {
                $this->Flash->success(__('The gprealerte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gprealerte could not be saved. Please, try again.'));
        }
        $this->set(compact('gprealerte'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gprealerte id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gprealerte = $this->Gprealerte->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gprealerte = $this->Gprealerte->patchEntity($gprealerte, $this->request->getData());
            if ($this->Gprealerte->save($gprealerte)) {
                $this->Flash->success(__('The gprealerte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gprealerte could not be saved. Please, try again.'));
        }
        $this->set(compact('gprealerte'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gprealerte id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gprealerte = $this->Gprealerte->get($id);
        if ($this->Gprealerte->delete($gprealerte)) {
            $this->Flash->success(__('The gprealerte has been deleted.'));
        } else {
            $this->Flash->error(__('The gprealerte could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
