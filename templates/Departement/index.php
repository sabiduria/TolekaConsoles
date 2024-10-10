<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Departement> $departement
 */
?>
<div class="departement index content">
    <?= $this->Html->link(__('New Departement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Departement') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomdpt') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departement as $departement): ?>
                <tr>
                    <td><?= $this->Number->format($departement->id) ?></td>
                    <td><?= h($departement->nomdpt) ?></td>
                    <td><?= $this->Number->format($departement->iduser) ?></td>
                    <td><?= h($departement->date) ?></td>
                    <td><?= h($departement->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $departement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departement->id)]) ?>
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