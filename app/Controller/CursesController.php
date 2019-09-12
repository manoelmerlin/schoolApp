<?php
class CursesController extends AppController {

	public function index() {
		$this->layout = 'formlayout';

		$allCurses = $this->Curse->find('all', array(
			'limit' => 4
		));
		$this->set('allCurses', $allCurses);
	}

	public function view($id) {
		$this->layout = 'formlayout';

		$findCurses = $this->Curse->findById($id);

		$this->set('findCurses', $findCurses);
	}

	public function addCurse() {
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Curse->create();
			if ($this->Curse->save($this->request->data)) {
				$this->Flash->success("Novo curso adicionado com sucesso");
			} else {
				$this->Flash->error("Falha ao adicionar novo curso");
			}
		}
	}

	public function matricularAluno($id) {
		$this->loadModel('CursesStudent');
		if ($this->request->is('post') || $this->request->is('put')) {

			$this->CursesStudent->create();
			$this->request->data('CursesStudent.student_id', $id);

			if ($this->CursesStudent->save($this->request->data)) {
				$this->Flash->success('Sucesso');
			} else {
				$this->Flash->error("Falha");
			}
		}

		$this->loadModel('Student');

		$shearch = $this->Student->find('first', array(
			'conditions' => array(
				'Student.id' => $id
			)
		));

		$this->set('students', $shearch);

		$name = $this->Curse->find('list', array(
			'conditions' => array(
				'name !=' => ''
			),
			'fields' => array(
				'name'
			)
		));

		$this->set('id', $id);

		$this->set('curse_id', $name);

	}

}
