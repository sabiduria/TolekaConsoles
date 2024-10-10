<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Checkcocontent Controller
 *
 * @property \App\Model\Table\CheckcocontentTable $Checkcocontent
 */
class CheckcocontentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Checkcocontent->find();
        $checkcocontent = $this->paginate($query);

        $this->set(compact('checkcocontent'));
    }

    /**
     * View method
     *
     * @param string|null $id Checkcocontent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $checkcocontent = $this->Checkcocontent->get($id, contain: []);
        $this->set(compact('checkcocontent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $checkcocontent = $this->Checkcocontent->newEmptyEntity();
        if ($this->request->is('post')) {
            $checkcocontent = $this->Checkcocontent->patchEntity($checkcocontent, $this->request->getData());
            if ($this->Checkcocontent->save($checkcocontent)) {
                $this->Flash->success(__('The checkcocontent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The checkcocontent could not be saved. Please, try again.'));
        }
        $this->set(compact('checkcocontent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Checkcocontent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $checkcocontent = $this->Checkcocontent->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $checkcocontent = $this->Checkcocontent->patchEntity($checkcocontent, $this->request->getData());
            if ($this->Checkcocontent->save($checkcocontent)) {
                $this->Flash->success(__('The checkcocontent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The checkcocontent could not be saved. Please, try again.'));
        }
        $this->set(compact('checkcocontent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Checkcocontent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $checkcocontent = $this->Checkcocontent->get($id);
        if ($this->Checkcocontent->delete($checkcocontent)) {
            $this->Flash->success(__('The checkcocontent has been deleted.'));
        } else {
            $this->Flash->error(__('The checkcocontent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
