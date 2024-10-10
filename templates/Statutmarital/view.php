<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statutmarital $statutmarital
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Statutmarital'), ['action' => 'edit', $statutmarital->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Statutmarital'), ['action' => 'delete', $statutmarital->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statutmarital->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Statutmarital'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Statutmarital'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="statutmarital view content">
            <h3><?= h($statutmarital->statutmarital) ?></h3>
            <table>
                <tr>
                    <th><?= __('Statutmarital') ?></th>
                    <td><?= h($statutmarital->statutmarital) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($statutmarital->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>