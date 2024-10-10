<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeviceSync $deviceSync
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Device Sync'), ['action' => 'edit', $deviceSync->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Device Sync'), ['action' => 'delete', $deviceSync->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceSync->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Device Sync'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Device Sync'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="deviceSync view content">
            <h3><?= h($deviceSync->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($deviceSync->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imei') ?></th>
                    <td><?= h($deviceSync->imei) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cohbag') ?></th>
                    <td><?= $deviceSync->hasValue('cohbag') ? $this->Html->link($deviceSync->cohbag->bagid, ['controller' => 'Cohbags', 'action' => 'view', $deviceSync->cohbag->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cohlot') ?></th>
                    <td><?= $deviceSync->hasValue('cohlot') ? $this->Html->link($deviceSync->cohlot->numlot, ['controller' => 'Cohlots', 'action' => 'view', $deviceSync->cohlot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($deviceSync->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($deviceSync->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($deviceSync->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cubundle Id') ?></th>
                    <td><?= $this->Number->format($deviceSync->cubundle_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($deviceSync->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($deviceSync->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $deviceSync->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>