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
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('idrole', ['options'=>$roles, 'label'=>'User role']);
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('email');
                    echo $this->Form->control('avatar');
                    echo $this->Form->control('prenom');
                    echo $this->Form->control('nom');
                    echo $this->Form->control('telephone');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('dateinscription');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                    echo $this->Form->control('sexe');
                    echo $this->Form->control('codeuser');
                    echo $this->Form->control('rolead1');
                    echo $this->Form->control('rolead2');
                    echo $this->Form->control('rolead3');
                    echo $this->Form->control('section');
                    echo $this->Form->control('langue');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
