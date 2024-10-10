<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typecamion Controller
 *
 * @property \App\Model\Table\TypecamionTable $Typecamion
 */
class TypecamionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Typecamion->find();
        $typecamion = $this->paginate($query);

        $this->set(compact('typecamion'));
    }

    /**
     * View method
     *
     * @param string|null $id Typecamion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typecamion = $this->Typecamion->get($id, contain: []);
        $this->set(compact('typecamion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typecamion = $this->Typecamion->newEmptyEntity();
        if ($this->request->is('post')) {
            $typecamion = $this->Typecamion->patchEntity($typecamion, $this->request->getData());
            if ($this->Typecamion->save($typecamion)) {
                $this->Flash->success(__('The typecamion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typecamion could not be saved. Please, try again.'));
        }
        $this->set(compact('typecamion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typecamion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typecamion = $this->Typecamion->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typecamion = $this->Typecamion->patchEntity($typecamion, $this->request->getData());
            if ($this->Typecamion->save($typecamion)) {
                $this->Flash->success(__('The typecamion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typecamion could not be saved. Please, try again.'));
        }
        $this->set(compact('typecamion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typecamion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typecamion = $this->Typecamion->get($id);
        if ($this->Typecamion->delete($typecamion)) {
            $this->Flash->success(__('The typecamion has been deleted.'));
        } else {
            $this->Flash->error(__('The typecamion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
