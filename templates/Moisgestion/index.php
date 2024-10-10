<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moisgestion> $moisgestion
 */
?>
<div class="moisgestion index content">
    <?= $this->Html->link(__('New Moisgestion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Moisgestion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('moisgestion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($moisgestion as $moisgestion): ?>
                <tr>
                    <td><?= $this->Number->format($moisgestion->id) ?></td>
                    <td><?= h($moisgestion->moisgestion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $moisgestion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moisgestion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moisgestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moisgestion->id)]) ?>
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