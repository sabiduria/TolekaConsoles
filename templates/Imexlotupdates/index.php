<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Imexlotupdate> $imexlotupdates
 */
?>
<div class="imexlotupdates index content">
    <?= $this->Html->link(__('New Imexlotupdate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Imexlotupdates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numlot') ?></th>
                    <th><?= $this->Paginator->sort('oldimexlot') ?></th>
                    <th><?= $this->Paginator->sort('newimexlot') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($imexlotupdates as $imexlotupdate): ?>
                <tr>
                    <td><?= $this->Number->format($imexlotupdate->id) ?></td>
                    <td><?= h($imexlotupdate->numlot) ?></td>
                    <td><?= h($imexlotupdate->oldimexlot) ?></td>
                    <td><?= h($imexlotupdate->newimexlot) ?></td>
                    <td><?= $this->Number->format($imexlotupdate->iduser) ?></td>
                    <td><?= h($imexlotupdate->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $imexlotupdate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imexlotupdate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imexlotupdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imexlotupdate->id)]) ?>
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