<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Typecamion> $typecamion
 */
?>
<div class="typecamion index content">
    <?= $this->Html->link(__('New Typecamion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Typecamion') ?></h3>
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
                <?php foreach ($typecamion as $typecamion): ?>
                <tr>
                    <td><?= $this->Number->format($typecamion->id) ?></td>
                    <td><?= h($typecamion->type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $typecamion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typecamion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typecamion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typecamion->id)]) ?>
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