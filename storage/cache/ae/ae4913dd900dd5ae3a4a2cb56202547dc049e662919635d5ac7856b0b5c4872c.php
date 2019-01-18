<?php

/* default_x/template/common/search.twig */
class __TwigTemplate_317587e2115d8eecafa0da7222012485f99dfe47e4b7bd43947ec2644851ee96 extends Twig_Template
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
        echo "<div id=\"search\" class=\"menuDropdown__search input-group\">
  <span class=\"input-group-btn\">
    <button class=\"menuDropdown__link\" type=\"button\"><i class=\"fa fa-search\"></i></button>
  </span>
  <input type=\"text\" name=\"search\" value=\"";
        // line 5
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\" />
</div>";
    }

    public function getTemplateName()
    {
        return "default_x/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <div id="search" class="menuDropdown__search input-group">*/
/*   <span class="input-group-btn">*/
/*     <button class="menuDropdown__link" type="button"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control" />*/
/* </div>*/
