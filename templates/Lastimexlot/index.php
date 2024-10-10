<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lastimexlot> $lastimexlot
 */
?>
<div class="lastimexlot index content">
    <?= $this->Html->link(__('New Lastimexlot'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lastimexlot') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('unit') ?></th>
                    <th><?= $this->Paginator->sort('lastimexlot') ?></th>
                    <th><?= $this->Paginator->sort('newlastnum') ?></th>
                    <th><?= $this->Paginator->sort('used') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lastimexlot as $lastimexlot): ?>
                <tr>
                    <td><?= $this->Number->format($lastimexlot->id) ?></td>
                    <td><?= h($lastimexlot->produit) ?></td>
                    <td><?= h($lastimexlot->unit) ?></td>
                    <td><?= h($lastimexlot->lastimexlot) ?></td>
                    <td><?= $this->Number->format($lastimexlot->newlastnum) ?></td>
                    <td><?= $this->Number->format($lastimexlot->used) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lastimexlot->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lastimexlot->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lastimexlot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lastimexlot->id)]) ?>
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