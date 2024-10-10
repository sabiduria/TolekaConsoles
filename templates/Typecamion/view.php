<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecamion $typecamion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Typecamion'), ['action' => 'edit', $typecamion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Typecamion'), ['action' => 'delete', $typecamion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typecamion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Typecamion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Typecamion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typecamion view content">
            <h3><?= h($typecamion->type) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($typecamion->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typecamion->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>