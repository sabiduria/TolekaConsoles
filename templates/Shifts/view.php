<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Shift'), ['action' => 'edit', $shift->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Shift'), ['action' => 'delete', $shift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Shifts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Shift'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="shifts view content">
            <h3><?= h($shift->nomshift) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomshift') ?></th>
                    <td><?= h($shift->nomshift) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($shift->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($shift->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($shift->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Heuredebut') ?></th>
                    <td><?= h($shift->heuredebut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Heurefin') ?></th>
                    <td><?= h($shift->heurefin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($shift->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>