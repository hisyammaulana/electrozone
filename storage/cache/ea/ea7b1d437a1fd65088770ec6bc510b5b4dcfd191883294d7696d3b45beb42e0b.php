<?php

/* default_x/template/checkout/payment_method.twig */
class __TwigTemplate_98d5a6958c3f609118474940537e2f66ee4f7fb8d7f68a95c2de0a7160004434 extends Twig_Template
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
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 2
            echo "<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
";
        }
        // line 4
        if ((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) {
            // line 5
            echo "<p>";
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</p>
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 7
                echo "<div class=\"radio\">
  <label>";
                // line 8
                if ((($this->getAttribute($context["payment_method"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                    // line 9
                    echo "    ";
                    $context["code"] = $this->getAttribute($context["payment_method"], "code", array());
                    // line 10
                    echo "    <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" checked=\"checked\" />
    ";
                } else {
                    // line 12
                    echo "    <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" />
    ";
                }
                // line 14
                echo "
        ";
                // line 15
                if ($this->getAttribute($context["payment_method"], "image", array())) {
                    // line 16
                    echo "            <img src=\"catalog/view/theme/default/image/payment/";
                    echo $this->getAttribute($context["payment_method"], "image", array());
                    echo ".jpg\" height=\"29\"/>
      ";
                }
                // line 18
                echo "\t\t\t  
    ";
                // line 19
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "
    ";
                // line 20
                if ($this->getAttribute($context["payment_method"], "terms", array())) {
                    // line 21
                    echo "    (";
                    echo $this->getAttribute($context["payment_method"], "terms", array());
                    echo ")
    ";
                }
                // line 22
                echo " </label>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 26
        echo "<p><strong>";
        echo (isset($context["text_comments"]) ? $context["text_comments"] : null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 28
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
</p>
";
        // line 30
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 31
            echo "<div class=\"buttons\">
  <div class=\"pull-right fixedAlignInput\">
    <div class=\"fixedAlignInput__mainBlock\">
      <p>";
            // line 34
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</p>
      ";
            // line 35
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 36
                echo "      <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
      ";
            } else {
                // line 38
                echo "      <input type=\"checkbox\" name=\"agree\" value=\"1\" />
      ";
            }
            // line 40
            echo "    </div>
    <input type=\"button\" value=\"";
            // line 41
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\"
      class=\"btn btn-primary\" />
  </div>
</div>
</div>
";
        } else {
            // line 47
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
            // line 49
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        }
        // line 52
        echo " ";
    }

    public function getTemplateName()
    {
        return "default_x/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  143 => 49,  139 => 47,  128 => 41,  125 => 40,  121 => 38,  117 => 36,  115 => 35,  111 => 34,  106 => 31,  104 => 30,  99 => 28,  93 => 26,  84 => 22,  78 => 21,  76 => 20,  72 => 19,  69 => 18,  63 => 16,  61 => 15,  58 => 14,  52 => 12,  46 => 10,  43 => 9,  41 => 8,  38 => 7,  34 => 6,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if error_warning %}*/
/* <div class="alert alert-warning alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/* {% endif %}*/
/* {% if payment_methods %}*/
/* <p>{{ text_payment_method }}</p>*/
/* {% for payment_method in payment_methods %}*/
/* <div class="radio">*/
/*   <label>{% if payment_method.code == code or not code %}*/
/*     {% set code = payment_method.code %}*/
/*     <input type="radio" name="payment_method" value="{{ payment_method.code }}" checked="checked" />*/
/*     {% else %}*/
/*     <input type="radio" name="payment_method" value="{{ payment_method.code }}" />*/
/*     {% endif %}*/
/* */
/*         {% if payment_method.image %}*/
/*             <img src="catalog/view/theme/default/image/payment/{{ payment_method.image }}.jpg" height="29"/>*/
/*       {% endif %}*/
/* 			  */
/*     {{ payment_method.title }}*/
/*     {% if payment_method.terms %}*/
/*     ({{ payment_method.terms }})*/
/*     {% endif %} </label>*/
/* </div>*/
/* {% endfor %}*/
/* {% endif %}*/
/* <p><strong>{{ text_comments }}</strong></p>*/
/* <p>*/
/*   <textarea name="comment" rows="8" class="form-control">{{ comment }}</textarea>*/
/* </p>*/
/* {% if text_agree %}*/
/* <div class="buttons">*/
/*   <div class="pull-right fixedAlignInput">*/
/*     <div class="fixedAlignInput__mainBlock">*/
/*       <p>{{ text_agree }}</p>*/
/*       {% if agree %}*/
/*       <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*       {% else %}*/
/*       <input type="checkbox" name="agree" value="1" />*/
/*       {% endif %}*/
/*     </div>*/
/*     <input type="button" value="{{ button_continue }}" id="button-payment-method" data-loading-text="{{ text_loading }}"*/
/*       class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_continue }}" id="button-payment-method" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% endif %} */
