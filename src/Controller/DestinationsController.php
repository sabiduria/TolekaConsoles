<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Destinations Controller
 *
 * @property \App\Model\Table\DestinationsTable $Destinations
 */
class DestinationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Destinations->find();
        $destinations = $this->paginate($query);

        $this->set(compact('destinations'));
    }

    /**
     * View method
     *
     * @param string|null $id Destination id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $destination = $this->Destinations->get($id, contain: []);
        $this->set(compact('destination'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $destination = $this->Destinations->newEmptyEntity();
        if ($this->request->is('post')) {
            $destination = $this->Destinations->patchEntity($destination, $this->request->getData());
            if ($this->Destinations->save($destination)) {
                $this->Flash->success(__('The destination has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The destination could not be saved. Please, try again.'));
        }
        $this->set(compact('destination'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Destination id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $destination = $this->Destinations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $destination = $this->Destinations->patchEntity($destination, $this->request->getData());
            if ($this->Destinations->save($destination)) {
                $this->Flash->success(__('The destination has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The destination could not be saved. Please, try again.'));
        }
        $this->set(compact('destination'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Destination id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $destination = $this->Destinations->get($id);
        if ($this->Destinations->delete($destination)) {
            $this->Flash->success(__('The destination has been deleted.'));
        } else {
            $this->Flash->error(__('The destination could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
