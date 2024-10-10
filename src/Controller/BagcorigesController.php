<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bagcoriges Controller
 *
 * @property \App\Model\Table\BagcorigesTable $Bagcoriges
 */
class BagcorigesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Bagcoriges->find();
        $bagcoriges = $this->paginate($query);

        $this->set(compact('bagcoriges'));
    }

    /**
     * View method
     *
     * @param string|null $id Bagcorige id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bagcorige = $this->Bagcoriges->get($id, contain: []);
        $this->set(compact('bagcorige'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bagcorige = $this->Bagcoriges->newEmptyEntity();
        if ($this->request->is('post')) {
            $bagcorige = $this->Bagcoriges->patchEntity($bagcorige, $this->request->getData());
            if ($this->Bagcoriges->save($bagcorige)) {
                $this->Flash->success(__('The bagcorige has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bagcorige could not be saved. Please, try again.'));
        }
        $this->set(compact('bagcorige'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bagcorige id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bagcorige = $this->Bagcoriges->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bagcorige = $this->Bagcoriges->patchEntity($bagcorige, $this->request->getData());
            if ($this->Bagcoriges->save($bagcorige)) {
                $this->Flash->success(__('The bagcorige has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bagcorige could not be saved. Please, try again.'));
        }
        $this->set(compact('bagcorige'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bagcorige id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bagcorige = $this->Bagcoriges->get($id);
        if ($this->Bagcoriges->delete($bagcorige)) {
            $this->Flash->success(__('The bagcorige has been deleted.'));
        } else {
            $this->Flash->error(__('The bagcorige could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
