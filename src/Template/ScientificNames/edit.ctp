<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $scientificName->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $scientificName->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Scientific Names'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plants'), ['controller' => 'Plants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plant'), ['controller' => 'Plants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scientificNames form large-9 medium-8 columns content">
    <?= $this->Form->create($scientificName) ?>
    <fieldset>
        <legend><?= __('Edit Scientific Name') ?></legend>
        <?php
            echo $this->Form->input('kingdom');
            echo $this->Form->input('phylum');
            echo $this->Form->input('class');
            echo $this->Form->input('order');
            echo $this->Form->input('family');
            echo $this->Form->input('genus');
            echo $this->Form->input('species');
            echo $this->Form->input('created_at');
            echo $this->Form->input('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
