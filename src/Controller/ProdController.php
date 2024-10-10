<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Prod Controller
 *
 * @property \App\Model\Table\ProdTable $Prod
 */
class ProdController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Prod->find();
        $prod = $this->paginate($query);

        $this->set(compact('prod'));
    }

    /**
     * View method
     *
     * @param string|null $id Prod id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prod = $this->Prod->get($id, contain: []);
        $this->set(compact('prod'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prod = $this->Prod->newEmptyEntity();
        if ($this->request->is('post')) {
            $prod = $this->Prod->patchEntity($prod, $this->request->getData());
            if ($this->Prod->save($prod)) {
                $this->Flash->success(__('The prod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prod could not be saved. Please, try again.'));
        }
        $this->set(compact('prod'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prod id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prod = $this->Prod->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prod = $this->Prod->patchEntity($prod, $this->request->getData());
            if ($this->Prod->save($prod)) {
                $this->Flash->success(__('The prod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prod could not be saved. Please, try again.'));
        }
        $this->set(compact('prod'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prod id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prod = $this->Prod->get($id);
        if ($this->Prod->delete($prod)) {
            $this->Flash->success(__('The prod has been deleted.'));
        } else {
            $this->Flash->error(__('The prod could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
