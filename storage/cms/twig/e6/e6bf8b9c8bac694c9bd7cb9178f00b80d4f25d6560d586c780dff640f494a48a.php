<?php

/* /home/ubuntu/workspace/themes/pizzaland/pages/contact.htm */
class __TwigTemplate_ace3ce3b0839101b904ff08208111043f5fce829032b84a713e1269395fc83b3 extends Twig_Template
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
                <h1 class=\"page-title\">Контакты</h1>
                <address class=\"address\">
                    мкр Самал-2, 58, Алматы<br>
                    <a href=\"mailto:#\">pizzaland@method.kz</a>
                </address>
            </div>
        </div>
    </div>
</header>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div id=\"mymap\" class=\"mymap\"></div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
        <article class=\"contact\">
            <h3>Свяжитесь с нами</h3>
        </article>
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <!-- Contact Form -->
                <article class=\"contact-form\">
                    <form id=\"contact-form\" role=\"form\">
                        <div class=\"alert alert-success hidden\" id=\"contact-alert-success\">
                            <strong>Спасибо</strong> за ваше сообщение!
                        </div>
                        <div class=\"alert alert-danger hidden\" id=\"contact-alert-error\">
                            <strong>Ошибка!</strong> Попробуйте еще раз.
                        </div>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"name\"></label>
                            <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"Имя\" data-msg-required=\"Введите ваше имя.\" name=\"name\" id=\"name\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"email\"></label>
                            <input type=\"email\" value=\"\" placeholder=\"E-mail\" data-msg-required=\"Введите ваш email.\" data-msg-email=\"Неверный email.\" class=\"form-control\" name=\"email\" id=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"message\"></label>
                            <textarea placeholder=\"Ваше сообщение...\" data-msg-required=\"Ваше ваше сообщение. Хоть что-нибудь :)\" rows=\"4\" class=\"form-control\" name=\"message\" id=\"message\"></textarea>
                        </div>
                        <input type=\"submit\" value=\"Отправить\" class=\"btn btn-submit btn-block\" data-loading-text=\"Загрузка...\">
                    </form>
                </article>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/pizzaland/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <header class="site-header" role="banner">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="page-title">Контакты</h1>*/
/*                 <address class="address">*/
/*                     мкр Самал-2, 58, Алматы<br>*/
/*                     <a href="mailto:#">pizzaland@method.kz</a>*/
/*                 </address>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <div id="mymap" class="mymap"></div>*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-8 col-md-offset-2">*/
/*         <article class="contact">*/
/*             <h3>Свяжитесь с нами</h3>*/
/*         </article>*/
/*         <div class="row">*/
/*             <div class="col-md-8 col-md-offset-2">*/
/*                 <!-- Contact Form -->*/
/*                 <article class="contact-form">*/
/*                     <form id="contact-form" role="form">*/
/*                         <div class="alert alert-success hidden" id="contact-alert-success">*/
/*                             <strong>Спасибо</strong> за ваше сообщение!*/
/*                         </div>*/
/*                         <div class="alert alert-danger hidden" id="contact-alert-error">*/
/*                             <strong>Ошибка!</strong> Попробуйте еще раз.*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="sr-only" for="name"></label>*/
/*                             <input type="text" class="form-control" value="" placeholder="Имя" data-msg-required="Введите ваше имя." name="name" id="name">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="sr-only" for="email"></label>*/
/*                             <input type="email" value="" placeholder="E-mail" data-msg-required="Введите ваш email." data-msg-email="Неверный email." class="form-control" name="email" id="email">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="sr-only" for="message"></label>*/
/*                             <textarea placeholder="Ваше сообщение..." data-msg-required="Ваше ваше сообщение. Хоть что-нибудь :)" rows="4" class="form-control" name="message" id="message"></textarea>*/
/*                         </div>*/
/*                         <input type="submit" value="Отправить" class="btn btn-submit btn-block" data-loading-text="Загрузка...">*/
/*                     </form>*/
/*                 </article>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
