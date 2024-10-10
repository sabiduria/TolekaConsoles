<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lc Controller
 *
 * @property \App\Model\Table\LcTable $Lc
 */
class LcController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Lc->find();
        $lc = $this->paginate($query);

        $this->set(compact('lc'));
    }

    /**
     * View method
     *
     * @param string|null $id Lc id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lc = $this->Lc->get($id, contain: []);
        $this->set(compact('lc'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lc = $this->Lc->newEmptyEntity();
        if ($this->request->is('post')) {
            $lc = $this->Lc->patchEntity($lc, $this->request->getData());
            if ($this->Lc->save($lc)) {
                $this->Flash->success(__('The lc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lc could not be saved. Please, try again.'));
        }
        $this->set(compact('lc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lc id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lc = $this->Lc->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lc = $this->Lc->patchEntity($lc, $this->request->getData());
            if ($this->Lc->save($lc)) {
                $this->Flash->success(__('The lc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lc could not be saved. Please, try again.'));
        }
        $this->set(compact('lc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lc = $this->Lc->get($id);
        if ($this->Lc->delete($lc)) {
            $this->Flash->success(__('The lc has been deleted.'));
        } else {
            $this->Flash->error(__('The lc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
