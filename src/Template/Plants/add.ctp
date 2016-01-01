<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Plants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Attributions'), ['controller' => 'Attributions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attribution'), ['controller' => 'Attributions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bouquets'), ['controller' => 'Bouquets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bouquet'), ['controller' => 'Bouquets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plants form large-9 medium-8 columns content">
    <?= $this->Form->create($plant) ?>
    <fieldset>
        <legend><?= __('Add Plant') ?></legend>
        <?php
            echo $this->Form->input('common_name');
            echo $this->Form->input('color');
            echo $this->Form->input('type');
            echo $this->Form->input('variety');
            echo $this->Form->input('seasonality');
            echo $this->Form->input('vase_life');
            echo $this->Form->input('difficulty');
            echo $this->Form->input('notes');
            echo $this->Form->input('created_at');
            echo $this->Form->input('updated_at');
            echo $this->Form->input('scientific_name_id');
            echo $this->Form->input('bouquets._ids', ['options' => $bouquets]);
            echo $this->Form->input('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
