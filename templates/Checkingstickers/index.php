<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Checkingsticker> $checkingstickers
 */
?>
<div class="checkingstickers index content">
    <?= $this->Html->link(__('New Checkingsticker'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Checkingstickers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('tonnageload') ?></th>
                    <th><?= $this->Paginator->sort('items') ?></th>
                    <th><?= $this->Paginator->sort('horse') ?></th>
                    <th><?= $this->Paginator->sort('trailers') ?></th>
                    <th><?= $this->Paginator->sort('comment') ?></th>
                    <th><?= $this->Paginator->sort('report') ?></th>
                    <th><?= $this->Paginator->sort('idtrip') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('inspecteur') ?></th>
                    <th><?= $this->Paginator->sort('moisgestion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($checkingstickers as $checkingsticker): ?>
                <tr>
                    <td><?= $this->Number->format($checkingsticker->id) ?></td>
                    <td><?= h($checkingsticker->lotnumber) ?></td>
                    <td><?= h($checkingsticker->imexlot) ?></td>
                    <td><?= $this->Number->format($checkingsticker->tonnageload) ?></td>
                    <td><?= $this->Number->format($checkingsticker->items) ?></td>
                    <td><?= h($checkingsticker->horse) ?></td>
                    <td><?= h($checkingsticker->trailers) ?></td>
                    <td><?= h($checkingsticker->comment) ?></td>
                    <td><?= h($checkingsticker->report) ?></td>
                    <td><?= $this->Number->format($checkingsticker->idtrip) ?></td>
                    <td><?= h($checkingsticker->date) ?></td>
                    <td><?= $this->Number->format($checkingsticker->iduser) ?></td>
                    <td><?= h($checkingsticker->inspecteur) ?></td>
                    <td><?= h($checkingsticker->moisgestion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $checkingsticker->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $checkingsticker->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $checkingsticker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkingsticker->id)]) ?>
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