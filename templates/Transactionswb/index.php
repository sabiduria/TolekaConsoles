<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Transactionswb> $transactionswb
 */
?>
<div class="transactionswb index content">
    <?= $this->Html->link(__('New Transactionswb'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transactionswb') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idtrip') ?></th>
                    <th><?= $this->Paginator->sort('wbop') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('typetrans') ?></th>
                    <th><?= $this->Paginator->sort('tare') ?></th>
                    <th><?= $this->Paginator->sort('poidsbrut') ?></th>
                    <th><?= $this->Paginator->sort('poidsnet') ?></th>
                    <th><?= $this->Paginator->sort('nbitems') ?></th>
                    <th><?= $this->Paginator->sort('decision') ?></th>
                    <th><?= $this->Paginator->sort('wbticket') ?></th>
                    <th><?= $this->Paginator->sort('nbpass') ?></th>
                    <th><?= $this->Paginator->sort('variance') ?></th>
                    <th><?= $this->Paginator->sort('purvar') ?></th>
                    <th><?= $this->Paginator->sort('lienwbticket') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactionswb as $transactionswb): ?>
                <tr>
                    <td><?= $this->Number->format($transactionswb->id) ?></td>
                    <td><?= $this->Number->format($transactionswb->idtrip) ?></td>
                    <td><?= h($transactionswb->wbop) ?></td>
                    <td><?= h($transactionswb->date) ?></td>
                    <td><?= h($transactionswb->typetrans) ?></td>
                    <td><?= $this->Number->format($transactionswb->tare) ?></td>
                    <td><?= $this->Number->format($transactionswb->poidsbrut) ?></td>
                    <td><?= $this->Number->format($transactionswb->poidsnet) ?></td>
                    <td><?= $this->Number->format($transactionswb->nbitems) ?></td>
                    <td><?= h($transactionswb->decision) ?></td>
                    <td><?= h($transactionswb->wbticket) ?></td>
                    <td><?= $this->Number->format($transactionswb->nbpass) ?></td>
                    <td><?= $this->Number->format($transactionswb->variance) ?></td>
                    <td><?= $this->Number->format($transactionswb->purvar) ?></td>
                    <td><?= h($transactionswb->lienwbticket) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transactionswb->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transactionswb->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transactionswb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionswb->id)]) ?>
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