<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logdb $logdb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $logdb->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $logdb->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Logdb'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="logdb form content">
            <?= $this->Form->create($logdb) ?>
            <fieldset>
                <legend><?= __('Edit Logdb') ?></legend>
                <?php
                    echo $this->Form->control('table');
                    echo $this->Form->control('type');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
