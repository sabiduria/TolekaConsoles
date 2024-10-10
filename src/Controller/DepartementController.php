<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Departement Controller
 *
 * @property \App\Model\Table\DepartementTable $Departement
 */
class DepartementController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Departement->find();
        $departement = $this->paginate($query);

        $this->set(compact('departement'));
    }

    /**
     * View method
     *
     * @param string|null $id Departement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departement = $this->Departement->get($id, contain: []);
        $this->set(compact('departement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departement = $this->Departement->newEmptyEntity();
        if ($this->request->is('post')) {
            $departement = $this->Departement->patchEntity($departement, $this->request->getData());
            if ($this->Departement->save($departement)) {
                $this->Flash->success(__('The departement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departement could not be saved. Please, try again.'));
        }
        $this->set(compact('departement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departement = $this->Departement->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departement = $this->Departement->patchEntity($departement, $this->request->getData());
            if ($this->Departement->save($departement)) {
                $this->Flash->success(__('The departement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departement could not be saved. Please, try again.'));
        }
        $this->set(compact('departement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departement = $this->Departement->get($id);
        if ($this->Departement->delete($departement)) {
            $this->Flash->success(__('The departement has been deleted.'));
        } else {
            $this->Flash->error(__('The departement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
