<div class="table-responsive">
	<table class="table table-dark my-5">
	<thead>
		<tr>
			<th scope="col">RA</th>
			<th scope="col">Nome</th>
			<th scope="col">Email</th>
			<th scope="col">Telefone</th>
			<th scope="col">Cursos</th>
			<th scope="col">Status</th>
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
			<td>
				<?php $bola = $s['Student']['status']; ?>

				<?php if ($bola == 1): ?>
					<p class="text-success"><?= "Ativo"; ?></p>
				<?php else: ?>
					<p class="text-warning"><?= "Inativo"; ?></p>
				<?php endif; ?>
			</td>
			<td>
				<!-- Botão para acionar modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo" ?>
						Dados do aluno
					</button>

					<!-- Modal -->
					<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title text-dark" id="exampleModalLabel">Dados do aluno <?= $s['Student']['first_name'] . " " . $s['Student']['last_name']; ?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>

							</button>
						</div>
						<div class="modal-body">
								<span class="text-dark"><?= "CPF : " . $s['Student']['id']; ?> <p class="text-dark"> <?= "Matricula : " . $s['Student']['cpf']; ?> </p> </span>
									<p class="text-dark"> <?= $s['Student']['phone']; ?> </p>
								<p class="text-dark"> <?= $s['Student']['first_name']; ?> </p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						</div>
						</div>
					</div>
					</div>
			</td>
			<td>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Ações
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Editar</a>
					<div class="mx-auto">
						<?= $this->Html->link("Matricular", array('controller' => 'curses', 'action' => 'matricularaluno', $s['Student']['id'])); ?>
					</div>
						<?php if($s['Student']['status'] == 1): ?>
							<?= $this->Html->link('Desativar cadastro', array('controller' => 'students', 'action' => 'delete', $s['Student']['id']), array('alert' => 'Matriculadesativada com sucesso', 'confirm' => $s['Student']['id'] . 'Você tem certeza que deseja ativar a matricula desmatricular esse aluno?')); ?> <br>
						<?php endif; ?>

						<?php if($s['Student']['status'] == 0): ?>
							<?= $this->Html->link('Ativar matricula', array('controller' => 'students', 'action' => 'enablestudent', $s['Student']['id']), array('confirm' => $s['Student']['id'] . 'Você tem certeza que deseja reativar está matricula?')); ?>
						<?php endif; ?>

					</div>
					</div>
			</td>
			</div>
		</tr>

		</tbody>
	<?php endforeach; ?>
	</table>
</div>


