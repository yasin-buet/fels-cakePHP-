<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $word->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $word->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Words'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="words form large-9 medium-8 columns content">
    <?= $this->Form->create($word) ?>
    <fieldset>
        <legend><?= __('Edit Word') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('meaning');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
