<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Teneur> $teneurs
 */
?>
<div class="teneurs index content">
    <?= $this->Html->link(__('New Teneur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Teneurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('teneur') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teneurs as $teneur): ?>
                <tr>
                    <td><?= $this->Number->format($teneur->id) ?></td>
                    <td><?= h($teneur->produit) ?></td>
                    <td><?= h($teneur->teneur) ?></td>
                    <td><?= h($teneur->statut) ?></td>
                    <td><?= h($teneur->date) ?></td>
                    <td><?= $this->Number->format($teneur->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $teneur->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teneur->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teneur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teneur->id)]) ?>
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