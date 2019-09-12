<?php
	class User extends AppModel {

		public $actAs = array('Containable');

		public $validate = array(
			'username' => array(
				'required' => array(
					'rule' => 'notBlank',
					'message' => 'A username is required'
				)
			),
			'password' => array(
				'required' => array(
					'rule' => 'notBlank',
					'message' => 'A password is required'
				),
			),

			'confPassword' => array(
				'compare' => array(
					'rule' => 'comparePassword',
					'message' => 'Senhas não conincidem'

				)
			),

			'role' => array(
				'valid' => array(
					'rule' => array('inList', array('admin', 'author')),
					'message' => 'Please enter a valid role',
					'allowEmpty' => false
				)
			)
		);

		public function beforeSave($options = array()) {
			if (isset($this->data[$this->alias]['password'])) {
				$passwordHasher = new BlowfishPasswordHasher();
				$this->data[$this->alias]['password'] = $passwordHasher->hash(
					$this->data[$this->alias]['password']
				);
			}
			return true;
		}

		public function comparePassword($comparePass = null) {
			$data = $this->data[$this->alias];

			if ($comparePass['confPassword'] == $data['password']) {
				return true;
			}

			return false;
		}

	}



