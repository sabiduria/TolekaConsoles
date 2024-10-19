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
            <h3 class="heading"><?= __('Edit Affectations') ?></h3>
        </div>
    </aside>
    <div class="column column-80">
        <div class="affectations form content">
            <?= $this->Form->create($affectation) ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <?= $this->Form->control('user_id', ['options' => $users, 'class'=>'select2 form-control mb-3 custom-select']); ?>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <?= $this->Form->control('batch_id', ['options' => $cohlots, 'class'=>'select2 form-control mb-3 custom-select']); ?>
                    </div>
                </div>
            </div>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
