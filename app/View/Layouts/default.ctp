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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
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
				<h5 class="col-7">SCA - Sistema de controle de alunos</h5>
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
							<?= $this->Html->link("logout", array('controller' => 'users', 'action' => 'logout'), array('class' => 'text-light text-decoration-none p-2')); ?>
						</div>

					</div>
			</div>
		</div>

			<!-- Menu lateral -->
			<div class="row m-0">
				<div class="p-0 col-3">
					<div class="p-3">
					</div>

					<div class="div-menu p-2 col-11">
						<?= $this->Html->link("Inicio", array(), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>

					<div class="div-menu p-2">
						<?= $this->Html->link("Formulário", array(), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>

					<div class="div-menu p-2">
						<?= $this->Html->link("Contato", array(), array('class' => 'pl-3 text-decoration-none font-15 div-menu')); ?>
					</div>

				</div>
			<div id="content" class="col-4">

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
