<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeviceSync $deviceSync
 * @var string[]|\Cake\Collection\CollectionInterface $cohbags
 * @var string[]|\Cake\Collection\CollectionInterface $cohlots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deviceSync->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deviceSync->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Device Sync'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="deviceSync form content">
            <?= $this->Form->create($deviceSync) ?>
            <fieldset>
                <legend><?= __('Edit Device Sync') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('imei');
                    echo $this->Form->control('cohbags_id', ['options' => $cohbags]);
                    echo $this->Form->control('cohlots_id', ['options' => $cohlots]);
                    echo $this->Form->control('cubundle_id');
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
