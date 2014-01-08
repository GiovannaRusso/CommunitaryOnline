<?php
App::uses('AppController', 'Controller');
/**
 * Parishes Controller
 *
 * @property Parish $Parish
 * @property PaginatorComponent $Paginator
 */
class ParishesController extends AppController {

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
		$this->Parish->recursive = 0;
		$this->set('parishes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parish->exists($id)) {
			throw new NotFoundException(__('Invalid parish'));
		}
		$options = array('conditions' => array('Parish.' . $this->Parish->primaryKey => $id));
		$this->set('parish', $this->Parish->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parish->create();
			if ($this->Parish->save($this->request->data)) {
				$this->Session->setFlash(__('The parish has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parish could not be saved. Please, try again.'));
			}
		}
		$cities = $this->Parish->City->find('list');
		$this->set(compact('cities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Parish->exists($id)) {
			throw new NotFoundException(__('Invalid parish'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parish->save($this->request->data)) {
				$this->Session->setFlash(__('The parish has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parish could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Parish.' . $this->Parish->primaryKey => $id));
			$this->request->data = $this->Parish->find('first', $options);
		}
		$cities = $this->Parish->City->find('list');
		$this->set(compact('cities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Parish->id = $id;
		if (!$this->Parish->exists()) {
			throw new NotFoundException(__('Invalid parish'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Parish->delete()) {
			$this->Session->setFlash(__('The parish has been deleted.'));
		} else {
			$this->Session->setFlash(__('The parish could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
