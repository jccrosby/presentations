<?php
App::uses('AppController', 'Controller');
/**
 * Shots Controller
 *
 * @property Shot $Shot
 */
class ShotsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Shot->recursive = 0;
		$this->set('shots', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Shot->id = $id;
		if (!$this->Shot->exists()) {
			throw new NotFoundException(__('Invalid shot'));
		}
		$this->set('shot', $this->Shot->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shot->create();
			if ($this->Shot->save($this->request->data)) {
				$this->Session->setFlash(__('The shot has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shot could not be saved. Please, try again.'));
			}
		}
		$users = $this->Shot->User->find('list');
		$shotTypes = $this->Shot->ShotType->find('list');
		$this->set(compact('users', 'shotTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Shot->id = $id;
		if (!$this->Shot->exists()) {
			throw new NotFoundException(__('Invalid shot'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Shot->save($this->request->data)) {
				$this->Session->setFlash(__('The shot has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shot could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Shot->read(null, $id);
		}
		$users = $this->Shot->User->find('list');
		$shotTypes = $this->Shot->ShotType->find('list');
		$this->set(compact('users', 'shotTypes'));
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
		$this->Shot->id = $id;
		if (!$this->Shot->exists()) {
			throw new NotFoundException(__('Invalid shot'));
		}
		if ($this->Shot->delete()) {
			$this->Session->setFlash(__('Shot deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Shot was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
