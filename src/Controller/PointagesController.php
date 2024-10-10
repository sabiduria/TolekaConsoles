<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pointages Controller
 *
 * @property \App\Model\Table\PointagesTable $Pointages
 */
class PointagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pointages->find();
        $pointages = $this->paginate($query);

        $this->set(compact('pointages'));
    }

    /**
     * View method
     *
     * @param string|null $id Pointage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pointage = $this->Pointages->get($id, contain: []);
        $this->set(compact('pointage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pointage = $this->Pointages->newEmptyEntity();
        if ($this->request->is('post')) {
            $pointage = $this->Pointages->patchEntity($pointage, $this->request->getData());
            if ($this->Pointages->save($pointage)) {
                $this->Flash->success(__('The pointage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pointage could not be saved. Please, try again.'));
        }
        $this->set(compact('pointage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pointage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pointage = $this->Pointages->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pointage = $this->Pointages->patchEntity($pointage, $this->request->getData());
            if ($this->Pointages->save($pointage)) {
                $this->Flash->success(__('The pointage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pointage could not be saved. Please, try again.'));
        }
        $this->set(compact('pointage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pointage id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pointage = $this->Pointages->get($id);
        if ($this->Pointages->delete($pointage)) {
            $this->Flash->success(__('The pointage has been deleted.'));
        } else {
            $this->Flash->error(__('The pointage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
