<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Documentadm Controller
 *
 * @property \App\Model\Table\DocumentadmTable $Documentadm
 */
class DocumentadmController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Documentadm->find();
        $documentadm = $this->paginate($query);

        $this->set(compact('documentadm'));
    }

    /**
     * View method
     *
     * @param string|null $id Documentadm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentadm = $this->Documentadm->get($id, contain: []);
        $this->set(compact('documentadm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentadm = $this->Documentadm->newEmptyEntity();
        if ($this->request->is('post')) {
            $documentadm = $this->Documentadm->patchEntity($documentadm, $this->request->getData());
            if ($this->Documentadm->save($documentadm)) {
                $this->Flash->success(__('The documentadm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentadm could not be saved. Please, try again.'));
        }
        $this->set(compact('documentadm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documentadm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentadm = $this->Documentadm->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentadm = $this->Documentadm->patchEntity($documentadm, $this->request->getData());
            if ($this->Documentadm->save($documentadm)) {
                $this->Flash->success(__('The documentadm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentadm could not be saved. Please, try again.'));
        }
        $this->set(compact('documentadm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documentadm id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentadm = $this->Documentadm->get($id);
        if ($this->Documentadm->delete($documentadm)) {
            $this->Flash->success(__('The documentadm has been deleted.'));
        } else {
            $this->Flash->error(__('The documentadm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
