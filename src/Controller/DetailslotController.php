<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Detailslot Controller
 *
 * @property \App\Model\Table\DetailslotTable $Detailslot
 */
class DetailslotController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Detailslot->find();
        $detailslot = $this->paginate($query);

        $this->set(compact('detailslot'));
    }

    /**
     * View method
     *
     * @param string|null $id Detailslot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detailslot = $this->Detailslot->get($id, contain: []);
        $this->set(compact('detailslot'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detailslot = $this->Detailslot->newEmptyEntity();
        if ($this->request->is('post')) {
            $detailslot = $this->Detailslot->patchEntity($detailslot, $this->request->getData());
            if ($this->Detailslot->save($detailslot)) {
                $this->Flash->success(__('The detailslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detailslot could not be saved. Please, try again.'));
        }
        $this->set(compact('detailslot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detailslot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detailslot = $this->Detailslot->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detailslot = $this->Detailslot->patchEntity($detailslot, $this->request->getData());
            if ($this->Detailslot->save($detailslot)) {
                $this->Flash->success(__('The detailslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detailslot could not be saved. Please, try again.'));
        }
        $this->set(compact('detailslot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detailslot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detailslot = $this->Detailslot->get($id);
        if ($this->Detailslot->delete($detailslot)) {
            $this->Flash->success(__('The detailslot has been deleted.'));
        } else {
            $this->Flash->error(__('The detailslot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
