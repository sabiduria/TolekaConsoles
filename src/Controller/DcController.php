<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dc Controller
 *
 * @property \App\Model\Table\DcTable $Dc
 */
class DcController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Dc->find();
        $dc = $this->paginate($query);

        $this->set(compact('dc'));
    }

    /**
     * View method
     *
     * @param string|null $id Dc id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dc = $this->Dc->get($id, contain: []);
        $this->set(compact('dc'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dc = $this->Dc->newEmptyEntity();
        if ($this->request->is('post')) {
            $dc = $this->Dc->patchEntity($dc, $this->request->getData());
            if ($this->Dc->save($dc)) {
                $this->Flash->success(__('The dc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dc could not be saved. Please, try again.'));
        }
        $this->set(compact('dc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dc id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dc = $this->Dc->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dc = $this->Dc->patchEntity($dc, $this->request->getData());
            if ($this->Dc->save($dc)) {
                $this->Flash->success(__('The dc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dc could not be saved. Please, try again.'));
        }
        $this->set(compact('dc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dc = $this->Dc->get($id);
        if ($this->Dc->delete($dc)) {
            $this->Flash->success(__('The dc has been deleted.'));
        } else {
            $this->Flash->error(__('The dc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
