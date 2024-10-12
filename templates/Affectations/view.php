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
            <h3>Affectation of Batch #<?= h($affectation->cohlot->numlot) ?></h3>
            <table>
                <tr>
                    <th><?= __('Affected to') ?></th>
                    <td><?= $affectation->user->prenom.' '.$affectation->user->nom ?></td>
                </tr>
                <tr>
                    <th><?= __('Created by') ?></th>
                    <td><?= h($affectation->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified by') ?></th>
                    <td><?= h($affectation->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch Reference') ?></th>
                    <td><?= $affectation->cohlot->numlot ?></td>
                </tr>
                <tr>
                    <th><?= __('Current Status') ?></th>
                    <td><?= $affectation->status->name ?></td>
                </tr>
                <tr>
                    <th><?= __('Created Date') ?></th>
                    <td><?= date('Y-m-d', strtotime($affectation->created)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified Date') ?></th>
                    <td><?= date('Y-m-d', strtotime($affectation->modified)) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
