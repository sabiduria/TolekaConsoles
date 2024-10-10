<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminSync $adminSync
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
                ['action' => 'delete', $adminSync->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adminSync->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Admin Sync'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="adminSync form content">
            <?= $this->Form->create($adminSync) ?>
            <fieldset>
                <legend><?= __('Edit Admin Sync') ?></legend>
                <?php
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
