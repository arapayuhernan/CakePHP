<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <h2>Editar Usuario</h2>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('role',["options"=>["admin"=>"administrador","user"=>"usuario"]]);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button('Editar',["class"=>"btn  btn-info"]) ?>
    <?= $this->Form->end() ?>
</div>
