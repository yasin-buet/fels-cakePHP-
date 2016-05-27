<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $answer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="answers form large-9 medium-8 columns content">
    <?= $this->Form->create($answer) ?>
    <fieldset>
        <legend><?= __('Edit Answer') ?></legend>
        <?php
            echo $this->Form->input('word_id', ['options' => $words]);
            echo $this->Form->input('answer');
            echo $this->Form->input('is_correct');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
