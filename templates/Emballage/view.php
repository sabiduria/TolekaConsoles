<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emballage $emballage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Emballage'), ['action' => 'edit', $emballage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Emballage'), ['action' => 'delete', $emballage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emballage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Emballage'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Emballage'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="emballage view content">
            <h3><?= h($emballage->emballage) ?></h3>
            <table>
                <tr>
                    <th><?= __('Emballage') ?></th>
                    <td><?= h($emballage->emballage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($emballage->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($emballage->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($emballage->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>