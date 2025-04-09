<?php
require_once 'header.php';
?>
  <main>
    <section class="content">
      <form action="getAnimal.php" method="POST">
        動物名：<input type="text" name="animal">
        <input type="submit" value="送信">
      </form>
    </section>
  </main>
<?php
require_once 'footer.php';
