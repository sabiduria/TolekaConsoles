<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cohlots Controller
 *
 * @property \App\Model\Table\CohlotsTable $Cohlots
 */
class CohlotsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Cohlots->find();
        $cohlots = $this->paginate($query);

        $this->set(compact('cohlots'));
    }

    /**
     * View method
     *
     * @param string|null $id Cohlot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cohlot = $this->Cohlots->get($id, contain: []);
        $this->set(compact('cohlot'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cohlot = $this->Cohlots->newEmptyEntity();
        if ($this->request->is('post')) {
            $cohlot = $this->Cohlots->patchEntity($cohlot, $this->request->getData());
            if ($this->Cohlots->save($cohlot)) {
                $this->Flash->success(__('The cohlot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cohlot could not be saved. Please, try again.'));
        }
        $this->set(compact('cohlot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cohlot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cohlot = $this->Cohlots->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cohlot = $this->Cohlots->patchEntity($cohlot, $this->request->getData());
            if ($this->Cohlots->save($cohlot)) {
                $this->Flash->success(__('The cohlot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cohlot could not be saved. Please, try again.'));
        }
        $this->set(compact('cohlot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cohlot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cohlot = $this->Cohlots->get($id);
        if ($this->Cohlots->delete($cohlot)) {
            $this->Flash->success(__('The cohlot has been deleted.'));
        } else {
            $this->Flash->error(__('The cohlot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
