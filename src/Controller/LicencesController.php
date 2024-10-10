<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Licences Controller
 *
 * @property \App\Model\Table\LicencesTable $Licences
 */
class LicencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Licences->find();
        $licences = $this->paginate($query);

        $this->set(compact('licences'));
    }

    /**
     * View method
     *
     * @param string|null $id Licence id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $licence = $this->Licences->get($id, contain: []);
        $this->set(compact('licence'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $licence = $this->Licences->newEmptyEntity();
        if ($this->request->is('post')) {
            $licence = $this->Licences->patchEntity($licence, $this->request->getData());
            if ($this->Licences->save($licence)) {
                $this->Flash->success(__('The licence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The licence could not be saved. Please, try again.'));
        }
        $this->set(compact('licence'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Licence id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $licence = $this->Licences->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $licence = $this->Licences->patchEntity($licence, $this->request->getData());
            if ($this->Licences->save($licence)) {
                $this->Flash->success(__('The licence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The licence could not be saved. Please, try again.'));
        }
        $this->set(compact('licence'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Licence id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $licence = $this->Licences->get($id);
        if ($this->Licences->delete($licence)) {
            $this->Flash->success(__('The licence has been deleted.'));
        } else {
            $this->Flash->error(__('The licence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
