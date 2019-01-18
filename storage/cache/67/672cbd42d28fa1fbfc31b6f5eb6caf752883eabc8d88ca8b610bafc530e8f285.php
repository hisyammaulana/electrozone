<?php

/* default_x/template/common/header.twig */
class __TwigTemplate_35f5721c772e216e8a3d1e5e0a36e0c0d66b0bf1a2af7edb9afbdba3fc9d2577 extends Twig_Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/default_x/stylesheet/stylesheet.min.css\" rel=\"stylesheet\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 29
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "<script src=\"catalog/view/theme/default_x/javascript/common.js\"></script>
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 33
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 36
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</head>
<body onload=\"init()\">

<header class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-4 col-xs-10\">
        <div id=\"logo\" class=\"logo\">
          ";
        // line 47
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 48
            echo "          <a class=\"logo__link\" href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"logo__img img-responsive\"
            /></a>
          ";
        } else {
            // line 51
            echo "          <h1 class=\"logo__title\"><a class=\"logo__link\" href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 53
        echo "        </div>
      </div>

      <div class=\"col-sm-8 col-xs-2\">
        <nav class=\"listMenu pull-right\">
        
          <span class=\"listMenu__link bars visible-sm visible-xs\" onclick=\"openSlideNav()\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></span>
        
          <div class=\"listMenu__wrapperOut\">
            <span class=\"closeButton visible-sm visible-xs\" onclick=\"closeSlideNav()\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>
        
            <!-- Categories -->
        
            <div class=\"listMenu__element\">";
        // line 66
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "</div>
        
            <!-- Cart -->
        
            <div class=\"listMenu__element\">";
        // line 70
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
        
            <!-- Contacts -->
        
            <div class=\"listMenu__element\">
              <span class=\"listMenu__link\" onclick=\"openSection('listMenu__contacts')\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 75
        echo (isset($context["text_contact_menu"]) ? $context["text_contact_menu"] : null);
        echo "</span>
              <div class=\"listMenu__wrapper listMenu__contacts\">
                <span class=\"closeButton visible-sm visible-xs\" onclick=\"closeSection('listMenu__contacts')\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></span>
                <ul class=\"menuDropdown list-unstyled\">
                  <li class=\"menuDropdown__element\">
                    <a class=\"menuDropdown__link\" href=\"tel:";
        // line 80
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> ";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        // line 81
        echo "
                    </a>
                  </li>
                  ";
        // line 84
        if (((isset($context["callback_active"]) ? $context["callback_active"] : null) == 1)) {
            // line 85
            echo "                  <li class=\"menuDropdown__element\">
                    <a class=\"menuDropdown__link\" id=\"button_feedback_header\" data-toggle=\"modal\" href=\"#modalFeedbackHeader\"><i class=\"fa fa-users\"
                        aria-hidden=\"true\"></i> ";
            // line 87
            echo (isset($context["text_button_callback"]) ? $context["text_button_callback"] : null);
            echo "</a>
                  </li>
                  ";
        }
        // line 90
        echo "                  <li class=\"menuDropdown__element\">
                    <a class=\"menuDropdown__link\" href=\"";
        // line 91
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> ";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        // line 92
        echo "
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        
            <!-- Menu -->
        
            <div class=\"listMenu__element\">
              <span class=\"listMenu__link\" onclick=\"openSection('listMenu__menu')\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> ";
        // line 102
        echo (isset($context["text_menu"]) ? $context["text_menu"] : null);
        echo "</span>
              <div class=\"listMenu__wrapper listMenu__menu\">
                <span class=\"closeButton visible-sm visible-xs\" onclick=\"closeSection('listMenu__menu')\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></span>
                <ul class=\"menuDropdown list-unstyled\">
                  <li class=\"menuDropdown__element submenu\">
                    <span class=\"menuDropdown__link submenu__link\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i> ";
        // line 107
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "
                    </span>
                    <div class=\"menuDropdown__wrapper submenu__element\">
                      <span class=\"closeButton submenu__close visible-sm visible-xs\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></span>
                      <ul class=\"menuDropdown list-unstyled\">
                        ";
        // line 112
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 113
            echo "                        <li class=\"menuDropdown__element\"><a class=\"menuDropdown__link\" href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                        <li class=\"menuDropdown__element\"><a class=\"menuDropdown__link\" href=\"";
            // line 114
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
                        <li class=\"menuDropdown__element\"><a class=\"menuDropdown__link\" href=\"";
            // line 115
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            // line 116
            echo "</a></li>
                        <li class=\"menuDropdown__element\"><a class=\"menuDropdown__link\" href=\"";
            // line 117
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
                        <li class=\"menuDropdown__element\"><a class=\"menuDropdown__link\" href=\"";
            // line 118
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
                        ";
        } else {
            // line 120
            echo "                        <li class=\"menuDropdown__element\"><a class=\"menuDropdown__link\" href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                        <li class=\"menuDropdown__element\"><a class=\"menuDropdown__link\" href=\"";
            // line 121
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
                        ";
        }
        // line 123
        echo "                      </ul>
                    </div>
                  </li>
                  <li class=\"menuDropdown__element\"><a id=\"wishlist-total\" class=\"menuDropdown__link\" href=\"";
        // line 126
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\"><i class=\"fa fa-heart-o\"
                        aria-hidden=\"true\"></i> <span>";
        // line 127
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
                  <li class=\"menuDropdown__element submenu\">";
        // line 128
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "</li>
                  <li class=\"menuDropdown__element submenu\">";
        // line 129
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "</li>
                  <li class=\"menuDropdown__element\">";
        // line 130
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</li>
                </ul>
              </div>
            </div>
        
          </div>
        </nav>
        </div>

    </div>
  </div>
</header>

<!-- Modal window callback -->

";
        // line 145
        if (((isset($context["callback_active"]) ? $context["callback_active"] : null) == 1)) {
            // line 146
            echo "<div class=\"modal fade\" id=\"modalFeedbackHeader\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <div style=\"display:inline-block; width: 100%; text-align:right;\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <form class=\"form-horizontal\" id=\"form-feedback-header\">
          <div class=\"form-group required\">
            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-name-header\">";
            // line 158
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
              <input type=\"text\" name=\"name\" value=\"";
            // line 159
            echo (isset($context["name_callback"]) ? $context["name_callback"] : null);
            echo "\" id=\"input-name-header\" class=\"form-control\" />
            </div>
            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-phone-header\">";
            // line 162
            echo (isset($context["entry_phone"]) ? $context["entry_phone"] : null);
            echo "</label>
              <input type=\"text\" name=\"phone\" value=\"";
            // line 163
            echo (isset($context["phone_callback"]) ? $context["phone_callback"] : null);
            echo "\" id=\"input-phone-header\" class=\"form-control\" />
            </div>
          </div>
        </form>
        <button type=\"button\" id=\"button_send_feedback_header\" data-loading-text=\"";
            // line 167
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo             // line 168
(isset($context["text_send"]) ? $context["text_send"] : null);
            echo "</button>
      </div>
    </div>
  </div>
</div>
<script>
  \$('#button_send_feedback_header').on('click', function () {
    \$.ajax({
      url: 'index.php?route=common/header/write',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-feedback-header\").serialize(),
      beforeSend: function () {
        \$('#button_send_feedback_header').button('loading');
      },
      complete: function () {
        \$('#button_send_feedback_header').button('reset');
      },
      success: function (json) {
        \$('.alert-success, .alert-danger').remove();
        if (json['error']) {
          \$('#content').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }
        if (json['success']) {
          \$('#content').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
          \$('input[name=\\'name\\']').val('');
          \$('input[name=\\'phone\\']').val('');
        }
      }
    });
  });
</script>
";
        }
        // line 201
        echo "
<main class=\"main\">";
    }

    public function getTemplateName()
    {
        return "default_x/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 201,  394 => 168,  391 => 167,  384 => 163,  380 => 162,  374 => 159,  370 => 158,  356 => 146,  354 => 145,  336 => 130,  332 => 129,  328 => 128,  324 => 127,  320 => 126,  315 => 123,  308 => 121,  301 => 120,  294 => 118,  288 => 117,  285 => 116,  281 => 115,  275 => 114,  268 => 113,  266 => 112,  258 => 107,  250 => 102,  238 => 92,  234 => 91,  231 => 90,  225 => 87,  221 => 85,  219 => 84,  214 => 81,  210 => 80,  202 => 75,  194 => 70,  187 => 66,  172 => 53,  164 => 51,  151 => 48,  149 => 47,  138 => 38,  130 => 36,  126 => 35,  115 => 33,  111 => 32,  108 => 31,  99 => 29,  95 => 28,  82 => 26,  78 => 25,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" />*/
/* <link href="catalog/view/theme/default_x/stylesheet/stylesheet.min.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/theme/default_x/javascript/common.js"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body onload="init()">*/
/* */
/* <header class="header">*/
/*   <div class="container">*/
/*     <div class="row">*/
/* */
/*       <div class="col-sm-4 col-xs-10">*/
/*         <div id="logo" class="logo">*/
/*           {% if logo %}*/
/*           <a class="logo__link" href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="logo__img img-responsive"*/
/*             /></a>*/
/*           {% else %}*/
/*           <h1 class="logo__title"><a class="logo__link" href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="col-sm-8 col-xs-2">*/
/*         <nav class="listMenu pull-right">*/
/*         */
/*           <span class="listMenu__link bars visible-sm visible-xs" onclick="openSlideNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>*/
/*         */
/*           <div class="listMenu__wrapperOut">*/
/*             <span class="closeButton visible-sm visible-xs" onclick="closeSlideNav()"><i class="fa fa-times" aria-hidden="true"></i></span>*/
/*         */
/*             <!-- Categories -->*/
/*         */
/*             <div class="listMenu__element">{{ menu }}</div>*/
/*         */
/*             <!-- Cart -->*/
/*         */
/*             <div class="listMenu__element">{{ cart }}</div>*/
/*         */
/*             <!-- Contacts -->*/
/*         */
/*             <div class="listMenu__element">*/
/*               <span class="listMenu__link" onclick="openSection('listMenu__contacts')"><i class="fa fa-home" aria-hidden="true"></i> {{ text_contact_menu }}</span>*/
/*               <div class="listMenu__wrapper listMenu__contacts">*/
/*                 <span class="closeButton visible-sm visible-xs" onclick="closeSection('listMenu__contacts')"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>*/
/*                 <ul class="menuDropdown list-unstyled">*/
/*                   <li class="menuDropdown__element">*/
/*                     <a class="menuDropdown__link" href="tel:{{ telephone }}"><i class="fa fa-phone" aria-hidden="true"></i> {{ telephone*/
/*                       }}*/
/*                     </a>*/
/*                   </li>*/
/*                   {% if callback_active == 1 %}*/
/*                   <li class="menuDropdown__element">*/
/*                     <a class="menuDropdown__link" id="button_feedback_header" data-toggle="modal" href="#modalFeedbackHeader"><i class="fa fa-users"*/
/*                         aria-hidden="true"></i> {{ text_button_callback }}</a>*/
/*                   </li>*/
/*                   {% endif %}*/
/*                   <li class="menuDropdown__element">*/
/*                     <a class="menuDropdown__link" href="{{ contact }}"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ text_contact*/
/*                       }}*/
/*                     </a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*         */
/*             <!-- Menu -->*/
/*         */
/*             <div class="listMenu__element">*/
/*               <span class="listMenu__link" onclick="openSection('listMenu__menu')"><i class="fa fa-bars" aria-hidden="true"></i> {{ text_menu }}</span>*/
/*               <div class="listMenu__wrapper listMenu__menu">*/
/*                 <span class="closeButton visible-sm visible-xs" onclick="closeSection('listMenu__menu')"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>*/
/*                 <ul class="menuDropdown list-unstyled">*/
/*                   <li class="menuDropdown__element submenu">*/
/*                     <span class="menuDropdown__link submenu__link"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ text_account }}*/
/*                     </span>*/
/*                     <div class="menuDropdown__wrapper submenu__element">*/
/*                       <span class="closeButton submenu__close visible-sm visible-xs"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>*/
/*                       <ul class="menuDropdown list-unstyled">*/
/*                         {% if logged %}*/
/*                         <li class="menuDropdown__element"><a class="menuDropdown__link" href="{{ account }}">{{ text_account }}</a></li>*/
/*                         <li class="menuDropdown__element"><a class="menuDropdown__link" href="{{ order }}">{{ text_order }}</a></li>*/
/*                         <li class="menuDropdown__element"><a class="menuDropdown__link" href="{{ transaction }}">{{ text_transaction*/
/*                             }}</a></li>*/
/*                         <li class="menuDropdown__element"><a class="menuDropdown__link" href="{{ download }}">{{ text_download }}</a></li>*/
/*                         <li class="menuDropdown__element"><a class="menuDropdown__link" href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                         {% else %}*/
/*                         <li class="menuDropdown__element"><a class="menuDropdown__link" href="{{ register }}">{{ text_register }}</a></li>*/
/*                         <li class="menuDropdown__element"><a class="menuDropdown__link" href="{{ login }}">{{ text_login }}</a></li>*/
/*                         {% endif %}*/
/*                       </ul>*/
/*                     </div>*/
/*                   </li>*/
/*                   <li class="menuDropdown__element"><a id="wishlist-total" class="menuDropdown__link" href="{{ wishlist }}"><i class="fa fa-heart-o"*/
/*                         aria-hidden="true"></i> <span>{{ text_wishlist }}</span></a></li>*/
/*                   <li class="menuDropdown__element submenu">{{ language }}</li>*/
/*                   <li class="menuDropdown__element submenu">{{ currency }}</li>*/
/*                   <li class="menuDropdown__element">{{ search }}</li>*/
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*         */
/*           </div>*/
/*         </nav>*/
/*         </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
/* <!-- Modal window callback -->*/
/* */
/* {% if callback_active == 1 %}*/
/* <div class="modal fade" id="modalFeedbackHeader" tabindex="-1" role="dialog" aria-hidden="true">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <div class="modal-body">*/
/*         <div style="display:inline-block; width: 100%; text-align:right;">*/
/*           <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*             <span aria-hidden="true">&times;</span>*/
/*           </button>*/
/*         </div>*/
/*         <form class="form-horizontal" id="form-feedback-header">*/
/*           <div class="form-group required">*/
/*             <div class="col-sm-12">*/
/*               <label class="control-label" for="input-name-header">{{ entry_name }}</label>*/
/*               <input type="text" name="name" value="{{ name_callback }}" id="input-name-header" class="form-control" />*/
/*             </div>*/
/*             <div class="col-sm-12">*/
/*               <label class="control-label" for="input-phone-header">{{ entry_phone }}</label>*/
/*               <input type="text" name="phone" value="{{ phone_callback }}" id="input-phone-header" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*         <button type="button" id="button_send_feedback_header" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{*/
/*           text_send }}</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script>*/
/*   $('#button_send_feedback_header').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=common/header/write',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-feedback-header").serialize(),*/
/*       beforeSend: function () {*/
/*         $('#button_send_feedback_header').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button_send_feedback_header').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-success, .alert-danger').remove();*/
/*         if (json['error']) {*/
/*           $('#content').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/*         if (json['success']) {*/
/*           $('#content').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*           $('input[name=\'name\']').val('');*/
/*           $('input[name=\'phone\']').val('');*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* </script>*/
/* {% endif %}*/
/* */
/* <main class="main">*/
