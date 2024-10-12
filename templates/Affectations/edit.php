<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Affectation $affectation
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var \Cake\Collection\CollectionInterface|string[] $cohlots
 * @var \Cake\Collection\CollectionInterface|string[] $statuses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $affectation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $affectation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Affectations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="affectations form content">
            <?= $this->Form->create($affectation) ?>
            <fieldset>
                <legend><?= __('Edit Affectation') ?></legend>
                <?php
                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->control('batch_id', ['options' => $cohlots]);
                echo $this->Form->control('state', ['options' => $statuses]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
