<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lc> $lc
 */
?>
<div class="lc index content">
    <?= $this->Html->link(__('New Lc'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lc') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('month') ?></th>
                    <th><?= $this->Paginator->sort('pk') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lc as $lc): ?>
                <tr>
                    <td><?= $this->Number->format($lc->id) ?></td>
                    <td><?= $this->Number->format($lc->year) ?></td>
                    <td><?= h($lc->month) ?></td>
                    <td><?= h($lc->pk) ?></td>
                    <td><?= h($lc->date) ?></td>
                    <td><?= $this->Number->format($lc->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lc->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lc->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lc->id)]) ?>
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