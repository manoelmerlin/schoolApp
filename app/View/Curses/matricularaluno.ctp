<h2>Selecione o curso que deseja matricular o aluno <?= $students['Student']['first_name'] . " " . $students['Student']['last_name']; ?></h2>

<?= $this->Form->create('CursesStudent', array('controller' => 'curses', 'url' => 'matricularaluno/' . $id)); ?>

<?php echo $this->Form->input('curse_id', array('options' => $curse_id, 'empty' => 'Selecione', 'class' => 'form-control my-4', 'label' => false));?>

<?= $this->Form->submit("Matricular aluno"); ?>

<?= $this->Form->end();