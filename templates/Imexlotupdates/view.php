<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imexlotupdate $imexlotupdate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Imexlotupdate'), ['action' => 'edit', $imexlotupdate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Imexlotupdate'), ['action' => 'delete', $imexlotupdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imexlotupdate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Imexlotupdates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Imexlotupdate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="imexlotupdates view content">
            <h3><?= h($imexlotupdate->numlot) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numlot') ?></th>
                    <td><?= h($imexlotupdate->numlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oldimexlot') ?></th>
                    <td><?= h($imexlotupdate->oldimexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Newimexlot') ?></th>
                    <td><?= h($imexlotupdate->newimexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($imexlotupdate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($imexlotupdate->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($imexlotupdate->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>