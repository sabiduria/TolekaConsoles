<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Qmslot> $qmslots
 */
?>
<div class="qmslots index content">
    <?= $this->Html->link(__('New Qmslot'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Qmslots') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('dleid') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($qmslots as $qmslot): ?>
                <tr>
                    <td><?= $this->Number->format($qmslot->id) ?></td>
                    <td><?= h($qmslot->lotnumber) ?></td>
                    <td><?= h($qmslot->imexlot) ?></td>
                    <td><?= h($qmslot->dleid) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $qmslot->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $qmslot->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $qmslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qmslot->id)]) ?>
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