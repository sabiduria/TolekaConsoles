<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Domaineetude Controller
 *
 * @property \App\Model\Table\DomaineetudeTable $Domaineetude
 */
class DomaineetudeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Domaineetude->find();
        $domaineetude = $this->paginate($query);

        $this->set(compact('domaineetude'));
    }

    /**
     * View method
     *
     * @param string|null $id Domaineetude id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $domaineetude = $this->Domaineetude->get($id, contain: []);
        $this->set(compact('domaineetude'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $domaineetude = $this->Domaineetude->newEmptyEntity();
        if ($this->request->is('post')) {
            $domaineetude = $this->Domaineetude->patchEntity($domaineetude, $this->request->getData());
            if ($this->Domaineetude->save($domaineetude)) {
                $this->Flash->success(__('The domaineetude has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The domaineetude could not be saved. Please, try again.'));
        }
        $this->set(compact('domaineetude'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Domaineetude id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $domaineetude = $this->Domaineetude->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $domaineetude = $this->Domaineetude->patchEntity($domaineetude, $this->request->getData());
            if ($this->Domaineetude->save($domaineetude)) {
                $this->Flash->success(__('The domaineetude has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The domaineetude could not be saved. Please, try again.'));
        }
        $this->set(compact('domaineetude'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Domaineetude id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $domaineetude = $this->Domaineetude->get($id);
        if ($this->Domaineetude->delete($domaineetude)) {
            $this->Flash->success(__('The domaineetude has been deleted.'));
        } else {
            $this->Flash->error(__('The domaineetude could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
