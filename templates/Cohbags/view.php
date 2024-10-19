<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cohbag $cohbag
 */
?>
<div class="row">
    <!--aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cohbag'), ['action' => 'edit', $cohbag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cohbag'), ['action' => 'delete', $cohbag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cohbag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cohbags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cohbag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside-->
    <div class="column column-80">
        <div class="cohbags view content">
            <h3><?= h($cohbag->bagid) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Bagid') ?></th>
                    <td><?= h($cohbag->bagid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Composite') ?></th>
                    <td><?= h($cohbag->composite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Localisation') ?></th>
                    <td><?= h($cohbag->localisation) ?></td>
                </tr>
                <tr>
                    <th><?= __('H2o') ?></th>
                    <td><?= h($cohbag->h2o) ?></td>
                </tr>
                <tr>
                    <th><?= __('Charge') ?></th>
                    <td><?= h($cohbag->charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Spec') ?></th>
                    <td><?= h($cohbag->spec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lotnumber') ?></th>
                    <td><?= h($cohbag->lotnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imexlot') ?></th>
                    <td><?= h($cohbag->imexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seal') ?></th>
                    <td><?= h($cohbag->seal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cohbag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poids') ?></th>
                    <td><?= $this->Number->format($cohbag->poids) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co') ?></th>
                    <td><?= $this->Number->format($cohbag->co) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Cont') ?></th>
                    <td><?= $this->Number->format($cohbag->co_cont) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uranium') ?></th>
                    <td><?= $this->Number->format($cohbag->uranium) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mg') ?></th>
                    <td><?= $this->Number->format($cohbag->mg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fe') ?></th>
                    <td><?= $this->Number->format($cohbag->fe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zn') ?></th>
                    <td><?= $this->Number->format($cohbag->zn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ca') ?></th>
                    <td><?= $this->Number->format($cohbag->ca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mn') ?></th>
                    <td><?= $this->Number->format($cohbag->mn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ni') ?></th>
                    <td><?= $this->Number->format($cohbag->ni) ?></td>
                </tr>
                <tr>
                    <th><?= __('Al') ?></th>
                    <td><?= $this->Number->format($cohbag->al) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu') ?></th>
                    <td><?= $this->Number->format($cohbag->cu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($cohbag->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vpoids') ?></th>
                    <td><?= $this->Number->format($cohbag->vpoids) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vh2o') ?></th>
                    <td><?= $this->Number->format($cohbag->vh2o) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vco') ?></th>
                    <td><?= $this->Number->format($cohbag->vco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produith2o') ?></th>
                    <td><?= $this->Number->format($cohbag->produith2o) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produitco') ?></th>
                    <td><?= $this->Number->format($cohbag->produitco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateprod') ?></th>
                    <td><?= h($cohbag->dateprod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateload') ?></th>
                    <td><?= h($cohbag->dateload) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateact') ?></th>
                    <td><?= h($cohbag->dateact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateadded') ?></th>
                    <td><?= h($cohbag->dateadded) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datechecked') ?></th>
                    <td><?= h($cohbag->datechecked) ?></td>
                </tr>
                <tr>
                    <th><?= __('Synced') ?></th>
                    <td><?= $cohbag->synced ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
