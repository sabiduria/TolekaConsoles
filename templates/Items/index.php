<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Item> $items
 */
?>
<div class="items index content">
    <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('itemname') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('nbreitems') ?></th>
                    <th><?= $this->Paginator->sort('length') ?></th>
                    <th><?= $this->Paginator->sort('width') ?></th>
                    <th><?= $this->Paginator->sort('height') ?></th>
                    <th><?= $this->Paginator->sort('cbm') ?></th>
                    <th><?= $this->Paginator->sort('averageweightperpackage') ?></th>
                    <th><?= $this->Paginator->sort('packagetotalweight') ?></th>
                    <th><?= $this->Paginator->sort('netweightperpackage') ?></th>
                    <th><?= $this->Paginator->sort('itemnetweight') ?></th>
                    <th><?= $this->Paginator->sort('nature') ?></th>
                    <th><?= $this->Paginator->sort('idshop') ?></th>
                    <th><?= $this->Paginator->sort('idstore') ?></th>
                    <th><?= $this->Paginator->sort('idcl') ?></th>
                    <th><?= $this->Paginator->sort('datereceipt') ?></th>
                    <th><?= $this->Paginator->sort('daterecord') ?></th>
                    <th><?= $this->Paginator->sort('shelf') ?></th>
                    <th><?= $this->Paginator->sort('ray') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser2') ?></th>
                    <th><?= $this->Paginator->sort('miseajour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= $this->Number->format($item->id) ?></td>
                    <td><?= h($item->itemname) ?></td>
                    <td><?= $this->Number->format($item->quantity) ?></td>
                    <td><?= $this->Number->format($item->nbreitems) ?></td>
                    <td><?= $this->Number->format($item->length) ?></td>
                    <td><?= $this->Number->format($item->width) ?></td>
                    <td><?= $this->Number->format($item->height) ?></td>
                    <td><?= $this->Number->format($item->cbm) ?></td>
                    <td><?= $this->Number->format($item->averageweightperpackage) ?></td>
                    <td><?= $this->Number->format($item->packagetotalweight) ?></td>
                    <td><?= $this->Number->format($item->netweightperpackage) ?></td>
                    <td><?= $this->Number->format($item->itemnetweight) ?></td>
                    <td><?= h($item->nature) ?></td>
                    <td><?= h($item->idshop) ?></td>
                    <td><?= $this->Number->format($item->idstore) ?></td>
                    <td><?= $this->Number->format($item->idcl) ?></td>
                    <td><?= h($item->datereceipt) ?></td>
                    <td><?= h($item->daterecord) ?></td>
                    <td><?= h($item->shelf) ?></td>
                    <td><?= $this->Number->format($item->ray) ?></td>
                    <td><?= h($item->statut) ?></td>
                    <td><?= $this->Number->format($item->iduser) ?></td>
                    <td><?= h($item->date) ?></td>
                    <td><?= $this->Number->format($item->iduser2) ?></td>
                    <td><?= h($item->miseajour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
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