<?php require VIEW_ROOT . '/templates/header.php'  ?>

  <h2>EDIT page</h2>

  <form action="<?php echo BASE_URL; ?>/admin/edit.php" method="post">
    <label for="label">
      label
      <input type="text" name="label" id="label" value="<?php echo e($page['label']); ?>">
    </label><br>
    <label for="title">
      title
      <input type="text" name="title" id="title" value="<?php echo e($page['title']); ?>">
    </label><br>
    <label for="slug">
      slug
      <input type="text" name="slug" id="slug" value="<?php echo e($page['slug']); ?>">
    </label><br>
    <label for="body">
      body
      <textarea name="body" rows="8" cols="80"><?php echo e($page['body']); ?></textarea>
    </label>
    <input type="hidden" name="id" value="<?php echo e($page['id']); ?>">
    <input type="submit" name="" value="Edit">
  </form>

<?php require VIEW_ROOT . '/templates/footer.php'  ?>
