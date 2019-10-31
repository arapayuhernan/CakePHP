<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


<div class="row" style="margin:0 auto" >

<div class="col-md-6 col-md-offset-3">
<div class="page-header">
<h2>Crear Usuario</h2>
</div>
    <?= $this->Form->create($user) ?>
    <fieldset > 
        
        <?php
            echo $this->Form->control('first_name',["label"=>"Nombre"]);
            echo $this->Form->control('last_name',["label"=>"Apellido"]);
            echo $this->Form->control('email',["label"=>"Correo Electronico"]);
            echo $this->Form->control('password',["label"=>"Contraseña"]);
            echo $this->Form->control('role',["options"=>["admin"=>"administrador","user"=>"usuario"],"label"=>"Rol"]);
            echo $this->Form->control('active',["label"=>"activo"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),["class"=>"btn btn-info"]) ?>
    <?= $this->Form->end() ?>
</div>


</div>


