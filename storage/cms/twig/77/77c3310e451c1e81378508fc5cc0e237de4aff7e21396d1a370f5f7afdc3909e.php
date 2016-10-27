<?php

/* /home/ubuntu/workspace/themes/pizzaland/partials/header.htm */
class __TwigTemplate_3cbf1c0cbb4f6a3902ac85a4c9385a91fc995513fbb988cd0603c16d0dce62f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Preloader -->
<div class=\"preloader flex flex-middle\">
    <img src=";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/svg/cube.svg");
        echo " class=\"preloader-cubes\" alt=\"Загрузка...\" />
</div>

<!-- Navbar -->
<nav class=\"navbar navbar-default navbar-fixed-top is-transparent\" role=\"navigation\">
    <div class=\"container\">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Pizza Land</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\" role=\"menubar\">
                <li role=\"menuitem\"><a href=\"/\">Главная</a></li>
                <li role=\"menuitem\"><a href=\"/about\">О нас</a></li>
                <li role=\"menuitem\"><a href=\"/contact\">Контакты</a></li>
                <li role=\"menuitem\"><a href=\"/basket\"> <i class=\"fa fa-shopping-cart\"> Корзина <span class=\"badge\">";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("basket"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</span></i></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/pizzaland/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 27,  23 => 3,  19 => 1,);
    }
}
/* <!-- Preloader -->*/
/* <div class="preloader flex flex-middle">*/
/*     <img src={{"assets/img/svg/cube.svg" | theme }} class="preloader-cubes" alt="Загрузка..." />*/
/* </div>*/
/* */
/* <!-- Navbar -->*/
/* <nav class="navbar navbar-default navbar-fixed-top is-transparent" role="navigation">*/
/*     <div class="container">*/
/* */
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">Pizza Land</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav navbar-right" role="menubar">*/
/*                 <li role="menuitem"><a href="/">Главная</a></li>*/
/*                 <li role="menuitem"><a href="/about">О нас</a></li>*/
/*                 <li role="menuitem"><a href="/contact">Контакты</a></li>*/
/*                 <li role="menuitem"><a href="/basket"> <i class="fa fa-shopping-cart"> Корзина <span class="badge">{% partial 'basket'%}</span></i></a></li>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
