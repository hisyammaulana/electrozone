<?php

/* default_x/template/product/category.twig */
class __TwigTemplate_40ae4cdccc197a0fda20b7ecefa35d470661d32432cbf56f22d9499d8b711814 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"categoryDescription\" ";
        // line 2
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            echo "style=\"background-image: url(";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo ");\"";
        }
        echo ">
  <div class=\"categoryDescription__wrapper\" ";
        // line 3
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            echo "style=\"background-color: rgba(0,0,0,0.5)\"";
        }
        echo ">
    <div class=\"container\">
      <div class=\"categoryDescription__inner\" style=\"min-height: ";
        // line 5
        echo (isset($context["thumb_min_height"]) ? $context["thumb_min_height"] : null);
        echo "rem\">
        <h2 class=\"categoryDescription__title\">";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
        ";
        // line 7
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 8
            echo "        <div class=\"categoryDescription__description\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
        ";
        }
        // line 10
        echo "      </div>
    </div>
  </div>
</div>
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </ul>
  <div class=\"row\">";
        // line 20
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 21
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 29
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 30
            echo "      <div class=\"refineBlock\">
        <h3 class=\"refineBlock__title\">";
            // line 31
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
        <ul class=\"refineBlock__list list-unstyled\">
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 34
                echo "          <li class=\"refineBlock__element\"><a class=\"refineBlock__link\" href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </ul>
      </div>
      ";
        }
        // line 39
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 40
            echo "      <div class=\"functionalBlock\">
        <ul class=\"functionalBlock__list list-unstyled\">
          <li class=\"functionalBlock__element hidden-xs\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"list-view\" class=\"functionalBlock__button btn\" data-toggle=\"tooltip\" title=\"";
            // line 44
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i
                  class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"functionalBlock__button btn\" data-toggle=\"tooltip\" title=\"";
            // line 46
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i
                  class=\"fa fa-th\"></i></button>
            </div>
          </li>
          <li class=\"functionalBlock__element\"><a href=\"";
            // line 50
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn functionalBlock__link\">";
            echo             // line 51
(isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></li>
          <li class=\"functionalBlock__element functionalBlock__inputs\">
            <div class=\"form-group input-group\">
              <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 54
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 57
                echo "                ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 58
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 60
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                }
                // line 62
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "              </select>
            </div>
            <div class=\"form-group input-group\">
              <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 66
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 69
                echo "                ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 70
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 72
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                }
                // line 74
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "              </select>
            </div>
          </li>
        </ul>
      </div>
      <div class=\"row\"> ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                echo "        <div class=\"product-layout product-list col-sm-12 col-xs-6\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 83
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"content\">
              <div class=\"caption\">
                <h4><a href=\"";
                // line 86
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                <p class=\"productDescription\">";
                // line 87
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                ";
                // line 88
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 89
                    echo "                <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 90
                        echo "                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 91
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 92
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 94
                echo "                ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 95
                    echo "                <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 96
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 97
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                ";
                }
                // line 98
                echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 100
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 101
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 102
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo " </div>
      <div class=\"contentWrapper contentWrapper__pagination styled-block\">
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 110
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 111
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      </div>
      ";
        }
        // line 115
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 116
            echo "      <div class=\"contentWrapper contentWrapper__empty styled-block\">
      <p>";
            // line 117
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 119
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      </div>
      ";
        }
        // line 123
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 124
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 126
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default_x/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 126,  408 => 124,  403 => 123,  394 => 119,  389 => 117,  386 => 116,  383 => 115,  376 => 111,  372 => 110,  367 => 107,  353 => 102,  347 => 101,  339 => 100,  335 => 98,  326 => 97,  319 => 96,  314 => 95,  311 => 94,  299 => 92,  292 => 91,  286 => 90,  283 => 89,  281 => 88,  277 => 87,  271 => 86,  259 => 83,  255 => 81,  251 => 80,  244 => 75,  238 => 74,  230 => 72,  222 => 70,  219 => 69,  215 => 68,  210 => 66,  205 => 63,  199 => 62,  191 => 60,  183 => 58,  180 => 57,  176 => 56,  171 => 54,  165 => 51,  162 => 50,  155 => 46,  150 => 44,  144 => 40,  141 => 39,  136 => 36,  125 => 34,  121 => 33,  116 => 31,  113 => 30,  111 => 29,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  84 => 21,  80 => 20,  77 => 19,  66 => 17,  62 => 16,  54 => 10,  48 => 8,  46 => 7,  42 => 6,  38 => 5,  31 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="categoryDescription" {% if thumb %}style="background-image: url({{ thumb }});"{% endif %}>*/
/*   <div class="categoryDescription__wrapper" {% if thumb %}style="background-color: rgba(0,0,0,0.5)"{% endif %}>*/
/*     <div class="container">*/
/*       <div class="categoryDescription__inner" style="min-height: {{ thumb_min_height }}rem">*/
/*         <h2 class="categoryDescription__title">{{ heading_title }}</h2>*/
/*         {% if description %}*/
/*         <div class="categoryDescription__description">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <div id="product-category" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       {% if categories %}*/
/*       <div class="refineBlock">*/
/*         <h3 class="refineBlock__title">{{ text_refine }}</h3>*/
/*         <ul class="refineBlock__list list-unstyled">*/
/*           {% for category in categories %}*/
/*           <li class="refineBlock__element"><a class="refineBlock__link" href="{{ category.href }}">{{ category.name }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if products %}*/
/*       <div class="functionalBlock">*/
/*         <ul class="functionalBlock__list list-unstyled">*/
/*           <li class="functionalBlock__element hidden-xs">*/
/*             <div class="btn-group">*/
/*               <button type="button" id="list-view" class="functionalBlock__button btn" data-toggle="tooltip" title="{{ button_list }}"><i*/
/*                   class="fa fa-th-list"></i></button>*/
/*               <button type="button" id="grid-view" class="functionalBlock__button btn" data-toggle="tooltip" title="{{ button_grid }}"><i*/
/*                   class="fa fa-th"></i></button>*/
/*             </div>*/
/*           </li>*/
/*           <li class="functionalBlock__element"><a href="{{ compare }}" id="compare-total" class="btn functionalBlock__link">{{*/
/*               text_compare }}</a></li>*/
/*           <li class="functionalBlock__element functionalBlock__inputs">*/
/*             <div class="form-group input-group">*/
/*               <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*               <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                 {% for sorts in sorts %}*/
/*                 {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                 <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group input-group">*/
/*               <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*               <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                 {% for limits in limits %}*/
/*                 {% if limits.value == limit %}*/
/*                 <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="row"> {% for product in products %}*/
/*         <div class="product-layout product-list col-sm-12 col-xs-6">*/
/*           <div class="product-thumb">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div class="content">*/
/*               <div class="caption">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 <p class="productDescription">{{ product.description }}</p>*/
/*                 {% if product.price %}*/
/*                 <p class="price"> {% if not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                 <div class="rating"> {% for i in 1..5 %}*/
/*                   {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                   {% endfor %} </div>*/
/*                 {% endif %} </div>*/
/*               <div class="button-group">*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %} </div>*/
/*       <div class="contentWrapper contentWrapper__pagination styled-block">*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <div class="contentWrapper contentWrapper__empty styled-block">*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
