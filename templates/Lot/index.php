<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lot> $lot
 */
?>
<div class="lot index content">
    <?= $this->Html->link(__('New Lot'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lot') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numlot') ?></th>
                    <th><?= $this->Paginator->sort('nbbags') ?></th>
                    <th><?= $this->Paginator->sort('tonnage') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lot as $lot): ?>
                <tr>
                    <td><?= $this->Number->format($lot->id) ?></td>
                    <td><?= h($lot->numlot) ?></td>
                    <td><?= $this->Number->format($lot->nbbags) ?></td>
                    <td><?= $this->Number->format($lot->tonnage) ?></td>
                    <td><?= h($lot->destination) ?></td>
                    <td><?= h($lot->statut) ?></td>
                    <td><?= h($lot->date) ?></td>
                    <td><?= $this->Number->format($lot->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lot->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lot->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lot->id)]) ?>
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