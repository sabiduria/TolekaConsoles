<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeworkflow $typeworkflow
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Typeworkflow'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typeworkflow form content">
            <?= $this->Form->create($typeworkflow) ?>
            <fieldset>
                <legend><?= __('Add Typeworkflow') ?></legend>
                <?php
                    echo $this->Form->control('type');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
