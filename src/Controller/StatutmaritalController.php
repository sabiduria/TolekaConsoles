<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Statutmarital Controller
 *
 * @property \App\Model\Table\StatutmaritalTable $Statutmarital
 */
class StatutmaritalController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Statutmarital->find();
        $statutmarital = $this->paginate($query);

        $this->set(compact('statutmarital'));
    }

    /**
     * View method
     *
     * @param string|null $id Statutmarital id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statutmarital = $this->Statutmarital->get($id, contain: []);
        $this->set(compact('statutmarital'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statutmarital = $this->Statutmarital->newEmptyEntity();
        if ($this->request->is('post')) {
            $statutmarital = $this->Statutmarital->patchEntity($statutmarital, $this->request->getData());
            if ($this->Statutmarital->save($statutmarital)) {
                $this->Flash->success(__('The statutmarital has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statutmarital could not be saved. Please, try again.'));
        }
        $this->set(compact('statutmarital'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Statutmarital id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statutmarital = $this->Statutmarital->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statutmarital = $this->Statutmarital->patchEntity($statutmarital, $this->request->getData());
            if ($this->Statutmarital->save($statutmarital)) {
                $this->Flash->success(__('The statutmarital has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statutmarital could not be saved. Please, try again.'));
        }
        $this->set(compact('statutmarital'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Statutmarital id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statutmarital = $this->Statutmarital->get($id);
        if ($this->Statutmarital->delete($statutmarital)) {
            $this->Flash->success(__('The statutmarital has been deleted.'));
        } else {
            $this->Flash->error(__('The statutmarital could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
