<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Section $section
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Section'), ['action' => 'edit', $section->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Section'), ['action' => 'delete', $section->id], ['confirm' => __('Are you sure you want to delete # {0}?', $section->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Section'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sections view content">
            <h3><?= h($section->nomsection) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomsection') ?></th>
                    <td><?= h($section->nomsection) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($section->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>