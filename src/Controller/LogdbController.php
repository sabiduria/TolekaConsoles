<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Logdb Controller
 *
 * @property \App\Model\Table\LogdbTable $Logdb
 */
class LogdbController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Logdb->find();
        $logdb = $this->paginate($query);

        $this->set(compact('logdb'));
    }

    /**
     * View method
     *
     * @param string|null $id Logdb id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logdb = $this->Logdb->get($id, contain: []);
        $this->set(compact('logdb'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logdb = $this->Logdb->newEmptyEntity();
        if ($this->request->is('post')) {
            $logdb = $this->Logdb->patchEntity($logdb, $this->request->getData());
            if ($this->Logdb->save($logdb)) {
                $this->Flash->success(__('The logdb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logdb could not be saved. Please, try again.'));
        }
        $this->set(compact('logdb'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Logdb id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logdb = $this->Logdb->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logdb = $this->Logdb->patchEntity($logdb, $this->request->getData());
            if ($this->Logdb->save($logdb)) {
                $this->Flash->success(__('The logdb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logdb could not be saved. Please, try again.'));
        }
        $this->set(compact('logdb'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Logdb id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logdb = $this->Logdb->get($id);
        if ($this->Logdb->delete($logdb)) {
            $this->Flash->success(__('The logdb has been deleted.'));
        } else {
            $this->Flash->error(__('The logdb could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
