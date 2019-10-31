<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
    <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Lista de Usuarios</h2>
                </div>

            <div class="table-responsive">
            <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name',["Nombre"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name',["Apellido"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('email',["Email"]) ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('role',["Rol"]) ?></th>
            
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->email) ?></td>
                
                <td><?= h($user->role) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id],["class"=>"btn btn-sm btn-info"]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id],["class"=>"btn btn-sm btn-primary"]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id),"class"=>"btn btn-sm btn-danger"]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            
            </div>
            
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>



            </div>
    
    
    
    </div>

  

