<?php
	class TeachersController extends AppController {

		public $helpers = array(
			'Pdf'
		);

		public $components = array('RequestHandler');

		public function index($teacherId) {
			$showCourses = $this->Teacher->find('first', array(
				'conditions' => array(
					'Teacher.id' => $teacherId
				)
			));

			$this->set("showCourses", $showCourses);
		}

		public function view() {
			$teacher = $this->Teacher->find('all');

			$this->set('teacher', $teacher);

		}

		public function view_pdf($id = null) {
			$this->Teacher->id = $id;

			if (!$this->Teacher->exists()) {
				throw new NotFoundException(__('Professor não encontrado em nosso sistema'));
			}

			ini_set('memory_limit', '512M');
    		$this->set('teacher', $this->Teacher->read(null, $id));

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

		public function teach() {
			$this->layout = 'formlayout';
		}

		public function ask($id) {
			$id = $this->Auth->User('id');
			$this->loadModel('User');
			$this->layout = 'formlayout';

			$shearchUser = $this->User->find('first', array(
				'conditions' => array(
					'User.id' => $id
				)
			));

			$this->set('shearchUser', $shearchUser);

			if ($this->request->is('post') || $this->request->is('put')) {

				$this->Teacher->create();

				if ($this->Teacher->save($this->request->data)) {
					$this->Flash->success('Sucesso');
					$this->redirect(array('controller' => 'teachers', 'action' => 'readyask', '?' => array('id' => 1)));

				} else {
					$this->Flash->error('erro');
				}

			}
		}

		public function readyAsk() {
			$this->layout = '';
		}

		public function pendingTeacherCase() {

			$findAllTeachers = $this->Teacher->find('all', array(
				'contain' => array(
					'User'
				)
			));

			$this->set('findAllTeachers', $findAllTeachers);
		}


		public function aproveTeacher($id) {
			$checkStatusTeacher = $this->Teacher->find('first', array(
				'conditions' => array(
					'Teacher.id' => $id,
					'Teacher.status' => 1
				)
			));

			if ($checkStatusTeacher) {
				$save = array(
					'id' => $id,
					'status' => 2
				);

				$this->Teacher->save($save);
				$this->redirect(array('controller' => 'teachers', 'action' => 'pendingTeacherCase'));
			}
		}


		public function reproveTeacher($id) {
			$checkStatusTeacher = $this->Teacher->find('first', array(
				'conditions' => array(
					'Teacher.id' => $id,
					'Teacher.status' => 1
				)
			));

			if ($checkStatusTeacher) {
				$save = array(
					'id' => $id,
					'status' => 0
				);

				$this->Teacher->save($save);
				$this->redirect(array('controller' => 'teachers', 'action' => 'pendingTeacherCase'));
			}
		}

		public function pendingTeacher($id) {
			$checkStatusTeacher = $this->Teacher->find('first', array(
				'conditions' => array(
					'Teacher.id' => $id,
					'Teacher.status' => 0
				)
			));

			if ($checkStatusTeacher) {
				$save = array(
					'id' => $id,
					'status' => 1
				);

				$this->Teacher->save($save);
				$this->redirect(array('controller' => 'teachers', 'action' => 'pendingTeacherCase'));
			}
		}

		public function sendToAnallysis() {

		}

		public function export($id = null) {
			// if (!$this->RequestHandler->prefers('pdf')) {
			// 	throw new BadRequestException(__('Invalid export type'));
			// }


			$check = $this->Teacher->findById($id);

			$conditions = [];
			if (!empty($id)) {
				$conditions['Teacher.id'] = $id;
			}

			$atrb = $this->Teacher->getExportData();
			$atrb2 = $this->Teacher->getExportConfig();

			$array2 = array(
				$atrb2['0']['0'] = $check['Teacher']['question_experience'],
				$atrb2['0']['1'] = $check['Teacher']['question_teach_before'],
				$atrb2['0']['2'] = $check['Teacher']['question_why_teach'],
				$atrb2['0']['3'] = $check['Teacher']['first_name'],
				$atrb2['0']['4'] = $check['Teacher']['last_name']
			);

			$atrb = array(
				$atrb['0']['0'] = $check['Teacher']['question_experience'],
				$atrb['0']['1'] = $check['Teacher']['question_teach_before'],
				$atrb['0']['2'] = $check['Teacher']['question_why_teach']
			);

			$exportConfig = $array2;
			$exportData = $atrb;

			$this->set(compact('exportConfig', 'exportData'));
		}
	}