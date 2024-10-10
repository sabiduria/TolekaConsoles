<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametresapp $parametresapp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Parametresapp'), ['action' => 'edit', $parametresapp->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Parametresapp'), ['action' => 'delete', $parametresapp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametresapp->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Parametresapp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Parametresapp'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="parametresapp view content">
            <h3><?= h($parametresapp->nomapp) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomapp') ?></th>
                    <td><?= h($parametresapp->nomapp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slogan') ?></th>
                    <td><?= h($parametresapp->slogan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($parametresapp->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emailapp') ?></th>
                    <td><?= h($parametresapp->emailapp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telapp') ?></th>
                    <td><?= h($parametresapp->telapp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomresp') ?></th>
                    <td><?= h($parametresapp->nomresp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telresp') ?></th>
                    <td><?= h($parametresapp->telresp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emailresp') ?></th>
                    <td><?= h($parametresapp->emailresp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Domaine') ?></th>
                    <td><?= h($parametresapp->domaine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($parametresapp->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rccm') ?></th>
                    <td><?= h($parametresapp->rccm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idnat') ?></th>
                    <td><?= h($parametresapp->idnat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numimpot') ?></th>
                    <td><?= h($parametresapp->numimpot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numtva') ?></th>
                    <td><?= h($parametresapp->numtva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomcompagnie') ?></th>
                    <td><?= h($parametresapp->nomcompagnie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Banque') ?></th>
                    <td><?= h($parametresapp->banque) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numcomptebanqueusd') ?></th>
                    <td><?= h($parametresapp->numcomptebanqueusd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numcomptebanquecdf') ?></th>
                    <td><?= h($parametresapp->numcomptebanquecdf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numcompte Airtelmonney') ?></th>
                    <td><?= h($parametresapp->numcompte_airtelmonney) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numcompte Mpesa') ?></th>
                    <td><?= h($parametresapp->numcompte_mpesa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numcompte Orangemonney') ?></th>
                    <td><?= h($parametresapp->numcompte_orangemonney) ?></td>
                </tr>
                <tr>
                    <th><?= __('Version') ?></th>
                    <td><?= h($parametresapp->version) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($parametresapp->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($parametresapp->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Declaration') ?></th>
                    <td><?= $this->Number->format($parametresapp->declaration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prixdocuments') ?></th>
                    <td><?= $this->Number->format($parametresapp->prixdocuments) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($parametresapp->datemiseajour) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($parametresapp->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>