<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Formation> $formations
 */
?>
<div class="formations index content">
    <?= $this->Html->link(__('New Formation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Formations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('nomformation') ?></th>
                    <th><?= $this->Paginator->sort('periode') ?></th>
                    <th><?= $this->Paginator->sort('etablissement') ?></th>
                    <th><?= $this->Paginator->sort('lieu') ?></th>
                    <th><?= $this->Paginator->sort('pieceobtenue') ?></th>
                    <th><?= $this->Paginator->sort('nompiece') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($formations as $formation): ?>
                <tr>
                    <td><?= $this->Number->format($formation->id) ?></td>
                    <td><?= $this->Number->format($formation->iduser) ?></td>
                    <td><?= h($formation->nomformation) ?></td>
                    <td><?= h($formation->periode) ?></td>
                    <td><?= h($formation->etablissement) ?></td>
                    <td><?= h($formation->lieu) ?></td>
                    <td><?= h($formation->pieceobtenue) ?></td>
                    <td><?= h($formation->nompiece) ?></td>
                    <td><?= h($formation->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $formation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formation->id)]) ?>
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