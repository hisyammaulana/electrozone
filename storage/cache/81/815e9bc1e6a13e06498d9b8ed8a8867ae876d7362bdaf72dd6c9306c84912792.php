<?php

/* default_x/template/common/currency.twig */
class __TwigTemplate_920393eab934e0cc1cb697b7149067af5f7f15b5e7cf54b217e47d3b56750019 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
  <button class=\"menuDropdown__link submenu__link\">";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                echo " ";
                if (($this->getAttribute($context["currency"], "symbol_left", array()) && ($this->getAttribute($context["currency"], "code", array()) ==                 // line 4
(isset($context["code"]) ? $context["code"] : null)))) {
                    echo " <span class=\"icon\"><strong>";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "</strong></span>
    ";
                } elseif (($this->getAttribute(                // line 5
$context["currency"], "symbol_right", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " <span class=\"icon\"><strong>";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "</strong></span>
    ";
                }
                // line 6
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "</button>
  <div class=\"menuDropdown__wrapper submenu__element\">
    <span class=\"closeButton submenu__close visible-sm visible-xs\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></span>
    <div class=\"submenu__wrapper\">
      <ul class=\"menuDropdown list-unstyled\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                echo " ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 12
                    echo "        <li>
          <button class=\"menuDropdown__link currency-select\" type=\"button\" name=\"";
                    // line 13
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    // line 14
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</button>
        </li>
        ";
                } else {
                    // line 17
                    echo "        <li>
          <button class=\"menuDropdown__link currency-select\" type=\"button\" name=\"";
                    // line 18
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    // line 19
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</button>
        </li>
        ";
                }
                // line 21
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    </div>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 26
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "default_x/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  98 => 22,  92 => 21,  85 => 19,  81 => 18,  78 => 17,  71 => 14,  67 => 13,  64 => 12,  58 => 11,  44 => 6,  37 => 5,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*   <button class="menuDropdown__link submenu__link">{% for currency in currencies %} {% if currency.symbol_left and currency.code*/
/*     == code %} <span class="icon"><strong>{{ currency.symbol_left }}</strong></span>*/
/*     {% elseif currency.symbol_right and currency.code == code %} <span class="icon"><strong>{{ currency.symbol_right }}</strong></span>*/
/*     {% endif %} {% endfor %} {{ text_currency }}</button>*/
/*   <div class="menuDropdown__wrapper submenu__element">*/
/*     <span class="closeButton submenu__close visible-sm visible-xs"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>*/
/*     <div class="submenu__wrapper">*/
/*       <ul class="menuDropdown list-unstyled">*/
/*         {% for currency in currencies %} {% if currency.symbol_left %}*/
/*         <li>*/
/*           <button class="menuDropdown__link currency-select" type="button" name="{{ currency.code }}">{{ currency.symbol_left*/
/*             }} {{ currency.title }}</button>*/
/*         </li>*/
/*         {% else %}*/
/*         <li>*/
/*           <button class="menuDropdown__link currency-select" type="button" name="{{ currency.code }}">{{ currency.symbol_right*/
/*             }} {{ currency.title }}</button>*/
/*         </li>*/
/*         {% endif %} {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* {% endif %}*/
