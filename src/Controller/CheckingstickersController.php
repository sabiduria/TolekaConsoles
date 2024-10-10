<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Checkingstickers Controller
 *
 * @property \App\Model\Table\CheckingstickersTable $Checkingstickers
 */
class CheckingstickersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Checkingstickers->find();
        $checkingstickers = $this->paginate($query);

        $this->set(compact('checkingstickers'));
    }

    /**
     * View method
     *
     * @param string|null $id Checkingsticker id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $checkingsticker = $this->Checkingstickers->get($id, contain: []);
        $this->set(compact('checkingsticker'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $checkingsticker = $this->Checkingstickers->newEmptyEntity();
        if ($this->request->is('post')) {
            $checkingsticker = $this->Checkingstickers->patchEntity($checkingsticker, $this->request->getData());
            if ($this->Checkingstickers->save($checkingsticker)) {
                $this->Flash->success(__('The checkingsticker has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The checkingsticker could not be saved. Please, try again.'));
        }
        $this->set(compact('checkingsticker'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Checkingsticker id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $checkingsticker = $this->Checkingstickers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $checkingsticker = $this->Checkingstickers->patchEntity($checkingsticker, $this->request->getData());
            if ($this->Checkingstickers->save($checkingsticker)) {
                $this->Flash->success(__('The checkingsticker has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The checkingsticker could not be saved. Please, try again.'));
        }
        $this->set(compact('checkingsticker'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Checkingsticker id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $checkingsticker = $this->Checkingstickers->get($id);
        if ($this->Checkingstickers->delete($checkingsticker)) {
            $this->Flash->success(__('The checkingsticker has been deleted.'));
        } else {
            $this->Flash->error(__('The checkingsticker could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
