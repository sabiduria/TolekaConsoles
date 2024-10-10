<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Documentsadministratif Controller
 *
 * @property \App\Model\Table\DocumentsadministratifTable $Documentsadministratif
 */
class DocumentsadministratifController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Documentsadministratif->find();
        $documentsadministratif = $this->paginate($query);

        $this->set(compact('documentsadministratif'));
    }

    /**
     * View method
     *
     * @param string|null $id Documentsadministratif id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentsadministratif = $this->Documentsadministratif->get($id, contain: []);
        $this->set(compact('documentsadministratif'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentsadministratif = $this->Documentsadministratif->newEmptyEntity();
        if ($this->request->is('post')) {
            $documentsadministratif = $this->Documentsadministratif->patchEntity($documentsadministratif, $this->request->getData());
            if ($this->Documentsadministratif->save($documentsadministratif)) {
                $this->Flash->success(__('The documentsadministratif has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentsadministratif could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsadministratif'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documentsadministratif id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentsadministratif = $this->Documentsadministratif->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentsadministratif = $this->Documentsadministratif->patchEntity($documentsadministratif, $this->request->getData());
            if ($this->Documentsadministratif->save($documentsadministratif)) {
                $this->Flash->success(__('The documentsadministratif has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentsadministratif could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsadministratif'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documentsadministratif id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentsadministratif = $this->Documentsadministratif->get($id);
        if ($this->Documentsadministratif->delete($documentsadministratif)) {
            $this->Flash->success(__('The documentsadministratif has been deleted.'));
        } else {
            $this->Flash->error(__('The documentsadministratif could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
