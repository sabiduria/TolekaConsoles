<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Typeitem> $typeitem
 */
?>
<div class="typeitem index content">
    <?= $this->Html->link(__('New Typeitem'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Typeitem') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($typeitem as $typeitem): ?>
                <tr>
                    <td><?= $this->Number->format($typeitem->id) ?></td>
                    <td><?= h($typeitem->type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $typeitem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeitem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeitem->id)]) ?>
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