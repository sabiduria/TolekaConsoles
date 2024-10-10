<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Requisition> $requisitions
 */
?>
<div class="requisitions index content">
    <?= $this->Html->link(__('New Requisition'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Requisitions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('item') ?></th>
                    <th><?= $this->Paginator->sort('motif') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('qtedem') ?></th>
                    <th><?= $this->Paginator->sort('qteac') ?></th>
                    <th><?= $this->Paginator->sort('idac') ?></th>
                    <th><?= $this->Paginator->sort('dateac') ?></th>
                    <th><?= $this->Paginator->sort('statutac') ?></th>
                    <th><?= $this->Paginator->sort('qteliv') ?></th>
                    <th><?= $this->Paginator->sort('idliv') ?></th>
                    <th><?= $this->Paginator->sort('dateliv') ?></th>
                    <th><?= $this->Paginator->sort('commentliv') ?></th>
                    <th><?= $this->Paginator->sort('commentac') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requisitions as $requisition): ?>
                <tr>
                    <td><?= $this->Number->format($requisition->id) ?></td>
                    <td><?= $this->Number->format($requisition->iduser) ?></td>
                    <td><?= h($requisition->item) ?></td>
                    <td><?= h($requisition->motif) ?></td>
                    <td><?= h($requisition->date) ?></td>
                    <td><?= $this->Number->format($requisition->qtedem) ?></td>
                    <td><?= $this->Number->format($requisition->qteac) ?></td>
                    <td><?= $this->Number->format($requisition->idac) ?></td>
                    <td><?= h($requisition->dateac) ?></td>
                    <td><?= h($requisition->statutac) ?></td>
                    <td><?= $this->Number->format($requisition->qteliv) ?></td>
                    <td><?= $this->Number->format($requisition->idliv) ?></td>
                    <td><?= h($requisition->dateliv) ?></td>
                    <td><?= h($requisition->commentliv) ?></td>
                    <td><?= h($requisition->commentac) ?></td>
                    <td><?= h($requisition->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $requisition->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $requisition->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $requisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisition->id)]) ?>
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