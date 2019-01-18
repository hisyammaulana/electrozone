<?php

/* default_x/template/common/menu.twig */
class __TwigTemplate_5491a7b6739bd356d7501cc3f2050aa533b347a49bffdf7c57e91b161344d516 extends Twig_Template
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
        echo "<span class=\"listMenu__link\" onclick=\"openSection('listMenu__categories')\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>
  ";
        // line 2
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</span>
<div class=\"listMenu__wrapper listMenu__categories\">
  <span class=\"closeButton visible-sm visible-xs\" onclick=\"closeSection('listMenu__categories')\"><i class=\"fa fa-chevron-right\"
      aria-hidden=\"true\"></i></span>
  ";
        // line 6
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 7
            echo "  <ul class=\"menuDropdown list-unstyled\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    echo " ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 9
                    echo "    <li class=\"menuDropdown__element submenu\">
      <a class=\"menuDropdown__link submenu__link\" href=\"";
                    // line 10
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
      <div class=\"menuDropdown__wrapper submenu__element\">
        <span class=\"closeButton submenu__close visible-sm visible-xs\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></span>
        <div class=\"submenu__wrapper\">
          ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 15
                        echo "          <ul class=\"menuDropdown list-unstyled\">
            ";
                        // line 16
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 17
                            echo "            <li class=\"menuDropdown__element\">
              <a class=\"menuDropdown__link\" href=\"";
                            // line 18
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
            </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 21
                        echo "          </ul>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "          <ul class=\"menuDropdown list-unstyled see-all visible-sm visible-xs\">
            <li class=\"menuDropdown__element\">
              <a class=\"menuDropdown__link\" href=\"";
                    // line 25
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo "</a>
            </li>
          </ul>
        </div>
      </div>
    </li>
    ";
                } else {
                    // line 32
                    echo "    <li class=\"menuDropdown__element\">
      <a class=\"menuDropdown__link main-category\" href=\"";
                    // line 33
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
    </li>
    ";
                }
                // line 35
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "  </ul>
  ";
        } else {
            // line 38
            echo "  <ul class=\"menuDropdown list-unstyled\">
    <li class=\"menuDropdown__element\">
      <p class=\"menuDropdown__link\">";
            // line 40
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
  </ul>
  ";
        }
        // line 44
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "default_x/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  127 => 40,  123 => 38,  119 => 36,  113 => 35,  105 => 33,  102 => 32,  90 => 25,  86 => 23,  79 => 21,  68 => 18,  65 => 17,  61 => 16,  58 => 15,  54 => 14,  45 => 10,  42 => 9,  34 => 8,  31 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <span class="listMenu__link" onclick="openSection('listMenu__categories')"><i class="fa fa-shopping-bag" aria-hidden="true"></i>*/
/*   {{ text_category }}</span>*/
/* <div class="listMenu__wrapper listMenu__categories">*/
/*   <span class="closeButton visible-sm visible-xs" onclick="closeSection('listMenu__categories')"><i class="fa fa-chevron-right"*/
/*       aria-hidden="true"></i></span>*/
/*   {% if categories %}*/
/*   <ul class="menuDropdown list-unstyled">*/
/*     {% for category in categories %} {% if category.children %} {% set i = i + 1 %}*/
/*     <li class="menuDropdown__element submenu">*/
/*       <a class="menuDropdown__link submenu__link" href="{{ category.href }}">{{ category.name }}</a>*/
/*       <div class="menuDropdown__wrapper submenu__element">*/
/*         <span class="closeButton submenu__close visible-sm visible-xs"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>*/
/*         <div class="submenu__wrapper">*/
/*           {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*           <ul class="menuDropdown list-unstyled">*/
/*             {% for child in children %}*/
/*             <li class="menuDropdown__element">*/
/*               <a class="menuDropdown__link" href="{{ child.href }}">{{ child.name }}</a>*/
/*             </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*           {% endfor %}*/
/*           <ul class="menuDropdown list-unstyled see-all visible-sm visible-xs">*/
/*             <li class="menuDropdown__element">*/
/*               <a class="menuDropdown__link" href="{{ category.href }}">{{ text_all }}</a>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li class="menuDropdown__element">*/
/*       <a class="menuDropdown__link main-category" href="{{ category.href }}">{{ category.name }}</a>*/
/*     </li>*/
/*     {% endif %} {% endfor %}*/
/*   </ul>*/
/*   {% else %}*/
/*   <ul class="menuDropdown list-unstyled">*/
/*     <li class="menuDropdown__element">*/
/*       <p class="menuDropdown__link">{{ text_empty }}</p>*/
/*     </li>*/
/*   </ul>*/
/*   {% endif %}*/
/* </div>*/
