<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Etatcivil Controller
 *
 * @property \App\Model\Table\EtatcivilTable $Etatcivil
 */
class EtatcivilController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Etatcivil->find();
        $etatcivil = $this->paginate($query);

        $this->set(compact('etatcivil'));
    }

    /**
     * View method
     *
     * @param string|null $id Etatcivil id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etatcivil = $this->Etatcivil->get($id, contain: []);
        $this->set(compact('etatcivil'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etatcivil = $this->Etatcivil->newEmptyEntity();
        if ($this->request->is('post')) {
            $etatcivil = $this->Etatcivil->patchEntity($etatcivil, $this->request->getData());
            if ($this->Etatcivil->save($etatcivil)) {
                $this->Flash->success(__('The etatcivil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etatcivil could not be saved. Please, try again.'));
        }
        $this->set(compact('etatcivil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Etatcivil id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etatcivil = $this->Etatcivil->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etatcivil = $this->Etatcivil->patchEntity($etatcivil, $this->request->getData());
            if ($this->Etatcivil->save($etatcivil)) {
                $this->Flash->success(__('The etatcivil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etatcivil could not be saved. Please, try again.'));
        }
        $this->set(compact('etatcivil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Etatcivil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etatcivil = $this->Etatcivil->get($id);
        if ($this->Etatcivil->delete($etatcivil)) {
            $this->Flash->success(__('The etatcivil has been deleted.'));
        } else {
            $this->Flash->error(__('The etatcivil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
