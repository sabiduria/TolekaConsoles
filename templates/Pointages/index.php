<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pointage> $pointages
 */
?>
<div class="pointages index content">
    <?= $this->Html->link(__('New Pointage'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pointages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codepointage') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('coefficient') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th><?= $this->Paginator->sort('descriptionen') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pointages as $pointage): ?>
                <tr>
                    <td><?= $this->Number->format($pointage->id) ?></td>
                    <td><?= h($pointage->codepointage) ?></td>
                    <td><?= h($pointage->description) ?></td>
                    <td><?= h($pointage->type) ?></td>
                    <td><?= $this->Number->format($pointage->coefficient) ?></td>
                    <td><?= $this->Number->format($pointage->iduser) ?></td>
                    <td><?= h($pointage->datemiseajour) ?></td>
                    <td><?= h($pointage->descriptionen) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pointage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pointage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pointage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointage->id)]) ?>
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