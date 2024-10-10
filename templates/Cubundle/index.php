<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cubundle> $cubundle
 */
?>
<div class="cubundle index content">
    <?= $this->Html->link(__('New Cubundle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cubundle') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('dateprod') ?></th>
                    <th><?= $this->Paginator->sort('unit') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('bundlecode') ?></th>
                    <th><?= $this->Paginator->sort('composite') ?></th>
                    <th><?= $this->Paginator->sort('grossweight') ?></th>
                    <th><?= $this->Paginator->sort('netweight') ?></th>
                    <th><?= $this->Paginator->sort('visualgrade') ?></th>
                    <th><?= $this->Paginator->sort('chemicalgrade') ?></th>
                    <th><?= $this->Paginator->sort('finalgrade') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('charge') ?></th>
                    <th><?= $this->Paginator->sort('dateloaded') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('seal1') ?></th>
                    <th><?= $this->Paginator->sort('seal2') ?></th>
                    <th><?= $this->Paginator->sort('dateadded') ?></th>
                    <th><?= $this->Paginator->sort('datechecked') ?></th>
                    <th><?= $this->Paginator->sort('synced') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cubundle as $cubundle): ?>
                <tr>
                    <td><?= $this->Number->format($cubundle->id) ?></td>
                    <td><?= h($cubundle->dateprod) ?></td>
                    <td><?= h($cubundle->unit) ?></td>
                    <td><?= h($cubundle->lotnumber) ?></td>
                    <td><?= h($cubundle->imexlot) ?></td>
                    <td><?= h($cubundle->bundlecode) ?></td>
                    <td><?= h($cubundle->composite) ?></td>
                    <td><?= $this->Number->format($cubundle->grossweight) ?></td>
                    <td><?= $this->Number->format($cubundle->netweight) ?></td>
                    <td><?= h($cubundle->visualgrade) ?></td>
                    <td><?= h($cubundle->chemicalgrade) ?></td>
                    <td><?= h($cubundle->finalgrade) ?></td>
                    <td><?= h($cubundle->location) ?></td>
                    <td><?= h($cubundle->charge) ?></td>
                    <td><?= h($cubundle->dateloaded) ?></td>
                    <td><?= h($cubundle->date) ?></td>
                    <td><?= $this->Number->format($cubundle->iduser) ?></td>
                    <td><?= h($cubundle->seal1) ?></td>
                    <td><?= h($cubundle->seal2) ?></td>
                    <td><?= h($cubundle->dateadded) ?></td>
                    <td><?= h($cubundle->datechecked) ?></td>
                    <td><?= h($cubundle->synced) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cubundle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cubundle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cubundle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cubundle->id)]) ?>
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