<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logcon $logcon
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Logcon'), ['action' => 'edit', $logcon->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Logcon'), ['action' => 'delete', $logcon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logcon->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Logcon'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Logcon'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="logcon view content">
            <h3><?= h($logcon->user) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= h($logcon->user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etat') ?></th>
                    <td><?= h($logcon->etat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Checked') ?></th>
                    <td><?= h($logcon->checked) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jour') ?></th>
                    <td><?= h($logcon->jour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($logcon->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($logcon->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>