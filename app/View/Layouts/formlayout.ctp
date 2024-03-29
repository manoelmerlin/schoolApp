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
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->Html->css(array(
			'estilo',
			'bootstrap'
		));
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">

			<div class="border p-4 row m-0">

				<div>
					<?= $this->Html->link('Index', array('controller' => 'users', 'action' => 'index')); ?>
				</div>

				<!-- Botão de cursos -->
				<div class='pl-1'>
					<?= $this->html->link('Cursos', array('controller' => 'curses', 'action' => 'index')); ?>
				</div>

				<div class="ml-5">
					<?= $this->html->link('Quero me tornar professor', array('controller' => 'teachers', 'action' => 'ask', AuthComponent::user('id'))); ?>
				</div>

			</div>

		</div>
		<div id="content" class=>

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>