<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Typeconcentrate> $typeconcentrate
 */
?>
<div class="typeconcentrate index content">
    <?= $this->Html->link(__('New Typeconcentrate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Typeconcentrate') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($typeconcentrate as $typeconcentrate): ?>
                <tr>
                    <td><?= $this->Number->format($typeconcentrate->id) ?></td>
                    <td><?= h($typeconcentrate->nom) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $typeconcentrate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeconcentrate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeconcentrate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeconcentrate->id)]) ?>
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