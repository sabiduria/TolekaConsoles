<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detailsworkflow $detailsworkflow
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detailsworkflow'), ['action' => 'edit', $detailsworkflow->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detailsworkflow'), ['action' => 'delete', $detailsworkflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detailsworkflow->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detailsworkflow'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detailsworkflow'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detailsworkflow view content">
            <h3><?= h($detailsworkflow->action) ?></h3>
            <table>
                <tr>
                    <th><?= __('Action') ?></th>
                    <td><?= h($detailsworkflow->action) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detailsworkflow->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idworkflow') ?></th>
                    <td><?= $this->Number->format($detailsworkflow->idworkflow) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rolecmd') ?></th>
                    <td><?= $this->Number->format($detailsworkflow->rolecmd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numsequence') ?></th>
                    <td><?= $this->Number->format($detailsworkflow->numsequence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($detailsworkflow->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($detailsworkflow->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>