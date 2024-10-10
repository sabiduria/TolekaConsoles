<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detailsworkflow $detailsworkflow
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Detailsworkflow'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detailsworkflow form content">
            <?= $this->Form->create($detailsworkflow) ?>
            <fieldset>
                <legend><?= __('Add Detailsworkflow') ?></legend>
                <?php
                    echo $this->Form->control('idworkflow');
                    echo $this->Form->control('rolecmd');
                    echo $this->Form->control('action');
                    echo $this->Form->control('numsequence');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
