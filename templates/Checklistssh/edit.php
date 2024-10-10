<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Checklistssh $checklistssh
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $checklistssh->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $checklistssh->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Checklistssh'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="checklistssh form content">
            <?= $this->Form->create($checklistssh) ?>
            <fieldset>
                <legend><?= __('Edit Checklistssh') ?></legend>
                <?php
                    echo $this->Form->control('bus');
                    echo $this->Form->control('datechecking');
                    echo $this->Form->control('typecontrole');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
