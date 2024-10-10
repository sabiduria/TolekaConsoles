<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\TypeControleSsh> $typeControleSsh
 */
?>
<div class="typeControleSsh index content">
    <?= $this->Html->link(__('New Type Controle Ssh'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Type Controle Ssh') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('controle') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($typeControleSsh as $typeControleSsh): ?>
                <tr>
                    <td><?= $this->Number->format($typeControleSsh->id) ?></td>
                    <td><?= h($typeControleSsh->controle) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $typeControleSsh->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeControleSsh->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeControleSsh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeControleSsh->id)]) ?>
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