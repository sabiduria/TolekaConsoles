<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tach> $taches
 */
?>
<div class="taches index content">
    <?= $this->Html->link(__('New Tach'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Taches') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('idpj') ?></th>
                    <th><?= $this->Paginator->sort('datelimite') ?></th>
                    <th><?= $this->Paginator->sort('assignea') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('iduser2') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th><?= $this->Paginator->sort('commentaireexec') ?></th>
                    <th><?= $this->Paginator->sort('datecomexec') ?></th>
                    <th><?= $this->Paginator->sort('conclusion') ?></th>
                    <th><?= $this->Paginator->sort('dateconcl') ?></th>
                    <th><?= $this->Paginator->sort('depenseusd') ?></th>
                    <th><?= $this->Paginator->sort('revenus') ?></th>
                    <th><?= $this->Paginator->sort('gainusd') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($taches as $tach): ?>
                <tr>
                    <td><?= $this->Number->format($tach->id) ?></td>
                    <td><?= h($tach->statut) ?></td>
                    <td><?= $this->Number->format($tach->idpj) ?></td>
                    <td><?= h($tach->datelimite) ?></td>
                    <td><?= $this->Number->format($tach->assignea) ?></td>
                    <td><?= $this->Number->format($tach->iduser) ?></td>
                    <td><?= $this->Number->format($tach->iduser2) ?></td>
                    <td><?= h($tach->date) ?></td>
                    <td><?= h($tach->datemiseajour) ?></td>
                    <td><?= h($tach->commentaireexec) ?></td>
                    <td><?= h($tach->datecomexec) ?></td>
                    <td><?= h($tach->conclusion) ?></td>
                    <td><?= h($tach->dateconcl) ?></td>
                    <td><?= $this->Number->format($tach->depenseusd) ?></td>
                    <td><?= $this->Number->format($tach->revenus) ?></td>
                    <td><?= $this->Number->format($tach->gainusd) ?></td>
                    <td><?= $this->Number->format($tach->position) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tach->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tach->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tach->id)]) ?>
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