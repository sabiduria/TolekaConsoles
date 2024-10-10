<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Loadingplan Controller
 *
 * @property \App\Model\Table\LoadingplanTable $Loadingplan
 */
class LoadingplanController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Loadingplan->find();
        $loadingplan = $this->paginate($query);

        $this->set(compact('loadingplan'));
    }

    /**
     * View method
     *
     * @param string|null $id Loadingplan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $loadingplan = $this->Loadingplan->get($id, contain: []);
        $this->set(compact('loadingplan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loadingplan = $this->Loadingplan->newEmptyEntity();
        if ($this->request->is('post')) {
            $loadingplan = $this->Loadingplan->patchEntity($loadingplan, $this->request->getData());
            if ($this->Loadingplan->save($loadingplan)) {
                $this->Flash->success(__('The loadingplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loadingplan could not be saved. Please, try again.'));
        }
        $this->set(compact('loadingplan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Loadingplan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $loadingplan = $this->Loadingplan->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loadingplan = $this->Loadingplan->patchEntity($loadingplan, $this->request->getData());
            if ($this->Loadingplan->save($loadingplan)) {
                $this->Flash->success(__('The loadingplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loadingplan could not be saved. Please, try again.'));
        }
        $this->set(compact('loadingplan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Loadingplan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loadingplan = $this->Loadingplan->get($id);
        if ($this->Loadingplan->delete($loadingplan)) {
            $this->Flash->success(__('The loadingplan has been deleted.'));
        } else {
            $this->Flash->error(__('The loadingplan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
