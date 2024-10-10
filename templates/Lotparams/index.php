<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lotparam> $lotparams
 */
?>
<div class="lotparams index content">
    <?= $this->Html->link(__('New Lotparam'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lotparams') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th><?= $this->Paginator->sort('product') ?></th>
                    <th><?= $this->Paginator->sort('physicalgrade') ?></th>
                    <th><?= $this->Paginator->sort('unit') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lotparams as $lotparam): ?>
                <tr>
                    <td><?= $this->Number->format($lotparam->id) ?></td>
                    <td><?= h($lotparam->lotnumber) ?></td>
                    <td><?= h($lotparam->product) ?></td>
                    <td><?= h($lotparam->physicalgrade) ?></td>
                    <td><?= h($lotparam->unit) ?></td>
                    <td><?= h($lotparam->created) ?></td>
                    <td><?= h($lotparam->modified) ?></td>
                    <td><?= h($lotparam->createdby) ?></td>
                    <td><?= h($lotparam->modifiedby) ?></td>
                    <td><?= h($lotparam->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lotparam->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lotparam->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lotparam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotparam->id)]) ?>
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