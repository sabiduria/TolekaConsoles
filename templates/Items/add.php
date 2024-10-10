<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="items form content">
            <?= $this->Form->create($item) ?>
            <fieldset>
                <legend><?= __('Add Item') ?></legend>
                <?php
                    echo $this->Form->control('itemname');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('nbreitems');
                    echo $this->Form->control('length');
                    echo $this->Form->control('width');
                    echo $this->Form->control('height');
                    echo $this->Form->control('cbm');
                    echo $this->Form->control('averageweightperpackage');
                    echo $this->Form->control('packagetotalweight');
                    echo $this->Form->control('netweightperpackage');
                    echo $this->Form->control('itemnetweight');
                    echo $this->Form->control('nature');
                    echo $this->Form->control('idshop');
                    echo $this->Form->control('idstore');
                    echo $this->Form->control('idcl');
                    echo $this->Form->control('datereceipt');
                    echo $this->Form->control('daterecord');
                    echo $this->Form->control('shelf');
                    echo $this->Form->control('ray');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser2');
                    echo $this->Form->control('miseajour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
