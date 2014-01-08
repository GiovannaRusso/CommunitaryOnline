<?php
App::uses('AppController', 'Controller');
/**
 * CareersProjects Controller
 *
 * @property CareersProject $CareersProject
 * @property PaginatorComponent $Paginator
 */
class CareersProjectsController extends AppController {

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
		$this->CareersProject->recursive = 0;
		$this->set('careersProjects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CareersProject->exists($id)) {
			throw new NotFoundException(__('Invalid careers project'));
		}
		$options = array('conditions' => array('CareersProject.' . $this->CareersProject->primaryKey => $id));
		$this->set('careersProject', $this->CareersProject->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CareersProject->create();
			if ($this->CareersProject->save($this->request->data)) {
				$this->Session->setFlash(__('The careers project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The careers project could not be saved. Please, try again.'));
			}
		}
		$careers = $this->CareersProject->Career->find('list');
		$projects = $this->CareersProject->Project->find('list');
		$this->set(compact('careers', 'projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CareersProject->exists($id)) {
			throw new NotFoundException(__('Invalid careers project'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CareersProject->save($this->request->data)) {
				$this->Session->setFlash(__('The careers project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The careers project could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CareersProject.' . $this->CareersProject->primaryKey => $id));
			$this->request->data = $this->CareersProject->find('first', $options);
		}
		$careers = $this->CareersProject->Career->find('list');
		$projects = $this->CareersProject->Project->find('list');
		$this->set(compact('careers', 'projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CareersProject->id = $id;
		if (!$this->CareersProject->exists()) {
			throw new NotFoundException(__('Invalid careers project'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CareersProject->delete()) {
			$this->Session->setFlash(__('The careers project has been deleted.'));
		} else {
			$this->Session->setFlash(__('The careers project could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
