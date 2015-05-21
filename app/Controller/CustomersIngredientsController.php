<?php
App::uses('AppController', 'Controller');
/**
 * CustomersIngredients Controller
 *
 * @property CustomersIngredient $CustomersIngredient
 * @property PaginatorComponent $Paginator
 */
class CustomersIngredientsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomersIngredient->recursive = 0;
		$this->set('customersIngredients', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomersIngredient->exists($id)) {
			throw new NotFoundException(__('Invalid customers ingredient'));
		}
		$options = array('conditions' => array('CustomersIngredient.' . $this->CustomersIngredient->primaryKey => $id));
		$this->set('customersIngredient', $this->CustomersIngredient->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomersIngredient->create();
			if ($this->CustomersIngredient->save($this->request->data)) {
				$this->Session->setFlash(__('The customers ingredient has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers ingredient could not be saved. Please, try again.'));
			}
		}
		$customers = $this->CustomersIngredient->Customer->find('list');
		$ingredients = $this->CustomersIngredient->Ingredient->find('list');
		$this->set(compact('customers', 'ingredients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CustomersIngredient->exists($id)) {
			throw new NotFoundException(__('Invalid customers ingredient'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomersIngredient->save($this->request->data)) {
				$this->Session->setFlash(__('The customers ingredient has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers ingredient could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CustomersIngredient.' . $this->CustomersIngredient->primaryKey => $id));
			$this->request->data = $this->CustomersIngredient->find('first', $options);
		}
		$customers = $this->CustomersIngredient->Customer->find('list');
		$ingredients = $this->CustomersIngredient->Ingredient->find('list');
		$this->set(compact('customers', 'ingredients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CustomersIngredient->id = $id;
		if (!$this->CustomersIngredient->exists()) {
			throw new NotFoundException(__('Invalid customers ingredient'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomersIngredient->delete()) {
			$this->Session->setFlash(__('Customers ingredient deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customers ingredient was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
