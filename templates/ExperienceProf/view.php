<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExperienceProf $experienceProf
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Experience Prof'), ['action' => 'edit', $experienceProf->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Experience Prof'), ['action' => 'delete', $experienceProf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experienceProf->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Experience Prof'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Experience Prof'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="experienceProf view content">
            <h3><?= h($experienceProf->periode) ?></h3>
            <table>
                <tr>
                    <th><?= __('Periode') ?></th>
                    <td><?= h($experienceProf->periode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Entreprise') ?></th>
                    <td><?= h($experienceProf->entreprise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fonction') ?></th>
                    <td><?= h($experienceProf->fonction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville') ?></th>
                    <td><?= h($experienceProf->ville) ?></td>
                </tr>
                <tr>
                    <th><?= __('Raison') ?></th>
                    <td><?= h($experienceProf->raison) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($experienceProf->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($experienceProf->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($experienceProf->iduser) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>