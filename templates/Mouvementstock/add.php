<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mouvementstock $mouvementstock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Mouvementstock'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="mouvementstock form content">
            <?= $this->Form->create($mouvementstock) ?>
            <fieldset>
                <legend><?= __('Add Mouvementstock') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('transaction');
                    echo $this->Form->control('iditem');
                    echo $this->Form->control('item');
                    echo $this->Form->control('qteinit');
                    echo $this->Form->control('qtetrans');
                    echo $this->Form->control('qtefin');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
