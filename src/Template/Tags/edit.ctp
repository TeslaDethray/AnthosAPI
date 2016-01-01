<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bouquets'), ['controller' => 'Bouquets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bouquet'), ['controller' => 'Bouquets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Definitions'), ['controller' => 'Definitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Definition'), ['controller' => 'Definitions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plants'), ['controller' => 'Plants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plant'), ['controller' => 'Plants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tags form large-9 medium-8 columns content">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Edit Tag') ?></legend>
        <?php
            echo $this->Form->input('tag');
            echo $this->Form->input('created_at');
            echo $this->Form->input('updated_at');
            echo $this->Form->input('bouquets._ids', ['options' => $bouquets]);
            echo $this->Form->input('definitions._ids', ['options' => $definitions]);
            echo $this->Form->input('plants._ids', ['options' => $plants]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
