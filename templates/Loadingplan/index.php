<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Loadingplan> $loadingplan
 */
?>
<div class="loadingplan index content">
    <?= $this->Html->link(__('New Loadingplan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Loadingplan') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idprea') ?></th>
                    <th><?= $this->Paginator->sort('tonnagetoload') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('exploaddate') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loadingplan as $loadingplan): ?>
                <tr>
                    <td><?= $this->Number->format($loadingplan->id) ?></td>
                    <td><?= $this->Number->format($loadingplan->idprea) ?></td>
                    <td><?= $this->Number->format($loadingplan->tonnagetoload) ?></td>
                    <td><?= h($loadingplan->produit) ?></td>
                    <td><?= h($loadingplan->exploaddate) ?></td>
                    <td><?= h($loadingplan->date) ?></td>
                    <td><?= $this->Number->format($loadingplan->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $loadingplan->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $loadingplan->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $loadingplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loadingplan->id)]) ?>
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