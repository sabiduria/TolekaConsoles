<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Chargements Controller
 *
 * @property \App\Model\Table\ChargementsTable $Chargements
 */
class ChargementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Chargements->find();
        $chargements = $this->paginate($query);

        $this->set(compact('chargements'));
    }

    /**
     * View method
     *
     * @param string|null $id Chargement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chargement = $this->Chargements->get($id, contain: []);
        $this->set(compact('chargement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chargement = $this->Chargements->newEmptyEntity();
        if ($this->request->is('post')) {
            $chargement = $this->Chargements->patchEntity($chargement, $this->request->getData());
            if ($this->Chargements->save($chargement)) {
                $this->Flash->success(__('The chargement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chargement could not be saved. Please, try again.'));
        }
        $this->set(compact('chargement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chargement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chargement = $this->Chargements->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chargement = $this->Chargements->patchEntity($chargement, $this->request->getData());
            if ($this->Chargements->save($chargement)) {
                $this->Flash->success(__('The chargement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chargement could not be saved. Please, try again.'));
        }
        $this->set(compact('chargement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chargement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chargement = $this->Chargements->get($id);
        if ($this->Chargements->delete($chargement)) {
            $this->Flash->success(__('The chargement has been deleted.'));
        } else {
            $this->Flash->error(__('The chargement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
