<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projecthairul $projecthairul
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projecthairul'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="projecthairul form large-9 medium-8 columns content">
    <?= $this->Form->create($projecthairul) ?>
    <fieldset>
        <legend><?= __('Add Projecthairul') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
