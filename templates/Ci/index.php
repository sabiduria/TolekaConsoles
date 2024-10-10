<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ci> $ci
 */
?>
<div class="ci index content">
    <?= $this->Html->link(__('New Ci'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ci') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th><?= $this->Paginator->sort('numimex') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('horse') ?></th>
                    <th><?= $this->Paginator->sort('transporter') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ci as $ci): ?>
                <tr>
                    <td><?= $this->Number->format($ci->id) ?></td>
                    <td><?= h($ci->lotnumber) ?></td>
                    <td><?= h($ci->numimex) ?></td>
                    <td><?= $this->Number->format($ci->cost) ?></td>
                    <td><?= h($ci->horse) ?></td>
                    <td><?= h($ci->transporter) ?></td>
                    <td><?= h($ci->destination) ?></td>
                    <td><?= h($ci->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ci->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ci->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ci->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ci->id)]) ?>
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