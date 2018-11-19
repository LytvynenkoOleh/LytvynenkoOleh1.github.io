<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  

  </head>
  <body>
  <?php $this->beginBody() ?>
      <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( function() {
        // run the currently selected effect
        function runEffect() {
          // get effect type from
          var selectedEffect = "blind";
     
          // Most effect types need no options passed by default
           var options = {};
          // some effects have required parameters
           if ( selectedEffect === "scale" ) {
             options = { percent: 50 };
           } else if ( selectedEffect === "size" ) {
             options = { to: { width: 200, height: 60 } };
          }
     
          // Run the effect
          $( "#effect" ).toggle( selectedEffect, options, 500 );
        };
     
        // Set effect from select menu value
        $( document ).on( "click", "#button",function() {
          runEffect();
          
        });
        $( "#effect" ).hide();
      } );
      </script> -->


  
 



    <div class="container-fluid23">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 text25">
            <p><img src="img/phone.png" alt=""><a href="#"> +7 (343) 290-53-29</a> </p>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2 text26">
            <p><img src="img/smartphone.png" alt=""><a href="#"> +7-912-615-64-96</a></p>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 text21">
            <p><img src="img/mail.png" alt=""> <a href="#"> zayavkitut@mail.ru </a></p>
          </div>
          <div class="col-xs-7 col-sm-3 col-md-3 col-lg-3 col-lg-offset-2 text28">
           <a href="#"></a> <p><img src="img/vhod.png"  alt=""> <a href="" data-toggle="modal" data-target="#exampleModalLong" > Вход</a> | <a href=""> Регистрация </a></p>
          </div> 
        </div>
      </div>
    </div>
  </div>
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> -->
  <!-- Launch demo modal -->
<!-- </button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Авторизация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input  type="email" name="" id="" placeholder="Логин или Email">
      </div>
      <div class="modal-body">
        <input class="autor" type="password" name="" id="" placeholder="Пароль" >
      </div>
      <div class="modal-footer">
        <a href="#">Забыли пароль?</a>
        <button type="button" class="btn btn-primary">Войти</button>
      </div>
    </div>
  </div>
</div>
    <div class="container-fluid2">
      <div class="container">
        <div class="row metall2">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 zayavaka">
            <img src="img/zayavki.png" alt="">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 metall">
              <img src="img/liniya.png" alt="">  <p> <span>МЕТАЛЛОПРОДУКЦИЯ</span><br>ПО ДОСТУПНЫМ ЦЕНАМ</p>
          </div>
          <div class="col-xs-12 col-sm-7 col-md-12 col-lg-3 col-lg-offset-1 baton21"> 
            <button type="button" class="btn btn-default but1">Список поставщиков</button> 
          </div> 
          <div class="col-xs-12 col-sm-5 col-md-12 col-lg-3 baton22">  
             <button type="button" class="btn btn-default button1">Разместить заявку</button> 
          </div> 
        </div>
      </div>
    </div>
    
    <div class="container-fluid3 slideInRight">
      
      
      <div class="container">
          <div class="menu5">
             <? echo Nav::widget([
             'options' => ['id' => 'effect','class' => 'navbar-nav navbar-left menu__links-item   ui-corner-all' ],
              'items' => [
                  ['label' => 'Металлопрокат', 'url' => ['/site/index']],
                  ['label' => 'Металлопродукция', 'url' => ['/site/about']],
                  ['label' => 'Транспорт', 'url' => ['/site/contact']],
           
             ],
             'class' => 'menu__links-item'
             ]);?>
          </div>
          <div class="menu4">
             <? echo Nav::widget([
             'options' => ['id' => 'effect','class' => 'navbar-nav navbar-left menu__links-item   ui-corner-all nomob' ],
              'items' => [
                ['label' => 'Металлопрокат', 'url' => ['/site/index']],
                ['label' => 'Металлопродукция', 'url' => ['/site/about']],
                ['label' => 'Транспорт', 'url' => ['/site/contact']],
           
               ],
              'class' => 'menu__links-item'
              ]);?>
              </div>
              <div class="menu_mob_but">
              <button id="button" class="ui-state-default ui-corner-all "> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button>
              </div>
           <?=$content?>   
          </div>
         </div>


       











    <div class="container-fluid10">
    <div class="container122">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text22">
              <h2>ОСТАЛИСЬ ВОПРОСЫ?</h2>
              <p>отправьте заявку и мы перезвоним <br>
                  вам в ближайшее время</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-12 col-lg-8 forma11">
              <form action="" method="POST" class="form-inline" role="form">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 box15">
                      <div class="form-group">
                          <label class="sr-only" for="">label</label>
                          <input type="email" class="form-control" id="" placeholder="Ваш телефон">
                          <img src="img/mobile-phone копия 2.png" class="phone300" alt="">
                          <img src="img/hriniya2.png" alt="" class="hriniya">
                        </div>
                  </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 box16">
                    <div class="form-group">
                        <label class="sr-only" for="">label</label>
                        <input type="email" class="form-control" id="" placeholder="Ваше имя">
                        <img src="img/4elovek1.png" class="phone300" alt="">
                        <img src="img/hriniya3.png" class="hriniya" alt="">
                    </div>
                </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 knopka42">
                  <button type="submit" class="btn btn-primary">Оставить заявку</button>
              </div>
              </div>
              </form> 
            </div> 
          </div>
        </div>

      <div class="container">
        <div class="row"> 
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 zayavki22">
            <h2>ЗАЯВКИ ТУТ</h2>
            <img src="img/hriniya4.png" alt="">
            <p> <span> МЕТАЛЛОПРОДУКЦИЯ ПО</span> ДОСТУПНЫМ ЦЕНАМ</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-md-offset-1 kolonki">
            <div class="row">             
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-4 padenie4">
                <a href="#">Металлопрокат</a>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-4 padenie">
                <a href="#">Металлопродукция</a>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-4 padenie3">
                <a href="#">Транспорт</a>
              </div> 
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-lg-offset-1 padenie2">
            <p><img src="img/pismo12.png" alt=""><a href=""> zayavkitut@mail.ru </a></p>
            <p><img src="img/phone12.png" alt=""><a href="">  +7(343)290-53-29</a> </p>
            <p> <img src="img/smartphone12.png" alt="">  <a href="">    +7-912-615-64-96</a></p>
          </div>  
        </div>
      </div>
    </div>
    <div class="container-fluid9">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text22">
              <h2>ОСТАЛИСЬ ВОПРОСЫ?</h2>
              <p>отправьте заявку и мы перезвоним <br>
                  вам в ближайшее время</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 forma11">
              <form action="" method="POST" class="form-inline" role="form">
                <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 box15">
                      <div class="form-group">
                          <label class="sr-only" for="">label</label>
                          <input type="email" class="form-control" id="" placeholder="Ваш телефон">
                          <img src="img/mobile-phone копия 2.png" class="phone300" alt="">
                          <img src="img/hriniya2.png" alt="" class="hriniya">
                        </div>
                  </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 box16">
                    <div class="form-group">
                        <label class="sr-only" for="">label</label>
                        <input type="email" class="form-control" id="" placeholder="Ваше имя">
                        <img src="img/4elovek1.png" class="phone300" alt="">
                        <img src="img/hriniya3.png" class="hriniya" alt="">
                    </div>
                </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 knopka42">
                  <button type="submit" class="btn btn-primary">Оставить заявку</button>
              </div>
              </div>
              </form> 
            </div> 
          </div>
        </div>
      </div> 
     <div class="container-fluid11">
       <div class="container">
         <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4 pad">
            <p>© 2007 zayavkitut.ru, все права защищены</p>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 col-md-offset-1 polit43">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 text-center polit3">
                  <p>Cоц сети:</p>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 polit2">
                <div class="row">
                  
                      <a href="#"> <img src="img/vk.png" alt=""> </a>
                  
                      <a href="#"> <img src="img/fb.png" alt=""> </a>
                 
                  
                      <a href="#"> <img src="img/twitt.png" alt=""> </a>
                  
                      <a href="#"> <img src="img/insta.png" alt=""> </a>
                  
                  
                      <a href="#"> <img src="img/ok.png" alt=""> </a>
                  
                </div>
              </div>    
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3  polit">
            <a href="#">Политика конфиденциальности </a>
          </div>
        </div>
       </div>
     </div>

    
    <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
              </div>
              <div class="modal-body">
               <div class="row">
                 
               </div>
              </div>
            </div>
          </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
   <!-- <script> src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"</script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      new WOW().init();
    </script>
    <script>
      $(".item").click(function(){
        $("#myCarousel").carousel(1);
        });
      $(document).ready(
          function() {
              $("html").niceScroll({cursorcolor:"#000"});
          }
      );
      $('.carousel').carousel({
        interval: 2000,
        pause: 'hover',
        wrap: true
      });
      
    
   
     
   
    </script> -->
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>