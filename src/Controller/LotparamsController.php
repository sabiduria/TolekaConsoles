<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lotparams Controller
 *
 * @property \App\Model\Table\LotparamsTable $Lotparams
 */
class LotparamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Lotparams->find();
        $lotparams = $this->paginate($query);

        $this->set(compact('lotparams'));
    }

    /**
     * View method
     *
     * @param string|null $id Lotparam id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lotparam = $this->Lotparams->get($id, contain: []);
        $this->set(compact('lotparam'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lotparam = $this->Lotparams->newEmptyEntity();
        if ($this->request->is('post')) {
            $lotparam = $this->Lotparams->patchEntity($lotparam, $this->request->getData());
            if ($this->Lotparams->save($lotparam)) {
                $this->Flash->success(__('The lotparam has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lotparam could not be saved. Please, try again.'));
        }
        $this->set(compact('lotparam'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lotparam id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lotparam = $this->Lotparams->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lotparam = $this->Lotparams->patchEntity($lotparam, $this->request->getData());
            if ($this->Lotparams->save($lotparam)) {
                $this->Flash->success(__('The lotparam has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lotparam could not be saved. Please, try again.'));
        }
        $this->set(compact('lotparam'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lotparam id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lotparam = $this->Lotparams->get($id);
        if ($this->Lotparams->delete($lotparam)) {
            $this->Flash->success(__('The lotparam has been deleted.'));
        } else {
            $this->Flash->error(__('The lotparam could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
