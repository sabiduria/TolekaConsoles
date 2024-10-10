<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeworkflow $typeworkflow
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Typeworkflow'), ['action' => 'edit', $typeworkflow->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Typeworkflow'), ['action' => 'delete', $typeworkflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeworkflow->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Typeworkflow'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Typeworkflow'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typeworkflow view content">
            <h3><?= h($typeworkflow->type) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($typeworkflow->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typeworkflow->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($typeworkflow->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($typeworkflow->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>