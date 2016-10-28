<?php

/* /home/ubuntu/workspace/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_ef5fd31552913a01d3b56d3cbf682d349cbc60315ae737261722601728802c48 extends Twig_Template
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
        echo "<form
    data-request=\"onRegister\">
    <div class=\"form-group\">
        <label for=\"registerName\">Full Name</label>
        <input
            name=\"name\"
            type=\"text\"
            class=\"form-control\"
            id=\"registerName\"
            placeholder=\"Enter your full name\" />
    </div>

    <div class=\"form-group\">
        <label for=\"registerEmail\">Email</label>
        <input
            name=\"email\"
            type=\"email\"
            class=\"form-control\"
            id=\"registerEmail\"
            placeholder=\"Enter your email\" />
    </div>

    <div class=\"form-group\">
        <label for=\"registerPassword\">Password</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"registerPassword\"
            placeholder=\"Choose a password\" />
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Register</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/rainlab/user/components/account/register.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <form*/
/*     data-request="onRegister">*/
/*     <div class="form-group">*/
/*         <label for="registerName">Full Name</label>*/
/*         <input*/
/*             name="name"*/
/*             type="text"*/
/*             class="form-control"*/
/*             id="registerName"*/
/*             placeholder="Enter your full name" />*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <label for="registerEmail">Email</label>*/
/*         <input*/
/*             name="email"*/
/*             type="email"*/
/*             class="form-control"*/
/*             id="registerEmail"*/
/*             placeholder="Enter your email" />*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <label for="registerPassword">Password</label>*/
/*         <input*/
/*             name="password"*/
/*             type="password"*/
/*             class="form-control"*/
/*             id="registerPassword"*/
/*             placeholder="Choose a password" />*/
/*     </div>*/
/* */
/*     <button type="submit" class="btn btn-default">Register</button>*/
/* </form>*/
/* */
