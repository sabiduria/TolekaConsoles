<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Detailsworkflow Controller
 *
 * @property \App\Model\Table\DetailsworkflowTable $Detailsworkflow
 */
class DetailsworkflowController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Detailsworkflow->find();
        $detailsworkflow = $this->paginate($query);

        $this->set(compact('detailsworkflow'));
    }

    /**
     * View method
     *
     * @param string|null $id Detailsworkflow id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detailsworkflow = $this->Detailsworkflow->get($id, contain: []);
        $this->set(compact('detailsworkflow'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detailsworkflow = $this->Detailsworkflow->newEmptyEntity();
        if ($this->request->is('post')) {
            $detailsworkflow = $this->Detailsworkflow->patchEntity($detailsworkflow, $this->request->getData());
            if ($this->Detailsworkflow->save($detailsworkflow)) {
                $this->Flash->success(__('The detailsworkflow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detailsworkflow could not be saved. Please, try again.'));
        }
        $this->set(compact('detailsworkflow'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detailsworkflow id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detailsworkflow = $this->Detailsworkflow->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detailsworkflow = $this->Detailsworkflow->patchEntity($detailsworkflow, $this->request->getData());
            if ($this->Detailsworkflow->save($detailsworkflow)) {
                $this->Flash->success(__('The detailsworkflow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detailsworkflow could not be saved. Please, try again.'));
        }
        $this->set(compact('detailsworkflow'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detailsworkflow id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detailsworkflow = $this->Detailsworkflow->get($id);
        if ($this->Detailsworkflow->delete($detailsworkflow)) {
            $this->Flash->success(__('The detailsworkflow has been deleted.'));
        } else {
            $this->Flash->error(__('The detailsworkflow could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
