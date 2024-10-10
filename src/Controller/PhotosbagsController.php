<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Photosbags Controller
 *
 * @property \App\Model\Table\PhotosbagsTable $Photosbags
 */
class PhotosbagsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Photosbags->find();
        $photosbags = $this->paginate($query);

        $this->set(compact('photosbags'));
    }

    /**
     * View method
     *
     * @param string|null $id Photosbag id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photosbag = $this->Photosbags->get($id, contain: []);
        $this->set(compact('photosbag'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photosbag = $this->Photosbags->newEmptyEntity();
        if ($this->request->is('post')) {
            $photosbag = $this->Photosbags->patchEntity($photosbag, $this->request->getData());
            if ($this->Photosbags->save($photosbag)) {
                $this->Flash->success(__('The photosbag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photosbag could not be saved. Please, try again.'));
        }
        $this->set(compact('photosbag'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photosbag id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photosbag = $this->Photosbags->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photosbag = $this->Photosbags->patchEntity($photosbag, $this->request->getData());
            if ($this->Photosbags->save($photosbag)) {
                $this->Flash->success(__('The photosbag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photosbag could not be saved. Please, try again.'));
        }
        $this->set(compact('photosbag'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photosbag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photosbag = $this->Photosbags->get($id);
        if ($this->Photosbags->delete($photosbag)) {
            $this->Flash->success(__('The photosbag has been deleted.'));
        } else {
            $this->Flash->error(__('The photosbag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
