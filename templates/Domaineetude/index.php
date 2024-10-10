<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Domaineetude> $domaineetude
 */
?>
<div class="domaineetude index content">
    <?= $this->Html->link(__('New Domaineetude'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Domaineetude') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('domaine') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($domaineetude as $domaineetude): ?>
                <tr>
                    <td><?= $this->Number->format($domaineetude->id) ?></td>
                    <td><?= h($domaineetude->domaine) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $domaineetude->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $domaineetude->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $domaineetude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domaineetude->id)]) ?>
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