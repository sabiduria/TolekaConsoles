<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Rolead1> $rolead1
 */
?>
<div class="rolead1 index content">
    <?= $this->Html->link(__('New Rolead1'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rolead1') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rolead1 as $rolead1): ?>
                <tr>
                    <td><?= $this->Number->format($rolead1->id) ?></td>
                    <td><?= h($rolead1->role) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rolead1->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolead1->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolead1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolead1->id)]) ?>
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