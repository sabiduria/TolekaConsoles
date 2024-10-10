<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bp> $bp
 */
?>
<div class="bp index content">
    <?= $this->Html->link(__('New Bp'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bp') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('num') ?></th>
                    <th><?= $this->Paginator->sort('numbp') ?></th>
                    <th><?= $this->Paginator->sort('licence') ?></th>
                    <th><?= $this->Paginator->sort('typeproduit') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('tranche') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('agence') ?></th>
                    <th><?= $this->Paginator->sort('moyentransport') ?></th>
                    <th><?= $this->Paginator->sort('numautorisation') ?></th>
                    <th><?= $this->Paginator->sort('etablipar') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('modifiepar') ?></th>
                    <th><?= $this->Paginator->sort('datemodification') ?></th>
                    <th><?= $this->Paginator->sort('approuvepar') ?></th>
                    <th><?= $this->Paginator->sort('dateapprobation') ?></th>
                    <th><?= $this->Paginator->sort('numdc') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bp as $bp): ?>
                <tr>
                    <td><?= $this->Number->format($bp->id) ?></td>
                    <td><?= $this->Number->format($bp->num) ?></td>
                    <td><?= h($bp->numbp) ?></td>
                    <td><?= h($bp->licence) ?></td>
                    <td><?= h($bp->typeproduit) ?></td>
                    <td><?= h($bp->produit) ?></td>
                    <td><?= h($bp->tranche) ?></td>
                    <td><?= h($bp->destination) ?></td>
                    <td><?= h($bp->agence) ?></td>
                    <td><?= h($bp->moyentransport) ?></td>
                    <td><?= h($bp->numautorisation) ?></td>
                    <td><?= h($bp->etablipar) ?></td>
                    <td><?= h($bp->date) ?></td>
                    <td><?= h($bp->modifiepar) ?></td>
                    <td><?= h($bp->datemodification) ?></td>
                    <td><?= h($bp->approuvepar) ?></td>
                    <td><?= h($bp->dateapprobation) ?></td>
                    <td><?= h($bp->numdc) ?></td>
                    <td><?= h($bp->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bp->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bp->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bp->id)]) ?>
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