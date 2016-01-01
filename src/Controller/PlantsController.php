<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Plants Controller
 *
 * @property \App\Model\Table\PlantsTable $Plants
 */
class PlantsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ScientificNames']
        ];
        $this->set('plants', $this->paginate($this->Plants));
        $this->set('_serialize', ['plants']);
    }

    /**
     * View method
     *
     * @param string|null $id Plant id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $plant = $this->Plants->get($id, [
            'contain' => ['ScientificNames', 'Bouquets', 'Tags', 'Attributions']
        ]);
        $this->set('plant', $plant);
        $this->set('_serialize', ['plant']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $plant = $this->Plants->newEntity();
        if ($this->request->is('post')) {
            $plant = $this->Plants->patchEntity($plant, $this->request->data);
            if ($this->Plants->save($plant)) {
                $this->Flash->success(__('The plant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plant could not be saved. Please, try again.'));
            }
        }
        $scientificNames = $this->Plants->ScientificNames->find('list', ['limit' => 200]);
        $bouquets = $this->Plants->Bouquets->find('list', ['limit' => 200]);
        $tags = $this->Plants->Tags->find('list', ['limit' => 200]);
        $this->set(compact('plant', 'scientificNames', 'bouquets', 'tags'));
        $this->set('_serialize', ['plant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Plant id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $plant = $this->Plants->get($id, [
            'contain' => ['Bouquets', 'Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plant = $this->Plants->patchEntity($plant, $this->request->data);
            if ($this->Plants->save($plant)) {
                $this->Flash->success(__('The plant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plant could not be saved. Please, try again.'));
            }
        }
        $scientificNames = $this->Plants->ScientificNames->find('list', ['limit' => 200]);
        $bouquets = $this->Plants->Bouquets->find('list', ['limit' => 200]);
        $tags = $this->Plants->Tags->find('list', ['limit' => 200]);
        $this->set(compact('plant', 'scientificNames', 'bouquets', 'tags'));
        $this->set('_serialize', ['plant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Plant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $plant = $this->Plants->get($id);
        if ($this->Plants->delete($plant)) {
            $this->Flash->success(__('The plant has been deleted.'));
        } else {
            $this->Flash->error(__('The plant could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
