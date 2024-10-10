<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pay $pay
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pay'), ['action' => 'edit', $pay->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pay'), ['action' => 'delete', $pay->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pay->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pay'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pays view content">
            <h3><?= h($pay->nompays) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nompays') ?></th>
                    <td><?= h($pay->nompays) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pay->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fraistransport') ?></th>
                    <td><?= $this->Number->format($pay->fraistransport) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($pay->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($pay->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>