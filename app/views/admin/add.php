<?php require VIEW_ROOT . '/templates/header.php'  ?>

  <h2>Add page</h2>

  <form action="<?php echo BASE_URL; ?>/admin/add.php" method="post">
    <label for="label">
      label
      <input type="text" name="label" id="label">
    </label><br>
    <label for="title">
      title
      <input type="text" name="title" id="title">
    </label><br>
    <label for="slug">
      slug
      <input type="text" name="slug" id="slug">
    </label><br>
    <label for="body">
      body
      <textarea name="body" rows="8" cols="80"></textarea>
    </label>
    <input type="submit" name="" value="Add">
  </form>

<?php require VIEW_ROOT . '/templates/footer.php'  ?>
