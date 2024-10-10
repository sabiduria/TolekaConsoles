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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $langueutilisee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $langueutilisee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Langueutilisee'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="langueutilisee form content">
            <?= $this->Form->create($langueutilisee) ?>
            <fieldset>
                <legend><?= __('Edit Langueutilisee') ?></legend>
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
