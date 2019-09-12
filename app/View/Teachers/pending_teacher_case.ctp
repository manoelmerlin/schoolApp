<div class="table-responsive">
	<table class="table my-5">
	<thead class="thead-dark col">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nome</th>
			<th scope="col">email</th>
			<th scope="col">Status</th>
			<th>Respostas do professor</th>
			<th scope="col">Ações</th>
		</tr>
	</thead>

		<?php foreach($findAllTeachers as $findAllTeachers): ?>
			<tbody>
				<tr>
					<th scope="row"><?= $findAllTeachers['User']['id'] ?></th>
					<td ><?= $findAllTeachers['User']['username']; ?></td>
					<td><?= $findAllTeachers['User']['first_name']; ?></td>
					<td>
						<?php if($findAllTeachers['Teacher']['status'] == 1): ?>
							<h6 class='text-warning'>Pendente</h6>
						<?php elseif($findAllTeachers['Teacher']['status'] == 2): ?>
							<h6 class='text-success'>Aprovado</h6>
						<?php else:	?>
							<h6 class='text-danger'>Recusado</h6>
						<?php endif; ?>
					</td>
					<td>
						<?= $this->Html->link('Exportar pdf', array('controller' => 'teachers', 'action' => 'export', $findAllTeachers['Teacher']['id']), array('class' => 'btn btn-primary')); ?>
					</td>
					<td>
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Editar
							</button>
							<div class="dropdown-menu text-decoration-none" aria-labelledby="dropdownMenuButton">
								<?= $this->Html->link('Aprovar', array('controller' => 'teachers', 'action' => 'aproveTeacher', $findAllTeachers['Teacher']['id']), array('class' => 'text-decoration-none')); ?> <br>
								<?= $this->Html->link('Reavaliar', array('controller' => 'teachers', 'action' => 'pendingTeacher', $findAllTeachers['Teacher']['id']), array('class' => 'text-decoration-none')); ?> <br>
								<?= $this->Html->link('Reprovar', array('controller' => 'teachers', 'action' => 'reproveTeacher', $findAllTeachers['Teacher']['id']) , array('class' => 'text-decoration-none')); ?>
								<a class="dropdown-item" href="#">Mandar para analise</a>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		<?php endforeach; ?>

	</table>
</div>

	<!--  //$this->Html->link('ver', array('controller' => 'teachers', 'action' => 'pendingTeacherCase'), array('class' => 'linklight', 'id' => 'inline')); -->


