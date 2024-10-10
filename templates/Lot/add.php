<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lot $lot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lot'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lot form content">
            <?= $this->Form->create($lot) ?>
            <fieldset>
                <legend><?= __('Add Lot') ?></legend>
                <?php
                    echo $this->Form->control('numlot');
                    echo $this->Form->control('nbbags');
                    echo $this->Form->control('tonnage');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
