<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Shift> $shifts
 */
?>
<div class="shifts index content">
    <?= $this->Html->link(__('New Shift'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Shifts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomshift') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('heuredebut') ?></th>
                    <th><?= $this->Paginator->sort('heurefin') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shifts as $shift): ?>
                <tr>
                    <td><?= $this->Number->format($shift->id) ?></td>
                    <td><?= h($shift->nomshift) ?></td>
                    <td><?= h($shift->description) ?></td>
                    <td><?= h($shift->heuredebut) ?></td>
                    <td><?= h($shift->heurefin) ?></td>
                    <td><?= $this->Number->format($shift->iduser) ?></td>
                    <td><?= h($shift->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $shift->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shift->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->id)]) ?>
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