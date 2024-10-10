<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Checkcocontent> $checkcocontent
 */
?>
<div class="checkcocontent index content">
    <?= $this->Html->link(__('New Checkcocontent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Checkcocontent') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('bagid') ?></th>
                    <th><?= $this->Paginator->sort('poids') ?></th>
                    <th><?= $this->Paginator->sort('h2o') ?></th>
                    <th><?= $this->Paginator->sort('co') ?></th>
                    <th><?= $this->Paginator->sort('vpoids') ?></th>
                    <th><?= $this->Paginator->sort('vh2o') ?></th>
                    <th><?= $this->Paginator->sort('vco') ?></th>
                    <th><?= $this->Paginator->sort('produith2o') ?></th>
                    <th><?= $this->Paginator->sort('produitco') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('loadperiod') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($checkcocontent as $checkcocontent): ?>
                <tr>
                    <td><?= $this->Number->format($checkcocontent->id) ?></td>
                    <td><?= h($checkcocontent->imexlot) ?></td>
                    <td><?= h($checkcocontent->bagid) ?></td>
                    <td><?= $this->Number->format($checkcocontent->poids) ?></td>
                    <td><?= $this->Number->format($checkcocontent->h2o) ?></td>
                    <td><?= $this->Number->format($checkcocontent->co) ?></td>
                    <td><?= $this->Number->format($checkcocontent->vpoids) ?></td>
                    <td><?= $this->Number->format($checkcocontent->vh2o) ?></td>
                    <td><?= $this->Number->format($checkcocontent->vco) ?></td>
                    <td><?= $this->Number->format($checkcocontent->produith2o) ?></td>
                    <td><?= $this->Number->format($checkcocontent->produitco) ?></td>
                    <td><?= h($checkcocontent->date) ?></td>
                    <td><?= $this->Number->format($checkcocontent->iduser) ?></td>
                    <td><?= h($checkcocontent->loadperiod) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $checkcocontent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $checkcocontent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $checkcocontent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkcocontent->id)]) ?>
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