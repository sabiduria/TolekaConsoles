<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Selection $selection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Selection'), ['action' => 'edit', $selection->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Selection'), ['action' => 'delete', $selection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $selection->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Selections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Selection'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="selections view content">
            <h3><?= h($selection->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($selection->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Top') ?></th>
                    <td><?= $this->Number->format($selection->top) ?></td>
                </tr>
                <tr>
                    <th><?= __('Low') ?></th>
                    <td><?= $this->Number->format($selection->low) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($selection->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($selection->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>