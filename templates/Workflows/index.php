<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Workflow> $workflows
 */
?>
<div class="workflows index content">
    <?= $this->Html->link(__('New Workflow'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Workflows') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('status_id') ?></th>
                    <th><?= $this->Paginator->sort('roles_id') ?></th>
                    <th><?= $this->Paginator->sort('steps') ?></th>
                    <th><?= $this->Paginator->sort('product') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($workflows as $workflow): ?>
                <tr>
                    <td><?= $this->Number->format($workflow->id) ?></td>
                    <td><?= $workflow->hasValue('status') ? $this->Html->link($workflow->status->name, ['controller' => 'Statuses', 'action' => 'view', $workflow->status->id]) : '' ?></td>
                    <td><?= $workflow->hasValue('role') ? $this->Html->link($workflow->role->role, ['controller' => 'Roles', 'action' => 'view', $workflow->role->id]) : '' ?></td>
                    <td><?= $this->Number->format($workflow->steps) ?></td>
                    <td><?= h($workflow->product) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $workflow->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $workflow->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $workflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workflow->id)]) ?>
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