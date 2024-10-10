<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nationalite> $nationalite
 */
?>
<div class="nationalite index content">
    <?= $this->Html->link(__('New Nationalite'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nationalite') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nationalite') ?></th>
                    <th><?= $this->Paginator->sort('langue') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nationalite as $nationalite): ?>
                <tr>
                    <td><?= $this->Number->format($nationalite->id) ?></td>
                    <td><?= h($nationalite->nationalite) ?></td>
                    <td><?= h($nationalite->langue) ?></td>
                    <td><?= h($nationalite->statut) ?></td>
                    <td><?= $this->Number->format($nationalite->iduser) ?></td>
                    <td><?= h($nationalite->datemiseajour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $nationalite->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nationalite->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nationalite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nationalite->id)]) ?>
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