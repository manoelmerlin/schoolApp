<div class="col-12 border p-2 bg-dark border border-dark">
	<div class="">
		<center><h5 class="text-light">Cadastro plataforma cursos online</h5></center>
	</div>
</div>

<!-- Formulário de cadastro -->
	<div class="my-5  p-2">

		<div class="row p-3">
			<?= $this->Form->create("User"); ?>
		</div>

		<div class="p-3 m-0">
			<?= $this->Form->input("nome", array('required' => true, 'label' => "Nome : ", 'class' => 'form-control')); ?>
		</div>

		<div class="p-3 m-0">
			<?= $this->Form->input("username", array('required' => true, "label" => "E-mail : ", "class" => 'form-control')); ?>
		</div>

		<div class="p-3 m-0">
			<?= $this->Form->input("password", array("label" => 'Senha :', 'class' => 'form-control', 'type' => 'password')); ?>
		</div>

		<div class="p-3 m-0">
			<?= $this->Form->input('confPassword', array("label" => 'Confirmar senha :', 'class' => 'form-control', 'type' => 'password')); ?>
		</div>

		<center>
			<div class="p-3 m-0 col-5">
				<?= $this->Form->submit("Registrar", array("controller" => "users", "action" => "register", 'class' => 'form-control bg-success text-light')); ?>
			</div>
		</center>


		<div>
			<?= $this->Form->end(); ?>
		</div>

	</div>
