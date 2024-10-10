<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Chauffeurs Controller
 *
 * @property \App\Model\Table\ChauffeursTable $Chauffeurs
 */
class ChauffeursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Chauffeurs->find();
        $chauffeurs = $this->paginate($query);

        $this->set(compact('chauffeurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Chauffeur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chauffeur = $this->Chauffeurs->get($id, contain: []);
        $this->set(compact('chauffeur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chauffeur = $this->Chauffeurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $chauffeur = $this->Chauffeurs->patchEntity($chauffeur, $this->request->getData());
            if ($this->Chauffeurs->save($chauffeur)) {
                $this->Flash->success(__('The chauffeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chauffeur could not be saved. Please, try again.'));
        }
        $this->set(compact('chauffeur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chauffeur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chauffeur = $this->Chauffeurs->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chauffeur = $this->Chauffeurs->patchEntity($chauffeur, $this->request->getData());
            if ($this->Chauffeurs->save($chauffeur)) {
                $this->Flash->success(__('The chauffeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chauffeur could not be saved. Please, try again.'));
        }
        $this->set(compact('chauffeur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chauffeur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chauffeur = $this->Chauffeurs->get($id);
        if ($this->Chauffeurs->delete($chauffeur)) {
            $this->Flash->success(__('The chauffeur has been deleted.'));
        } else {
            $this->Flash->error(__('The chauffeur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
