<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Requisitions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="requisitions form content">
            <?= $this->Form->create($requisition) ?>
            <fieldset>
                <legend><?= __('Add Requisition') ?></legend>
                <?php
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('item');
                    echo $this->Form->control('motif');
                    echo $this->Form->control('date');
                    echo $this->Form->control('qtedem');
                    echo $this->Form->control('qteac');
                    echo $this->Form->control('idac');
                    echo $this->Form->control('dateac');
                    echo $this->Form->control('statutac');
                    echo $this->Form->control('qteliv');
                    echo $this->Form->control('idliv');
                    echo $this->Form->control('dateliv');
                    echo $this->Form->control('commentliv');
                    echo $this->Form->control('commentac');
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
