<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Menu> $menu
 */
?>
<div class="menu index content">
    <?= $this->Html->link(__('New Menu'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Menu') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idmenu') ?></th>
                    <th><?= $this->Paginator->sort('idpage') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('page') ?></th>
                    <th><?= $this->Paginator->sort('nommenu') ?></th>
                    <th><?= $this->Paginator->sort('icone') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('typex') ?></th>
                    <th><?= $this->Paginator->sort('langue') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $menu): ?>
                <tr>
                    <td><?= $this->Number->format($menu->idmenu) ?></td>
                    <td><?= $this->Number->format($menu->idpage) ?></td>
                    <td><?= h($menu->url) ?></td>
                    <td><?= h($menu->page) ?></td>
                    <td><?= h($menu->nommenu) ?></td>
                    <td><?= h($menu->icone) ?></td>
                    <td><?= $this->Number->format($menu->iduser) ?></td>
                    <td><?= h($menu->datemiseajour) ?></td>
                    <td><?= h($menu->statut) ?></td>
                    <td><?= h($menu->typex) ?></td>
                    <td><?= h($menu->langue) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $menu->idmenu]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $menu->idmenu]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $menu->idmenu], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->idmenu)]) ?>
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