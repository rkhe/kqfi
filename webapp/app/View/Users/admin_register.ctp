<?php $this->pageTitle = 'Register'; ?>
<div class="users form">
<?php echo $this->Form->create('User');?>
    <h2>Register New User</h2>
    <?php
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo '<br />';
    echo $this->Form->submit('Submit', array('class' => 'buttonStyle2'));
    echo $this->Form->end();
    ?>
</div>