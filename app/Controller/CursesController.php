<?php
class CursesController extends AppController {

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

			$this->loadModel('School');
			$this->CursesStudent->create();
			$this->request->data('CursesStudent.student_id', $id);

			if ($this->CursesStudent->save($this->request->data)) {
				$this->Flash->success('Sucesso');
			} else {
				$this->Flash->error("Falha");
			}
		}

		$this->loadModel('Student');

		$this->set('students', $this->Student->find('first', array(
			'conditions' => array(
				'Student.id' => $id
			)
		)));

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
