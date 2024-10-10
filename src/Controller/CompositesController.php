<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Composites Controller
 *
 * @property \App\Model\Table\CompositesTable $Composites
 */
class CompositesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Composites->find();
        $composites = $this->paginate($query);

        $this->set(compact('composites'));
    }

    /**
     * View method
     *
     * @param string|null $id Composite id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $composite = $this->Composites->get($id, contain: []);
        $this->set(compact('composite'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $composite = $this->Composites->newEmptyEntity();
        if ($this->request->is('post')) {
            $composite = $this->Composites->patchEntity($composite, $this->request->getData());
            if ($this->Composites->save($composite)) {
                $this->Flash->success(__('The composite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The composite could not be saved. Please, try again.'));
        }
        $this->set(compact('composite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Composite id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $composite = $this->Composites->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $composite = $this->Composites->patchEntity($composite, $this->request->getData());
            if ($this->Composites->save($composite)) {
                $this->Flash->success(__('The composite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The composite could not be saved. Please, try again.'));
        }
        $this->set(compact('composite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Composite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $composite = $this->Composites->get($id);
        if ($this->Composites->delete($composite)) {
            $this->Flash->success(__('The composite has been deleted.'));
        } else {
            $this->Flash->error(__('The composite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
