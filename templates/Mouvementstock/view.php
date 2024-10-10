<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mouvementstock $mouvementstock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mouvementstock'), ['action' => 'edit', $mouvementstock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mouvementstock'), ['action' => 'delete', $mouvementstock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mouvementstock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mouvementstock'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mouvementstock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="mouvementstock view content">
            <h3><?= h($mouvementstock->transaction) ?></h3>
            <table>
                <tr>
                    <th><?= __('Transaction') ?></th>
                    <td><?= h($mouvementstock->transaction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= h($mouvementstock->item) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mouvementstock->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iditem') ?></th>
                    <td><?= $this->Number->format($mouvementstock->iditem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qteinit') ?></th>
                    <td><?= $this->Number->format($mouvementstock->qteinit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtetrans') ?></th>
                    <td><?= $this->Number->format($mouvementstock->qtetrans) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtefin') ?></th>
                    <td><?= $this->Number->format($mouvementstock->qtefin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($mouvementstock->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>