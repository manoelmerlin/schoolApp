<div class="table-responsive">
	<table class="table table-dark my-5">
	<thead>
		<tr>
		<th scope="col">RA</th>
		<th scope="col">Nome</th>
		<th scope="col">Email</th>
		<th scope="col">Telefone</th>
		<th scope="col">Cursos</th>
		<th scope="col">Sala</th>
		<th scope="col">Cadastro</th>
		<th scope="col">Açoes</th>

		</tr>
	</thead>

	<?php foreach($students as $s): ?>
		<tbody>
		<tr>
			<th scope="row"><?= $s['Student']['ra']; ?></th>
			<td><?= $s['Student']['first_name'] . " " . $s['Student']['last_name']; ?></td>
			<td><?= $s['Student']['email']; ?></td>
			<td><?= $s['Student']['phone']; ?></td>
			<td><?= $this->Html->link('Ver cursos', array('controller' => 'students', 'action' => 'index', $s['Student']['id'])); ?></td>
			<td></td>
			<td></td>
			<td>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Ações
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Editar</a>
				<div class="mx-auto">
					<?php echo $this->Html->link("Matricular", array('controller' => 'curses', 'action' => 'matricularaluno', $s['Student']['id'])); ?>
				</div>
				<a class="dropdown-item" href="#">Deletar</a>
				</div>
			</div>
		</tr>

		</tbody>
	<?php endforeach; ?>
	</table>
</div>

