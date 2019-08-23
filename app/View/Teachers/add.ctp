<h2 class="p-2">Cadastro de professor</h2>
<hr>
<h4 class="p-2">Dados do professor</h4>
<hr>

	<div class="p-3 p-3">
		<div class=" p-2">
			<?= $this->Form->Create('Teacher'); ?>
			<?= $this->Form->input('first_name', array("label" => "Nome do professor : ", 'class' => 'ml-1')); ?>
		</div>

		<div class="p-2 pl-3">
			<?= $this->Form->input("last_name", array("label" => 'Sobrenome : ', 'class' => "ml-1")); ?>
		</div>

		<div class="p-2 pl-3">
			<?php echo $this->Form->input('curse_id', array('options' => $curse_id, 'empty' => 'Selecione', 'class' => 'form-control my-4', 'label' => false));?>
		</div>

		<div class="p-3 pl-5">
			<?= $this->Form->submit("Cadastrar novo professor", array('controller' => 'teachers', 'action' => 'add', "label" => 'Professor : ', 'class' => "bg-success col-3  border border-success text-light form-control pl-3")); ?>
		</div>
		<?= $this->Form->end(); ?>
	</div>