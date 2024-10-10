<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Couleurcamion Controller
 *
 * @property \App\Model\Table\CouleurcamionTable $Couleurcamion
 */
class CouleurcamionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Couleurcamion->find();
        $couleurcamion = $this->paginate($query);

        $this->set(compact('couleurcamion'));
    }

    /**
     * View method
     *
     * @param string|null $id Couleurcamion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $couleurcamion = $this->Couleurcamion->get($id, contain: []);
        $this->set(compact('couleurcamion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $couleurcamion = $this->Couleurcamion->newEmptyEntity();
        if ($this->request->is('post')) {
            $couleurcamion = $this->Couleurcamion->patchEntity($couleurcamion, $this->request->getData());
            if ($this->Couleurcamion->save($couleurcamion)) {
                $this->Flash->success(__('The couleurcamion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The couleurcamion could not be saved. Please, try again.'));
        }
        $this->set(compact('couleurcamion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Couleurcamion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $couleurcamion = $this->Couleurcamion->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $couleurcamion = $this->Couleurcamion->patchEntity($couleurcamion, $this->request->getData());
            if ($this->Couleurcamion->save($couleurcamion)) {
                $this->Flash->success(__('The couleurcamion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The couleurcamion could not be saved. Please, try again.'));
        }
        $this->set(compact('couleurcamion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Couleurcamion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $couleurcamion = $this->Couleurcamion->get($id);
        if ($this->Couleurcamion->delete($couleurcamion)) {
            $this->Flash->success(__('The couleurcamion has been deleted.'));
        } else {
            $this->Flash->error(__('The couleurcamion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
