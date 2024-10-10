<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sousmenu $sousmenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sousmenu'), ['action' => 'edit', $sousmenu->idsousmenu], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sousmenu'), ['action' => 'delete', $sousmenu->idsousmenu], ['confirm' => __('Are you sure you want to delete # {0}?', $sousmenu->idsousmenu), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sousmenu'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sousmenu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sousmenu view content">
            <h3><?= h($sousmenu->url) ?></h3>
            <table>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($sousmenu->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Page') ?></th>
                    <td><?= h($sousmenu->page) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomsousmenu') ?></th>
                    <td><?= h($sousmenu->nomsousmenu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($sousmenu->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idsousmenu') ?></th>
                    <td><?= $this->Number->format($sousmenu->idsousmenu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idmenu') ?></th>
                    <td><?= $this->Number->format($sousmenu->idmenu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($sousmenu->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($sousmenu->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>