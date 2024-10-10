<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domaineetude $domaineetude
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Domaineetude'), ['action' => 'edit', $domaineetude->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Domaineetude'), ['action' => 'delete', $domaineetude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domaineetude->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Domaineetude'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Domaineetude'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="domaineetude view content">
            <h3><?= h($domaineetude->domaine) ?></h3>
            <table>
                <tr>
                    <th><?= __('Domaine') ?></th>
                    <td><?= h($domaineetude->domaine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($domaineetude->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>