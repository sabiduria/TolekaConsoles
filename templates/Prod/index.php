<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Prod> $prod
 */
?>
<div class="prod index content">
    <?= $this->Html->link(__('New Prod'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Prod') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('designation') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prod as $prod): ?>
                <tr>
                    <td><?= $this->Number->format($prod->id) ?></td>
                    <td><?= h($prod->produit) ?></td>
                    <td><?= h($prod->designation) ?></td>
                    <td><?= h($prod->type) ?></td>
                    <td><?= h($prod->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prod->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prod->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prod->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prod->id)]) ?>
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