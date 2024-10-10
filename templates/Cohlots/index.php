<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cohlot> $cohlots
 */
?>
<div class="cohlots index content">
    <?= $this->Html->link(__('New Cohlot'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cohlots') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idtrip') ?></th>
                    <th><?= $this->Paginator->sort('numlot') ?></th>
                    <th><?= $this->Paginator->sort('numimex') ?></th>
                    <th><?= $this->Paginator->sort('spec') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('paysdest') ?></th>
                    <th><?= $this->Paginator->sort('corridor') ?></th>
                    <th><?= $this->Paginator->sort('horse') ?></th>
                    <th><?= $this->Paginator->sort('trailer1') ?></th>
                    <th><?= $this->Paginator->sort('trailer2') ?></th>
                    <th><?= $this->Paginator->sort('transporteur') ?></th>
                    <th><?= $this->Paginator->sort('moisgestion') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('tonnage') ?></th>
                    <th><?= $this->Paginator->sort('tonnageload') ?></th>
                    <th><?= $this->Paginator->sort('sealdgda') ?></th>
                    <th><?= $this->Paginator->sort('numbp') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('physicalgrade') ?></th>
                    <th><?= $this->Paginator->sort('chemicalgrade') ?></th>
                    <th><?= $this->Paginator->sort('unite') ?></th>
                    <th><?= $this->Paginator->sort('numdc') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('sealsecurite') ?></th>
                    <th><?= $this->Paginator->sort('synced') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cohlots as $cohlot): ?>
                <tr>
                    <td><?= $this->Number->format($cohlot->id) ?></td>
                    <td><?= $this->Number->format($cohlot->idtrip) ?></td>
                    <td><?= h($cohlot->numlot) ?></td>
                    <td><?= h($cohlot->numimex) ?></td>
                    <td><?= h($cohlot->spec) ?></td>
                    <td><?= h($cohlot->date) ?></td>
                    <td><?= h($cohlot->destination) ?></td>
                    <td><?= h($cohlot->paysdest) ?></td>
                    <td><?= h($cohlot->corridor) ?></td>
                    <td><?= h($cohlot->horse) ?></td>
                    <td><?= h($cohlot->trailer1) ?></td>
                    <td><?= h($cohlot->trailer2) ?></td>
                    <td><?= h($cohlot->transporteur) ?></td>
                    <td><?= h($cohlot->moisgestion) ?></td>
                    <td><?= h($cohlot->statut) ?></td>
                    <td><?= $this->Number->format($cohlot->iduser) ?></td>
                    <td><?= $this->Number->format($cohlot->tonnage) ?></td>
                    <td><?= $this->Number->format($cohlot->tonnageload) ?></td>
                    <td><?= h($cohlot->sealdgda) ?></td>
                    <td><?= h($cohlot->numbp) ?></td>
                    <td><?= h($cohlot->produit) ?></td>
                    <td><?= h($cohlot->physicalgrade) ?></td>
                    <td><?= h($cohlot->chemicalgrade) ?></td>
                    <td><?= h($cohlot->unite) ?></td>
                    <td><?= h($cohlot->numdc) ?></td>
                    <td><?= $this->Number->format($cohlot->year) ?></td>
                    <td><?= h($cohlot->sealsecurite) ?></td>
                    <td><?= h($cohlot->synced) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cohlot->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cohlot->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cohlot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cohlot->id)]) ?>
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