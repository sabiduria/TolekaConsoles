<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Affectation $affectation
 * @var iterable<\App\Model\Entity\Affectation> $affectations
 * @var iterable<\App\Model\Entity\Affectation> $username
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $cohlots
 */

use App\Controller\CohlotsController;

$count = 1;
?>
<div class="affectations index content">
    <h3><?= __('Affectations') ?></h3>

    <div class="affectations form">
        <?= $this->Form->create($affectation) ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $this->Form->control('user_id', ['options' => $users, 'class'=>'select2 form-control mb-3 custom-select']); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $this->Form->control('batch_id', ['options' => $cohlots, 'class'=>'select2 form-control mb-3 custom-select']); ?>
                </div>
            </div>
        </div>
        <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('#') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('batch reference') ?></th>
                    <th><?= $this->Paginator->sort('packets') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($affectations as $affectation): ?>
                <tr>
                    <td><?= $count++ ?></td>
                    <td>
                        <?= $affectation->hasValue('user') ? $this->Html->link($affectation->user->prenom.' '.$affectation->user->nom, ['controller' => 'Users', 'action' => 'view', $affectation->user->id]) : '' ?>
                        <br><i>Phone : <?= $affectation->user->telephone ?></i>
                        <br><i>Email : <?= $affectation->user->email ?></i>
                    </td>
                    <td>
                        <?= $affectation->hasValue('cohlot') ? $this->Html->link($affectation->cohlot->numlot, ['controller' => 'Cohlots', 'action' => 'view', $affectation->cohlot->id]) : '' ?>
                        <br><i>Product : <?= $affectation->cohlot->produit ?></i>
                        <br><i>Unit : <?= $affectation->cohlot->unite ?></i>
                        <br><i>Grade : <?= $affectation->cohlot->physicalgrade ?></i>
                    </td>
                    <?php
                        $batch_id = $affectation->cohlot->numlot;
                        $product = $affectation->cohlot->produit;
                    ?>
                    <td><?= CohlotsController::getPacketNumber($batch_id, $product) ?></td>
                    <td><?= CohlotsController::getCurrentBatchWeight($batch_id, $product) ?></td>
                    <td><?= $affectation->status->name ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $affectation->id], ['class'=>'btn btn-success btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $affectation->id], ['class'=>'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $affectation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affectation->id), 'class'=>'btn btn-danger btn-sm']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
