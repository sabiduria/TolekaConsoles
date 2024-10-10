<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sousmenu2 Controller
 *
 * @property \App\Model\Table\Sousmenu2Table $Sousmenu2
 */
class Sousmenu2Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Sousmenu2->find();
        $sousmenu2 = $this->paginate($query);

        $this->set(compact('sousmenu2'));
    }

    /**
     * View method
     *
     * @param string|null $id Sousmenu2 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sousmenu2 = $this->Sousmenu2->get($id, contain: []);
        $this->set(compact('sousmenu2'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sousmenu2 = $this->Sousmenu2->newEmptyEntity();
        if ($this->request->is('post')) {
            $sousmenu2 = $this->Sousmenu2->patchEntity($sousmenu2, $this->request->getData());
            if ($this->Sousmenu2->save($sousmenu2)) {
                $this->Flash->success(__('The sousmenu2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sousmenu2 could not be saved. Please, try again.'));
        }
        $this->set(compact('sousmenu2'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sousmenu2 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sousmenu2 = $this->Sousmenu2->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sousmenu2 = $this->Sousmenu2->patchEntity($sousmenu2, $this->request->getData());
            if ($this->Sousmenu2->save($sousmenu2)) {
                $this->Flash->success(__('The sousmenu2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sousmenu2 could not be saved. Please, try again.'));
        }
        $this->set(compact('sousmenu2'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sousmenu2 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sousmenu2 = $this->Sousmenu2->get($id);
        if ($this->Sousmenu2->delete($sousmenu2)) {
            $this->Flash->success(__('The sousmenu2 has been deleted.'));
        } else {
            $this->Flash->error(__('The sousmenu2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
