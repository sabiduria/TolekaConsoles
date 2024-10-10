<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Niveauetude $niveauetude
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Niveauetude'), ['action' => 'edit', $niveauetude->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Niveauetude'), ['action' => 'delete', $niveauetude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $niveauetude->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Niveauetude'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Niveauetude'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="niveauetude view content">
            <h3><?= h($niveauetude->niveau) ?></h3>
            <table>
                <tr>
                    <th><?= __('Niveau') ?></th>
                    <td><?= h($niveauetude->niveau) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($niveauetude->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($niveauetude->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($niveauetude->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($niveauetude->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>