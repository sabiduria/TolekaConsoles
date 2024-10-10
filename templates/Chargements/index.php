<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Chargement> $chargements
 */
?>
<div class="chargements index content">
    <?= $this->Html->link(__('New Chargement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chargements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numlot') ?></th>
                    <th><?= $this->Paginator->sort('loadassistant') ?></th>
                    <th><?= $this->Paginator->sort('loadhelper1') ?></th>
                    <th><?= $this->Paginator->sort('loadhelper2') ?></th>
                    <th><?= $this->Paginator->sort('operateur1') ?></th>
                    <th><?= $this->Paginator->sort('operateur2') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('user') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chargements as $chargement): ?>
                <tr>
                    <td><?= $this->Number->format($chargement->id) ?></td>
                    <td><?= h($chargement->numlot) ?></td>
                    <td><?= h($chargement->loadassistant) ?></td>
                    <td><?= h($chargement->loadhelper1) ?></td>
                    <td><?= h($chargement->loadhelper2) ?></td>
                    <td><?= h($chargement->operateur1) ?></td>
                    <td><?= h($chargement->operateur2) ?></td>
                    <td><?= h($chargement->date) ?></td>
                    <td><?= h($chargement->user) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chargement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chargement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chargement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chargement->id)]) ?>
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