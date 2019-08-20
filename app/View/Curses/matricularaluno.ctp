<h2>Selecione o curso que deseja matricular o aluno <?= $students['Student']['first_name'] . " " . $students['Student']['last_name']; ?></h2>


<?php foreach($check as $c): ?>
	<?php $options = array('Curso' => $c); ?>
<?php endforeach; ?>
        <?php echo $this->Form->input('gender', array('class' => 'form-control', 'label' => " ", 'options' => $options, 'empty' => 'Selecione', 'required' => true), array('label' => 'Categoria : ', 'class' => 'form-control')); ?>