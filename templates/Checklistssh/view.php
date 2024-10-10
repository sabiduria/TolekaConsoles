<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Checklistssh $checklistssh
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Checklistssh'), ['action' => 'edit', $checklistssh->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Checklistssh'), ['action' => 'delete', $checklistssh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checklistssh->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Checklistssh'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Checklistssh'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="checklistssh view content">
            <h3><?= h($checklistssh->bus) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bus') ?></th>
                    <td><?= h($checklistssh->bus) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typecontrole') ?></th>
                    <td><?= h($checklistssh->typecontrole) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($checklistssh->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($checklistssh->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datechecking') ?></th>
                    <td><?= h($checklistssh->datechecking) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($checklistssh->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>