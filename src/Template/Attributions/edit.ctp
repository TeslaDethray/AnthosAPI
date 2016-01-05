<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attribution->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attribution->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Attributions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plants'), ['controller' => 'Plants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plant'), ['controller' => 'Plants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Definitions'), ['controller' => 'Definitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Definition'), ['controller' => 'Definitions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attributions form large-9 medium-8 columns content">
    <?= $this->Form->create($attribution) ?>
    <fieldset>
        <legend><?= __('Edit Attribution') ?></legend>
        <?php
            echo $this->Form->input('plant_id', ['options' => $plants]);
            echo $this->Form->input('definition_id', ['options' => $definitions]);
            echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true]);
            echo $this->Form->input('created_at');
            echo $this->Form->input('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
