<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photosbag $photosbag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Photosbag'), ['action' => 'edit', $photosbag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Photosbag'), ['action' => 'delete', $photosbag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photosbag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Photosbags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Photosbag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="photosbags view content">
            <h3><?= h($photosbag->bagid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bagid') ?></th>
                    <td><?= h($photosbag->bagid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($photosbag->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($photosbag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($photosbag->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($photosbag->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>