<?php require VIEW_ROOT . '/templates/header.php'  ?>

  <?php if(!$page): ?>
    <p>NO page found.</p>
  <?php else: ?>

    <h2><?php echo e($page['title']); ?></h2>

    <p><?php echo e($page['body']); ?></p>

    <p>
      Created on <?php echo $page['created']->format('jS M Y'); ?>
      <?php if($page['updated']): ?>
        Last updated <?php  echo $page['updated']->format('jS M Y h:i a'); ?>
      <?php endif; ?>
    </p>
  <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php';  ?>
