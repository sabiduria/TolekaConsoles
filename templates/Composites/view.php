<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Composite $composite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Composite'), ['action' => 'edit', $composite->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Composite'), ['action' => 'delete', $composite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $composite->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Composites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Composite'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="composites view content">
            <h3><?= h($composite->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($composite->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($composite->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($composite->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Threshold') ?></th>
                    <td><?= $this->Number->format($composite->threshold) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>