<div class="c-basic @@classes">
  <div class="inner">
    <div class="c-basic__bgText">Orange</div>
    <div class="row c-basic__top">
      <div class="col-33">
        <h2>BASIC ORANGE</h2>
        <p>Главным отличием нашей одежды является применение лучших компрессионных материалов итальянского производства. Материал не только обеспечивает идеальную посадку женской одежды, 
но также позволяет свободно передвигаться, выполняя различные комплексы упражнений в тренажерном зале. Вне зависимости 
от интенсивности нагрузок, девушки выглядят сногсшибательно 
в  комбинезонах, футболках, лосинах от Designed for Fitness</p>
        <?php 
          $buttonOpenTag = "a href=\"/products\"";
          $buttonCloseTag = "a";
          $buttonText = "Все комбинезоны";
          $buttonModificators = "c-button--small";          

          include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-button.php';
        ?>
      </div>
      <div class="col-66">
        <div class="c-basic__topImg" style="background-image: url(/customer/app/img/content/basic-1.jpg);"></div>
      </div>  
    </div> 
    <div class="c-basic__cards">
      <?php 
        $basicCardFirstImageUrl = "/customer/app/img/content/card-1-1.png";
        $basicCardSecondImageUrl = "/customer/app/img/content/card-1-2.png"; 
        $basicCardName = "Dark Night"; 
        $basicCardPrice = "1200"; 
        $basicCardLink = "/productOne.html"; 

        include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-basicCard.php';
      ?>
      <?php 
        $basicCardFirstImageUrl = "/customer/app/img/content/card-4-1.png";
        $basicCardSecondImageUrl = "/customer/app/img/content/card-4-2.png"; 
        $basicCardName = "Dark Night"; 
        $basicCardPrice = "1200"; 
        $basicCardLink = "/productOne.html"; 

        include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-basicCard.php';
      ?>
      <?php 
        $basicCardFirstImageUrl = "/customer/app/img/content/card-2-1.png";
        $basicCardSecondImageUrl = "/customer/app/img/content/card-2-2.png"; 
        $basicCardName = "Dark Night"; 
        $basicCardPrice = "1200"; 
        $basicCardLink = "/productOne.html"; 

        include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-basicCard.php';
      ?>     
    </div>
  </div>
</div>
