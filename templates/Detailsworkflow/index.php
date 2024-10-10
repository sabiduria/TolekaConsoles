<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Detailsworkflow> $detailsworkflow
 */
?>
<div class="detailsworkflow index content">
    <?= $this->Html->link(__('New Detailsworkflow'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Detailsworkflow') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idworkflow') ?></th>
                    <th><?= $this->Paginator->sort('rolecmd') ?></th>
                    <th><?= $this->Paginator->sort('action') ?></th>
                    <th><?= $this->Paginator->sort('numsequence') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detailsworkflow as $detailsworkflow): ?>
                <tr>
                    <td><?= $this->Number->format($detailsworkflow->id) ?></td>
                    <td><?= $this->Number->format($detailsworkflow->idworkflow) ?></td>
                    <td><?= $this->Number->format($detailsworkflow->rolecmd) ?></td>
                    <td><?= h($detailsworkflow->action) ?></td>
                    <td><?= $this->Number->format($detailsworkflow->numsequence) ?></td>
                    <td><?= $this->Number->format($detailsworkflow->iduser) ?></td>
                    <td><?= h($detailsworkflow->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $detailsworkflow->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detailsworkflow->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detailsworkflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detailsworkflow->id)]) ?>
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