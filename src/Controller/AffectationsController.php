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
    public function index($user=null)
    {
        $this->add();
        $session = $this->request->getSession();
        $query = $this->Affectations->find()
            ->contain(['Users', 'Cohlots', 'Statuses']);
        $affectations = $this->paginate($query);

        if ($user!=null)
            $session->write('username', $user);

        $username = $session->read('username');

        $this->set(compact('affectations', 'username'));
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
        $affectation = $this->Affectations->get($id, contain: ['Users', 'Cohlots', 'Statuses']);
        $this->set(compact('affectation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->request->getSession();
        $affectation = $this->Affectations->newEmptyEntity();
        if ($this->request->is('post')) {
            $affectation = $this->Affectations->patchEntity($affectation, $this->request->getData());

            $affectation->createdby = $session->read('username');
            $affectation->modifiedby = $session->read('username');
            $affectation->state = 1;
            $affectation->synced = 0;
            $affectation->deleted = 0;

            if ($this->Affectations->save($affectation)) {
                $this->Flash->success(__('The affectation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affectation could not be saved. Please, try again.'));
        }
        $subquery = $this->Affectations->find()->select(['batch_id']);

        $users = $this->Affectations->Users->find('list', limit: 200)->all();
        $cohlots = $this->Affectations->Cohlots->find('list', limit: 200)->where(['Cohlots.id NOT IN' => $subquery])->all();
        $statuses = $this->Affectations->Statuses->find('list', limit: 200)->all();
        $this->set(compact('affectation', 'users', 'cohlots', 'statuses'));
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
        $session = $this->request->getSession();
        $affectation = $this->Affectations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $affectation = $this->Affectations->patchEntity($affectation, $this->request->getData());

            $affectation->modifiedby = $session->read('username');

            if ($this->Affectations->save($affectation)) {
                $this->Flash->success(__('The affectation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affectation could not be saved. Please, try again.'));
        }
        $users = $this->Affectations->Users->find('list', limit: 200)->all();
        $cohlots = $this->Affectations->Cohlots->find('list', limit: 200)->all();
        $statuses = $this->Affectations->Statuses->find('list', limit: 200)->all();
        $this->set(compact('affectation', 'users', 'cohlots', 'statuses'));
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
