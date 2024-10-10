<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Menu'), ['action' => 'edit', $menu->idmenu], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Menu'), ['action' => 'delete', $menu->idmenu], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->idmenu), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Menu'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Menu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="menu view content">
            <h3><?= h($menu->url) ?></h3>
            <table>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($menu->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Page') ?></th>
                    <td><?= h($menu->page) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nommenu') ?></th>
                    <td><?= h($menu->nommenu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icone') ?></th>
                    <td><?= h($menu->icone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($menu->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typex') ?></th>
                    <td><?= h($menu->typex) ?></td>
                </tr>
                <tr>
                    <th><?= __('Langue') ?></th>
                    <td><?= h($menu->langue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idmenu') ?></th>
                    <td><?= $this->Number->format($menu->idmenu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idpage') ?></th>
                    <td><?= $this->Number->format($menu->idpage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($menu->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($menu->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>