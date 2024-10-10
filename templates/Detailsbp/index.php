<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Detailsbp> $detailsbp
 */
?>
<div class="detailsbp index content">
    <?= $this->Html->link(__('New Detailsbp'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Detailsbp') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idbp') ?></th>
                    <th><?= $this->Paginator->sort('numbp') ?></th>
                    <th><?= $this->Paginator->sort('numlot') ?></th>
                    <th><?= $this->Paginator->sort('horse') ?></th>
                    <th><?= $this->Paginator->sort('trailer1') ?></th>
                    <th><?= $this->Paginator->sort('trailer2') ?></th>
                    <th><?= $this->Paginator->sort('transporteur') ?></th>
                    <th><?= $this->Paginator->sort('chauffeur') ?></th>
                    <th><?= $this->Paginator->sort('passeport') ?></th>
                    <th><?= $this->Paginator->sort('nationalite') ?></th>
                    <th><?= $this->Paginator->sort('nbpaquets') ?></th>
                    <th><?= $this->Paginator->sort('poidsnet') ?></th>
                    <th><?= $this->Paginator->sort('poidsbrut') ?></th>
                    <th><?= $this->Paginator->sort('sealdgda') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detailsbp as $detailsbp): ?>
                <tr>
                    <td><?= $this->Number->format($detailsbp->id) ?></td>
                    <td><?= $this->Number->format($detailsbp->idbp) ?></td>
                    <td><?= h($detailsbp->numbp) ?></td>
                    <td><?= h($detailsbp->numlot) ?></td>
                    <td><?= h($detailsbp->horse) ?></td>
                    <td><?= h($detailsbp->trailer1) ?></td>
                    <td><?= h($detailsbp->trailer2) ?></td>
                    <td><?= h($detailsbp->transporteur) ?></td>
                    <td><?= h($detailsbp->chauffeur) ?></td>
                    <td><?= h($detailsbp->passeport) ?></td>
                    <td><?= h($detailsbp->nationalite) ?></td>
                    <td><?= $this->Number->format($detailsbp->nbpaquets) ?></td>
                    <td><?= $this->Number->format($detailsbp->poidsnet) ?></td>
                    <td><?= $this->Number->format($detailsbp->poidsbrut) ?></td>
                    <td><?= h($detailsbp->sealdgda) ?></td>
                    <td><?= $this->Number->format($detailsbp->iduser) ?></td>
                    <td><?= h($detailsbp->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $detailsbp->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detailsbp->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detailsbp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detailsbp->id)]) ?>
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