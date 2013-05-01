<?php
App::uses('AppController', 'Controller');
/**
 * ShotTypes Controller
 *
 * @property ShotType $ShotType
 */
class ShotTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ShotType->recursive = 0;
		$this->set('shotTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ShotType->id = $id;
		if (!$this->ShotType->exists()) {
			throw new NotFoundException(__('Invalid shot type'));
		}
		$this->set('shotType', $this->ShotType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShotType->create();
			if ($this->ShotType->save($this->request->data)) {
				$this->Session->setFlash(__('The shot type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shot type could not be saved. Please, try again.'));
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
		$this->ShotType->id = $id;
		if (!$this->ShotType->exists()) {
			throw new NotFoundException(__('Invalid shot type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ShotType->save($this->request->data)) {
				$this->Session->setFlash(__('The shot type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shot type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ShotType->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ShotType->id = $id;
		if (!$this->ShotType->exists()) {
			throw new NotFoundException(__('Invalid shot type'));
		}
		if ($this->ShotType->delete()) {
			$this->Session->setFlash(__('Shot type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Shot type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
