
<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vlasha</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="assets/image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="assets/image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/assets/site.webmanifest">
    
</head>

<header class="site-header" style=" padding-left: 370px; padding-top: 30px;">
<div class="s-header__logo">
                    <a class="logo" value="Refresh Page" href="<?php echo 'Главная' ?>">
                        <img src="/assets/images/Logo (2).svg" alt="Homepage">
                    </a>
                </div>  
  <nav class="site-navigation">
    <ul class="nav">
      <li><a href="<?php echo 'Главная' ?>">Главная</a></li> 
      <li><a href="/reg.php">Регистрация</a></li> 
      <li><a href="/log.php">Вход</a></li> 
    </ul>
  </nav>
  
</header>
<style>
    a {
  text-decoration: none;
  color: black;
}


.site-header { 
  padding: .5em 1em;
  display: flex;
  
  align-items: center;


}

.site-identity h1 {
  font-size: 1.5em;
  margin: .6em 0;
  display: inline-block;
}


.site-navigation ul, 
.site-navigation li {
  margin: 0; 
  padding: 0;
}

.site-navigation li {
  display: inline-block;
  margin: 1.4em 1em 1em 1em;
}
</style>


<section id="about" class="s-about target-section">

                <div class="row section-header" data-num="01">
                    <h3 class="column lg-12 section-header__pretitle pretitle text-pretitle" top:50px;>Кто мы</h3>
                    <div class="column lg-6 stack-on-1100 section-header__primary">
                        <h2 class="title text-display-1">
                        Mueller is a branding agency based in Somewhere. 
                        We shape brand identities and design thoughtful 
                        digital experiences.
                        </h2>
                    </div>
                    <div class="column lg-6 stack-on-1100 section-header__secondary">
                        <p class="desc">
                        Deleniti dolorem reiciendis repellat labore velit dolor nihil qui. 
                        Deserunt sapiente odio quos quisquam dolorem cumque et omnis. 
                        Minima quibusdam sequi consequatur magni non sunt est.
                        </p>
                    </div>
                </div> <!-- end section-header -->

                <div class="row process-list list-block show-ctr block-lg-one-half block-tab-whole">
    
                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <h3 class="h5">Define</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                            Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint aliquam rhoncus elit.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <h3 class="h5">Design</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                            Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores 
                            sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut 
                            magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->
        
                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <h3 class="h5">Build</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                            Non ullam est vel facere et. Qui iusto optio nostrum corrupti et dignissimos. Ipsam ipsam 
                            expedita aspernatur eos harum quo atque tempore non. Magni saepe hic fuga cumque. Nihil 
                            itaque laborum doloribus minus dolorum sint itaque animi et voluptatem.
                            illum nemo rerum voluptate. 
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->
        
                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <h3 class="h5">Launch</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                            Nobis mollitia quo nulla sunt sit error repellat qui. Praesentium minima consequatur. 
                            Aliquid aliquid aut. Asperiores sed temporibus laboriosam delectus optio rerum reiciendis.
                            Quas at illum. Dolores itaque architecto. Magnam voluptatem aperiam. Velit omnis est.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                </div> <!-- end process-list -->

            </section> <!-- end s-about -->
            <?php include("app/include/footer.php"); ?>