<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Logcon> $logcon
 */
?>
<div class="logcon index content">
    <?= $this->Html->link(__('New Logcon'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Logcon') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user') ?></th>
                    <th><?= $this->Paginator->sort('etat') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('checked') ?></th>
                    <th><?= $this->Paginator->sort('jour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logcon as $logcon): ?>
                <tr>
                    <td><?= $this->Number->format($logcon->id) ?></td>
                    <td><?= h($logcon->user) ?></td>
                    <td><?= h($logcon->etat) ?></td>
                    <td><?= h($logcon->date) ?></td>
                    <td><?= h($logcon->checked) ?></td>
                    <td><?= h($logcon->jour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $logcon->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logcon->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logcon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logcon->id)]) ?>
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