<h3 class="my-3">Cursos mais recentes</h3>
<div class="row m-0  my-2 ">

	<?php foreach ($allCurses as $allCurse): ?>
	<!-- Div dos cursos -->
		<div class="my-2 col-3">
			<div class='border'>
	<!-- Imagem do curso -->
				<div class=" border col col-dark p-0">
					<?php echo $this->Html->link($this->Html->image('images.jpeg', array('class' => 'w-100', 'alt' => 'Saiba mais')), 'https://www.google.com.br/', array('escapeTitle' => false, 'title' => 'Saiba mais'));?>
				</div>
			</div>

			<div class='border p-2'>
		<!-- Titulo do curso -->
				<div class="text-sm-left text-center">
					<strong><?= $allCurse['Curse']['name'] ?></strong>
				</div>

		<!-- Autores do curso -->
				<div class="row m-0 my-2 text-sm-left text-muted text-center ">
					<?= $allCurse['Curse']['teacher']; ?>
					<a class='col-6'></a>
					<?= $this->Html->link('Ver mais', array('controller' => 'curses', 'action' => 'view', $allCurse['Curse']['id'])); ?>
				</div>
		<!-- Preço do curso -->
				<div class="row m-0">
					<div class='text-sm-left'>
						<a class=''><?= $allCurse['Curse']['hours']; ?></a>
					</div>
					<a class='col-6'></a>
					<div class=''>
						R$29,00
					</div>
				</div>
			</div>
		</div>

	<?php endforeach; ?>

	<h3 class='my-3'>Cursos em destaque</h6>
</div>

<div class='col-12 mt-4'>




<div class='col-12 mt-4'>
