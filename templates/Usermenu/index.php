<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Usermenu> $usermenu
 */
?>
<div class="usermenu index content">
    <?= $this->Html->link(__('New Usermenu'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usermenu') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idmenu') ?></th>
                    <th><?= $this->Paginator->sort('idrole') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usermenu as $usermenu): ?>
                <tr>
                    <td><?= $this->Number->format($usermenu->id) ?></td>
                    <td><?= $this->Number->format($usermenu->idmenu) ?></td>
                    <td><?= $this->Number->format($usermenu->idrole) ?></td>
                    <td><?= $this->Number->format($usermenu->iduser) ?></td>
                    <td><?= h($usermenu->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usermenu->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usermenu->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usermenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usermenu->id)]) ?>
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