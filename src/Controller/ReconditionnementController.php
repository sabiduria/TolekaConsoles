<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reconditionnement Controller
 *
 * @property \App\Model\Table\ReconditionnementTable $Reconditionnement
 */
class ReconditionnementController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Reconditionnement->find();
        $reconditionnement = $this->paginate($query);

        $this->set(compact('reconditionnement'));
    }

    /**
     * View method
     *
     * @param string|null $id Reconditionnement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reconditionnement = $this->Reconditionnement->get($id, contain: []);
        $this->set(compact('reconditionnement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reconditionnement = $this->Reconditionnement->newEmptyEntity();
        if ($this->request->is('post')) {
            $reconditionnement = $this->Reconditionnement->patchEntity($reconditionnement, $this->request->getData());
            if ($this->Reconditionnement->save($reconditionnement)) {
                $this->Flash->success(__('The reconditionnement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reconditionnement could not be saved. Please, try again.'));
        }
        $this->set(compact('reconditionnement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reconditionnement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reconditionnement = $this->Reconditionnement->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reconditionnement = $this->Reconditionnement->patchEntity($reconditionnement, $this->request->getData());
            if ($this->Reconditionnement->save($reconditionnement)) {
                $this->Flash->success(__('The reconditionnement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reconditionnement could not be saved. Please, try again.'));
        }
        $this->set(compact('reconditionnement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reconditionnement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reconditionnement = $this->Reconditionnement->get($id);
        if ($this->Reconditionnement->delete($reconditionnement)) {
            $this->Flash->success(__('The reconditionnement has been deleted.'));
        } else {
            $this->Flash->error(__('The reconditionnement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
