<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Selection $selection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $selection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $selection->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Selections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="selections form content">
            <?= $this->Form->create($selection) ?>
            <fieldset>
                <legend><?= __('Edit Selection') ?></legend>
                <?php
                    echo $this->Form->control('top');
                    echo $this->Form->control('low');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
