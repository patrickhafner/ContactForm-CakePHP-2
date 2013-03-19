<?php echo __d('contactform', 'name'); ?>: <?php echo Sanitize::clean($data['Name']); ?>
<?php echo __d('contactform', 'email'); ?>: <?php echo Sanitize::clean($data['Mail']); ?>

<?php echo __d('contactform', 'message'); ?>: <?php echo Sanitize::stripAll($data['Message']); ?>
----------------------------
<?php echo __d('contactform', 'sent from').' '.Router::url('/', true); ?>