<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moisgestion $moisgestion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Moisgestion'), ['action' => 'edit', $moisgestion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Moisgestion'), ['action' => 'delete', $moisgestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moisgestion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Moisgestion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Moisgestion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="moisgestion view content">
            <h3><?= h($moisgestion->moisgestion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Moisgestion') ?></th>
                    <td><?= h($moisgestion->moisgestion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($moisgestion->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>