<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Prevision> $previsions
 */
?>
<div class="previsions index content">
    <?= $this->Html->link(__('New Prevision'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Previsions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('mois') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('tonnagemens') ?></th>
                    <th><?= $this->Paginator->sort('tonnagejour') ?></th>
                    <th><?= $this->Paginator->sort('camionsmens') ?></th>
                    <th><?= $this->Paginator->sort('camionsjour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($previsions as $prevision): ?>
                <tr>
                    <td><?= $this->Number->format($prevision->id) ?></td>
                    <td><?= h($prevision->mois) ?></td>
                    <td><?= h($prevision->produit) ?></td>
                    <td><?= $this->Number->format($prevision->tonnagemens) ?></td>
                    <td><?= $this->Number->format($prevision->tonnagejour) ?></td>
                    <td><?= $this->Number->format($prevision->camionsmens) ?></td>
                    <td><?= $this->Number->format($prevision->camionsjour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prevision->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prevision->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prevision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prevision->id)]) ?>
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