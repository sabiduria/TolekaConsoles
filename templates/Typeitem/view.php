<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeitem $typeitem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Typeitem'), ['action' => 'edit', $typeitem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Typeitem'), ['action' => 'delete', $typeitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeitem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Typeitem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Typeitem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typeitem view content">
            <h3><?= h($typeitem->type) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($typeitem->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typeitem->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>