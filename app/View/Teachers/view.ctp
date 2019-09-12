
<div class="table-responsive">
	<table class="table table-striped table-dark my-5">
	<thead>
		<tr>
		<th scope="col">ID</th>
		<th scope="col">NOME</th>
		<th scope="col">Cursos</th>
		<th scope="col">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($teacher as $c): ?>
			<td>
				<?= $c['Teacher']['id']; ?>
			</td>

			<td>
				<?= $c['Teacher']['first_name'] . " " . $c['Teacher']['last_name']; ?>
			</td>

			<td>
				<?= $this->Html->link('Cursos', array('controller' => 'teachers', 'action' => 'index', $c['Teacher']['id'])); ?>
			</td>

		<?php endforeach; ?>

	</tbody>
	</table>
</div>