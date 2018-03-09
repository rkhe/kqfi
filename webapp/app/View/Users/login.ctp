<?php $this->pageTitle = 'Administrator Login'; ?>
<div class="users form">
<?php echo $this->Form->create('User');?>
    <h2>Administrator Login</h2>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->submit('Submit', array('class' => 'buttonStyle2'));

        echo $this->Form->end();?>
</div>