<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Forecast $forecast
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Forecast'), ['action' => 'edit', $forecast->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Forecast'), ['action' => 'delete', $forecast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forecast->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Forecast'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Forecast'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="forecast view content">
            <h3><?= h($forecast->moisgestion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Moisgestion') ?></th>
                    <td><?= h($forecast->moisgestion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($forecast->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Scancu') ?></th>
                    <td><?= $this->Number->format($forecast->scancu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Scancoh') ?></th>
                    <td><?= $this->Number->format($forecast->scancoh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Charcu') ?></th>
                    <td><?= $this->Number->format($forecast->charcu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Charcoh') ?></th>
                    <td><?= $this->Number->format($forecast->charcoh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Doccu') ?></th>
                    <td><?= $this->Number->format($forecast->doccu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Doccoh') ?></th>
                    <td><?= $this->Number->format($forecast->doccoh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dispcu') ?></th>
                    <td><?= $this->Number->format($forecast->dispcu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dispcoh') ?></th>
                    <td><?= $this->Number->format($forecast->dispcoh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($forecast->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($forecast->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>