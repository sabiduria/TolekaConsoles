<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Prealerte Controller
 *
 * @property \App\Model\Table\PrealerteTable $Prealerte
 */
class PrealerteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Prealerte->find();
        $prealerte = $this->paginate($query);

        $this->set(compact('prealerte'));
    }

    /**
     * View method
     *
     * @param string|null $id Prealerte id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prealerte = $this->Prealerte->get($id, contain: []);
        $this->set(compact('prealerte'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prealerte = $this->Prealerte->newEmptyEntity();
        if ($this->request->is('post')) {
            $prealerte = $this->Prealerte->patchEntity($prealerte, $this->request->getData());
            if ($this->Prealerte->save($prealerte)) {
                $this->Flash->success(__('The prealerte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prealerte could not be saved. Please, try again.'));
        }
        $this->set(compact('prealerte'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prealerte id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prealerte = $this->Prealerte->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prealerte = $this->Prealerte->patchEntity($prealerte, $this->request->getData());
            if ($this->Prealerte->save($prealerte)) {
                $this->Flash->success(__('The prealerte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prealerte could not be saved. Please, try again.'));
        }
        $this->set(compact('prealerte'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prealerte id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prealerte = $this->Prealerte->get($id);
        if ($this->Prealerte->delete($prealerte)) {
            $this->Flash->success(__('The prealerte has been deleted.'));
        } else {
            $this->Flash->error(__('The prealerte could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
