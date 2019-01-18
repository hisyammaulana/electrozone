<?php

/* default_x/template/common/cart.twig */
class __TwigTemplate_c3257236fca3037b2f940e5f5dc161de7c091b8571ba4c56aa91d0415f574855 extends Twig_Template
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
        echo "<span class=\"listMenu__link miniCart\" onclick=\"openSection('listMenu__cart')\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> ";
        echo (isset($context["text_cart_menu"]) ? $context["text_cart_menu"] : null);
        echo "</span>
<div id=\"cart\" class=\"listMenu__wrapper listMenu__cart\">
  <span class=\"closeButton visible-sm visible-xs\" onclick=\"closeSection('listMenu__cart')\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></span>
  <ul class=\"menuDropdown list-unstyled\">
    ";
        // line 5
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 6
            echo "    <li class=\"menuDropdown__element menuDropdown__products\">
      <table class=\"table\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "        <tr class=\"cartProducts\">
          <td class=\"cartProducts__img text-left\">";
                // line 10
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    // line 11
                    echo "            <a class=\"cartProducts__link\" href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
              <img src=\"";
                    // line 12
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" />
            </a> ";
                }
                // line 13
                echo "</td>
          <td class=\"cartProducts__name text-left\">
            <a class=\"cartProducts__link\" href=\"";
                // line 15
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    echo " ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 16
                        echo "            <br /> -
            <small>";
                        // line 17
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " ";
                }
                echo " ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 18
                    echo "            <br /> -
            <small>";
                    // line 19
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"cartProducts__quantity text-right\">x ";
                // line 20
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"cartProducts__total text-right\">";
                // line 21
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"cartProducts__remove text-center\">
            <button type=\"button\" onclick=\"cart.remove('";
                // line 23
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"cartProducts__removeButton\">
              <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </button>
          </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 29
                echo "        <tr class=\"cartVouchers\">
          <td class=\"cartVouchers__name text-left\" colspan=\"2\">";
                // line 30
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"cartVouchers__quantity text-right\">x&nbsp;1</td>
          <td class=\"cartVouchers__total text-right\">";
                // line 32
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"cartVouchers__remove text-center\">
            <button type=\"button\" onclick=\"voucher.remove('";
                // line 34
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"cartVouchers__removeButton cartProducts__removeButton\">
              <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </button>
          </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </table>
    </li>
    <li class=\"menuDropdown__element\">
      <div>
        <table class=\"table\">
          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 46
                echo "          <tr class=\"cartInfo\">
            <td class=\"cartInfo__description text-left\">
              ";
                // line 48
                echo $this->getAttribute($context["total"], "title", array());
                echo ": ";
                echo $this->getAttribute($context["total"], "text", array());
                echo "
            </td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </table>
        <p class=\"cartButtons text-left\">
          <a class=\"cartButtons__link\" href=\"";
            // line 54
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">
            <i class=\"fa fa-shopping-cart\"></i> ";
            // line 55
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "
          </a>&nbsp;&nbsp;&nbsp;
          <a class=\"cartButtons__link\" href=\"";
            // line 57
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">
            <i class=\"fa fa-share\"></i> ";
            // line 58
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "
          </a>
        </p>
      </div>
    </li>
    ";
        } else {
            // line 64
            echo "    <li class=\"menuDropdown__element\">
      <p class=\"menuDropdown__link\">";
            // line 65
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 68
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "default_x/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 68,  208 => 65,  205 => 64,  196 => 58,  192 => 57,  187 => 55,  183 => 54,  179 => 52,  167 => 48,  163 => 46,  159 => 45,  152 => 40,  138 => 34,  133 => 32,  128 => 30,  125 => 29,  120 => 28,  106 => 23,  101 => 21,  97 => 20,  89 => 19,  86 => 18,  73 => 17,  70 => 16,  60 => 15,  56 => 13,  47 => 12,  42 => 11,  40 => 10,  37 => 9,  33 => 8,  29 => 6,  27 => 5,  19 => 1,);
    }
}
/* <span class="listMenu__link miniCart" onclick="openSection('listMenu__cart')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{ text_cart_menu }}</span>*/
/* <div id="cart" class="listMenu__wrapper listMenu__cart">*/
/*   <span class="closeButton visible-sm visible-xs" onclick="closeSection('listMenu__cart')"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>*/
/*   <ul class="menuDropdown list-unstyled">*/
/*     {% if products or vouchers %}*/
/*     <li class="menuDropdown__element menuDropdown__products">*/
/*       <table class="table">*/
/*         {% for product in products %}*/
/*         <tr class="cartProducts">*/
/*           <td class="cartProducts__img text-left">{% if product.thumb %}*/
/*             <a class="cartProducts__link" href="{{ product.href }}">*/
/*               <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" />*/
/*             </a> {% endif %}</td>*/
/*           <td class="cartProducts__name text-left">*/
/*             <a class="cartProducts__link" href="{{ product.href }}">{{ product.name }}</a> {% if product.option %} {% for option in product.option %}*/
/*             <br /> -*/
/*             <small>{{ option.name }} {{ option.value }}</small> {% endfor %} {% endif %} {% if product.recurring %}*/
/*             <br /> -*/
/*             <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="cartProducts__quantity text-right">x {{ product.quantity }}</td>*/
/*           <td class="cartProducts__total text-right">{{ product.total }}</td>*/
/*           <td class="cartProducts__remove text-center">*/
/*             <button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="cartProducts__removeButton">*/
/*               <i class="fa fa-trash" aria-hidden="true"></i>*/
/*             </button>*/
/*           </td>*/
/*         </tr>*/
/*         {% endfor %} {% for voucher in vouchers %}*/
/*         <tr class="cartVouchers">*/
/*           <td class="cartVouchers__name text-left" colspan="2">{{ voucher.description }}</td>*/
/*           <td class="cartVouchers__quantity text-right">x&nbsp;1</td>*/
/*           <td class="cartVouchers__total text-right">{{ voucher.amount }}</td>*/
/*           <td class="cartVouchers__remove text-center">*/
/*             <button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="cartVouchers__removeButton cartProducts__removeButton">*/
/*               <i class="fa fa-trash" aria-hidden="true"></i>*/
/*             </button>*/
/*           </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li class="menuDropdown__element">*/
/*       <div>*/
/*         <table class="table">*/
/*           {% for total in totals %}*/
/*           <tr class="cartInfo">*/
/*             <td class="cartInfo__description text-left">*/
/*               {{ total.title }}: {{ total.text }}*/
/*             </td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="cartButtons text-left">*/
/*           <a class="cartButtons__link" href="{{ cart }}">*/
/*             <i class="fa fa-shopping-cart"></i> {{ text_cart }}*/
/*           </a>&nbsp;&nbsp;&nbsp;*/
/*           <a class="cartButtons__link" href="{{ checkout }}">*/
/*             <i class="fa fa-share"></i> {{ text_checkout }}*/
/*           </a>*/
/*         </p>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li class="menuDropdown__element">*/
/*       <p class="menuDropdown__link">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
