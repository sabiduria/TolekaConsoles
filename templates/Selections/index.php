<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Selection> $selections
 */
?>
<div class="selections index content">
    <?= $this->Html->link(__('New Selection'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Selections') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('top') ?></th>
                    <th><?= $this->Paginator->sort('low') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($selections as $selection): ?>
                <tr>
                    <td><?= $this->Number->format($selection->id) ?></td>
                    <td><?= $this->Number->format($selection->top) ?></td>
                    <td><?= $this->Number->format($selection->low) ?></td>
                    <td><?= $this->Number->format($selection->iduser) ?></td>
                    <td><?= h($selection->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $selection->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $selection->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $selection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $selection->id)]) ?>
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