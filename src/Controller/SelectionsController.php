<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Selections Controller
 *
 * @property \App\Model\Table\SelectionsTable $Selections
 */
class SelectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Selections->find();
        $selections = $this->paginate($query);

        $this->set(compact('selections'));
    }

    /**
     * View method
     *
     * @param string|null $id Selection id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $selection = $this->Selections->get($id, contain: []);
        $this->set(compact('selection'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $selection = $this->Selections->newEmptyEntity();
        if ($this->request->is('post')) {
            $selection = $this->Selections->patchEntity($selection, $this->request->getData());
            if ($this->Selections->save($selection)) {
                $this->Flash->success(__('The selection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The selection could not be saved. Please, try again.'));
        }
        $this->set(compact('selection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Selection id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $selection = $this->Selections->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $selection = $this->Selections->patchEntity($selection, $this->request->getData());
            if ($this->Selections->save($selection)) {
                $this->Flash->success(__('The selection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The selection could not be saved. Please, try again.'));
        }
        $this->set(compact('selection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Selection id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $selection = $this->Selections->get($id);
        if ($this->Selections->delete($selection)) {
            $this->Flash->success(__('The selection has been deleted.'));
        } else {
            $this->Flash->error(__('The selection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
