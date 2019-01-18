<?php

/* default_x/template/common/language.twig */
class __TwigTemplate_81487c6b930fd3ead6d779418578fd48b71fd88c2babf866e8afa8c89a18eee9 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "<form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
  <button class=\"menuDropdown__link submenu__link\"><i class=\"fa fa-globe\" aria-hidden=\"true\"></i> ";
            // line 3
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo "
  </button>
  <div class=\"menuDropdown__wrapper submenu__element\">
    <span class=\"closeButton submenu__close visible-sm visible-xs\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></span>
    <div class=\"submenu__wrapper\">
      <ul class=\"menuDropdown list-unstyled\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 10
                echo "        <li>
          <button class=\"menuDropdown__link language-select\" type=\"button\" name=\"";
                // line 11
                echo $this->getAttribute($context["language"], "code", array());
                echo "\"><img src=\"catalog/language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\"
              alt=\"";
                // line 12
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</button>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    </div>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 19
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "default_x/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  63 => 15,  50 => 12,  42 => 11,  39 => 10,  35 => 9,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*   <button class="menuDropdown__link submenu__link"><i class="fa fa-globe" aria-hidden="true"></i> {{ text_language }}*/
/*   </button>*/
/*   <div class="menuDropdown__wrapper submenu__element">*/
/*     <span class="closeButton submenu__close visible-sm visible-xs"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>*/
/*     <div class="submenu__wrapper">*/
/*       <ul class="menuDropdown list-unstyled">*/
/*         {% for language in languages %}*/
/*         <li>*/
/*           <button class="menuDropdown__link language-select" type="button" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png"*/
/*               alt="{{ language.name }}" title="{{ language.name }}" /> {{ language.name }}</button>*/
/*         </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* {% endif %}*/
