<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typeconcentrate Controller
 *
 * @property \App\Model\Table\TypeconcentrateTable $Typeconcentrate
 */
class TypeconcentrateController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Typeconcentrate->find();
        $typeconcentrate = $this->paginate($query);

        $this->set(compact('typeconcentrate'));
    }

    /**
     * View method
     *
     * @param string|null $id Typeconcentrate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeconcentrate = $this->Typeconcentrate->get($id, contain: []);
        $this->set(compact('typeconcentrate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeconcentrate = $this->Typeconcentrate->newEmptyEntity();
        if ($this->request->is('post')) {
            $typeconcentrate = $this->Typeconcentrate->patchEntity($typeconcentrate, $this->request->getData());
            if ($this->Typeconcentrate->save($typeconcentrate)) {
                $this->Flash->success(__('The typeconcentrate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeconcentrate could not be saved. Please, try again.'));
        }
        $this->set(compact('typeconcentrate'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeconcentrate id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeconcentrate = $this->Typeconcentrate->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeconcentrate = $this->Typeconcentrate->patchEntity($typeconcentrate, $this->request->getData());
            if ($this->Typeconcentrate->save($typeconcentrate)) {
                $this->Flash->success(__('The typeconcentrate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeconcentrate could not be saved. Please, try again.'));
        }
        $this->set(compact('typeconcentrate'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeconcentrate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeconcentrate = $this->Typeconcentrate->get($id);
        if ($this->Typeconcentrate->delete($typeconcentrate)) {
            $this->Flash->success(__('The typeconcentrate has been deleted.'));
        } else {
            $this->Flash->error(__('The typeconcentrate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
