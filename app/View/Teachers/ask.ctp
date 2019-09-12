<h3>Formularario para conhecimento</h3>

	<?= $this->Form->create('Teacher'); ?>

<div class='my-4'>

<!-- Primeira questão -->
	<div class="border-bottom">
		1. Você já tem experiencia com ensino ?
	</div>

	<div class="pl-2">
		<?php echo $this->Form->input('question_experience', array(
				'separator' => '<br />',
				'options' => array('yes.' => 'Sim', 'no.' => 'Não'),
				'type' => 'radio',
				'label' => 'aafdsfsd'
			)); ?>

		<?php
		$id = $shearchUser['User']['id'];
		$username = $shearchUser['User']['username'];
		?>

		<?= $this->Form->hidden('user_id', array('value' => $id)); ?>
		<?= $this->Form->hidden('username', array('value' => $username)); ?>

	</div>

	<div class="border-bottom my-2">
		2. Como você lecionou antes ?
	</div>

	<div class='pl-2'>
		<?php echo $this->Form->input('question_teach_before', array(
				'label' => 'aafdsfsd',
				'separator' => '<br />',
				'options' => array('Informalmente para amigos ou conhecidos.' => 'Informalmente para amigos', 'Em uma instituição.' => 'Em uma instituição', 'Nenhuma das anterioes.' => 'Nenhuma das anteriores'),
				'type' => 'radio',
				'label' => 'aafdsfsd'
			)); ?>


		<?php
		$id = $shearchUser['User']['id'];
		$username = $shearchUser['User']['username'];
		?>

		<?= $this->Form->hidden('user_id', array('value' => $id)); ?>
		<?= $this->Form->hidden('username', array('value' => $username)); ?>

		<div class="border-bottom my-2">
		3. Qual motivo levou você a querer lecionar?
	</div>

	<div class='pl-2'>
		<?php echo $this->Form->input('question_why_teach', array(
				'label' => 'aafdsfsd',
				'separator' => '<br />',
				'options' => array('Ganhar uma renda extra.' => 'Ganhar uma renda extra', 'Por ser um hobby.' => 'Por ser um hobby', 'Nenhuma das anterioes.' => 'Nenhuma das anteriores'),
				'type' => 'radio',
				'label' => 'aafdsfsd'
			)); ?>


		<?php
		$id = $shearchUser['User']['id'];
		$username = $shearchUser['User']['username'];
		?>

		<?= $this->Form->hidden('user_id', array('value' => $id)); ?>
		<?= $this->Form->hidden('username', array('value' => $username)); ?>


	</div>



	<div>
		<?= $this->Form->submit('Enviar', array('controller' => 'teachers', 'action' => 'ask')); ?>
		<?php $this->Form->end(); ?>
	</div>








</div>