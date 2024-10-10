<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AdminSync> $adminSync
 */
?>
<div class="adminSync index content">
    <?= $this->Html->link(__('New Admin Sync'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Admin Sync') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
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
                <?php foreach ($adminSync as $adminSync): ?>
                <tr>
                    <td><?= $this->Number->format($adminSync->id) ?></td>
                    <td><?= $adminSync->hasValue('cohbag') ? $this->Html->link($adminSync->cohbag->bagid, ['controller' => 'Cohbags', 'action' => 'view', $adminSync->cohbag->id]) : '' ?></td>
                    <td><?= $adminSync->hasValue('cohlot') ? $this->Html->link($adminSync->cohlot->numlot, ['controller' => 'Cohlots', 'action' => 'view', $adminSync->cohlot->id]) : '' ?></td>
                    <td><?= $this->Number->format($adminSync->cubundle_id) ?></td>
                    <td><?= h($adminSync->created) ?></td>
                    <td><?= h($adminSync->modified) ?></td>
                    <td><?= h($adminSync->createdby) ?></td>
                    <td><?= h($adminSync->modifiedby) ?></td>
                    <td><?= h($adminSync->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $adminSync->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adminSync->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adminSync->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminSync->id)]) ?>
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