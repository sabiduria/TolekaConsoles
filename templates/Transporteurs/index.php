<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Transporteur> $transporteurs
 */
?>
<div class="transporteurs index content">
    <?= $this->Html->link(__('New Transporteur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transporteurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomtrans') ?></th>
                    <th><?= $this->Paginator->sort('emailtrans') ?></th>
                    <th><?= $this->Paginator->sort('teltrans') ?></th>
                    <th><?= $this->Paginator->sort('pays') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transporteurs as $transporteur): ?>
                <tr>
                    <td><?= $this->Number->format($transporteur->id) ?></td>
                    <td><?= h($transporteur->nomtrans) ?></td>
                    <td><?= h($transporteur->emailtrans) ?></td>
                    <td><?= h($transporteur->teltrans) ?></td>
                    <td><?= h($transporteur->pays) ?></td>
                    <td><?= h($transporteur->date) ?></td>
                    <td><?= $this->Number->format($transporteur->iduser) ?></td>
                    <td><?= h($transporteur->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transporteur->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transporteur->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transporteur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transporteur->id)]) ?>
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