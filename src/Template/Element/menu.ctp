
<?php if(isset($current_user)):  ?>
<ul class="nav bg-dark text-light">


  <li class="nav-item">
    <?= $this->Html->link('CakeApp',["controller"=>"Users","action"=>"home"],["class"=>"navbar-brand"])   ?>
  </li>
  <?php if($current_user['role']=='admin'): ?>
  <li class="nav-item">
  <?= $this->Html->link('Crear Usuario',["controller"=>"Users","action"=>"add"],["class"=>"nav-link active"])?>
  </li>
  <li class="nav-item">
  <?= $this->Html->link('Listar Usuarios',["controller"=>"Users","action"=>"index"],["class"=>"nav-link active"])?>
  </li>
<?php endif;?>
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item">
      <?= $this->Html->link('Salir',["controller"=>"Users","action"=>"logout"],["class"=>"nav-link active"]) ?>
    </li>
    </ul>
    
  
  
</ul>
<?php endif; ?>

