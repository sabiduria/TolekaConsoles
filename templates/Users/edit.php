<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                echo $this->Form->control('idrole', ['options'=>$roles, 'label'=>'User role', 'class'=>'select2 form-control mb-3 custom-select']);
                echo $this->Form->control('username', ['class'=>'form-control']);
                echo $this->Form->control('password', ['class'=>'form-control']);
                echo $this->Form->control('email', ['class'=>'form-control']);
                echo $this->Form->control('avatar', ['class'=>'form-control']);
                echo $this->Form->control('prenom', ['class'=>'form-control']);
                echo $this->Form->control('nom', ['class'=>'form-control']);
                echo $this->Form->control('telephone', ['class'=>'form-control']);
                echo $this->Form->control('statut', ['class'=>'form-select', 'options'=>['actif'=>'Actif', 'inactif'=>'Inactif']]);
                echo $this->Form->control('dateinscription', ['class'=>'form-control']);
                echo $this->Form->control('iduser', ['class'=>'form-control']);
                echo $this->Form->control('datemiseajour', ['class'=>'form-control']);
                echo $this->Form->control('sexe', ['class'=>'form-select', 'options'=>['Homme', 'Femme']]);
                echo $this->Form->control('codeuser', ['class'=>'form-control']);
                echo $this->Form->control('rolead1', ['class'=>'form-control']);
                echo $this->Form->control('rolead2', ['class'=>'form-control']);
                echo $this->Form->control('rolead3', ['class'=>'form-control']);
                echo $this->Form->control('section', ['class'=>'form-control']);
                echo $this->Form->control('langue', ['class'=>'form-control']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
