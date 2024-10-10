<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ExperienceProf Controller
 *
 * @property \App\Model\Table\ExperienceProfTable $ExperienceProf
 */
class ExperienceProfController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ExperienceProf->find();
        $experienceProf = $this->paginate($query);

        $this->set(compact('experienceProf'));
    }

    /**
     * View method
     *
     * @param string|null $id Experience Prof id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $experienceProf = $this->ExperienceProf->get($id, contain: []);
        $this->set(compact('experienceProf'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $experienceProf = $this->ExperienceProf->newEmptyEntity();
        if ($this->request->is('post')) {
            $experienceProf = $this->ExperienceProf->patchEntity($experienceProf, $this->request->getData());
            if ($this->ExperienceProf->save($experienceProf)) {
                $this->Flash->success(__('The experience prof has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience prof could not be saved. Please, try again.'));
        }
        $this->set(compact('experienceProf'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Experience Prof id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $experienceProf = $this->ExperienceProf->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $experienceProf = $this->ExperienceProf->patchEntity($experienceProf, $this->request->getData());
            if ($this->ExperienceProf->save($experienceProf)) {
                $this->Flash->success(__('The experience prof has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience prof could not be saved. Please, try again.'));
        }
        $this->set(compact('experienceProf'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Experience Prof id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $experienceProf = $this->ExperienceProf->get($id);
        if ($this->ExperienceProf->delete($experienceProf)) {
            $this->Flash->success(__('The experience prof has been deleted.'));
        } else {
            $this->Flash->error(__('The experience prof could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
