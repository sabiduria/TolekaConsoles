<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Mouvementstock Controller
 *
 * @property \App\Model\Table\MouvementstockTable $Mouvementstock
 */
class MouvementstockController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Mouvementstock->find();
        $mouvementstock = $this->paginate($query);

        $this->set(compact('mouvementstock'));
    }

    /**
     * View method
     *
     * @param string|null $id Mouvementstock id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mouvementstock = $this->Mouvementstock->get($id, contain: []);
        $this->set(compact('mouvementstock'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mouvementstock = $this->Mouvementstock->newEmptyEntity();
        if ($this->request->is('post')) {
            $mouvementstock = $this->Mouvementstock->patchEntity($mouvementstock, $this->request->getData());
            if ($this->Mouvementstock->save($mouvementstock)) {
                $this->Flash->success(__('The mouvementstock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mouvementstock could not be saved. Please, try again.'));
        }
        $this->set(compact('mouvementstock'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mouvementstock id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mouvementstock = $this->Mouvementstock->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mouvementstock = $this->Mouvementstock->patchEntity($mouvementstock, $this->request->getData());
            if ($this->Mouvementstock->save($mouvementstock)) {
                $this->Flash->success(__('The mouvementstock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mouvementstock could not be saved. Please, try again.'));
        }
        $this->set(compact('mouvementstock'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mouvementstock id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mouvementstock = $this->Mouvementstock->get($id);
        if ($this->Mouvementstock->delete($mouvementstock)) {
            $this->Flash->success(__('The mouvementstock has been deleted.'));
        } else {
            $this->Flash->error(__('The mouvementstock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
