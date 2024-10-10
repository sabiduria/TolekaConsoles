<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Logdb> $logdb
 */
?>
<div class="logdb index content">
    <?= $this->Html->link(__('New Logdb'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Logdb') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('table') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logdb as $logdb): ?>
                <tr>
                    <td><?= $this->Number->format($logdb->id) ?></td>
                    <td><?= h($logdb->table) ?></td>
                    <td><?= h($logdb->type) ?></td>
                    <td><?= h($logdb->date) ?></td>
                    <td><?= $this->Number->format($logdb->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $logdb->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logdb->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logdb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logdb->id)]) ?>
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