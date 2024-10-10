<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Composite> $composites
 */
?>
<div class="composites index content">
    <?= $this->Html->link(__('New Composite'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Composites') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('threshold') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($composites as $composite): ?>
                <tr>
                    <td><?= $this->Number->format($composite->id) ?></td>
                    <td><?= h($composite->name) ?></td>
                    <td><?= h($composite->code) ?></td>
                    <td><?= $this->Number->format($composite->threshold) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $composite->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $composite->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $composite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $composite->id)]) ?>
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