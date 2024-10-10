<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Parametresapp Controller
 *
 * @property \App\Model\Table\ParametresappTable $Parametresapp
 */
class ParametresappController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Parametresapp->find();
        $parametresapp = $this->paginate($query);

        $this->set(compact('parametresapp'));
    }

    /**
     * View method
     *
     * @param string|null $id Parametresapp id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parametresapp = $this->Parametresapp->get($id, contain: []);
        $this->set(compact('parametresapp'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parametresapp = $this->Parametresapp->newEmptyEntity();
        if ($this->request->is('post')) {
            $parametresapp = $this->Parametresapp->patchEntity($parametresapp, $this->request->getData());
            if ($this->Parametresapp->save($parametresapp)) {
                $this->Flash->success(__('The parametresapp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parametresapp could not be saved. Please, try again.'));
        }
        $this->set(compact('parametresapp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Parametresapp id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parametresapp = $this->Parametresapp->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parametresapp = $this->Parametresapp->patchEntity($parametresapp, $this->request->getData());
            if ($this->Parametresapp->save($parametresapp)) {
                $this->Flash->success(__('The parametresapp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parametresapp could not be saved. Please, try again.'));
        }
        $this->set(compact('parametresapp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Parametresapp id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parametresapp = $this->Parametresapp->get($id);
        if ($this->Parametresapp->delete($parametresapp)) {
            $this->Flash->success(__('The parametresapp has been deleted.'));
        } else {
            $this->Flash->error(__('The parametresapp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
