<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sousmenu2 $sousmenu2
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sousmenu2'), ['action' => 'edit', $sousmenu2->idsousmenu2], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sousmenu2'), ['action' => 'delete', $sousmenu2->idsousmenu2], ['confirm' => __('Are you sure you want to delete # {0}?', $sousmenu2->idsousmenu2), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sousmenu2'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sousmenu2'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sousmenu2 view content">
            <h3><?= h($sousmenu2->url) ?></h3>
            <table>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($sousmenu2->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Page') ?></th>
                    <td><?= h($sousmenu2->page) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomsousmenu2') ?></th>
                    <td><?= h($sousmenu2->nomsousmenu2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($sousmenu2->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomsousmenu2en') ?></th>
                    <td><?= h($sousmenu2->nomsousmenu2en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idsousmenu2') ?></th>
                    <td><?= $this->Number->format($sousmenu2->idsousmenu2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idsousmenu') ?></th>
                    <td><?= $this->Number->format($sousmenu2->idsousmenu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($sousmenu2->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idpage') ?></th>
                    <td><?= $this->Number->format($sousmenu2->idpage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($sousmenu2->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>