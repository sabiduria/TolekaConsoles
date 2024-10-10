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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $menu->idmenu],
                ['confirm' => __('Are you sure you want to delete # {0}?', $menu->idmenu), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Menu'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="menu form content">
            <?= $this->Form->create($menu) ?>
            <fieldset>
                <legend><?= __('Edit Menu') ?></legend>
                <?php
                    echo $this->Form->control('idpage');
                    echo $this->Form->control('url');
                    echo $this->Form->control('page');
                    echo $this->Form->control('nommenu');
                    echo $this->Form->control('icone');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('typex');
                    echo $this->Form->control('langue');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
