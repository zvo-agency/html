<?php 
  $pageTitle = 'Add category| DFSTORE ADMIN';
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
            $pageHeaderText = "Add category";
            
            include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-pageHeader.php';
          ?>    
        </div>
      </div> 
      <div class="c-content">
        <div class="c-content__inner">
          <form class="c-form" id="add_category_form">
            <div class="c-form__flex">
              <div class="c-form__column c-form__column--main">
                <div class="c-form__row">
                  <?php 
                    $input = array(
                      "label" => "Name",
                      "type" => "text",
                      "id" => "category_name",
                      "name" => "name",
                      "value" => "",
                      "placeholder" => "Enter category name"
                    );
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-input.php';
                  ?>
                </div>
                <div class="c-form__row">
                  <?php
                    $textarea= array(
                      "label" => "Description",
                      "id" => "category_description",
                      "name" => "description",
                      "value" => "",
                      "placeholder" => "Enter category description"
                    );
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-textarea.php';
                  ?>
                </div>
                <div class="c-form__row">
                  <div class="c-form__status c-form__status--success">
                    <p>Category is added</p>
                  </div>
                  <div class="c-form__status c-form__status--error">
                    <p>Some error, please try again</p>
                  </div>
                </div>
                <div class="c-form__row">
                  <?php
                    $submitButton= array(
                      "id" => "category_submit",
                      "text" => "Save"
                    );
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-submitButton.php';
                  ?>
                </div>
              </div>
              <div class="c-form__column c-form__column--side">

              </div>
            </div>
          </form>    
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
