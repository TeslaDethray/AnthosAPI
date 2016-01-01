<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ScientificNames Controller
 *
 * @property \App\Model\Table\ScientificNamesTable $ScientificNames
 */
class ScientificNamesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('scientificNames', $this->paginate($this->ScientificNames));
        $this->set('_serialize', ['scientificNames']);
    }

    /**
     * View method
     *
     * @param string|null $id Scientific Name id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scientificName = $this->ScientificNames->get($id, [
            'contain' => ['Plants']
        ]);
        $this->set('scientificName', $scientificName);
        $this->set('_serialize', ['scientificName']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scientificName = $this->ScientificNames->newEntity();
        if ($this->request->is('post')) {
            $scientificName = $this->ScientificNames->patchEntity($scientificName, $this->request->data);
            if ($this->ScientificNames->save($scientificName)) {
                $this->Flash->success(__('The scientific name has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The scientific name could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('scientificName'));
        $this->set('_serialize', ['scientificName']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Scientific Name id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scientificName = $this->ScientificNames->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scientificName = $this->ScientificNames->patchEntity($scientificName, $this->request->data);
            if ($this->ScientificNames->save($scientificName)) {
                $this->Flash->success(__('The scientific name has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The scientific name could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('scientificName'));
        $this->set('_serialize', ['scientificName']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Scientific Name id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scientificName = $this->ScientificNames->get($id);
        if ($this->ScientificNames->delete($scientificName)) {
            $this->Flash->success(__('The scientific name has been deleted.'));
        } else {
            $this->Flash->error(__('The scientific name could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
