<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Couleurcamion> $couleurcamion
 */
?>
<div class="couleurcamion index content">
    <?= $this->Html->link(__('New Couleurcamion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Couleurcamion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('couleur') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($couleurcamion as $couleurcamion): ?>
                <tr>
                    <td><?= $this->Number->format($couleurcamion->id) ?></td>
                    <td><?= h($couleurcamion->couleur) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $couleurcamion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $couleurcamion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $couleurcamion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couleurcamion->id)]) ?>
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