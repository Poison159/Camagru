<div id="header">
  <?php if(isset($_SESSION['id'])) { ?>
      <div class="button" onclick="location.href='forms/disconnect.php'">
      </div>
  <?php } else { ?>
    <div class="button" onclick="location.href='index.php'">
    </div>
  <?php } ?>
  <?php if(isset($_SESSION['id'])) { ?>
  <div class="button" onclick="location.href='gallery.php'">
  </div>
  <div class="button" onclick="location.href='views.php'">
  </div>
  <?php } ?>
</div>
