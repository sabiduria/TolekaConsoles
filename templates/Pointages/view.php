<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pointage $pointage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pointage'), ['action' => 'edit', $pointage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pointage'), ['action' => 'delete', $pointage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pointages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pointage'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pointages view content">
            <h3><?= h($pointage->codepointage) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codepointage') ?></th>
                    <td><?= h($pointage->codepointage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($pointage->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($pointage->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descriptionen') ?></th>
                    <td><?= h($pointage->descriptionen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pointage->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coefficient') ?></th>
                    <td><?= $this->Number->format($pointage->coefficient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($pointage->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($pointage->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>