<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Definitions Controller
 *
 * @property \App\Model\Table\DefinitionsTable $Definitions
 */
class DefinitionsController extends AppController {
  public $paginate = [
    'order' => [
      'Definitions.definition' => 'asc',
      'Definitions.subdefinition' => 'asc',
    ]
  ];

  /**
    * Index method
    *
    * @return void
    */
  public function index() {
    $this->set('definitions', $this->paginate($this->Definitions));
    $this->set('_serialize', ['definitions']);
  }

  /**
    * View method
    *
    * @param string|null $id Definition id.
    * @return void
    * @throws \Cake\Network\Exception\NotFoundException When record not found.
    */
  public function view($id = null) {
    $definition = $this->Definitions->get(
      $id,
      ['contain' => ['Tags', 'Attributions']]
    );
    $this->set('definition', $definition);
    $this->set('_serialize', ['definition']);
  }

  /**
    * Add method
    *
    * @return void Redirects on successful add, renders view otherwise.
    */
  public function add() {
    $definition = $this->Definitions->newEntity();
    if ($this->request->is('post')) {
      $definition = $this->Definitions->patchEntity(
        $definition,
        $this->request->data
      );
      if ($this->Definitions->save($definition)) {
        $this->Flash->success(__('The definition has been saved.'));
        $redirection = $this->redirect(['action' => 'index']);
        return $redirection;
      } else {
        $this->Flash->error(
          __('The definition could not be saved. Please, try again.')
        );
      }
    }
    $tags = $this->Definitions->Tags->find('list', ['limit' => 200]);
    $this->set(compact('definition', 'tags'));
    $this->set('_serialize', ['definition']);
  }

  /**
    * Edit method
    *
    * @param string|null $id Definition id.
    * @return void Redirects on successful edit, renders view otherwise.
    * @throws \Cake\Network\Exception\NotFoundException When record not found.
    */
  public function edit($id = null) {
    $definition = $this->Definitions->get(
      $id,
      ['contain' => ['Tags']]
    );
    if ($this->request->is(['patch', 'post', 'put'])) {
      $definition = $this->Definitions->patchEntity(
        $definition,
        $this->request->data
      );
      if ($this->Definitions->save($definition)) {
        $this->Flash->success(__('The definition has been saved.'));
        $redirection = $this->redirect(['action' => 'index']);
        return $redirection;
      } else {
        $this->Flash->error(
          __('The definition could not be saved. Please, try again.')
        );
      }
    }
    $tags = $this->Definitions->Tags->find('list', ['limit' => 200]);
    $this->set(compact('definition', 'tags'));
    $this->set('_serialize', ['definition']);
  }

  /**
    * Delete method
    *
    * @param string|null $id Definition id.
    * @return \Cake\Network\Response|null Redirects to index.
    * @throws \Cake\Network\Exception\NotFoundException When record not found.
    */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $definition = $this->Definitions->get($id);
    if ($this->Definitions->delete($definition)) {
      $this->Flash->success(__('The definition has been deleted.'));
    } else {
      $this->Flash->error(
        __('The definition could not be deleted. Please, try again.')
      );
    }
    $redirection = $this->redirect(['action' => 'index']);
    return $redirection;
  }

}
