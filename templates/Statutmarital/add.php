<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statutmarital $statutmarital
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Statutmarital'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="statutmarital form content">
            <?= $this->Form->create($statutmarital) ?>
            <fieldset>
                <legend><?= __('Add Statutmarital') ?></legend>
                <?php
                    echo $this->Form->control('statutmarital');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
