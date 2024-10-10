<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logcon $logcon
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $logcon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $logcon->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Logcon'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="logcon form content">
            <?= $this->Form->create($logcon) ?>
            <fieldset>
                <legend><?= __('Edit Logcon') ?></legend>
                <?php
                    echo $this->Form->control('user');
                    echo $this->Form->control('etat');
                    echo $this->Form->control('date');
                    echo $this->Form->control('checked');
                    echo $this->Form->control('jour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
