<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Checklistssh> $checklistssh
 */
?>
<div class="checklistssh index content">
    <?= $this->Html->link(__('New Checklistssh'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Checklistssh') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('bus') ?></th>
                    <th><?= $this->Paginator->sort('datechecking') ?></th>
                    <th><?= $this->Paginator->sort('typecontrole') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($checklistssh as $checklistssh): ?>
                <tr>
                    <td><?= $this->Number->format($checklistssh->id) ?></td>
                    <td><?= h($checklistssh->bus) ?></td>
                    <td><?= h($checklistssh->datechecking) ?></td>
                    <td><?= h($checklistssh->typecontrole) ?></td>
                    <td><?= $this->Number->format($checklistssh->iduser) ?></td>
                    <td><?= h($checklistssh->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $checklistssh->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $checklistssh->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $checklistssh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checklistssh->id)]) ?>
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