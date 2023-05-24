
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


 <!-- portfolio
            ----------------------------------------------- -->
            <section id="folio" class="s-folio target-section">

                <div class="row section-header light-on-dark" data-num="02">
                    <h3 class="column lg-12 section-header__pretitle text-pretitle">Наши работы</h3>
                    <div class="column lg-6 stack-on-1100 section-header__primary">
                        <h2 class="title text-display-1">
                            Here are some of our favorite projects we have done lately. Feel free to check them out.
                        </h2>
                    </div>
                    <div class="column lg-6 stack-on-1100 section-header__secondary">
                        <p class="desc">
                        Quia iusto totam facilis ut atque quidem quis maiores iure. 
                        Facilis mollitia enim illo sed et totam commodi. Velit a 
                        recusandae sequi consequatur est dolorum eaque.
                        </p>
                    </div>
                </div> <!-- end section-header -->

                <div id="bricks" class="row bricks">
                    <div class="column lg-12 masonry">
                        <div class="bricks-wrapper">

                            <div class="grid-sizer"></div>

                            <article class="brick brick--double entry">
                                <a href="#modal-01" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="assets/images/folio/white_turban@2x.jpg" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat">Frontend Design</div>
                                        <h4 class="entry__title">White Turban</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick brick--double entry">
                                <a href="#modal-02" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="assets/images/folio/caffeine_and_tulips@2x.jpg" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat">Brand Identity</div>
                                        <h4 class="entry__title">Caffeine & Tulips</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-03" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="assets/images/folio/grayscale@2x.jpg" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat">Product Design</div>
                                        <h4 class="entry__title">Grayscale</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-04" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="assets/images/folio/lamp@2x.jpg" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat">E-Commerce</div>
                                        <h4 class="entry__title">Lamp</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-05" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="assets/images/folio/tropical@2x.jpg" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat">Frontend Design</div>
                                        <h4 class="entry__title">Tropical</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-06" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="assets/images/folio/woodcraft@2x.jpg" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat">E-Commerce</div>
                                        <h4 class="entry__title">Woodcraft</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                        </div> <!-- end bricks-wrapper -->
                    </div> <!-- end masonry -->
                </div> <!-- end bricks -->


                <!-- modal templates popup
                -------------------------------------------- -->
                <div id="modal-01" hidden>
                    <div class="modal-popup">
                        <img src="assets/images/folio/gallery/g-turban.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>White Turban</h5>
                            <p>Odio soluta enim quos sit asperiores rerum rerum repudiandae cum. Vel voluptatem alias qui assumenda iure et expedita voluptatem. Ratione officiis quae.</p>
                            <ul class="modal-popup__cat">
                                <li>UX Research</li>
                                <li>Frontend Design</li>
                            </ul>
                        </div>
            
                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-02" hidden>
                    <div class="modal-popup">
                        <img src="assets/images/folio/gallery/g-tulips.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Caffeine & Tulips</h5>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                            <ul class="modal-popup__cat">
                                <li>Brand Identity</li>
                            </ul>
                        </div>
            
                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-03" hidden>
                    <div class="modal-popup">
                        <img src="assets/images/folio/gallery/g-grayscale.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Grayscale</h5>
                            <p>Exercitationem reprehenderit quod explicabo consequatur aliquid ut magni ut. Deleniti quo corrupti illum velit eveniet ratione necessitatibus ipsam mollitia.</p>
                            <ul class="modal-popup__cat">
                                <li>Product Design</li>
                            </ul>
                        </div>
            
                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-04" hidden>
                    <div class="modal-popup">
                        <img src="assets/images/folio/gallery/g-lamp.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>The Lamp</h5>
                            <p>Dolores velit qui quos nobis. Aliquam delectus voluptas quos possimus non voluptatem voluptas voluptas. Est doloribus eligendi porro doloribus voluptatum.</p>
                            <ul class="modal-popup__cat">
                                <li>E-Commerce</li>
                            </ul>
                        </div>
            
                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-05" hidden>
                    <div class="modal-popup">

                        <img src="assets/images/folio/gallery/g-tropical.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Tropical</h5>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                            <ul class="modal-popup__cat">
                                <li>Frontend Design</li>
                            </ul>
                        </div>
            
                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-06" hidden>
                    <div class="modal-popup">
                        <img src="assets/images/folio/gallery/g-woodcraft.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Woodcraft</h5>
                            <p>Quisquam vel libero consequuntur autem voluptas. Qui aut vero. Omnis fugit mollitia cupiditate voluptas. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                            <ul class="modal-popup__cat">
                                <li>E-Commerce</li>
                                <li>Product Design</li>
                            </ul>
                        </div>
            
                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->
            <?php include("app/include/footer.php"); ?>