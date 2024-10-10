<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Shifts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="shifts form content">
            <?= $this->Form->create($shift) ?>
            <fieldset>
                <legend><?= __('Add Shift') ?></legend>
                <?php
                    echo $this->Form->control('nomshift');
                    echo $this->Form->control('description');
                    echo $this->Form->control('heuredebut');
                    echo $this->Form->control('heurefin');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
