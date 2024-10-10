<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lotdetails Controller
 *
 * @property \App\Model\Table\LotdetailsTable $Lotdetails
 */
class LotdetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Lotdetails->find();
        $lotdetails = $this->paginate($query);

        $this->set(compact('lotdetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Lotdetail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lotdetail = $this->Lotdetails->get($id, contain: []);
        $this->set(compact('lotdetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lotdetail = $this->Lotdetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $lotdetail = $this->Lotdetails->patchEntity($lotdetail, $this->request->getData());
            if ($this->Lotdetails->save($lotdetail)) {
                $this->Flash->success(__('The lotdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lotdetail could not be saved. Please, try again.'));
        }
        $this->set(compact('lotdetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lotdetail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lotdetail = $this->Lotdetails->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lotdetail = $this->Lotdetails->patchEntity($lotdetail, $this->request->getData());
            if ($this->Lotdetails->save($lotdetail)) {
                $this->Flash->success(__('The lotdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lotdetail could not be saved. Please, try again.'));
        }
        $this->set(compact('lotdetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lotdetail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lotdetail = $this->Lotdetails->get($id);
        if ($this->Lotdetails->delete($lotdetail)) {
            $this->Flash->success(__('The lotdetail has been deleted.'));
        } else {
            $this->Flash->error(__('The lotdetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
