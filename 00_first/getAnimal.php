<?php
$animal = $_POST['animal'];
?>
<?php
require_once 'header.php';
?>
  <main>
    <section class="content">
      <p>動物名：<?php echo $animal; ?></p>
      <p><a href="index.php">もどる</a></p>
    </section>
  </main>
<?php
require_once 'footer.php';