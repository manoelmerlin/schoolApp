<h2 class="p-2">Cadastro de alunos</h2>
<hr>
<h4 class="p-2">Dados do aluno</h4>
<hr>
<div class=" p-1">
    <div class="row m-0  p-1">
        <div class="pl-5 py-3">
            <a class="pl-5 ml-3"><?= "RA: " ?></a>
    </div>
		<?= $this->Form->create('Student', array('controller' => 'users', 'url' => 'addmate')); ?>
        <div class="p-2 ">
            <?= $this->Form->input('ra', array("label" => "", 'type' => 'text', "class" => "ml-3")); ?>
        </div>
    </div>
</div>

<div class="row m-0  p-1">
    <div class="my-1 pl-5">
        <a class="pl-5"><?= "Nome:"; ?></a>
    </div>

    <div class="pl-4">
        <?= $this->Form->input("first_name", array("label" => "", 'type' => '', "class" => 'div-nome ')); ?>
    </div>


    <div class="py-1 ml-4">
        <?= "CPF : "; ?>
    </div>

    <div class="pl-2">
        <?= $this->Form->input("cpf", array("placeholder" => "000.000.000-00", "label" => "", "type" => "", "class" => "div-nome")); ?>
    </div>


</div>

<div class="py-3 pl-4 row m-0 ">
	<div class=" my-1">
        <a class="pl-5 "><?= "Sobrenome:"; ?></a>
    </div>

    <div class="pl-3">
        <?= $this->Form->input("last_name", array("label" => "", 'type' => '', "class" => 'div-nome')); ?>
    </div>



    <div class="pl-2">
        <a class="pl-4"><?= "Sexo : "; ?></a>
    </div>

    <div class="pr-1">
        <?php $options = array('Masculino' => 'Masculino', "Feminino" => "Feminino"); ?>
        <?php echo $this->Form->input('gender', array('label' => " ", 'options' => $options, 'empty' => 'Selecione', 'required' => true), array('label' => 'Categoria : ')); ?>
    </div>

    <div class="py-1 ml-4">
        <?= "Telefone: "; ?>
    </div>

    <div class="pl-2">
        <?= $this->Form->input("phone", array("placeholder" => "11 98888-8888", "label" => "", "type" => "", "class" => "div-nome")); ?>
    </div>


</div>

<div class="row m-0  py-1">
    <div class="my-1">
        <a class="pl-4"><?= "Data nascimento:"; ?></a>
    </div>

    <div class="ml-4">
        <?= $this->Form->input('birthday', array("label" => "", 'type' => '', "class" => 'div-nome')); ?>
    </div>

    <div class="my-1 pl-3">
        <a class="pl-4"><?= "Email : "; ?></a>
    </div>

    <div class="pl-2">
        <?= $this->Form->input("email", array("label" => "", 'type' => '', "class" => 'div-nome')); ?>
    </div>

</div>

<div class="py-4">

</div>
<h4 class="">Dados do responsáveis</h4>
<hr>
<div class="row m-0  p-1">
    <div class="my-1 pl-5">
        <a class="pl-5"><?= "Nome : "; ?></a>
    </div>

    <div class="pl-4">
        <?= $this->Form->input("resposible_name", array("label" => "", 'type' => '', "class" => 'div-nome ')); ?>
    </div>
    <div class="py-1 pl-5">
        <?= "CPF : "; ?>
    </div>

    <div class="pl-2">
        <?= $this->Form->input("responsible_cpf", array("placeholder" => "dd/mm/yy", "label" => "", "type" => "", "class" => "div-nome")); ?>
    </div>

    <div class="ml-1">

    </div>


    </div>

<div class="row m-0  p-1">
    <div class="my-1 pl-5 py-3">
        <a class="pl-5"><?= "Email : "; ?></a>
    </div>

    <div class="pl-4 py-3">
        <?= $this->Form->input("responsible_email", array("label" => "", 'type' => '', "class" => 'ml-1 div-nome ')); ?>
	</div>
	<div class="my-1 pl-1 py-3">
        <a class="pl-5"><?= "Telefone : "; ?></a>
    </div>

    <div class="pl-2 py-3">
        <?= $this->Form->input("responsible_phone", array("label" => "", 'type' => '', "class" => 'ml-1 div-nome ')); ?>
    </div>

</div>

<div>
<div class="py-3 pl-5">
        <?= $this->Form->submit("Enviar", array("controller" => 'users', 'action' => 'addmate', "class" => "bg-primary border border-primary text-light form-control pl-3")); ?>
    </div>


    <div class="py-3 pl-5">
        <?= $this->Form->submit("Limpar", array("class" => "bg-warning form-control border border-warning text-light pl-3")); ?>
	</div>

	<?= $this->Form->end(); ?>

</div>