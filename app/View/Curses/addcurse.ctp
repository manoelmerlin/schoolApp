<h2 class="p-2">Cadastro de curso</h2>
<hr>
<h4 class="p-2">Dados do curso</h4>
<hr>

	<div class="p-3 p-3">
		<div class=" p-2">
			<?= $this->Form->Create('Curse'); ?>
			<?= $this->Form->input('name', array("label" => "Nome do curso : ", 'class' => 'ml-1')); ?>
		</div>

		<div class="p-2 pl-3">
			<?= $this->Form->input("hours", array("label" => 'Carga horaria : ', 'class' => "ml-1")); ?>
		</div>


			<?php echo $this->Form->input('teacher_id', array('type' => 'hidden', 'value' => AuthComponent::user('id'))); ?>

		<div class="p-3 pl-5">
			<?= $this->Form->submit("Cadastrar novo curso", array('controller' => 'curses', 'action' => 'addcurse', "label" => 'Professor : ', 'class' => "bg-success col-3  border border-success text-light form-control pl-3")); ?>
		</div>
		<?= $this->Form->end(); ?>
	</div>