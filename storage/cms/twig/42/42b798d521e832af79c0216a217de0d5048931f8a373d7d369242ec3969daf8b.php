<?php

/* /home/ubuntu/workspace/themes/pizzaland/partials/basket.htm */
class __TwigTemplate_815686900c7e86a272498c8b60489b72db0152fcfa6de069528989a559a38d83 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["quantity"]) ? $context["quantity"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/pizzaland/partials/basket.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{quantity}}*/
