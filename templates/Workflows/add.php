<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workflow $workflow
 * @var \Cake\Collection\CollectionInterface|string[] $statuses
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Workflows'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="workflows form content">
            <?= $this->Form->create($workflow) ?>
            <fieldset>
                <legend><?= __('Add Steps') ?></legend>
                <?php
                    echo $this->Form->control('status_id', ['options' => $statuses]);
                    echo $this->Form->control('roles_id', ['options' => $roles]);
                echo $this->Form->control('steps', ['options'=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]]);
                    echo $this->Form->control('product', ['options'=>['all'=>'All', 'Cu'=>'Cu', 'CoH'=>'CoH']]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
