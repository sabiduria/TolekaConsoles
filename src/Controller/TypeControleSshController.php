<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TypeControleSsh Controller
 *
 * @property \App\Model\Table\TypeControleSshTable $TypeControleSsh
 */
class TypeControleSshController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->TypeControleSsh->find();
        $typeControleSsh = $this->paginate($query);

        $this->set(compact('typeControleSsh'));
    }

    /**
     * View method
     *
     * @param string|null $id Type Controle Ssh id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeControleSsh = $this->TypeControleSsh->get($id, contain: []);
        $this->set(compact('typeControleSsh'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeControleSsh = $this->TypeControleSsh->newEmptyEntity();
        if ($this->request->is('post')) {
            $typeControleSsh = $this->TypeControleSsh->patchEntity($typeControleSsh, $this->request->getData());
            if ($this->TypeControleSsh->save($typeControleSsh)) {
                $this->Flash->success(__('The type controle ssh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type controle ssh could not be saved. Please, try again.'));
        }
        $this->set(compact('typeControleSsh'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Controle Ssh id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeControleSsh = $this->TypeControleSsh->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeControleSsh = $this->TypeControleSsh->patchEntity($typeControleSsh, $this->request->getData());
            if ($this->TypeControleSsh->save($typeControleSsh)) {
                $this->Flash->success(__('The type controle ssh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type controle ssh could not be saved. Please, try again.'));
        }
        $this->set(compact('typeControleSsh'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Controle Ssh id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeControleSsh = $this->TypeControleSsh->get($id);
        if ($this->TypeControleSsh->delete($typeControleSsh)) {
            $this->Flash->success(__('The type controle ssh has been deleted.'));
        } else {
            $this->Flash->error(__('The type controle ssh could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
