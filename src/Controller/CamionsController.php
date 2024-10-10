<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Camions Controller
 *
 * @property \App\Model\Table\CamionsTable $Camions
 */
class CamionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Camions->find();
        $camions = $this->paginate($query);

        $this->set(compact('camions'));
    }

    /**
     * View method
     *
     * @param string|null $id Camion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $camion = $this->Camions->get($id, contain: []);
        $this->set(compact('camion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $camion = $this->Camions->newEmptyEntity();
        if ($this->request->is('post')) {
            $camion = $this->Camions->patchEntity($camion, $this->request->getData());
            if ($this->Camions->save($camion)) {
                $this->Flash->success(__('The camion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The camion could not be saved. Please, try again.'));
        }
        $this->set(compact('camion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Camion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $camion = $this->Camions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $camion = $this->Camions->patchEntity($camion, $this->request->getData());
            if ($this->Camions->save($camion)) {
                $this->Flash->success(__('The camion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The camion could not be saved. Please, try again.'));
        }
        $this->set(compact('camion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Camion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $camion = $this->Camions->get($id);
        if ($this->Camions->delete($camion)) {
            $this->Flash->success(__('The camion has been deleted.'));
        } else {
            $this->Flash->error(__('The camion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
