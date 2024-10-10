<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Niveauetude Controller
 *
 * @property \App\Model\Table\NiveauetudeTable $Niveauetude
 */
class NiveauetudeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Niveauetude->find();
        $niveauetude = $this->paginate($query);

        $this->set(compact('niveauetude'));
    }

    /**
     * View method
     *
     * @param string|null $id Niveauetude id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $niveauetude = $this->Niveauetude->get($id, contain: []);
        $this->set(compact('niveauetude'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $niveauetude = $this->Niveauetude->newEmptyEntity();
        if ($this->request->is('post')) {
            $niveauetude = $this->Niveauetude->patchEntity($niveauetude, $this->request->getData());
            if ($this->Niveauetude->save($niveauetude)) {
                $this->Flash->success(__('The niveauetude has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The niveauetude could not be saved. Please, try again.'));
        }
        $this->set(compact('niveauetude'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Niveauetude id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $niveauetude = $this->Niveauetude->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $niveauetude = $this->Niveauetude->patchEntity($niveauetude, $this->request->getData());
            if ($this->Niveauetude->save($niveauetude)) {
                $this->Flash->success(__('The niveauetude has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The niveauetude could not be saved. Please, try again.'));
        }
        $this->set(compact('niveauetude'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Niveauetude id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $niveauetude = $this->Niveauetude->get($id);
        if ($this->Niveauetude->delete($niveauetude)) {
            $this->Flash->success(__('The niveauetude has been deleted.'));
        } else {
            $this->Flash->error(__('The niveauetude could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
