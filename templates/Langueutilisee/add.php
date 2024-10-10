<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Langueutilisee $langueutilisee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Langueutilisee'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="langueutilisee form content">
            <?= $this->Form->create($langueutilisee) ?>
            <fieldset>
                <legend><?= __('Add Langueutilisee') ?></legend>
                <?php
                    echo $this->Form->control('langue');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
