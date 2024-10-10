<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Prefix> $prefixes
 */
?>
<div class="prefixes index content">
    <?= $this->Html->link(__('New Prefix'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Prefixes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('prefixe') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prefixes as $prefix): ?>
                <tr>
                    <td><?= $this->Number->format($prefix->id) ?></td>
                    <td><?= h($prefix->prefixe) ?></td>
                    <td><?= h($prefix->type) ?></td>
                    <td><?= h($prefix->status) ?></td>
                    <td><?= $this->Number->format($prefix->iduser) ?></td>
                    <td><?= h($prefix->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prefix->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prefix->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prefix->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prefix->id)]) ?>
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