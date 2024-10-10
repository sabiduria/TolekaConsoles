<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Discipline Controller
 *
 * @property \App\Model\Table\DisciplineTable $Discipline
 */
class DisciplineController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Discipline->find();
        $discipline = $this->paginate($query);

        $this->set(compact('discipline'));
    }

    /**
     * View method
     *
     * @param string|null $id Discipline id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discipline = $this->Discipline->get($id, contain: []);
        $this->set(compact('discipline'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discipline = $this->Discipline->newEmptyEntity();
        if ($this->request->is('post')) {
            $discipline = $this->Discipline->patchEntity($discipline, $this->request->getData());
            if ($this->Discipline->save($discipline)) {
                $this->Flash->success(__('The discipline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discipline could not be saved. Please, try again.'));
        }
        $this->set(compact('discipline'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Discipline id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discipline = $this->Discipline->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discipline = $this->Discipline->patchEntity($discipline, $this->request->getData());
            if ($this->Discipline->save($discipline)) {
                $this->Flash->success(__('The discipline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discipline could not be saved. Please, try again.'));
        }
        $this->set(compact('discipline'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Discipline id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discipline = $this->Discipline->get($id);
        if ($this->Discipline->delete($discipline)) {
            $this->Flash->success(__('The discipline has been deleted.'));
        } else {
            $this->Flash->error(__('The discipline could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
