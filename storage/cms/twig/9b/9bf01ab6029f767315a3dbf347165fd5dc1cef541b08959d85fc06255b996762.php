<?php

/* /home/ubuntu/workspace/plugins/rainlab/user/components/account/activation_check.htm */
class __TwigTemplate_493ed435fb223d01992b1488924b109e2be1933aa5fb5b2b2971fc6d7aed2305 extends Twig_Template
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
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "is_activated", array())) {
            // line 2
            echo "
    <h3>Your email address has not yet been verified.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/rainlab/user/components/account/activation_check.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if not user.is_activated %}*/
/* */
/*     <h3>Your email address has not yet been verified.</h3>*/
/*     <p>*/
/*         You should verify your account otherwise it may be deleted. Please check your email to verify.*/
/*         <a href="javascript:;" data-request="onSendActivationEmail">Send the verification email again</a>.*/
/*     </p>*/
/* */
/* {% endif %}*/
