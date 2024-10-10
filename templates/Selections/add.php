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
            <?= $this->Html->link(__('List Selections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="selections form content">
            <?= $this->Form->create($selection) ?>
            <fieldset>
                <legend><?= __('Add Selection') ?></legend>
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
