<?php 
  $pageTitle = 'Complects | DFSTORE ADMIN';
  include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_head.php';
?>
<body>
  <div class="c-main">
    <div class="c-main__head">
      <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-header.php';
      ?>
    </div>
    <div class="c-main__body">
      <div class="c-content">
        <div class="c-content__inner">
          <?php 
            $pageHeaderText = "Complects";
            $pageHeaderButtonText = "Add complect";
            $pageHeaderButtonLink = "/backend/complects/add_complect";
            include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-pageHeader.php';
          ?>    
        </div>
      </div>
    </div>
    <div class="c-main__foot">
      <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-footer.php';
      ?>
    </div>
  </div>
  <?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-navList.php';
  ?>
  <?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_scripts.php';
  ?>
</body>
</html>
