<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ImagesSafetytopic Controller
 *
 * @property \App\Model\Table\ImagesSafetytopicTable $ImagesSafetytopic
 */
class ImagesSafetytopicController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ImagesSafetytopic->find();
        $imagesSafetytopic = $this->paginate($query);

        $this->set(compact('imagesSafetytopic'));
    }

    /**
     * View method
     *
     * @param string|null $id Images Safetytopic id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagesSafetytopic = $this->ImagesSafetytopic->get($id, contain: []);
        $this->set(compact('imagesSafetytopic'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagesSafetytopic = $this->ImagesSafetytopic->newEmptyEntity();
        if ($this->request->is('post')) {
            $imagesSafetytopic = $this->ImagesSafetytopic->patchEntity($imagesSafetytopic, $this->request->getData());
            if ($this->ImagesSafetytopic->save($imagesSafetytopic)) {
                $this->Flash->success(__('The images safetytopic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The images safetytopic could not be saved. Please, try again.'));
        }
        $this->set(compact('imagesSafetytopic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Images Safetytopic id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagesSafetytopic = $this->ImagesSafetytopic->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagesSafetytopic = $this->ImagesSafetytopic->patchEntity($imagesSafetytopic, $this->request->getData());
            if ($this->ImagesSafetytopic->save($imagesSafetytopic)) {
                $this->Flash->success(__('The images safetytopic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The images safetytopic could not be saved. Please, try again.'));
        }
        $this->set(compact('imagesSafetytopic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Images Safetytopic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagesSafetytopic = $this->ImagesSafetytopic->get($id);
        if ($this->ImagesSafetytopic->delete($imagesSafetytopic)) {
            $this->Flash->success(__('The images safetytopic has been deleted.'));
        } else {
            $this->Flash->error(__('The images safetytopic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
