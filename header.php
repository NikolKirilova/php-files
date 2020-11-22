<!DOCTYPE html>
<html lang="en">
<head>
      
      <?php wp_head();?>
    
</head>



<body <?php body_class();?>>
    

<header class="main-header">

   <article class="main-header-logo">
                <div class="love">Love</div>
                <div class="dash">|</div>
                <div class="travel"> travel</div>
            </article>
         



    <div class="container-all"  id="myTopnav">

    <?php wp_nav_menu (

        array(


            'theme_location' => 'top-menu',
            'menu_class' => 'navigation',

        )

        );?>
    </div>

    <div class="function">
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
  

    <article class="search-btn">
        <button><i class="fas fa-search"></i></button>
        
    </article>
    
    
  

</header>