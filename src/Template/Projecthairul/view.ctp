<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projecthairul $projecthairul
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projecthairul'), ['action' => 'edit', $projecthairul->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projecthairul'), ['action' => 'delete', $projecthairul->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projecthairul->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projecthairul'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projecthairul'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projecthairul view large-9 medium-8 columns content">
    <h3><?= h($projecthairul->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($projecthairul->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($projecthairul->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($projecthairul->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($projecthairul->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projecthairul->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projecthairul->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projecthairul->modified) ?></td>
        </tr>
    </table>
</div>
