<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logdb $logdb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Logdb'), ['action' => 'edit', $logdb->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Logdb'), ['action' => 'delete', $logdb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logdb->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Logdb'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Logdb'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="logdb view content">
            <h3><?= h($logdb->table) ?></h3>
            <table>
                <tr>
                    <th><?= __('Table') ?></th>
                    <td><?= h($logdb->table) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($logdb->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($logdb->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($logdb->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($logdb->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>