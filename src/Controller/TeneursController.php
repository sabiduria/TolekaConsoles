<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Teneurs Controller
 *
 * @property \App\Model\Table\TeneursTable $Teneurs
 */
class TeneursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Teneurs->find();
        $teneurs = $this->paginate($query);

        $this->set(compact('teneurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Teneur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teneur = $this->Teneurs->get($id, contain: []);
        $this->set(compact('teneur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teneur = $this->Teneurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $teneur = $this->Teneurs->patchEntity($teneur, $this->request->getData());
            if ($this->Teneurs->save($teneur)) {
                $this->Flash->success(__('The teneur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teneur could not be saved. Please, try again.'));
        }
        $this->set(compact('teneur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Teneur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teneur = $this->Teneurs->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teneur = $this->Teneurs->patchEntity($teneur, $this->request->getData());
            if ($this->Teneurs->save($teneur)) {
                $this->Flash->success(__('The teneur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teneur could not be saved. Please, try again.'));
        }
        $this->set(compact('teneur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Teneur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teneur = $this->Teneurs->get($id);
        if ($this->Teneurs->delete($teneur)) {
            $this->Flash->success(__('The teneur has been deleted.'));
        } else {
            $this->Flash->error(__('The teneur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
