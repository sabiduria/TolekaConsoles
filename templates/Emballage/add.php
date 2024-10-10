<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emballage $emballage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Emballage'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="emballage form content">
            <?= $this->Form->create($emballage) ?>
            <fieldset>
                <legend><?= __('Add Emballage') ?></legend>
                <?php
                    echo $this->Form->control('emballage');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
