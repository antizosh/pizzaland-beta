<?php

/* /home/ubuntu/workspace/themes/pizzaland/pages/index.htm */
class __TwigTemplate_c37b604a726fcb14dbe3a2391f02c33c9fb76f2fb107370143a2ff434fd51134 extends Twig_Template
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
        echo "<!-- Header -->
<header class=\"header hero flex flex-middle\" role=\"banner\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12 col-md-6\">
        <h1>Pizza Land</h1>
        <h4 class=\"snserif\">Лучшая пицца в Алматы</h4>
      </div>
    </div>
  </div>
</header>

<!-- Content -->
<main class=\"main\" role=\"main\">
  <div class=\"container\">
\t
\t<section class=\"masonry\">
\t  <div class=\"grid-sizer\"></div>
\t  <div class=\"gutter-sizer\"></div>
\t 

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 23
            echo "\t  <div class=\"item\">
\t      <article class=\"post\">
\t          <figure class=\"figure square\">
\t              <div class=\"img-trigger\">
\t                  <img src=\"";
            // line 27
            echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute($context["pizza"], "image", array()));
            echo "\" alt=\"img\" />
\t              </div>
\t          </figure>
\t          <section class=\"post-content\">
\t              <h4 class=\"post-title\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "title", array()), "html", null, true);
            echo "</h4>
\t              <h6 class=\"price\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "price", array()), "html", null, true);
            echo " тг</h6>
\t              <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "description", array()), "html", null, true);
            echo "</p>
\t              <form data-request=\"onAdd\" data-request-update=\"basket: '.badge'\">
\t              \t<div class=\"row\">
\t              \t\t<div class=\"col-md-4\">
\t\t              \t\t<input type=\"number\" name=\"quantity\" value='1' min='1' class='form-control'>
\t\t              \t\t<input type=\"hidden\" name=\"pizza_id\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "id", array()), "html", null, true);
            echo "\">
\t\t              \t</div>
\t\t              \t<div class=\"col-md-8\">
\t\t              \t\t<button class=\"btn btn-success form-control\">В Корзину</button>
\t\t              \t</div>
\t              \t</div>
\t              </form>
\t              
\t              
\t          </section>
\t      </article>
\t  </div>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t  
\t</section>
\t
    </div>
    <!-- Scroll top icon-square_up-->
    <a class=\"scroll-top icon icon-arrow-up\"></a>
</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/pizzaland/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 51,  75 => 38,  67 => 33,  63 => 32,  59 => 31,  52 => 27,  46 => 23,  42 => 22,  19 => 1,);
    }
}
/* <!-- Header -->*/
/* <header class="header hero flex flex-middle" role="banner">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-xs-12 col-md-6">*/
/*         <h1>Pizza Land</h1>*/
/*         <h4 class="snserif">Лучшая пицца в Алматы</h4>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
/* <!-- Content -->*/
/* <main class="main" role="main">*/
/*   <div class="container">*/
/* 	*/
/* 	<section class="masonry">*/
/* 	  <div class="grid-sizer"></div>*/
/* 	  <div class="gutter-sizer"></div>*/
/* 	 */
/* */
/*     {% for pizza in menu %}*/
/* 	  <div class="item">*/
/* 	      <article class="post">*/
/* 	          <figure class="figure square">*/
/* 	              <div class="img-trigger">*/
/* 	                  <img src="{{pizza.image | media }}" alt="img" />*/
/* 	              </div>*/
/* 	          </figure>*/
/* 	          <section class="post-content">*/
/* 	              <h4 class="post-title">{{ pizza.title }}</h4>*/
/* 	              <h6 class="price">{{pizza.price}} тг</h6>*/
/* 	              <p>{{ pizza.description}}</p>*/
/* 	              <form data-request="onAdd" data-request-update="basket: '.badge'">*/
/* 	              	<div class="row">*/
/* 	              		<div class="col-md-4">*/
/* 		              		<input type="number" name="quantity" value='1' min='1' class='form-control'>*/
/* 		              		<input type="hidden" name="pizza_id" value="{{pizza.id}}">*/
/* 		              	</div>*/
/* 		              	<div class="col-md-8">*/
/* 		              		<button class="btn btn-success form-control">В Корзину</button>*/
/* 		              	</div>*/
/* 	              	</div>*/
/* 	              </form>*/
/* 	              */
/* 	              */
/* 	          </section>*/
/* 	      </article>*/
/* 	  </div>*/
/* 	  {% endfor %}*/
/* 	  */
/* 	</section>*/
/* 	*/
/*     </div>*/
/*     <!-- Scroll top icon-square_up-->*/
/*     <a class="scroll-top icon icon-arrow-up"></a>*/
/* </main>*/
