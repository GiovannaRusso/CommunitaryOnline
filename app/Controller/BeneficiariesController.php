<?php
App::uses('AppController', 'Controller');
/**
 * Beneficiaries Controller
 *
 * @property Beneficiary $Beneficiary
 * @property PaginatorComponent $Paginator
 */
class BeneficiariesController extends AppController {

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
		$this->Beneficiary->recursive = 0;
		$this->set('beneficiaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Beneficiary->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiary'));
		}
		$options = array('conditions' => array('Beneficiary.' . $this->Beneficiary->primaryKey => $id));
		$this->set('beneficiary', $this->Beneficiary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Beneficiary->create();
			if ($this->Beneficiary->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiary could not be saved. Please, try again.'));
			}
		}
		$parishes = $this->Beneficiary->Parish->find('list');
		$beneficiaryTypes = $this->Beneficiary->BeneficiaryType->find('list');
		$creators = $this->Beneficiary->Creator->find('list');
		$contactPeople = $this->Beneficiary->ContactPerson->find('list');
		$this->set(compact('parishes', 'beneficiaryTypes', 'creators', 'contactPeople'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Beneficiary->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beneficiary->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Beneficiary.' . $this->Beneficiary->primaryKey => $id));
			$this->request->data = $this->Beneficiary->find('first', $options);
		}
		$parishes = $this->Beneficiary->Parish->find('list');
		$beneficiaryTypes = $this->Beneficiary->BeneficiaryType->find('list');
		$creators = $this->Beneficiary->Creator->find('list');
		$contactPeople = $this->Beneficiary->ContactPerson->find('list');
		$this->set(compact('parishes', 'beneficiaryTypes', 'creators', 'contactPeople'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Beneficiary->id = $id;
		if (!$this->Beneficiary->exists()) {
			throw new NotFoundException(__('Invalid beneficiary'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Beneficiary->delete()) {
			$this->Session->setFlash(__('The beneficiary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The beneficiary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
