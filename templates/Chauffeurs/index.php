<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Chauffeur> $chauffeurs
 */
?>
<div class="chauffeurs index content">
    <?= $this->Html->link(__('New Chauffeur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chauffeurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('prenomch') ?></th>
                    <th><?= $this->Paginator->sort('nomch') ?></th>
                    <th><?= $this->Paginator->sort('telch') ?></th>
                    <th><?= $this->Paginator->sort('pays') ?></th>
                    <th><?= $this->Paginator->sort('passeportch') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('datevisa') ?></th>
                    <th><?= $this->Paginator->sort('datepass') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('camion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chauffeurs as $chauffeur): ?>
                <tr>
                    <td><?= $this->Number->format($chauffeur->id) ?></td>
                    <td><?= h($chauffeur->prenomch) ?></td>
                    <td><?= h($chauffeur->nomch) ?></td>
                    <td><?= h($chauffeur->telch) ?></td>
                    <td><?= h($chauffeur->pays) ?></td>
                    <td><?= h($chauffeur->passeportch) ?></td>
                    <td><?= h($chauffeur->date) ?></td>
                    <td><?= h($chauffeur->datevisa) ?></td>
                    <td><?= h($chauffeur->datepass) ?></td>
                    <td><?= $this->Number->format($chauffeur->iduser) ?></td>
                    <td><?= h($chauffeur->statut) ?></td>
                    <td><?= h($chauffeur->camion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chauffeur->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chauffeur->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chauffeur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chauffeur->id)]) ?>
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