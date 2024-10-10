<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lc $lc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lc'), ['action' => 'edit', $lc->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lc'), ['action' => 'delete', $lc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lc->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lc'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lc view content">
            <h3><?= h($lc->month) ?></h3>
            <table>
                <tr>
                    <th><?= __('Month') ?></th>
                    <td><?= h($lc->month) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pk') ?></th>
                    <td><?= h($lc->pk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lc->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($lc->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($lc->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($lc->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>