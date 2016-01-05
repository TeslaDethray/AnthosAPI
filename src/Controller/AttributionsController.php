<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Attributions Controller
 *
 * @property \App\Model\Table\AttributionsTable $Attributions
 */
class AttributionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Plants', 'Definitions', 'Sources']
        ];
        $this->set('attributions', $this->paginate($this->Attributions));
        $this->set('_serialize', ['attributions']);
    }

    /**
     * View method
     *
     * @param string|null $id Attribution id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attribution = $this->Attributions->get($id, [
            'contain' => ['Plants', 'Definitions', 'Sources']
        ]);
        $this->set('attribution', $attribution);
        $this->set('_serialize', ['attribution']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attribution = $this->Attributions->newEntity();
        if ($this->request->is('post')) {
            $attribution = $this->Attributions->patchEntity($attribution, $this->request->data);
            if ($this->Attributions->save($attribution)) {
                $this->Flash->success(__('The attribution has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The attribution could not be saved. Please, try again.'));
            }
        }
        $plants = $this->Attributions->Plants->find('list', ['limit' => 200]);
        $definitions = $this->Attributions->Definitions->find('list', ['limit' => 200]);
        $sources = $this->Attributions->Sources->find('list', ['limit' => 200]);
        $this->set(compact('attribution', 'plants', 'definitions', 'sources'));
        $this->set('_serialize', ['attribution']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Attribution id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attribution = $this->Attributions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attribution = $this->Attributions->patchEntity($attribution, $this->request->data);
            if ($this->Attributions->save($attribution)) {
                $this->Flash->success(__('The attribution has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The attribution could not be saved. Please, try again.'));
            }
        }
        $plants = $this->Attributions->Plants->find('list', ['limit' => 200]);
        $definitions = $this->Attributions->Definitions->find('list', ['limit' => 200]);
        $sources = $this->Attributions->Sources->find('list', ['limit' => 200]);
        $this->set(compact('attribution', 'plants', 'definitions', 'sources'));
        $this->set('_serialize', ['attribution']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Attribution id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attribution = $this->Attributions->get($id);
        if ($this->Attributions->delete($attribution)) {
            $this->Flash->success(__('The attribution has been deleted.'));
        } else {
            $this->Flash->error(__('The attribution could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
