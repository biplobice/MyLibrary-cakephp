<?php
App::uses('AppController', 'Controller');
/**
 * SubCategories Controller
 *
 * @property SubCategory $SubCategory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SubCategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SubCategory->recursive = 0;
		$this->set('subCategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SubCategory->exists($id)) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		$options = array('conditions' => array('SubCategory.' . $this->SubCategory->primaryKey => $id));
		$this->set('subCategory', $this->SubCategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SubCategory->create();
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'));
			}
		}
		$categories = $this->SubCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->SubCategory->exists($id)) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubCategory.' . $this->SubCategory->primaryKey => $id));
			$this->request->data = $this->SubCategory->find('first', $options);
		}
		$categories = $this->SubCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->SubCategory->id = $id;
		if (!$this->SubCategory->exists()) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubCategory->delete()) {
			$this->Session->setFlash(__('The sub category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sub category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
