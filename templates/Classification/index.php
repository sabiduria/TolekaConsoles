<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Classification> $classification
 */
?>
<div class="classification index content">
    <?= $this->Html->link(__('New Classification'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Classification') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('classe') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classification as $classification): ?>
                <tr>
                    <td><?= $this->Number->format($classification->id) ?></td>
                    <td><?= h($classification->classe) ?></td>
                    <td><?= h($classification->description) ?></td>
                    <td><?= $this->Number->format($classification->iduser) ?></td>
                    <td><?= h($classification->datemiseajour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $classification->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classification->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classification->id)]) ?>
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