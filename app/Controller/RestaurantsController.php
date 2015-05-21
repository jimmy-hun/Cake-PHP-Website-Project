<?php
App::uses('AppController', 'Controller');
/**
 * Restaurants Controller
 *
 * @property Restaurant $Restaurant
 * @property PaginatorComponent $Paginator
 */
class RestaurantsController extends AppController {

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
		$this->Restaurant->recursive = 0;
		$this->set('restaurants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Restaurant->exists($id)) {
			throw new NotFoundException(__('Invalid restaurant'));
		}
		$options = array('conditions' => array('Restaurant.' . $this->Restaurant->primaryKey => $id));
		$this->set('restaurant', $this->Restaurant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Restaurant->create();
			if ($this->Restaurant->save($this->request->data)) {
				$this->Session->setFlash(__('The restaurant has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Restaurant->exists($id)) {
			throw new NotFoundException(__('Invalid restaurant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Restaurant->save($this->request->data)) {
				$this->Session->setFlash(__('The restaurant has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Restaurant.' . $this->Restaurant->primaryKey => $id));
			$this->request->data = $this->Restaurant->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Restaurant->id = $id;
		if (!$this->Restaurant->exists()) {
			throw new NotFoundException(__('Invalid restaurant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Restaurant->delete()) {
			$this->Session->setFlash(__('Restaurant deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Restaurant was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
