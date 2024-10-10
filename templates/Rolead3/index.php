<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Rolead3> $rolead3
 */
?>
<div class="rolead3 index content">
    <?= $this->Html->link(__('New Rolead3'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rolead3') ?></h3>
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
                <?php foreach ($rolead3 as $rolead3): ?>
                <tr>
                    <td><?= $this->Number->format($rolead3->id) ?></td>
                    <td><?= h($rolead3->role) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rolead3->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolead3->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolead3->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolead3->id)]) ?>
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