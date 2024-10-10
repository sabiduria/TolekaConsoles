<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Transporteurs Controller
 *
 * @property \App\Model\Table\TransporteursTable $Transporteurs
 */
class TransporteursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Transporteurs->find();
        $transporteurs = $this->paginate($query);

        $this->set(compact('transporteurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Transporteur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transporteur = $this->Transporteurs->get($id, contain: []);
        $this->set(compact('transporteur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transporteur = $this->Transporteurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $transporteur = $this->Transporteurs->patchEntity($transporteur, $this->request->getData());
            if ($this->Transporteurs->save($transporteur)) {
                $this->Flash->success(__('The transporteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transporteur could not be saved. Please, try again.'));
        }
        $this->set(compact('transporteur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transporteur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transporteur = $this->Transporteurs->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transporteur = $this->Transporteurs->patchEntity($transporteur, $this->request->getData());
            if ($this->Transporteurs->save($transporteur)) {
                $this->Flash->success(__('The transporteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transporteur could not be saved. Please, try again.'));
        }
        $this->set(compact('transporteur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transporteur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transporteur = $this->Transporteurs->get($id);
        if ($this->Transporteurs->delete($transporteur)) {
            $this->Flash->success(__('The transporteur has been deleted.'));
        } else {
            $this->Flash->error(__('The transporteur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
