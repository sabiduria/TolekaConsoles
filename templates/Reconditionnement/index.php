<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reconditionnement> $reconditionnement
 */
?>
<div class="reconditionnement index content">
    <?= $this->Html->link(__('New Reconditionnement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reconditionnement') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('bagid') ?></th>
                    <th><?= $this->Paginator->sort('zone') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('dateid') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('dateok') ?></th>
                    <th><?= $this->Paginator->sort('iduser2') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reconditionnement as $reconditionnement): ?>
                <tr>
                    <td><?= $this->Number->format($reconditionnement->id) ?></td>
                    <td><?= h($reconditionnement->bagid) ?></td>
                    <td><?= h($reconditionnement->zone) ?></td>
                    <td><?= h($reconditionnement->description) ?></td>
                    <td><?= h($reconditionnement->statut) ?></td>
                    <td><?= h($reconditionnement->dateid) ?></td>
                    <td><?= $this->Number->format($reconditionnement->iduser) ?></td>
                    <td><?= h($reconditionnement->dateok) ?></td>
                    <td><?= $this->Number->format($reconditionnement->iduser2) ?></td>
                    <td><?= h($reconditionnement->produit) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reconditionnement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reconditionnement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reconditionnement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reconditionnement->id)]) ?>
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