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
		$this->loadModel('Student');

		$this->set('students', $this->Student->find('first', array(
			'conditions' => array(
				'Student.id' => $id
			)
			)));

		$check = $this->Curse->find('list', array(
			'conditions' => array(
				'curse_name !=' => ''
			),
			'fields' => array(
				'curse_name'
			)
		));


		$this->set('check', $check);
	}

}
