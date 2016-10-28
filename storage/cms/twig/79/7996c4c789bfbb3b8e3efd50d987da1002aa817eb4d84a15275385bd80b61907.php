<?php

/* /home/ubuntu/workspace/themes/pizzaland/pages/basket.htm */
class __TwigTemplate_81704a72eaccce5c1602765d8eb3bbb8e90ec15913f6c4c0ab82c75679617ea1 extends Twig_Template
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
 \t<div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
    \t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pizzas"]) ? $context["pizzas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 15
            echo "    \t\t<h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "title", array()), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "quantity", array()), "html", null, true);
            echo "шт. = ";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["pizza"], "price", array()) * $this->getAttribute($context["pizza"], "quantity", array())), "html", null, true);
            echo " тг.</h2>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    \t
    \t<h3>Сумма: ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</h3>
    \t
    ";
        // line 20
        if ((isset($context["user"]) ? $context["user"] : null)) {
            echo "\t
    \t<form data-request=\"onSend\" data-request-redirect=\"/\">
    \t\t<input type=\"text\" name='name' placeholder=\"Имя\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "\" class=\"form-control\">
    \t\t<input type=\"text\" name='phone' placeholder=\"Телефон\" class=\"form-control\">
    \t\t<input type=\"text\" name=\"address\" placeholder=\"Введите адрес\" class=\"form-control\">
    \t\t<input type=\"hidden\" name='order' value=\"";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pizzas"]) ? $context["pizzas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
                // line 26
                echo "    \t\t<h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "title", array()), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "quantity", array()), "html", null, true);
                echo "шт. = ";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["pizza"], "price", array()) * $this->getAttribute($context["pizza"], "quantity", array())), "html", null, true);
                echo " тг.</h2>
    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    \t
    \t<h3>Сумма: ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
            echo "</h3>\">
    \t\t<button type='submit' class=\"btn btn-success\">Отправить заказ</button>
    \t</form>
    ";
        } else {
            // line 33
            echo "    \t<h2>Для отправки заказа нужна <a href=\"";
            echo $this->env->getExtension('CMS')->pageFilter("login");
            echo "\">регистрация</a></h2>
    ";
        }
        // line 35
        echo "    </div>
</div>
    </div>
    <!-- Scroll top icon-square_up-->
    <a class=\"scroll-top icon icon-arrow-up\"></a>
</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/pizzaland/pages/basket.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  97 => 33,  90 => 29,  87 => 28,  74 => 26,  70 => 25,  64 => 22,  59 => 20,  54 => 18,  51 => 17,  38 => 15,  34 => 14,  19 => 1,);
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
/*  	<div class="row">*/
/*     <div class="col-md-8 col-md-offset-2">*/
/*     	{%for pizza in pizzas%}*/
/*     		<h2>{{pizza.title}} x {{pizza.quantity}}шт. = {{pizza.price*pizza.quantity}} тг.</h2>*/
/*     	{% endfor%}*/
/*     	*/
/*     	<h3>Сумма: {{total}}</h3>*/
/*     	*/
/*     {% if user %}	*/
/*     	<form data-request="onSend" data-request-redirect="/">*/
/*     		<input type="text" name='name' placeholder="Имя" value="{{user.name}}" class="form-control">*/
/*     		<input type="text" name='phone' placeholder="Телефон" class="form-control">*/
/*     		<input type="text" name="address" placeholder="Введите адрес" class="form-control">*/
/*     		<input type="hidden" name='order' value="{%for pizza in pizzas%}*/
/*     		<h2>{{pizza.title}} x {{pizza.quantity}}шт. = {{pizza.price*pizza.quantity}} тг.</h2>*/
/*     	{% endfor%}*/
/*     	*/
/*     	<h3>Сумма: {{total}}</h3>">*/
/*     		<button type='submit' class="btn btn-success">Отправить заказ</button>*/
/*     	</form>*/
/*     {%else%}*/
/*     	<h2>Для отправки заказа нужна <a href="{{'login'| page}}">регистрация</a></h2>*/
/*     {%endif%}*/
/*     </div>*/
/* </div>*/
/*     </div>*/
/*     <!-- Scroll top icon-square_up-->*/
/*     <a class="scroll-top icon icon-arrow-up"></a>*/
/* </main>*/
