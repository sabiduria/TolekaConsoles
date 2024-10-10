<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Detailsbp Controller
 *
 * @property \App\Model\Table\DetailsbpTable $Detailsbp
 */
class DetailsbpController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Detailsbp->find();
        $detailsbp = $this->paginate($query);

        $this->set(compact('detailsbp'));
    }

    /**
     * View method
     *
     * @param string|null $id Detailsbp id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detailsbp = $this->Detailsbp->get($id, contain: []);
        $this->set(compact('detailsbp'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detailsbp = $this->Detailsbp->newEmptyEntity();
        if ($this->request->is('post')) {
            $detailsbp = $this->Detailsbp->patchEntity($detailsbp, $this->request->getData());
            if ($this->Detailsbp->save($detailsbp)) {
                $this->Flash->success(__('The detailsbp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detailsbp could not be saved. Please, try again.'));
        }
        $this->set(compact('detailsbp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detailsbp id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detailsbp = $this->Detailsbp->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detailsbp = $this->Detailsbp->patchEntity($detailsbp, $this->request->getData());
            if ($this->Detailsbp->save($detailsbp)) {
                $this->Flash->success(__('The detailsbp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detailsbp could not be saved. Please, try again.'));
        }
        $this->set(compact('detailsbp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detailsbp id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detailsbp = $this->Detailsbp->get($id);
        if ($this->Detailsbp->delete($detailsbp)) {
            $this->Flash->success(__('The detailsbp has been deleted.'));
        } else {
            $this->Flash->error(__('The detailsbp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
