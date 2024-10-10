<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pay> $pays
 */
?>
<div class="pays index content">
    <?= $this->Html->link(__('New Pay'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pays') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nompays') ?></th>
                    <th><?= $this->Paginator->sort('fraistransport') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pays as $pay): ?>
                <tr>
                    <td><?= $this->Number->format($pay->id) ?></td>
                    <td><?= h($pay->nompays) ?></td>
                    <td><?= $this->Number->format($pay->fraistransport) ?></td>
                    <td><?= $this->Number->format($pay->iduser) ?></td>
                    <td><?= h($pay->datemiseajour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pay->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pay->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pay->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pay->id)]) ?>
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