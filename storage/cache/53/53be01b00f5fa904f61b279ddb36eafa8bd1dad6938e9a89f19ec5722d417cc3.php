<?php

/* default_x/template/account/order_list.twig */
class __TwigTemplate_04a449466c872ed00dc5f1d98d5f6b48812e20e49d6e3816ef9e749cc4ac424b extends Twig_Template
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
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
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
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"contentWrapper styled-block\">
      <h1>";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 19
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 20
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 24
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 25
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 26
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 27
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 28
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 29
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 35
                echo "            <tr>
              <td class=\"text-right\">#";
                // line 36
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 37
                echo $this->getAttribute($context["order"], "name", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 38
                echo $this->getAttribute($context["order"], "products", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 39
                echo $this->getAttribute($context["order"], "status", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 40
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 41
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 42
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "          </tbody>
        </table>
      </div>
      <div class=\"contentWrapper contentWrapper__pagination\">
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 50
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 51
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      </div>
      ";
        } else {
            // line 55
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 57
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 58
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      </div>
      ";
        // line 61
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 62
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 64
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default_x/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 64,  196 => 62,  192 => 61,  184 => 58,  181 => 57,  175 => 55,  168 => 51,  164 => 50,  157 => 45,  146 => 42,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  119 => 35,  115 => 34,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  81 => 20,  79 => 19,  75 => 18,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-order" class="container">*/
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
/*       <div class="contentWrapper styled-block">*/
/*       <h1>{{ heading_title }}</h1>*/
/*       {% if orders %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-right">{{ column_order_id }}</td>*/
/*               <td class="text-left">{{ column_customer }}</td>*/
/*               <td class="text-right">{{ column_product }}</td>*/
/*               <td class="text-left">{{ column_status }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*               <td class="text-left">{{ column_date_added }}</td>*/
/*               <td></td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*            {% for order in orders %}*/
/*             <tr>*/
/*               <td class="text-right">#{{ order.order_id }}</td>*/
/*               <td class="text-left">{{ order.name }}</td>*/
/*               <td class="text-right">{{ order.products }}</td>*/
/*               <td class="text-left">{{ order.status }}</td>*/
/*               <td class="text-right">{{ order.total }}</td>*/
/*               <td class="text-left">{{ order.date_added }}</td>*/
/*               <td class="text-right"><a href="{{ order.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       <div class="contentWrapper contentWrapper__pagination">*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
