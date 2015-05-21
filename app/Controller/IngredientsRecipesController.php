<?php
App::uses('AppController', 'Controller');
/**
 * IngredientsRecipes Controller
 *
 * @property IngredientsRecipe $IngredientsRecipe
 * @property PaginatorComponent $Paginator
 */
class IngredientsRecipesController extends AppController {

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
		$this->IngredientsRecipe->recursive = 0;
		$this->set('ingredientsRecipes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IngredientsRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid ingredients recipe'));
		}
		$options = array('conditions' => array('IngredientsRecipe.' . $this->IngredientsRecipe->primaryKey => $id));
		$this->set('ingredientsRecipe', $this->IngredientsRecipe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IngredientsRecipe->create();
			if ($this->IngredientsRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The ingredients recipe has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients recipe could not be saved. Please, try again.'));
			}
		}
		$ingredients = $this->IngredientsRecipe->Ingredient->find('list');
		$recipes = $this->IngredientsRecipe->Recipe->find('list');
		$this->set(compact('ingredients', 'recipes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->IngredientsRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid ingredients recipe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IngredientsRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The ingredients recipe has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients recipe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IngredientsRecipe.' . $this->IngredientsRecipe->primaryKey => $id));
			$this->request->data = $this->IngredientsRecipe->find('first', $options);
		}
		$ingredients = $this->IngredientsRecipe->Ingredient->find('list');
		$recipes = $this->IngredientsRecipe->Recipe->find('list');
		$this->set(compact('ingredients', 'recipes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->IngredientsRecipe->id = $id;
		if (!$this->IngredientsRecipe->exists()) {
			throw new NotFoundException(__('Invalid ingredients recipe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IngredientsRecipe->delete()) {
			$this->Session->setFlash(__('Ingredients recipe deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ingredients recipe was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
