<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DeviceSync> $deviceSync
 */
?>
<div class="deviceSync index content">
    <?= $this->Html->link(__('New Device Sync'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Device Sync') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('imei') ?></th>
                    <th><?= $this->Paginator->sort('cohbags_id') ?></th>
                    <th><?= $this->Paginator->sort('cohlots_id') ?></th>
                    <th><?= $this->Paginator->sort('cubundle_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($deviceSync as $deviceSync): ?>
                <tr>
                    <td><?= $this->Number->format($deviceSync->id) ?></td>
                    <td><?= h($deviceSync->name) ?></td>
                    <td><?= h($deviceSync->imei) ?></td>
                    <td><?= $deviceSync->hasValue('cohbag') ? $this->Html->link($deviceSync->cohbag->bagid, ['controller' => 'Cohbags', 'action' => 'view', $deviceSync->cohbag->id]) : '' ?></td>
                    <td><?= $deviceSync->hasValue('cohlot') ? $this->Html->link($deviceSync->cohlot->numlot, ['controller' => 'Cohlots', 'action' => 'view', $deviceSync->cohlot->id]) : '' ?></td>
                    <td><?= $this->Number->format($deviceSync->cubundle_id) ?></td>
                    <td><?= h($deviceSync->created) ?></td>
                    <td><?= h($deviceSync->modified) ?></td>
                    <td><?= h($deviceSync->createdby) ?></td>
                    <td><?= h($deviceSync->modifiedby) ?></td>
                    <td><?= h($deviceSync->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $deviceSync->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deviceSync->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deviceSync->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceSync->id)]) ?>
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