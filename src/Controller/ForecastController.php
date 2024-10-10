<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Forecast Controller
 *
 * @property \App\Model\Table\ForecastTable $Forecast
 */
class ForecastController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Forecast->find();
        $forecast = $this->paginate($query);

        $this->set(compact('forecast'));
    }

    /**
     * View method
     *
     * @param string|null $id Forecast id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $forecast = $this->Forecast->get($id, contain: []);
        $this->set(compact('forecast'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $forecast = $this->Forecast->newEmptyEntity();
        if ($this->request->is('post')) {
            $forecast = $this->Forecast->patchEntity($forecast, $this->request->getData());
            if ($this->Forecast->save($forecast)) {
                $this->Flash->success(__('The forecast has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The forecast could not be saved. Please, try again.'));
        }
        $this->set(compact('forecast'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Forecast id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $forecast = $this->Forecast->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $forecast = $this->Forecast->patchEntity($forecast, $this->request->getData());
            if ($this->Forecast->save($forecast)) {
                $this->Flash->success(__('The forecast has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The forecast could not be saved. Please, try again.'));
        }
        $this->set(compact('forecast'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Forecast id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $forecast = $this->Forecast->get($id);
        if ($this->Forecast->delete($forecast)) {
            $this->Flash->success(__('The forecast has been deleted.'));
        } else {
            $this->Flash->error(__('The forecast could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
