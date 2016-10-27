<?php

/* /home/ubuntu/workspace/themes/pizzaland/layouts/default.htm */
class __TwigTemplate_2e40b76c2b92323c8528703d0a101b6cd89c74ae5b9a1138c1cf99f5a9fd6cdf extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>

        <title>Pizza Land - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta charset=\"utf-8\">
        
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"author\" content=\"\">

        ";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/font-awesome.min.css", 1 => "assets/css/linea-icomoon.css", 2 => "assets/css/bootstrap.min.css", 3 => "assets/css/main.css", 4 => "assets/css/slick.css", 5 => "assets/css/magnific-popup.css"));
        // line 22
        echo "\" rel=\"stylesheet\">

        <link rel=\"apple-touch-icon\" href=\"assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"assets/favicon.png\">
        <script src=";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/vendor/modernizr.js");
        echo "></script>

    </head>
    <body>

        ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
        ";
        // line 33
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 34
        echo "
        ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "        
        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"";
        // line 39
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/bootstrap.min.js", 1 => "assets/js/vendor/jquery.appear.js", 2 => "assets/js/vendor/imagesloaded.pkgd.min.js", 3 => "assets/js/vendor/isotope.pkgd.min.js", 4 => "assets/js/vendor/jquery.infinitescroll.min.js", 5 => "assets/js/vendor/slick.min.js", 6 => "assets/js/vendor/jquery.tweet.min.js", 7 => "assets/js/vendor/jquery.magnific-popup.min.js", 8 => "assets/js/main.js", 9 => "assets/js/vendor/jquery.validate.min.js", 10 => "assets/js/contact.js"));
        // line 51
        echo "\"></script>

        <!-- GMap3-->
        <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
        <script src=";
        // line 55
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/vendor/gmap3.min.js");
        echo "></script>
        <script src=";
        // line 56
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/mymap.js");
        echo "></script>

        ";
        // line 58
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 59
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 60
        echo "    
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/pizzaland/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 60,  107 => 59,  100 => 58,  95 => 56,  91 => 55,  85 => 51,  83 => 39,  78 => 36,  74 => 35,  71 => 34,  69 => 33,  66 => 32,  62 => 31,  54 => 26,  48 => 22,  45 => 14,  42 => 13,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="no-js">*/
/*     <head>*/
/* */
/*         <title>Pizza Land - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta charset="utf-8">*/
/*         */
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="author" content="">*/
/* */
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/css/font-awesome.min.css',*/
/*             'assets/css/linea-icomoon.css',           */
/*             'assets/css/bootstrap.min.css',*/
/*             'assets/css/main.css',*/
/*             'assets/css/slick.css',*/
/*             'assets/css/magnific-popup.css',*/
/*            */
/*         ]|theme }}" rel="stylesheet">*/
/* */
/*         <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">*/
/*         <link rel="icon" type="image/png" href="assets/favicon.png">*/
/*         <script src={{ "assets/js/vendor/modernizr.js"| theme }}></script>*/
/* */
/*     </head>*/
/*     <body>*/
/* */
/*         {% partial "header" %}*/
/* */
/*         {% page %}*/
/* */
/*         {% partial "footer" %}*/
/*         */
/*         <!-- Scripts -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="{{ [*/
/*             'assets/js/bootstrap.min.js',*/
/*             'assets/js/vendor/jquery.appear.js',*/
/*             'assets/js/vendor/imagesloaded.pkgd.min.js',*/
/*             'assets/js/vendor/isotope.pkgd.min.js',*/
/*             'assets/js/vendor/jquery.infinitescroll.min.js',*/
/*             'assets/js/vendor/slick.min.js',*/
/*             'assets/js/vendor/jquery.tweet.min.js',*/
/*             'assets/js/vendor/jquery.magnific-popup.min.js',*/
/*             'assets/js/main.js',*/
/*             'assets/js/vendor/jquery.validate.min.js',*/
/*             'assets/js/contact.js',*/
/*         ]|theme }}"></script>*/
/* */
/*         <!-- GMap3-->*/
/*         <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>*/
/*         <script src={{ "assets/js/vendor/gmap3.min.js"| theme }}></script>*/
/*         <script src={{ "assets/js/mymap.js" | theme }}></script>*/
/* */
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*     */
/*     </body>*/
/* </html>*/
