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
				$this->layout = "default";
				$this->loadModel('School');
				$this->set("students", $this->Student->find("all"));

				$check = $this->Student->find('all', array(
					'contain' => array(
						'Curse'
					)
				));
			}

	}