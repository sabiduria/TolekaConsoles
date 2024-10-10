<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Etudesfaites Controller
 *
 * @property \App\Model\Table\EtudesfaitesTable $Etudesfaites
 */
class EtudesfaitesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Etudesfaites->find();
        $etudesfaites = $this->paginate($query);

        $this->set(compact('etudesfaites'));
    }

    /**
     * View method
     *
     * @param string|null $id Etudesfaite id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etudesfaite = $this->Etudesfaites->get($id, contain: []);
        $this->set(compact('etudesfaite'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etudesfaite = $this->Etudesfaites->newEmptyEntity();
        if ($this->request->is('post')) {
            $etudesfaite = $this->Etudesfaites->patchEntity($etudesfaite, $this->request->getData());
            if ($this->Etudesfaites->save($etudesfaite)) {
                $this->Flash->success(__('The etudesfaite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etudesfaite could not be saved. Please, try again.'));
        }
        $this->set(compact('etudesfaite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Etudesfaite id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etudesfaite = $this->Etudesfaites->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etudesfaite = $this->Etudesfaites->patchEntity($etudesfaite, $this->request->getData());
            if ($this->Etudesfaites->save($etudesfaite)) {
                $this->Flash->success(__('The etudesfaite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etudesfaite could not be saved. Please, try again.'));
        }
        $this->set(compact('etudesfaite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Etudesfaite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etudesfaite = $this->Etudesfaites->get($id);
        if ($this->Etudesfaites->delete($etudesfaite)) {
            $this->Flash->success(__('The etudesfaite has been deleted.'));
        } else {
            $this->Flash->error(__('The etudesfaite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
