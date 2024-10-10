<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Gprealerte> $gprealerte
 */
?>
<div class="gprealerte index content">
    <?= $this->Html->link(__('New Gprealerte'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gprealerte') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('transporteur') ?></th>
                    <th><?= $this->Paginator->sort('horse') ?></th>
                    <th><?= $this->Paginator->sort('trailer1') ?></th>
                    <th><?= $this->Paginator->sort('trailer2') ?></th>
                    <th><?= $this->Paginator->sort('prenom') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('passeport') ?></th>
                    <th><?= $this->Paginator->sort('tonnage') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('pays') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('eta') ?></th>
                    <th><?= $this->Paginator->sort('datearrivee') ?></th>
                    <th><?= $this->Paginator->sort('corridor') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('typetrans') ?></th>
                    <th><?= $this->Paginator->sort('dateexpvisa') ?></th>
                    <th><?= $this->Paginator->sort('dateexppass') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('loadingdate') ?></th>
                    <th><?= $this->Paginator->sort('exitpoint') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gprealerte as $gprealerte): ?>
                <tr>
                    <td><?= $this->Number->format($gprealerte->id) ?></td>
                    <td><?= h($gprealerte->transporteur) ?></td>
                    <td><?= h($gprealerte->horse) ?></td>
                    <td><?= h($gprealerte->trailer1) ?></td>
                    <td><?= h($gprealerte->trailer2) ?></td>
                    <td><?= h($gprealerte->prenom) ?></td>
                    <td><?= h($gprealerte->nom) ?></td>
                    <td><?= h($gprealerte->passeport) ?></td>
                    <td><?= $this->Number->format($gprealerte->tonnage) ?></td>
                    <td><?= h($gprealerte->position) ?></td>
                    <td><?= h($gprealerte->destination) ?></td>
                    <td><?= h($gprealerte->pays) ?></td>
                    <td><?= h($gprealerte->code) ?></td>
                    <td><?= h($gprealerte->eta) ?></td>
                    <td><?= h($gprealerte->datearrivee) ?></td>
                    <td><?= h($gprealerte->corridor) ?></td>
                    <td><?= h($gprealerte->produit) ?></td>
                    <td><?= h($gprealerte->typetrans) ?></td>
                    <td><?= h($gprealerte->dateexpvisa) ?></td>
                    <td><?= h($gprealerte->dateexppass) ?></td>
                    <td><?= h($gprealerte->date) ?></td>
                    <td><?= $this->Number->format($gprealerte->iduser) ?></td>
                    <td><?= h($gprealerte->statut) ?></td>
                    <td><?= h($gprealerte->loadingdate) ?></td>
                    <td><?= h($gprealerte->exitpoint) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gprealerte->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gprealerte->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gprealerte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gprealerte->id)]) ?>
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