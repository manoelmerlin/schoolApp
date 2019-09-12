<?php
	class StudentsController extends AppController {

		public function index($studentId) {
			$showCourses = $this->Student->find('first', array(
				'conditions' => array(
					'Student.id' => $studentId
				)
			));

			$this->set('showCourses', $showCourses);
		}

			public function showMates() {
				$this->loadModel('School');

				$this->set("students", $this->Student->find("all"));

			}

		public function delete($id) {
			$check = $this->Student->find('first', array(
				'conditions' => array (
					'id' => $id,
					'status' => 1
				)
			));

			if ($check != true) {
				throw UnauthorizedException('Usuário já está com a matricula inativa');
			}


			if ($check) {
				$save = array(
					'id' => $id,
					'status' => 0

				);
			}

			$this->Student->save($save);
			$this->redirect(array('controller' => 'students', 'action' => 'showmates', $id));

		}

		public function enableStudent($id) {
			$check = $this->Student->find('first', array(
				'conditions' => array (
					'id' => $id,
					'status' => 0
				)
			));

			if ($check != true) {
				throw new UnauthorizedException("Este studante já está ativo");
			}

			if ($check) {
				$save = array(
					'id' => $id,
					'status' => 1
				);

				$this->Student->save($save);
				$this->redirect(array('controller' => 'students', 'action' => 'showmates'));
			}
		}


	}