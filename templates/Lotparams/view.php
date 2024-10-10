<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lotparam $lotparam
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lotparam'), ['action' => 'edit', $lotparam->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lotparam'), ['action' => 'delete', $lotparam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotparam->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lotparams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lotparam'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lotparams view content">
            <h3><?= h($lotparam->lotnumber) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lotnumber') ?></th>
                    <td><?= h($lotparam->lotnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= h($lotparam->product) ?></td>
                </tr>
                <tr>
                    <th><?= __('Physicalgrade') ?></th>
                    <td><?= h($lotparam->physicalgrade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unit') ?></th>
                    <td><?= h($lotparam->unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($lotparam->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($lotparam->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lotparam->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lotparam->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lotparam->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $lotparam->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>