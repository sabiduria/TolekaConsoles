<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kcclabresult $kcclabresult
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kcclabresult'), ['action' => 'edit', $kcclabresult->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kcclabresult'), ['action' => 'delete', $kcclabresult->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kcclabresult->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kcclabresults'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kcclabresult'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="kcclabresults view content">
            <h3><?= h($kcclabresult->composite) ?></h3>
            <table>
                <tr>
                    <th><?= __('Composite') ?></th>
                    <td><?= h($kcclabresult->composite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($kcclabresult->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co') ?></th>
                    <td><?= $this->Number->format($kcclabresult->co) ?></td>
                </tr>
                <tr>
                    <th><?= __('Al') ?></th>
                    <td><?= $this->Number->format($kcclabresult->al) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ca') ?></th>
                    <td><?= $this->Number->format($kcclabresult->ca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu') ?></th>
                    <td><?= $this->Number->format($kcclabresult->cu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fe') ?></th>
                    <td><?= $this->Number->format($kcclabresult->fe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mg') ?></th>
                    <td><?= $this->Number->format($kcclabresult->mg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mn') ?></th>
                    <td><?= $this->Number->format($kcclabresult->mn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ni') ?></th>
                    <td><?= $this->Number->format($kcclabresult->ni) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zn') ?></th>
                    <td><?= $this->Number->format($kcclabresult->zn) ?></td>
                </tr>
                <tr>
                    <th><?= __('U') ?></th>
                    <td><?= $this->Number->format($kcclabresult->u) ?></td>
                </tr>
                <tr>
                    <th><?= __('H2o') ?></th>
                    <td><?= $this->Number->format($kcclabresult->h2o) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($kcclabresult->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($kcclabresult->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>