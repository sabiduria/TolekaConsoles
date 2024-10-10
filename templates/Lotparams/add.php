<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lotparam $lotparam
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lotparams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lotparams form content">
            <?= $this->Form->create($lotparam) ?>
            <fieldset>
                <legend><?= __('Add Lotparam') ?></legend>
                <?php
                    echo $this->Form->control('lotnumber');
                    echo $this->Form->control('product');
                    echo $this->Form->control('physicalgrade');
                    echo $this->Form->control('unit');
                    echo $this->Form->control('createdby');
                    echo $this->Form->control('modifiedby');
                    echo $this->Form->control('deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
