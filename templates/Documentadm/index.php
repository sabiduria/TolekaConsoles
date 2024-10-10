<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Documentadm> $documentadm
 */
?>
<div class="documentadm index content">
    <?= $this->Html->link(__('New Documentadm'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Documentadm') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($documentadm as $documentadm): ?>
                <tr>
                    <td><?= $this->Number->format($documentadm->id) ?></td>
                    <td><?= h($documentadm->type) ?></td>
                    <td><?= $this->Number->format($documentadm->iduser) ?></td>
                    <td><?= h($documentadm->datemiseajour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $documentadm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $documentadm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $documentadm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentadm->id)]) ?>
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