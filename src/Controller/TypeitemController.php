<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typeitem Controller
 *
 * @property \App\Model\Table\TypeitemTable $Typeitem
 */
class TypeitemController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Typeitem->find();
        $typeitem = $this->paginate($query);

        $this->set(compact('typeitem'));
    }

    /**
     * View method
     *
     * @param string|null $id Typeitem id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeitem = $this->Typeitem->get($id, contain: []);
        $this->set(compact('typeitem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeitem = $this->Typeitem->newEmptyEntity();
        if ($this->request->is('post')) {
            $typeitem = $this->Typeitem->patchEntity($typeitem, $this->request->getData());
            if ($this->Typeitem->save($typeitem)) {
                $this->Flash->success(__('The typeitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeitem could not be saved. Please, try again.'));
        }
        $this->set(compact('typeitem'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeitem id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeitem = $this->Typeitem->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeitem = $this->Typeitem->patchEntity($typeitem, $this->request->getData());
            if ($this->Typeitem->save($typeitem)) {
                $this->Flash->success(__('The typeitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeitem could not be saved. Please, try again.'));
        }
        $this->set(compact('typeitem'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeitem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeitem = $this->Typeitem->get($id);
        if ($this->Typeitem->delete($typeitem)) {
            $this->Flash->success(__('The typeitem has been deleted.'));
        } else {
            $this->Flash->error(__('The typeitem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
