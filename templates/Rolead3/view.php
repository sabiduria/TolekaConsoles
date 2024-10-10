<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolead3 $rolead3
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rolead3'), ['action' => 'edit', $rolead3->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rolead3'), ['action' => 'delete', $rolead3->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolead3->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rolead3'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rolead3'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rolead3 view content">
            <h3><?= h($rolead3->role) ?></h3>
            <table>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($rolead3->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rolead3->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>