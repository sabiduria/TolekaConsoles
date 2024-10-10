<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bp Controller
 *
 * @property \App\Model\Table\BpTable $Bp
 */
class BpController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Bp->find();
        $bp = $this->paginate($query);

        $this->set(compact('bp'));
    }

    /**
     * View method
     *
     * @param string|null $id Bp id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bp = $this->Bp->get($id, contain: []);
        $this->set(compact('bp'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bp = $this->Bp->newEmptyEntity();
        if ($this->request->is('post')) {
            $bp = $this->Bp->patchEntity($bp, $this->request->getData());
            if ($this->Bp->save($bp)) {
                $this->Flash->success(__('The bp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bp could not be saved. Please, try again.'));
        }
        $this->set(compact('bp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bp id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bp = $this->Bp->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bp = $this->Bp->patchEntity($bp, $this->request->getData());
            if ($this->Bp->save($bp)) {
                $this->Flash->success(__('The bp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bp could not be saved. Please, try again.'));
        }
        $this->set(compact('bp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bp id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bp = $this->Bp->get($id);
        if ($this->Bp->delete($bp)) {
            $this->Flash->success(__('The bp has been deleted.'));
        } else {
            $this->Flash->error(__('The bp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
