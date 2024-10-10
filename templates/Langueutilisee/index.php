<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Langueutilisee> $langueutilisee
 */
?>
<div class="langueutilisee index content">
    <?= $this->Html->link(__('New Langueutilisee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Langueutilisee') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('langue') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($langueutilisee as $langueutilisee): ?>
                <tr>
                    <td><?= $this->Number->format($langueutilisee->id) ?></td>
                    <td><?= h($langueutilisee->langue) ?></td>
                    <td><?= $this->Number->format($langueutilisee->iduser) ?></td>
                    <td><?= h($langueutilisee->datemiseajour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $langueutilisee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $langueutilisee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $langueutilisee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $langueutilisee->id)]) ?>
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