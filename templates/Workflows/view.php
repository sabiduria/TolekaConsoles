<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workflow $workflow
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Workflow'), ['action' => 'edit', $workflow->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Workflow'), ['action' => 'delete', $workflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workflow->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Workflows'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Workflow'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="workflows view content">
            <h3><?= h($workflow->product) ?></h3>
            <table>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $workflow->hasValue('status') ? $this->Html->link($workflow->status->name, ['controller' => 'Statuses', 'action' => 'view', $workflow->status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $workflow->hasValue('role') ? $this->Html->link($workflow->role->role, ['controller' => 'Roles', 'action' => 'view', $workflow->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= h($workflow->product) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($workflow->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Steps') ?></th>
                    <td><?= $this->Number->format($workflow->steps) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>