<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cubundle Controller
 *
 * @property \App\Model\Table\CubundleTable $Cubundle
 */
class CubundleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Cubundle->find();
        $cubundle = $this->paginate($query);

        $this->set(compact('cubundle'));
    }

    /**
     * View method
     *
     * @param string|null $id Cubundle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cubundle = $this->Cubundle->get($id, contain: ['AdminSync', 'DeviceSync']);
        $this->set(compact('cubundle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cubundle = $this->Cubundle->newEmptyEntity();
        if ($this->request->is('post')) {
            $cubundle = $this->Cubundle->patchEntity($cubundle, $this->request->getData());
            if ($this->Cubundle->save($cubundle)) {
                $this->Flash->success(__('The cubundle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cubundle could not be saved. Please, try again.'));
        }
        $this->set(compact('cubundle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cubundle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cubundle = $this->Cubundle->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cubundle = $this->Cubundle->patchEntity($cubundle, $this->request->getData());
            if ($this->Cubundle->save($cubundle)) {
                $this->Flash->success(__('The cubundle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cubundle could not be saved. Please, try again.'));
        }
        $this->set(compact('cubundle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cubundle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cubundle = $this->Cubundle->get($id);
        if ($this->Cubundle->delete($cubundle)) {
            $this->Flash->success(__('The cubundle has been deleted.'));
        } else {
            $this->Flash->error(__('The cubundle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
