<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleoperation $roleoperation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Roleoperation'), ['action' => 'edit', $roleoperation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Roleoperation'), ['action' => 'delete', $roleoperation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleoperation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roleoperations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Roleoperation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="roleoperations view content">
            <h3><?= h($roleoperation->roleop) ?></h3>
            <table>
                <tr>
                    <th><?= __('Roleop') ?></th>
                    <td><?= h($roleoperation->roleop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($roleoperation->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>