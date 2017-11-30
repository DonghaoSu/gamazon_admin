<?php require_once('../../../private/initialize.php'); ?>

<?php

  $user_set = find_all_users();

?>

<?php $page_title = 'Users'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="users listing">
    <h1>Users</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/users/new.php'); ?>">Create New User</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
  	    <th>Password</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($user = mysqli_fetch_assoc($user_set)) { ?>
        <tr>
          <td><?php echo h($user['id']); ?></td>
          <td><?php echo h($user['name']); ?></td>
          <td><?php echo $user['email']?></td>
    	    <td><?php echo h($user['password']); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/users/show.php?id=' . h(u($user['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/users/edit.php?id=' . h(u($user['id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/users/delete.php?id=' . h(u($user['id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php
      mysqli_free_result($user_set);
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
