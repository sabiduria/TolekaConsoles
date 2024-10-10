<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Mouvementstock> $mouvementstock
 */
?>
<div class="mouvementstock index content">
    <?= $this->Html->link(__('New Mouvementstock'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mouvementstock') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('transaction') ?></th>
                    <th><?= $this->Paginator->sort('iditem') ?></th>
                    <th><?= $this->Paginator->sort('item') ?></th>
                    <th><?= $this->Paginator->sort('qteinit') ?></th>
                    <th><?= $this->Paginator->sort('qtetrans') ?></th>
                    <th><?= $this->Paginator->sort('qtefin') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mouvementstock as $mouvementstock): ?>
                <tr>
                    <td><?= $this->Number->format($mouvementstock->id) ?></td>
                    <td><?= h($mouvementstock->date) ?></td>
                    <td><?= h($mouvementstock->transaction) ?></td>
                    <td><?= $this->Number->format($mouvementstock->iditem) ?></td>
                    <td><?= h($mouvementstock->item) ?></td>
                    <td><?= $this->Number->format($mouvementstock->qteinit) ?></td>
                    <td><?= $this->Number->format($mouvementstock->qtetrans) ?></td>
                    <td><?= $this->Number->format($mouvementstock->qtefin) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mouvementstock->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mouvementstock->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mouvementstock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mouvementstock->id)]) ?>
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