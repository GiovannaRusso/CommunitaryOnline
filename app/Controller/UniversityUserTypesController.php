<?php
App::uses('AppController', 'Controller');
/**
 * UniversityUserTypes Controller
 *
 * @property UniversityUserType $UniversityUserType
 * @property PaginatorComponent $Paginator
 */
class UniversityUserTypesController extends AppController {

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
		$this->UniversityUserType->recursive = 0;
		$this->set('universityUserTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UniversityUserType->exists($id)) {
			throw new NotFoundException(__('Invalid university user type'));
		}
		$options = array('conditions' => array('UniversityUserType.' . $this->UniversityUserType->primaryKey => $id));
		$this->set('universityUserType', $this->UniversityUserType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UniversityUserType->create();
			if ($this->UniversityUserType->save($this->request->data)) {
				$this->Session->setFlash(__('The university user type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The university user type could not be saved. Please, try again.'));
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
		if (!$this->UniversityUserType->exists($id)) {
			throw new NotFoundException(__('Invalid university user type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UniversityUserType->save($this->request->data)) {
				$this->Session->setFlash(__('The university user type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The university user type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UniversityUserType.' . $this->UniversityUserType->primaryKey => $id));
			$this->request->data = $this->UniversityUserType->find('first', $options);
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
		$this->UniversityUserType->id = $id;
		if (!$this->UniversityUserType->exists()) {
			throw new NotFoundException(__('Invalid university user type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UniversityUserType->delete()) {
			$this->Session->setFlash(__('The university user type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The university user type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
