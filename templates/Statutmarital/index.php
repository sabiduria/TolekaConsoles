<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Statutmarital> $statutmarital
 */
?>
<div class="statutmarital index content">
    <?= $this->Html->link(__('New Statutmarital'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Statutmarital') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('statutmarital') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($statutmarital as $statutmarital): ?>
                <tr>
                    <td><?= $this->Number->format($statutmarital->id) ?></td>
                    <td><?= h($statutmarital->statutmarital) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $statutmarital->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statutmarital->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statutmarital->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statutmarital->id)]) ?>
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