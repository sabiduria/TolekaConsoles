<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cohbags Controller
 *
 * @property \App\Model\Table\CohbagsTable $Cohbags
 */
class CohbagsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Cohbags->find();
        $cohbags = $this->paginate($query);

        $this->set(compact('cohbags'));
    }

    /**
     * View method
     *
     * @param string|null $id Cohbag id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cohbag = $this->Cohbags->get($id, contain: []);
        $this->set(compact('cohbag'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cohbag = $this->Cohbags->newEmptyEntity();
        if ($this->request->is('post')) {
            $cohbag = $this->Cohbags->patchEntity($cohbag, $this->request->getData());
            if ($this->Cohbags->save($cohbag)) {
                $this->Flash->success(__('The cohbag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cohbag could not be saved. Please, try again.'));
        }
        $this->set(compact('cohbag'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cohbag id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cohbag = $this->Cohbags->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cohbag = $this->Cohbags->patchEntity($cohbag, $this->request->getData());
            if ($this->Cohbags->save($cohbag)) {
                $this->Flash->success(__('The cohbag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cohbag could not be saved. Please, try again.'));
        }
        $this->set(compact('cohbag'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cohbag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cohbag = $this->Cohbags->get($id);
        if ($this->Cohbags->delete($cohbag)) {
            $this->Flash->success(__('The cohbag has been deleted.'));
        } else {
            $this->Flash->error(__('The cohbag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
