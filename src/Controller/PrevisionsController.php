<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Previsions Controller
 *
 * @property \App\Model\Table\PrevisionsTable $Previsions
 */
class PrevisionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Previsions->find();
        $previsions = $this->paginate($query);

        $this->set(compact('previsions'));
    }

    /**
     * View method
     *
     * @param string|null $id Prevision id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prevision = $this->Previsions->get($id, contain: []);
        $this->set(compact('prevision'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prevision = $this->Previsions->newEmptyEntity();
        if ($this->request->is('post')) {
            $prevision = $this->Previsions->patchEntity($prevision, $this->request->getData());
            if ($this->Previsions->save($prevision)) {
                $this->Flash->success(__('The prevision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prevision could not be saved. Please, try again.'));
        }
        $this->set(compact('prevision'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prevision id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prevision = $this->Previsions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prevision = $this->Previsions->patchEntity($prevision, $this->request->getData());
            if ($this->Previsions->save($prevision)) {
                $this->Flash->success(__('The prevision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prevision could not be saved. Please, try again.'));
        }
        $this->set(compact('prevision'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prevision id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prevision = $this->Previsions->get($id);
        if ($this->Previsions->delete($prevision)) {
            $this->Flash->success(__('The prevision has been deleted.'));
        } else {
            $this->Flash->error(__('The prevision could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
