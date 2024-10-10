<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Imexlotupdates Controller
 *
 * @property \App\Model\Table\ImexlotupdatesTable $Imexlotupdates
 */
class ImexlotupdatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Imexlotupdates->find();
        $imexlotupdates = $this->paginate($query);

        $this->set(compact('imexlotupdates'));
    }

    /**
     * View method
     *
     * @param string|null $id Imexlotupdate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imexlotupdate = $this->Imexlotupdates->get($id, contain: []);
        $this->set(compact('imexlotupdate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imexlotupdate = $this->Imexlotupdates->newEmptyEntity();
        if ($this->request->is('post')) {
            $imexlotupdate = $this->Imexlotupdates->patchEntity($imexlotupdate, $this->request->getData());
            if ($this->Imexlotupdates->save($imexlotupdate)) {
                $this->Flash->success(__('The imexlotupdate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imexlotupdate could not be saved. Please, try again.'));
        }
        $this->set(compact('imexlotupdate'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Imexlotupdate id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imexlotupdate = $this->Imexlotupdates->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imexlotupdate = $this->Imexlotupdates->patchEntity($imexlotupdate, $this->request->getData());
            if ($this->Imexlotupdates->save($imexlotupdate)) {
                $this->Flash->success(__('The imexlotupdate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imexlotupdate could not be saved. Please, try again.'));
        }
        $this->set(compact('imexlotupdate'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Imexlotupdate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imexlotupdate = $this->Imexlotupdates->get($id);
        if ($this->Imexlotupdates->delete($imexlotupdate)) {
            $this->Flash->success(__('The imexlotupdate has been deleted.'));
        } else {
            $this->Flash->error(__('The imexlotupdate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
