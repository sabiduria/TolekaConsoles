<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolead2 $rolead2
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rolead2'), ['action' => 'edit', $rolead2->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rolead2'), ['action' => 'delete', $rolead2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolead2->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rolead2'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rolead2'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rolead2 view content">
            <h3><?= h($rolead2->role) ?></h3>
            <table>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($rolead2->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rolead2->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>