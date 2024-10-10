<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Safetytopic Controller
 *
 * @property \App\Model\Table\SafetytopicTable $Safetytopic
 */
class SafetytopicController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Safetytopic->find();
        $safetytopic = $this->paginate($query);

        $this->set(compact('safetytopic'));
    }

    /**
     * View method
     *
     * @param string|null $id Safetytopic id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $safetytopic = $this->Safetytopic->get($id, contain: []);
        $this->set(compact('safetytopic'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $safetytopic = $this->Safetytopic->newEmptyEntity();
        if ($this->request->is('post')) {
            $safetytopic = $this->Safetytopic->patchEntity($safetytopic, $this->request->getData());
            if ($this->Safetytopic->save($safetytopic)) {
                $this->Flash->success(__('The safetytopic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The safetytopic could not be saved. Please, try again.'));
        }
        $this->set(compact('safetytopic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Safetytopic id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $safetytopic = $this->Safetytopic->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $safetytopic = $this->Safetytopic->patchEntity($safetytopic, $this->request->getData());
            if ($this->Safetytopic->save($safetytopic)) {
                $this->Flash->success(__('The safetytopic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The safetytopic could not be saved. Please, try again.'));
        }
        $this->set(compact('safetytopic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Safetytopic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $safetytopic = $this->Safetytopic->get($id);
        if ($this->Safetytopic->delete($safetytopic)) {
            $this->Flash->success(__('The safetytopic has been deleted.'));
        } else {
            $this->Flash->error(__('The safetytopic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
