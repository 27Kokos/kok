<header class="site-header">
<div class="s-header__logo">
                    <a href="<?php echo 'Главная' ?>" class="logo" value="Refresh Page" >
                        <img src="/assets/images/Logo (2).svg" alt="Homepage" style=" margin-bottom: 0px; margin-top: 20px;">
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
  color: white;
}


.site-header { 
  padding: .5em 1em;
  display: flex;
  justify-content: center;

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