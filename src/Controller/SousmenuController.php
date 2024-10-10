<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sousmenu Controller
 *
 * @property \App\Model\Table\SousmenuTable $Sousmenu
 */
class SousmenuController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Sousmenu->find();
        $sousmenu = $this->paginate($query);

        $this->set(compact('sousmenu'));
    }

    /**
     * View method
     *
     * @param string|null $id Sousmenu id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sousmenu = $this->Sousmenu->get($id, contain: []);
        $this->set(compact('sousmenu'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sousmenu = $this->Sousmenu->newEmptyEntity();
        if ($this->request->is('post')) {
            $sousmenu = $this->Sousmenu->patchEntity($sousmenu, $this->request->getData());
            if ($this->Sousmenu->save($sousmenu)) {
                $this->Flash->success(__('The sousmenu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sousmenu could not be saved. Please, try again.'));
        }
        $this->set(compact('sousmenu'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sousmenu id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sousmenu = $this->Sousmenu->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sousmenu = $this->Sousmenu->patchEntity($sousmenu, $this->request->getData());
            if ($this->Sousmenu->save($sousmenu)) {
                $this->Flash->success(__('The sousmenu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sousmenu could not be saved. Please, try again.'));
        }
        $this->set(compact('sousmenu'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sousmenu id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sousmenu = $this->Sousmenu->get($id);
        if ($this->Sousmenu->delete($sousmenu)) {
            $this->Flash->success(__('The sousmenu has been deleted.'));
        } else {
            $this->Flash->error(__('The sousmenu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
