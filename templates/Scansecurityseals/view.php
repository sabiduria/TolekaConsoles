<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scansecurityseal $scansecurityseal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Scansecurityseal'), ['action' => 'edit', $scansecurityseal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Scansecurityseal'), ['action' => 'delete', $scansecurityseal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scansecurityseal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Scansecurityseals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Scansecurityseal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="scansecurityseals view content">
            <h3><?= h($scansecurityseal->numlot) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numlot') ?></th>
                    <td><?= h($scansecurityseal->numlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imexlot') ?></th>
                    <td><?= h($scansecurityseal->imexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sealsscanned') ?></th>
                    <td><?= h($scansecurityseal->sealsscanned) ?></td>
                </tr>
                <tr>
                    <th><?= __('Operator') ?></th>
                    <td><?= h($scansecurityseal->operator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($scansecurityseal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($scansecurityseal->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>