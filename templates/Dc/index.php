<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dc> $dc
 */
?>
<div class="dc index content">
    <?= $this->Html->link(__('New Dc'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dc') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('num') ?></th>
                    <th><?= $this->Paginator->sort('numdc') ?></th>
                    <th><?= $this->Paginator->sort('numbp') ?></th>
                    <th><?= $this->Paginator->sort('licence') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('tranche') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('tonnage') ?></th>
                    <th><?= $this->Paginator->sort('nbitems') ?></th>
                    <th><?= $this->Paginator->sort('liendc') ?></th>
                    <th><?= $this->Paginator->sort('tonnagerestant') ?></th>
                    <th><?= $this->Paginator->sort('tonnageutilise') ?></th>
                    <th><?= $this->Paginator->sort('nbpaquets') ?></th>
                    <th><?= $this->Paginator->sort('seuil') ?></th>
                    <th><?= $this->Paginator->sort('numdckcc') ?></th>
                    <th><?= $this->Paginator->sort('numtransport') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dc as $dc): ?>
                <tr>
                    <td><?= $this->Number->format($dc->id) ?></td>
                    <td><?= $this->Number->format($dc->num) ?></td>
                    <td><?= h($dc->numdc) ?></td>
                    <td><?= h($dc->numbp) ?></td>
                    <td><?= h($dc->licence) ?></td>
                    <td><?= h($dc->produit) ?></td>
                    <td><?= h($dc->tranche) ?></td>
                    <td><?= h($dc->date) ?></td>
                    <td><?= h($dc->iduser) ?></td>
                    <td><?= h($dc->statut) ?></td>
                    <td><?= $this->Number->format($dc->tonnage) ?></td>
                    <td><?= $this->Number->format($dc->nbitems) ?></td>
                    <td><?= h($dc->liendc) ?></td>
                    <td><?= $this->Number->format($dc->tonnagerestant) ?></td>
                    <td><?= $this->Number->format($dc->tonnageutilise) ?></td>
                    <td><?= $this->Number->format($dc->nbpaquets) ?></td>
                    <td><?= $this->Number->format($dc->seuil) ?></td>
                    <td><?= h($dc->numdckcc) ?></td>
                    <td><?= h($dc->numtransport) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dc->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dc->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dc->id)]) ?>
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