<?php

/* default_x/template/common/footer.twig */
class __TwigTemplate_0a01ecda2c80e59b86872927d0c88f8fb0921ad954352ec8646c610cd629ea8c extends Twig_Template
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
        echo "</main>
<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"row footerLinks\">
      ";
        // line 5
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 6
            echo "      <div class=\"col-sm-3 footerLinks__block\">
        <h5 class=\"footerLinks__title\">";
            // line 7
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"footerLinks__list list-unstyled\">
          ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 10
                echo "          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
      </div>
      ";
        }
        // line 15
        echo "      <div class=\"col-sm-3 footerLinks__block\">
        <h5 class=\"footerLinks__title\">";
        // line 16
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"footerLinks__list list-unstyled\">
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 18
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 19
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 20
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3 footerLinks__block\">
        <h5 class=\"footerLinks__title\">";
        // line 24
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"footerLinks__list list-unstyled\">
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 26
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 27
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 28
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 29
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3 footerLinks__block\">
        <h5 class=\"footerLinks__title\">";
        // line 33
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"footerLinks__list list-unstyled\">
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 35
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 36
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 37
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li class=\"footerLinks__listElement\"><a class=\"footerLinks__link\" href=\"";
        // line 38
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <div class=\"row footerPowered\">
      <div class=\"col-sm-12 footerPowered__block\">
        <ul class=\"footerPowered__list footerPowered__powered list-unstyled pull-left\">
          <li class=\"footerPowered__listElement\"><p class=\"footerPowered__text\">";
        // line 45
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p></li>
        </ul>
        <ul class=\"footerPowered__list footerPowered__links list-inline pull-left\">
          ";
        // line 48
        if ((isset($context["instagram"]) ? $context["instagram"] : null)) {
            // line 49
            echo "          <li class=\"footerPowered__listElement\"><a class=\"footerPowered__link\" href=\"";
            echo (isset($context["instagram"]) ? $context["instagram"] : null);
            echo "\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
          ";
        }
        // line 51
        echo "          ";
        if ((isset($context["vk"]) ? $context["vk"] : null)) {
            // line 52
            echo "          <li class=\"footerPowered__listElement\"><a class=\"footerPowered__link\" href=\"";
            echo (isset($context["vk"]) ? $context["vk"] : null);
            echo "\" target=\"_blank\"><i class=\"fa fa-vk\"></i></a></li>
          ";
        }
        // line 54
        echo "          ";
        if ((isset($context["twitter"]) ? $context["twitter"] : null)) {
            // line 55
            echo "          <li class=\"footerPowered__listElement\"><a class=\"footerPowered__link\" href=\"";
            echo (isset($context["twitter"]) ? $context["twitter"] : null);
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
          ";
        }
        // line 57
        echo "          ";
        if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
            // line 58
            echo "          <li class=\"footerPowered__listElement\"><a class=\"footerPowered__link\" href=\"";
            echo (isset($context["facebook"]) ? $context["facebook"] : null);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
          ";
        }
        // line 60
        echo "        </ul>
      </div>
    </div>
  </div>
</footer>
<script src=\"catalog/view/theme/default_x/javascript/libs/jquery.equalheight.min.js\"></script>
<script src=\"catalog/view/theme/default_x/javascript/all.js\"></script> ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 67
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default_x/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 68,  204 => 67,  200 => 66,  192 => 60,  186 => 58,  183 => 57,  177 => 55,  174 => 54,  168 => 52,  165 => 51,  159 => 49,  157 => 48,  151 => 45,  139 => 38,  133 => 37,  127 => 36,  121 => 35,  116 => 33,  107 => 29,  101 => 28,  95 => 27,  89 => 26,  84 => 24,  75 => 20,  69 => 19,  63 => 18,  58 => 16,  55 => 15,  50 => 12,  39 => 10,  35 => 9,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* </main>*/
/* <footer class="footer">*/
/*   <div class="container">*/
/*     <div class="row footerLinks">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3 footerLinks__block">*/
/*         <h5 class="footerLinks__title">{{ text_information }}</h5>*/
/*         <ul class="footerLinks__list list-unstyled">*/
/*           {% for information in informations %}*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3 footerLinks__block">*/
/*         <h5 class="footerLinks__title">{{ text_service }}</h5>*/
/*         <ul class="footerLinks__list list-unstyled">*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3 footerLinks__block">*/
/*         <h5 class="footerLinks__title">{{ text_extra }}</h5>*/
/*         <ul class="footerLinks__list list-unstyled">*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3 footerLinks__block">*/
/*         <h5 class="footerLinks__title">{{ text_account }}</h5>*/
/*         <ul class="footerLinks__list list-unstyled">*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li class="footerLinks__listElement"><a class="footerLinks__link" href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <div class="row footerPowered">*/
/*       <div class="col-sm-12 footerPowered__block">*/
/*         <ul class="footerPowered__list footerPowered__powered list-unstyled pull-left">*/
/*           <li class="footerPowered__listElement"><p class="footerPowered__text">{{ powered }}</p></li>*/
/*         </ul>*/
/*         <ul class="footerPowered__list footerPowered__links list-inline pull-left">*/
/*           {% if instagram %}*/
/*           <li class="footerPowered__listElement"><a class="footerPowered__link" href="{{ instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>*/
/*           {% endif %}*/
/*           {% if vk %}*/
/*           <li class="footerPowered__listElement"><a class="footerPowered__link" href="{{ vk }}" target="_blank"><i class="fa fa-vk"></i></a></li>*/
/*           {% endif %}*/
/*           {% if twitter %}*/
/*           <li class="footerPowered__listElement"><a class="footerPowered__link" href="{{ twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>*/
/*           {% endif %}*/
/*           {% if facebook %}*/
/*           <li class="footerPowered__listElement"><a class="footerPowered__link" href="{{ facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>*/
/*           {% endif %}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* <script src="catalog/view/theme/default_x/javascript/libs/jquery.equalheight.min.js"></script>*/
/* <script src="catalog/view/theme/default_x/javascript/all.js"></script> {% for script in scripts %}*/
/* <script src="{{ script }}"></script> {% endfor %}*/
/* </body>*/
/* */
/* </html>*/
