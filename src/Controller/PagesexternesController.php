<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pagesexternes Controller
 *
 * @property \App\Model\Table\PagesexternesTable $Pagesexternes
 */
class PagesexternesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pagesexternes->find();
        $pagesexternes = $this->paginate($query);

        $this->set(compact('pagesexternes'));
    }

    /**
     * View method
     *
     * @param string|null $id Pagesexterne id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pagesexterne = $this->Pagesexternes->get($id, contain: []);
        $this->set(compact('pagesexterne'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagesexterne = $this->Pagesexternes->newEmptyEntity();
        if ($this->request->is('post')) {
            $pagesexterne = $this->Pagesexternes->patchEntity($pagesexterne, $this->request->getData());
            if ($this->Pagesexternes->save($pagesexterne)) {
                $this->Flash->success(__('The pagesexterne has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagesexterne could not be saved. Please, try again.'));
        }
        $this->set(compact('pagesexterne'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pagesexterne id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagesexterne = $this->Pagesexternes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagesexterne = $this->Pagesexternes->patchEntity($pagesexterne, $this->request->getData());
            if ($this->Pagesexternes->save($pagesexterne)) {
                $this->Flash->success(__('The pagesexterne has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagesexterne could not be saved. Please, try again.'));
        }
        $this->set(compact('pagesexterne'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pagesexterne id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagesexterne = $this->Pagesexternes->get($id);
        if ($this->Pagesexternes->delete($pagesexterne)) {
            $this->Flash->success(__('The pagesexterne has been deleted.'));
        } else {
            $this->Flash->error(__('The pagesexterne could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
