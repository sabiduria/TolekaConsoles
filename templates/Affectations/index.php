<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Affectation> $affectations
 */
?>
<div class="affectations index content">
    <?= $this->Html->link(__('New Affectation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Affectations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('batch_id') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('synced') ?></th>
                    <th><?= $this->Paginator->sort('isactive') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($affectations as $affectation): ?>
                <tr>
                    <td><?= $this->Number->format($affectation->id) ?></td>
                    <td><?= $affectation->hasValue('user') ? $this->Html->link($affectation->user->nom, ['controller' => 'Users', 'action' => 'view', $affectation->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($affectation->batch_id) ?></td>
                    <td><?= $this->Number->format($affectation->state) ?></td>
                    <td><?= h($affectation->synced) ?></td>
                    <td><?= h($affectation->isactive) ?></td>
                    <td><?= h($affectation->created) ?></td>
                    <td><?= h($affectation->modified) ?></td>
                    <td><?= h($affectation->createdby) ?></td>
                    <td><?= h($affectation->modifiedby) ?></td>
                    <td><?= h($affectation->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $affectation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $affectation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $affectation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affectation->id)]) ?>
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