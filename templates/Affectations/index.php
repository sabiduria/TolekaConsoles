<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Affectation> $affectations
 * @var iterable<\App\Model\Entity\Affectation> $username
 */

use App\Controller\CohlotsController;

$count = 1;
?>
<div class="affectations index content">
    <h3><?= __('Affectations') ?></h3>

    <div class="affectations form">
        <?= $this->Form->create($affectation) ?>
        <?php
        echo $this->Form->control('user_id', ['options' => $users]);
        echo $this->Form->control('batch_id', ['options' => $cohlots]);
        ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
    <hr>
    <div class="table-responsive">
        <table>
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
                        <?= $this->Html->link(__('View'), ['action' => 'view', $affectation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $affectation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $affectation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affectation->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
