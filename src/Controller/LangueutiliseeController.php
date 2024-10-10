<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Langueutilisee Controller
 *
 * @property \App\Model\Table\LangueutiliseeTable $Langueutilisee
 */
class LangueutiliseeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Langueutilisee->find();
        $langueutilisee = $this->paginate($query);

        $this->set(compact('langueutilisee'));
    }

    /**
     * View method
     *
     * @param string|null $id Langueutilisee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $langueutilisee = $this->Langueutilisee->get($id, contain: []);
        $this->set(compact('langueutilisee'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $langueutilisee = $this->Langueutilisee->newEmptyEntity();
        if ($this->request->is('post')) {
            $langueutilisee = $this->Langueutilisee->patchEntity($langueutilisee, $this->request->getData());
            if ($this->Langueutilisee->save($langueutilisee)) {
                $this->Flash->success(__('The langueutilisee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The langueutilisee could not be saved. Please, try again.'));
        }
        $this->set(compact('langueutilisee'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Langueutilisee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $langueutilisee = $this->Langueutilisee->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $langueutilisee = $this->Langueutilisee->patchEntity($langueutilisee, $this->request->getData());
            if ($this->Langueutilisee->save($langueutilisee)) {
                $this->Flash->success(__('The langueutilisee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The langueutilisee could not be saved. Please, try again.'));
        }
        $this->set(compact('langueutilisee'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Langueutilisee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $langueutilisee = $this->Langueutilisee->get($id);
        if ($this->Langueutilisee->delete($langueutilisee)) {
            $this->Flash->success(__('The langueutilisee has been deleted.'));
        } else {
            $this->Flash->error(__('The langueutilisee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
