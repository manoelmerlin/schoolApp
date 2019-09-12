<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'estilo',
			'bootstrap'
		));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="border p-2 bg-dark col row m-0 text-light border border-dark">
				<h5 class="col-7">SCE - Sistema controle escolar</h5>
					<div class="col-2">
						<?= $this->Form->input("", array('placeholder' => 'Pesquisar...', 'class' => 'rounded', 'style' => 'width:180px')); ?>
					</div>
					<div class="p-1 row m-0">
						<div>
							<?= $this->Html->link("Configurações", array(), array('class' => 'text-light text-decoration-none p-2')); ?>
						</div>

						<div>
							<?= $this->Html->link("Perfil", array(), array('class' => 'text-light text-decoration-none p-2')); ?>
						</div>

						<div>
							<?= $this->Html->link("Logout", array('controller' => 'users', 'action' => 'logout'), array('class' => 'text-danger text-decoration-none p-2')); ?>
						</div>

					</div>
			</div>
		</div>

			<!-- Menu lateral -->
			<div class="row m-0">
				<div class="div-lateral p-0 col-2">
					<div class="p-3">
					</div>

					<div class="div-menu p-2 ">
						<?= $this->Html->link("Inicio", array('controller' => 'curses', 'action' => 'index'), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>

					<div class="div-menu p-2">
						<?= $this->Html->link("Alunos", array('controller' => 'students', 'action' => 'showmates'), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>

					<div class="div-menu p-2">
						<?= $this->Html->link("Professores", array('controller' => 'teachers', 'action' => 'view'), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>


					<div class="div-menu p-2">
					<?= $this->Html->link("Adicionar aluno", array('controller' => 'users', 'action' => 'addmate'), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>

					<div class="div-menu p-2">
						<?= $this->Html->link("Adicionar Curso", array('controller' => 'curses', 'action' => 'addcurse'), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>

					<div class="div-menu p-2">
						<?= $this->Html->link("Adicionar professor", array('controller' => 'teachers', 'action' => 'add'), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>

					<div class="div-menu p-2">
						<?= $this->Html->link("Pendentes", array('controller' => 'teachers', 'action' => 'pendingTeacherCase'), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>


				</div>
			<div id="content" class="col">

				<?php echo $this->Flash->render(); ?>

				<?php echo $this->fetch('content'); ?>
			</div>
		</div>

		<div id="footer">

		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>

