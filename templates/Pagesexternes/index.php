<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pagesexterne> $pagesexternes
 */
?>
<div class="pagesexternes index content">
    <?= $this->Html->link(__('New Pagesexterne'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pagesexternes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idcategorie') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pagesexternes as $pagesexterne): ?>
                <tr>
                    <td><?= $this->Number->format($pagesexterne->id) ?></td>
                    <td><?= $this->Number->format($pagesexterne->idcategorie) ?></td>
                    <td><?= $this->Number->format($pagesexterne->iduser) ?></td>
                    <td><?= h($pagesexterne->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pagesexterne->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pagesexterne->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pagesexterne->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagesexterne->id)]) ?>
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