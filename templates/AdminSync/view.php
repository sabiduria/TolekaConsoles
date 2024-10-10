<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminSync $adminSync
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Admin Sync'), ['action' => 'edit', $adminSync->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Admin Sync'), ['action' => 'delete', $adminSync->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminSync->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Admin Sync'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Admin Sync'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="adminSync view content">
            <h3><?= h($adminSync->createdby) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cohbag') ?></th>
                    <td><?= $adminSync->hasValue('cohbag') ? $this->Html->link($adminSync->cohbag->bagid, ['controller' => 'Cohbags', 'action' => 'view', $adminSync->cohbag->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cohlot') ?></th>
                    <td><?= $adminSync->hasValue('cohlot') ? $this->Html->link($adminSync->cohlot->numlot, ['controller' => 'Cohlots', 'action' => 'view', $adminSync->cohlot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($adminSync->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($adminSync->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($adminSync->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cubundle Id') ?></th>
                    <td><?= $this->Number->format($adminSync->cubundle_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($adminSync->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($adminSync->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $adminSync->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>