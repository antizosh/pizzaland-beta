<?php

/* /home/ubuntu/workspace/themes/pizzaland/pages/login.htm */
class __TwigTemplate_cc8acbc430886676b9bd3e103f608d5cc694062124b9462c77a320260970bd97 extends Twig_Template
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
        echo "<header class=\"site-header\" role=\"banner\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h1 class=\"page-title\">Корзина</h1>
      </div>
    </div>
  </div>
</header>
<main class=\"main\" role=\"main\">
 <div class=\"container\">
 \t";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo " \t";
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 14
            echo " \t\t<button data-request=\"onLogout\" class=\"btn btn-danger\">Logout</button>
 \t\t
 \t";
        }
        // line 17
        echo " \t
 </div>
 </main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/pizzaland/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  39 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* <header class="site-header" role="banner">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <h1 class="page-title">Корзина</h1>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* <main class="main" role="main">*/
/*  <div class="container">*/
/*  	{% component 'account' %}*/
/*  	{% if user %}*/
/*  		<button data-request="onLogout" class="btn btn-danger">Logout</button>*/
/*  		*/
/*  	{%endif%}*/
/*  	*/
/*  </div>*/
/*  </main>*/
