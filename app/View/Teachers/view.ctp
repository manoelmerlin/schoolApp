<?php pr($teacher); ?>
<div class="table-responsive">
	<table class="table my-5">
	<thead class="thead-dark col">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nome</th>
			<th scope="col">email</th>
			<th scope="col">Status</th>
			<th>Cursos cadastrados</th>
			<th scope="col">Ações</th>
		</tr>
	</thead>

		<?php foreach($teacher as $teacher): ?>
			<tbody>
				<tr>
					<td>
						<?php echo $teacher['User']['id']; ?>
					</td>

					<td>
						<?php echo $teacher['User']['first_name'] . " " . $teacher['User']['last_name']; ?>
					</td>

					<td>
						<?php echo $teacher['User']['username']; ?>
					</td>
					<td>
						<?= $teacher['Teacher']['status'] == 2 ?'Ativo' : ""; ?>
					</td>
				</tr>
			</tbody>
		<?php endforeach; ?>

	</table>
</div>

	<!--  //$this->Html->link('ver', array('controller' => 'teachers', 'action' => 'pendingTeacherCase'), array('class' => 'linklight', 'id' => 'inline')); -->


