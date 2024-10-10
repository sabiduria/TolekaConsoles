<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Affectations Controller
 *
 * @property \App\Model\Table\AffectationsTable $Affectations
 */
class AffectationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Affectations->find()
            ->contain(['Users']);
        $affectations = $this->paginate($query);

        $this->set(compact('affectations'));
    }

    /**
     * View method
     *
     * @param string|null $id Affectation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $affectation = $this->Affectations->get($id, contain: ['Users']);
        $this->set(compact('affectation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $affectation = $this->Affectations->newEmptyEntity();
        if ($this->request->is('post')) {
            $affectation = $this->Affectations->patchEntity($affectation, $this->request->getData());
            if ($this->Affectations->save($affectation)) {
                $this->Flash->success(__('The affectation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affectation could not be saved. Please, try again.'));
        }
        $users = $this->Affectations->Users->find('list', limit: 200)->all();
        $this->set(compact('affectation', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Affectation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $affectation = $this->Affectations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $affectation = $this->Affectations->patchEntity($affectation, $this->request->getData());
            if ($this->Affectations->save($affectation)) {
                $this->Flash->success(__('The affectation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affectation could not be saved. Please, try again.'));
        }
        $users = $this->Affectations->Users->find('list', limit: 200)->all();
        $this->set(compact('affectation', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Affectation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $affectation = $this->Affectations->get($id);
        if ($this->Affectations->delete($affectation)) {
            $this->Flash->success(__('The affectation has been deleted.'));
        } else {
            $this->Flash->error(__('The affectation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
