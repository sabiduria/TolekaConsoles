<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lastimexlot Controller
 *
 * @property \App\Model\Table\LastimexlotTable $Lastimexlot
 */
class LastimexlotController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Lastimexlot->find();
        $lastimexlot = $this->paginate($query);

        $this->set(compact('lastimexlot'));
    }

    /**
     * View method
     *
     * @param string|null $id Lastimexlot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lastimexlot = $this->Lastimexlot->get($id, contain: []);
        $this->set(compact('lastimexlot'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lastimexlot = $this->Lastimexlot->newEmptyEntity();
        if ($this->request->is('post')) {
            $lastimexlot = $this->Lastimexlot->patchEntity($lastimexlot, $this->request->getData());
            if ($this->Lastimexlot->save($lastimexlot)) {
                $this->Flash->success(__('The lastimexlot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lastimexlot could not be saved. Please, try again.'));
        }
        $this->set(compact('lastimexlot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lastimexlot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lastimexlot = $this->Lastimexlot->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lastimexlot = $this->Lastimexlot->patchEntity($lastimexlot, $this->request->getData());
            if ($this->Lastimexlot->save($lastimexlot)) {
                $this->Flash->success(__('The lastimexlot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lastimexlot could not be saved. Please, try again.'));
        }
        $this->set(compact('lastimexlot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lastimexlot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lastimexlot = $this->Lastimexlot->get($id);
        if ($this->Lastimexlot->delete($lastimexlot)) {
            $this->Flash->success(__('The lastimexlot has been deleted.'));
        } else {
            $this->Flash->error(__('The lastimexlot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
