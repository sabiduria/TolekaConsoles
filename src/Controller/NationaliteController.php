<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Nationalite Controller
 *
 * @property \App\Model\Table\NationaliteTable $Nationalite
 */
class NationaliteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Nationalite->find();
        $nationalite = $this->paginate($query);

        $this->set(compact('nationalite'));
    }

    /**
     * View method
     *
     * @param string|null $id Nationalite id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nationalite = $this->Nationalite->get($id, contain: []);
        $this->set(compact('nationalite'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nationalite = $this->Nationalite->newEmptyEntity();
        if ($this->request->is('post')) {
            $nationalite = $this->Nationalite->patchEntity($nationalite, $this->request->getData());
            if ($this->Nationalite->save($nationalite)) {
                $this->Flash->success(__('The nationalite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nationalite could not be saved. Please, try again.'));
        }
        $this->set(compact('nationalite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nationalite id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nationalite = $this->Nationalite->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nationalite = $this->Nationalite->patchEntity($nationalite, $this->request->getData());
            if ($this->Nationalite->save($nationalite)) {
                $this->Flash->success(__('The nationalite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nationalite could not be saved. Please, try again.'));
        }
        $this->set(compact('nationalite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nationalite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nationalite = $this->Nationalite->get($id);
        if ($this->Nationalite->delete($nationalite)) {
            $this->Flash->success(__('The nationalite has been deleted.'));
        } else {
            $this->Flash->error(__('The nationalite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
