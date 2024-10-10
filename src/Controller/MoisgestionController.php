<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Moisgestion Controller
 *
 * @property \App\Model\Table\MoisgestionTable $Moisgestion
 */
class MoisgestionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Moisgestion->find();
        $moisgestion = $this->paginate($query);

        $this->set(compact('moisgestion'));
    }

    /**
     * View method
     *
     * @param string|null $id Moisgestion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $moisgestion = $this->Moisgestion->get($id, contain: []);
        $this->set(compact('moisgestion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $moisgestion = $this->Moisgestion->newEmptyEntity();
        if ($this->request->is('post')) {
            $moisgestion = $this->Moisgestion->patchEntity($moisgestion, $this->request->getData());
            if ($this->Moisgestion->save($moisgestion)) {
                $this->Flash->success(__('The moisgestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The moisgestion could not be saved. Please, try again.'));
        }
        $this->set(compact('moisgestion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Moisgestion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $moisgestion = $this->Moisgestion->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $moisgestion = $this->Moisgestion->patchEntity($moisgestion, $this->request->getData());
            if ($this->Moisgestion->save($moisgestion)) {
                $this->Flash->success(__('The moisgestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The moisgestion could not be saved. Please, try again.'));
        }
        $this->set(compact('moisgestion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Moisgestion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $moisgestion = $this->Moisgestion->get($id);
        if ($this->Moisgestion->delete($moisgestion)) {
            $this->Flash->success(__('The moisgestion has been deleted.'));
        } else {
            $this->Flash->error(__('The moisgestion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
