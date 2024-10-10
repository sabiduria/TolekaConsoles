<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Kcclabresults Controller
 *
 * @property \App\Model\Table\KcclabresultsTable $Kcclabresults
 */
class KcclabresultsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Kcclabresults->find();
        $kcclabresults = $this->paginate($query);

        $this->set(compact('kcclabresults'));
    }

    /**
     * View method
     *
     * @param string|null $id Kcclabresult id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kcclabresult = $this->Kcclabresults->get($id, contain: []);
        $this->set(compact('kcclabresult'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kcclabresult = $this->Kcclabresults->newEmptyEntity();
        if ($this->request->is('post')) {
            $kcclabresult = $this->Kcclabresults->patchEntity($kcclabresult, $this->request->getData());
            if ($this->Kcclabresults->save($kcclabresult)) {
                $this->Flash->success(__('The kcclabresult has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kcclabresult could not be saved. Please, try again.'));
        }
        $this->set(compact('kcclabresult'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kcclabresult id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kcclabresult = $this->Kcclabresults->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kcclabresult = $this->Kcclabresults->patchEntity($kcclabresult, $this->request->getData());
            if ($this->Kcclabresults->save($kcclabresult)) {
                $this->Flash->success(__('The kcclabresult has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kcclabresult could not be saved. Please, try again.'));
        }
        $this->set(compact('kcclabresult'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kcclabresult id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kcclabresult = $this->Kcclabresults->get($id);
        if ($this->Kcclabresults->delete($kcclabresult)) {
            $this->Flash->success(__('The kcclabresult has been deleted.'));
        } else {
            $this->Flash->error(__('The kcclabresult could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
