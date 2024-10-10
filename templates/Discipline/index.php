<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Discipline> $discipline
 */
?>
<div class="discipline index content">
    <?= $this->Html->link(__('New Discipline'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Discipline') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('typesanction') ?></th>
                    <th><?= $this->Paginator->sort('matricule') ?></th>
                    <th><?= $this->Paginator->sort('nomagent') ?></th>
                    <th><?= $this->Paginator->sort('datedebut') ?></th>
                    <th><?= $this->Paginator->sort('datefin') ?></th>
                    <th><?= $this->Paginator->sort('document') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($discipline as $discipline): ?>
                <tr>
                    <td><?= $this->Number->format($discipline->id) ?></td>
                    <td><?= h($discipline->typesanction) ?></td>
                    <td><?= h($discipline->matricule) ?></td>
                    <td><?= h($discipline->nomagent) ?></td>
                    <td><?= h($discipline->datedebut) ?></td>
                    <td><?= h($discipline->datefin) ?></td>
                    <td><?= h($discipline->document) ?></td>
                    <td><?= $this->Number->format($discipline->iduser) ?></td>
                    <td><?= h($discipline->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $discipline->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discipline->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discipline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discipline->id)]) ?>
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