<center>
			<div class="border p-2 bg-dark col row m-0 text-light border border-dark">
				<h5 class="col-12">SCA - Sistema de controle de alunos</h5>

			</div>

		<div class="users form my-3">
			<div class="p-5">
				<div class="col-6 bg-white shadow border p-5 my-5">
					<div class="my-3">
						<?= $this->Session->flash('auth'); ?>
						<?= $this->Form->create('User'); ?>
						<?= $this->Form->input('username', array('label' => 'E-mail:ㅤ', 'placeholder' => 'Insira seu Usuário ', 'class' => 'col-8 my-2 p-1 border border-rounded')); ?>
					</div>

					<div class="my-3">
						<?= $this->Form->input('password', array('label' => ' Senhaㅤ: ', 'placeholder' => 'Insira sua senha ', 'class' => 'col-8 my-1 p-1 border border-rounded')); ?>
					</div>

					<div class="my-4">
						<?= $this->Form->submit('Entrar', array('class' => 'mx-auto col-5 p-1 bg-primary text-light border border-primary border-solid')); ?>
                    </div>

					<div class="row col-9 m-0">
					   <?php echo $this->Html->link('ㅤㅤEsqueceu a senha? ', array('controller' => 'Users', 'action' => 'forgot')); ?>
					   <p class=''> <?= "ㅤ|ㅤ" ?></p>
					   <?php echo $this->Html->link(' Cadastre-se aqui ! ', array('controller' => 'users', 'action' => 'register')); ?>
					</div>

					<div>


					</div>

					<div>
						<?= $this->Form->end(); ?>
					</div>

				</div>

			</div>

		</div>
</center>

