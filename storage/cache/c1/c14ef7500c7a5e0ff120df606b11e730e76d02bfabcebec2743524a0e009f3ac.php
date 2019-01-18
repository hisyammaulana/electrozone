<?php

/* default_x/template/extension/module/category.twig */
class __TwigTemplate_59f6eef501c46dcf00e15ebb704c5e9f8bbff0d1b9404ee85503131ab01bd84f extends Twig_Template
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
        echo "<div class=\"categoryListBlock\">
  ";
        // line 2
        if ((isset($context["text_category"]) ? $context["text_category"] : null)) {
            echo "<h2 class=\"categoryListBlock__title mainTitle\">";
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</h2>";
        }
        // line 3
        echo "  <div class=\"list-group\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "    ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 6
                echo "    <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
    ";
                // line 7
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 8
                    echo "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 9
                        echo "    ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 10
                            echo "    <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
    ";
                        } else {
                            // line 12
                            echo "    <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
    ";
                        }
                        // line 14
                        echo "    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "    ";
                }
                // line 16
                echo "    ";
            } else {
                echo " <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
    ";
            }
            // line 18
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default_x/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  90 => 18,  80 => 16,  77 => 15,  71 => 14,  63 => 12,  55 => 10,  52 => 9,  47 => 8,  45 => 7,  38 => 6,  35 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="categoryListBlock">*/
/*   {% if text_category %}<h2 class="categoryListBlock__title mainTitle">{{ text_category }}</h2>{% endif %}*/
/*   <div class="list-group">*/
/*     {% for category in categories %}*/
/*     {% if category.category_id == category_id %}*/
/*     <a href="{{ category.href }}" class="list-group-item active">{{ category.name }}</a>*/
/*     {% if category.children %}*/
/*     {% for child in category.children %}*/
/*     {% if child.category_id == child_id %}*/
/*     <a href="{{ child.href }}" class="list-group-item active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*     {% else %}*/
/*     <a href="{{ child.href }}" class="list-group-item">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*     {% endif %}*/
/*     {% else %} <a href="{{ category.href }}" class="list-group-item">{{ category.name }}</a>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
