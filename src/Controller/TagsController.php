<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tags Controller
 *
 * @property \App\Model\Table\TagsTable $Tags
 */
class TagsController extends AppController {

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $this->set('tags', $this->paginate($this->Tags));
    $this->set('_serialize', ['tags']);
  }

  /**
   * View method
   *
   * @param string|null $id Tag id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $tag = $this->Tags->get(
      $id,
      ['contain' => ['Bouquets', 'Definitions', 'Plants']]
    );
    $this->set('tag', $tag);
    $this->set('_serialize', ['tag']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $tag = $this->Tags->newEntity();
    if ($this->request->is('post')) {
      $tag = $this->Tags->patchEntity($tag, $this->request->data);
      if ($this->Tags->save($tag)) {
        $this->Flash->success(__('The tag has been saved.'));
        $redirection = $this->redirect(['action' => 'index']);
        return $redirection;
      } else {
        $this->Flash->error(
          __('The tag could not be saved. Please, try again.')
        );
      }
    }
    $bouquets    = $this->Tags->Bouquets->find('list', ['limit' => 200]);
    $definitions = $this->Tags->Definitions->find('list', ['limit' => 200]);
    $plants      = $this->Tags->Plants->find('list', ['limit' => 200]);
    $this->set(compact('tag', 'bouquets', 'definitions', 'plants'));
    $this->set('_serialize', ['tag']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Tag id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $tag = $this->Tags->get(
      $id,
      ['contain' => ['Bouquets', 'Definitions', 'Plants']]
    );
    if ($this->request->is(['patch', 'post', 'put'])) {
        $tag = $this->Tags->patchEntity($tag, $this->request->data);
      if ($this->Tags->save($tag)) {
        $this->Flash->success(__('The tag has been saved.'));
        $redirection = $this->redirect(['action' => 'index']);
        return $redirection;
      } else {
        $this->Flash->error(
          __('The tag could not be saved. Please, try again.')
        );
      }
    }
    $bouquets    = $this->Tags->Bouquets->find('list', ['limit' => 200]);
    $definitions = $this->Tags->Definitions->find('list', ['limit' => 200]);
    $plants      = $this->Tags->Plants->find('list', ['limit' => 200]);
    $this->set(compact('tag', 'bouquets', 'definitions', 'plants'));
    $this->set('_serialize', ['tag']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Tag id.
   * @return \Cake\Network\Response|null Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $tag = $this->Tags->get($id);
    if ($this->Tags->delete($tag)) {
      $this->Flash->success(__('The tag has been deleted.'));
    } else {
      $this->Flash->error(
        __('The tag could not be deleted. Please, try again.')
      );
    }
    $redirection = $this->redirect(['action' => 'index']);
    return $redirection;
  }

}
