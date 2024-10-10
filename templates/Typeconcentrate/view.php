<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeconcentrate $typeconcentrate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Typeconcentrate'), ['action' => 'edit', $typeconcentrate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Typeconcentrate'), ['action' => 'delete', $typeconcentrate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeconcentrate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Typeconcentrate'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Typeconcentrate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typeconcentrate view content">
            <h3><?= h($typeconcentrate->nom) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($typeconcentrate->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typeconcentrate->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>