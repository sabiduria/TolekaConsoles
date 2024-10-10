<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Prealerte> $prealerte
 */
?>
<div class="prealerte index content">
    <?= $this->Html->link(__('New Prealerte'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Prealerte') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('camion') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('eta') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('datearrivee') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('commentaire') ?></th>
                    <th><?= $this->Paginator->sort('moisgestion') ?></th>
                    <th><?= $this->Paginator->sort('loadingplan') ?></th>
                    <th><?= $this->Paginator->sort('destinationg') ?></th>
                    <th><?= $this->Paginator->sort('exitpoint') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prealerte as $prealerte): ?>
                <tr>
                    <td><?= $this->Number->format($prealerte->id) ?></td>
                    <td><?= $this->Number->format($prealerte->camion) ?></td>
                    <td><?= $this->Number->format($prealerte->destination) ?></td>
                    <td><?= h($prealerte->produit) ?></td>
                    <td><?= h($prealerte->eta) ?></td>
                    <td><?= h($prealerte->position) ?></td>
                    <td><?= h($prealerte->datearrivee) ?></td>
                    <td><?= h($prealerte->date) ?></td>
                    <td><?= $this->Number->format($prealerte->iduser) ?></td>
                    <td><?= h($prealerte->statut) ?></td>
                    <td><?= h($prealerte->commentaire) ?></td>
                    <td><?= h($prealerte->moisgestion) ?></td>
                    <td><?= h($prealerte->loadingplan) ?></td>
                    <td><?= h($prealerte->destinationg) ?></td>
                    <td><?= h($prealerte->exitpoint) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prealerte->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prealerte->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prealerte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prealerte->id)]) ?>
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