<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Affectation $affectation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Affectation'), ['action' => 'edit', $affectation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Affectation'), ['action' => 'delete', $affectation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affectation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Affectations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Affectation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="affectations view content">
            <h3><?= h($affectation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $affectation->hasValue('user') ? $this->Html->link($affectation->user->nom, ['controller' => 'Users', 'action' => 'view', $affectation->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($affectation->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($affectation->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($affectation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch Id') ?></th>
                    <td><?= $this->Number->format($affectation->batch_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= $this->Number->format($affectation->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($affectation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($affectation->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Synced') ?></th>
                    <td><?= $affectation->synced ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Isactive') ?></th>
                    <td><?= $affectation->isactive ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $affectation->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>