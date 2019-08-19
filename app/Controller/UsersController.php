<?php
	class UsersController extends AppController {

		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('register', 'login'); // Permitindo que os usuários se registrem
		}

		public function index() {
			pr(AuthComponent::user());

		}

		public function addMate() {

		}

		public function register() {
			$this->layout = "formlayout";

			if ($this->request->is('post') || $this->request->is("put")) {
				$this->User->create();

				if ($this->User->save($this->request->data)) {
					$this->Flash->success("Novo usuário cadastrado com sucesso");
				} else {
					$this->Flash->error("Falha ao criar usuário");
				}

			}
		}

		public function login() {
			$this->layout = "formlayout";
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					return $this->redirect($this->Auth->redirectUrl());
				}
				$this->Flash->error(__('Invalid username or password, try again'));
			}
		}
		public function logout() {
			$this->redirect($this->Auth->logout());
		}

	}