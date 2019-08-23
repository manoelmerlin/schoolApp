<?php
	class TeachersController extends AppController {

		public function index($teacherId) {
			$showCourses = $this->Teacher->find('first', array(
				'conditions' => array(
					'Teacher.id' => $teacherId
				)
			));

			$this->set("showCourses", $showCourses);
		}

		public function view() {
			$check = $this->Teacher->find('all');

			$this->set('check', $check);

		}


		public function add() {
			$this->loadModel('Curse');

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Teacher->create();

				if ($this->Teacher->save($this->request->data)) {
					$this->Flash->success("ok");
				}
			}

			$name = $this->Curse->find('list', array(
				'conditions' => array(
					'name !=' => ''
				),
				'fields' => array(
					'name'
				)
			));

			$this->set('curse_id', $name);
		}

	}