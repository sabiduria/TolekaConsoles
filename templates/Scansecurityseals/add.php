<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scansecurityseal $scansecurityseal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Scansecurityseals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="scansecurityseals form content">
            <?= $this->Form->create($scansecurityseal) ?>
            <fieldset>
                <legend><?= __('Add Scansecurityseal') ?></legend>
                <?php
                    echo $this->Form->control('numlot');
                    echo $this->Form->control('imexlot');
                    echo $this->Form->control('sealsscanned');
                    echo $this->Form->control('operator');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
