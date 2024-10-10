<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolead1 $rolead1
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rolead1'), ['action' => 'edit', $rolead1->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rolead1'), ['action' => 'delete', $rolead1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolead1->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rolead1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rolead1'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rolead1 view content">
            <h3><?= h($rolead1->role) ?></h3>
            <table>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($rolead1->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rolead1->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>