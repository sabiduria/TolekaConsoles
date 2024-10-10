<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Scansecurityseal> $scansecurityseals
 */
?>
<div class="scansecurityseals index content">
    <?= $this->Html->link(__('New Scansecurityseal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Scansecurityseals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numlot') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('sealsscanned') ?></th>
                    <th><?= $this->Paginator->sort('operator') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scansecurityseals as $scansecurityseal): ?>
                <tr>
                    <td><?= $this->Number->format($scansecurityseal->id) ?></td>
                    <td><?= h($scansecurityseal->numlot) ?></td>
                    <td><?= h($scansecurityseal->imexlot) ?></td>
                    <td><?= h($scansecurityseal->sealsscanned) ?></td>
                    <td><?= h($scansecurityseal->operator) ?></td>
                    <td><?= h($scansecurityseal->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $scansecurityseal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scansecurityseal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scansecurityseal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scansecurityseal->id)]) ?>
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