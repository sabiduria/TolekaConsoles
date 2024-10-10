<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Camion> $camions
 */
?>
<div class="camions index content">
    <?= $this->Html->link(__('New Camion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Camions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('trans') ?></th>
                    <th><?= $this->Paginator->sort('ch') ?></th>
                    <th><?= $this->Paginator->sort('marque') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('horse') ?></th>
                    <th><?= $this->Paginator->sort('trailer1') ?></th>
                    <th><?= $this->Paginator->sort('trailer2') ?></th>
                    <th><?= $this->Paginator->sort('tonnage') ?></th>
                    <th><?= $this->Paginator->sort('couleur') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($camions as $camion): ?>
                <tr>
                    <td><?= $this->Number->format($camion->id) ?></td>
                    <td><?= $this->Number->format($camion->trans) ?></td>
                    <td><?= $this->Number->format($camion->ch) ?></td>
                    <td><?= h($camion->marque) ?></td>
                    <td><?= h($camion->type) ?></td>
                    <td><?= h($camion->horse) ?></td>
                    <td><?= h($camion->trailer1) ?></td>
                    <td><?= h($camion->trailer2) ?></td>
                    <td><?= $this->Number->format($camion->tonnage) ?></td>
                    <td><?= h($camion->couleur) ?></td>
                    <td><?= h($camion->statut) ?></td>
                    <td><?= h($camion->date) ?></td>
                    <td><?= $this->Number->format($camion->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $camion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $camion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $camion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $camion->id)]) ?>
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