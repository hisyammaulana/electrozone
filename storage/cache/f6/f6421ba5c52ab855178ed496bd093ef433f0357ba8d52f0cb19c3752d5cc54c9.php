<?php

/* default_x/template/extension/module/featured.twig */
class __TwigTemplate_82ee9cb1d323a41dbb59018ba2a438ad88ad8b1adb8b752a09259c21c3a4a367 extends Twig_Template
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
        echo "<div class=\"featuredBlock\">
  <h3 class=\"featuredBlock__title mainTitle\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
  <div class=\"row\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "    <div class=\"product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6\">
      <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
            // line 7
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\"
              class=\"img-responsive\" /></a></div>
        <div class=\"caption\">
          <h4><a href=\"";
            // line 10
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
          ";
            // line 11
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 12
                echo "          <div class=\"rating\">
            ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "            ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                    } else {
                        // line 16
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                    }
                    // line 18
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "          </div>
          ";
            }
            // line 21
            echo "          ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 22
                echo "          <p class=\"price\">
            ";
                // line 23
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 24
                    echo "            ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
            ";
                } else {
                    // line 26
                    echo "            <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
            ";
                }
                // line 28
                echo "            ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 29
                    echo "            <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
            ";
                }
                // line 31
                echo "          </p>
          ";
            }
            // line 33
            echo "        </div>
        <div class=\"button-group\">
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 35
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "\" onclick=\"cart.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i
              class=\"fa fa-shopping-cart\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 37
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i
              class=\"fa fa-heart\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 39
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i
              class=\"fa fa-exchange\"></i></button>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default_x/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  137 => 39,  130 => 37,  123 => 35,  119 => 33,  115 => 31,  107 => 29,  104 => 28,  96 => 26,  90 => 24,  88 => 23,  85 => 22,  82 => 21,  78 => 19,  72 => 18,  68 => 16,  62 => 14,  58 => 13,  55 => 12,  53 => 11,  47 => 10,  35 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="featuredBlock">*/
/*   <h3 class="featuredBlock__title mainTitle">{{ heading_title }}</h3>*/
/*   <div class="row">*/
/*     {% for product in products %}*/
/*     <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">*/
/*       <div class="product-thumb transition">*/
/*         <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"*/
/*               class="img-responsive" /></a></div>*/
/*         <div class="caption">*/
/*           <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*           {% if product.rating %}*/
/*           <div class="rating">*/
/*             {% for i in 5 %}*/
/*             {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*               {% else %}*/
/*               <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if product.price %}*/
/*           <p class="price">*/
/*             {% if not product.special %}*/
/*             {{ product.price }}*/
/*             {% else %}*/
/*             <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*             {% endif %}*/
/*             {% if product.tax %}*/
/*             <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*             {% endif %}*/
/*           </p>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="button-group">*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i*/
/*               class="fa fa-shopping-cart"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i*/
/*               class="fa fa-heart"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i*/
/*               class="fa fa-exchange"></i></button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
