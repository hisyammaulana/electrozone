<?php

/* extension/theme/default_x.twig */
class __TwigTemplate_da600be24235dccf77aa32f7bb9bfefe1bf2e1be4d1e360eee6208dfa2d92182 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-directory\"><span data-toggle=\"tooltip\" title=\"";
        // line 31
        echo (isset($context["help_directory"]) ? $context["help_directory"] : null);
        echo "\">";
        echo (isset($context["entry_directory"]) ? $context["entry_directory"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_x_directory\" id=\"input-directory\" class=\"form-control\">
                  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["directories"]) ? $context["directories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 35
            echo "                  ";
            if (($context["directory"] == (isset($context["theme_default_x_directory"]) ? $context["theme_default_x_directory"] : null))) {
                // line 36
                echo "                  <option value=\"";
                echo $context["directory"];
                echo "\" selected=\"selected\">";
                echo $context["directory"];
                echo "</option>
                  ";
            } else {
                // line 38
                echo "                  <option value=\"";
                echo $context["directory"];
                echo "\">";
                echo $context["directory"];
                echo "</option>
                  ";
            }
            // line 40
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 45
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_x_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 48
        if ((isset($context["theme_default_x_status"]) ? $context["theme_default_x_status"] : null)) {
            // line 49
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 50
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 52
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 53
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 55
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 60
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 62
        echo (isset($context["help_product_limit"]) ? $context["help_product_limit"] : null);
        echo "\">";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_default_x_product_limit\" value=\"";
        // line 64
        echo (isset($context["theme_default_x_product_limit"]) ? $context["theme_default_x_product_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
                ";
        // line 65
        if ((isset($context["error_product_limit"]) ? $context["error_product_limit"] : null)) {
            // line 66
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_product_limit"]) ? $context["error_product_limit"] : null);
            echo "</div>
                ";
        }
        // line 68
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 71
        echo (isset($context["help_product_description_length"]) ? $context["help_product_description_length"] : null);
        echo "\">";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_default_x_product_description_length\" value=\"";
        // line 73
        echo (isset($context["theme_default_x_product_description_length"]) ? $context["theme_default_x_product_description_length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
                ";
        // line 74
        if ((isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null)) {
            // line 75
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null);
            echo "</div>
                ";
        }
        // line 77
        echo "              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 81
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 83
        echo (isset($context["entry_image_category"]) ? $context["entry_image_category"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_category_width\" value=\"";
        // line 87
        echo (isset($context["theme_default_x_image_category_width"]) ? $context["theme_default_x_image_category_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" style=\"display: none\" />
                    <input type=\"text\" disabled value=\"";
        // line 88
        echo (isset($context["theme_default_x_image_category_width"]) ? $context["theme_default_x_image_category_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\"class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_category_height\" value=\"";
        // line 91
        echo (isset($context["theme_default_x_image_category_height"]) ? $context["theme_default_x_image_category_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 94
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 95
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "</div>
                ";
        }
        // line 97
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 100
        echo (isset($context["entry_image_thumb"]) ? $context["entry_image_thumb"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_thumb_width\" value=\"";
        // line 104
        echo (isset($context["theme_default_x_image_thumb_width"]) ? $context["theme_default_x_image_thumb_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_thumb_height\" value=\"";
        // line 107
        echo (isset($context["theme_default_x_image_thumb_height"]) ? $context["theme_default_x_image_thumb_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 110
        if ((isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null)) {
            // line 111
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null);
            echo "</div>
                ";
        }
        // line 113
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 116
        echo (isset($context["entry_image_popup"]) ? $context["entry_image_popup"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_popup_width\" value=\"";
        // line 120
        echo (isset($context["theme_default_x_image_popup_width"]) ? $context["theme_default_x_image_popup_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_popup_height\" value=\"";
        // line 123
        echo (isset($context["theme_default_x_image_popup_height"]) ? $context["theme_default_x_image_popup_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 126
        if ((isset($context["error_image_popup"]) ? $context["error_image_popup"] : null)) {
            // line 127
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_popup"]) ? $context["error_image_popup"] : null);
            echo "</div>
                ";
        }
        // line 129
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 132
        echo (isset($context["entry_image_product"]) ? $context["entry_image_product"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_product_width\" value=\"";
        // line 136
        echo (isset($context["theme_default_x_image_product_width"]) ? $context["theme_default_x_image_product_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_product_height\" value=\"";
        // line 139
        echo (isset($context["theme_default_x_image_product_height"]) ? $context["theme_default_x_image_product_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 142
        if ((isset($context["error_image_product"]) ? $context["error_image_product"] : null)) {
            // line 143
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_product"]) ? $context["error_image_product"] : null);
            echo "</div>
                ";
        }
        // line 145
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 148
        echo (isset($context["entry_image_additional"]) ? $context["entry_image_additional"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_additional_width\" value=\"";
        // line 152
        echo (isset($context["theme_default_x_image_additional_width"]) ? $context["theme_default_x_image_additional_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_additional_height\" value=\"";
        // line 155
        echo (isset($context["theme_default_x_image_additional_height"]) ? $context["theme_default_x_image_additional_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 158
        if ((isset($context["error_image_additional"]) ? $context["error_image_additional"] : null)) {
            // line 159
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_additional"]) ? $context["error_image_additional"] : null);
            echo "</div>
                ";
        }
        // line 161
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 164
        echo (isset($context["entry_image_related"]) ? $context["entry_image_related"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_related_width\" value=\"";
        // line 168
        echo (isset($context["theme_default_x_image_related_width"]) ? $context["theme_default_x_image_related_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_related_height\" value=\"";
        // line 171
        echo (isset($context["theme_default_x_image_related_height"]) ? $context["theme_default_x_image_related_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 174
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 175
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "</div>
                ";
        }
        // line 177
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 180
        echo (isset($context["entry_image_compare"]) ? $context["entry_image_compare"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_compare_width\" value=\"";
        // line 184
        echo (isset($context["theme_default_x_image_compare_width"]) ? $context["theme_default_x_image_compare_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_compare_height\" value=\"";
        // line 187
        echo (isset($context["theme_default_x_image_compare_height"]) ? $context["theme_default_x_image_compare_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 190
        if ((isset($context["error_image_compare"]) ? $context["error_image_compare"] : null)) {
            // line 191
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_compare"]) ? $context["error_image_compare"] : null);
            echo "</div>
                ";
        }
        // line 193
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 196
        echo (isset($context["entry_image_wishlist"]) ? $context["entry_image_wishlist"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_wishlist_width\" value=\"";
        // line 200
        echo (isset($context["theme_default_x_image_wishlist_width"]) ? $context["theme_default_x_image_wishlist_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_wishlist_height\" value=\"";
        // line 203
        echo (isset($context["theme_default_x_image_wishlist_height"]) ? $context["theme_default_x_image_wishlist_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 206
        if ((isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null)) {
            // line 207
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null);
            echo "</div>
                ";
        }
        // line 209
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 212
        echo (isset($context["entry_image_cart"]) ? $context["entry_image_cart"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_cart_width\" value=\"";
        // line 216
        echo (isset($context["theme_default_x_image_cart_width"]) ? $context["theme_default_x_image_cart_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_cart_height\" value=\"";
        // line 219
        echo (isset($context["theme_default_x_image_cart_height"]) ? $context["theme_default_x_image_cart_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 222
        if ((isset($context["error_image_cart"]) ? $context["error_image_cart"] : null)) {
            // line 223
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_cart"]) ? $context["error_image_cart"] : null);
            echo "</div>
                ";
        }
        // line 225
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 228
        echo (isset($context["entry_image_location"]) ? $context["entry_image_location"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_location_width\" value=\"";
        // line 232
        echo (isset($context["theme_default_x_image_location_width"]) ? $context["theme_default_x_image_location_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_x_image_location_height\" value=\"";
        // line 235
        echo (isset($context["theme_default_x_image_location_height"]) ? $context["theme_default_x_image_location_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 238
        if ((isset($context["error_image_location"]) ? $context["error_image_location"] : null)) {
            // line 239
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_image_location"]) ? $context["error_image_location"] : null);
            echo "</div>
                ";
        }
        // line 241
        echo "              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 245
        echo (isset($context["text_slideshow"]) ? $context["text_slideshow"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-slideshow_home_status\">";
        // line 247
        echo (isset($context["entry_slideshow_home_status"]) ? $context["entry_slideshow_home_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_x_slideshow_home_status\" id=\"input-slideshow_home_status\" class=\"form-control\">
                  ";
        // line 250
        if ((isset($context["theme_default_x_slideshow_home_status"]) ? $context["theme_default_x_slideshow_home_status"] : null)) {
            // line 251
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 252
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 254
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 255
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 257
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-slideshow_home_banner_id\">";
        // line 261
        echo (isset($context["entry_slideshow_banner"]) ? $context["entry_slideshow_banner"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_x_slideshow_home_banner_id\" id=\"input-slideshow_home_banner_id\" class=\"form-control\">
                  ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            echo " ";
            if (($this->getAttribute($context["banner"], "banner_id", array()) == (isset($context["theme_default_x_slideshow_home_banner_id"]) ? $context["theme_default_x_slideshow_home_banner_id"] : null))) {
                // line 265
                echo "                  <option value=\"";
                echo $this->getAttribute($context["banner"], "banner_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["banner"], "name", array());
                echo "</option>
                  ";
            } else {
                // line 267
                echo "                  <option value=\"";
                echo $this->getAttribute($context["banner"], "banner_id", array());
                echo "\">";
                echo $this->getAttribute($context["banner"], "name", array());
                echo "</option>
                  ";
            }
            // line 268
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 274
        echo (isset($context["text_map"]) ? $context["text_map"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-map_home_status\">";
        // line 276
        echo (isset($context["entry_map_home_status"]) ? $context["entry_map_home_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_x_map_home_status\" id=\"input-map_home_status\" class=\"form-control\">
                  ";
        // line 279
        if ((isset($context["theme_default_x_map_home_status"]) ? $context["theme_default_x_map_home_status"] : null)) {
            // line 280
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 281
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 283
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 284
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 286
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-map_home_key\">";
        // line 290
        echo (isset($context["entry_google_key"]) ? $context["entry_google_key"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_default_x_map_home_key\" value=\"";
        // line 292
        echo (isset($context["theme_default_x_map_home_key"]) ? $context["theme_default_x_map_home_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_google_key"]) ? $context["entry_google_key"] : null);
        echo "\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 301
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/theme/default_x.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 301,  726 => 292,  721 => 290,  715 => 286,  710 => 284,  705 => 283,  700 => 281,  695 => 280,  693 => 279,  687 => 276,  682 => 274,  675 => 269,  669 => 268,  661 => 267,  653 => 265,  647 => 264,  641 => 261,  635 => 257,  630 => 255,  625 => 254,  620 => 252,  615 => 251,  613 => 250,  607 => 247,  602 => 245,  596 => 241,  590 => 239,  588 => 238,  580 => 235,  572 => 232,  565 => 228,  560 => 225,  554 => 223,  552 => 222,  544 => 219,  536 => 216,  529 => 212,  524 => 209,  518 => 207,  516 => 206,  508 => 203,  500 => 200,  493 => 196,  488 => 193,  482 => 191,  480 => 190,  472 => 187,  464 => 184,  457 => 180,  452 => 177,  446 => 175,  444 => 174,  436 => 171,  428 => 168,  421 => 164,  416 => 161,  410 => 159,  408 => 158,  400 => 155,  392 => 152,  385 => 148,  380 => 145,  374 => 143,  372 => 142,  364 => 139,  356 => 136,  349 => 132,  344 => 129,  338 => 127,  336 => 126,  328 => 123,  320 => 120,  313 => 116,  308 => 113,  302 => 111,  300 => 110,  292 => 107,  284 => 104,  277 => 100,  272 => 97,  266 => 95,  264 => 94,  256 => 91,  248 => 88,  242 => 87,  235 => 83,  230 => 81,  224 => 77,  218 => 75,  216 => 74,  210 => 73,  203 => 71,  198 => 68,  192 => 66,  190 => 65,  184 => 64,  177 => 62,  172 => 60,  165 => 55,  160 => 53,  155 => 52,  150 => 50,  145 => 49,  143 => 48,  137 => 45,  131 => 41,  125 => 40,  117 => 38,  109 => 36,  106 => 35,  102 => 34,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-theme" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-theme" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_general }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-directory"><span data-toggle="tooltip" title="{{ help_directory }}">{{ entry_directory }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_default_x_directory" id="input-directory" class="form-control">*/
/*                   {% for directory in directories %}*/
/*                   {% if directory == theme_default_x_directory %}*/
/*                   <option value="{{ directory }}" selected="selected">{{ directory }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ directory }}">{{ directory }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_default_x_status" id="input-status" class="form-control">*/
/*                   {% if theme_default_x_status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_product }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-catalog-limit"><span data-toggle="tooltip" title="{{ help_product_limit }}">{{ entry_product_limit }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="theme_default_x_product_limit" value="{{ theme_default_x_product_limit }}" placeholder="{{ entry_product_limit }}" id="input-catalog-limit" class="form-control" />*/
/*                 {% if error_product_limit %}*/
/*                 <div class="text-danger">{{ error_product_limit }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-description-limit"><span data-toggle="tooltip" title="{{ help_product_description_length }}">{{ entry_product_description_length }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="theme_default_x_product_description_length" value="{{ theme_default_x_product_description_length }}" placeholder="{{ entry_product_description_length }}" id="input-description-limit" class="form-control" />*/
/*                 {% if error_product_description_length %}*/
/*                 <div class="text-danger">{{ error_product_description_length }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_image }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-category-width">{{ entry_image_category }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_category_width" value="{{ theme_default_x_image_category_width }}" placeholder="{{ entry_width }}" id="input-image-category-width" class="form-control" style="display: none" />*/
/*                     <input type="text" disabled value="{{ theme_default_x_image_category_width }}" placeholder="{{ entry_width }}"class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_category_height" value="{{ theme_default_x_image_category_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_category %}*/
/*                 <div class="text-danger">{{ error_image_category }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-thumb-width">{{ entry_image_thumb }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_thumb_width" value="{{ theme_default_x_image_thumb_width }}" placeholder="{{ entry_width }}" id="input-image-thumb-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_thumb_height" value="{{ theme_default_x_image_thumb_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_thumb %}*/
/*                 <div class="text-danger">{{ error_image_thumb }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-popup-width">{{ entry_image_popup }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_popup_width" value="{{ theme_default_x_image_popup_width }}" placeholder="{{ entry_width }}" id="input-image-popup-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_popup_height" value="{{ theme_default_x_image_popup_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_popup %}*/
/*                 <div class="text-danger">{{ error_image_popup }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-product-width">{{ entry_image_product }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_product_width" value="{{ theme_default_x_image_product_width }}" placeholder="{{ entry_width }}" id="input-image-product-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_product_height" value="{{ theme_default_x_image_product_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_product %}*/
/*                 <div class="text-danger">{{ error_image_product }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-additional-width">{{ entry_image_additional }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_additional_width" value="{{ theme_default_x_image_additional_width }}" placeholder="{{ entry_width }}" id="input-image-additional-width" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_additional_height" value="{{ theme_default_x_image_additional_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_additional %}*/
/*                 <div class="text-danger">{{ error_image_additional }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-related">{{ entry_image_related }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_related_width" value="{{ theme_default_x_image_related_width }}" placeholder="{{ entry_width }}" id="input-image-related" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_related_height" value="{{ theme_default_x_image_related_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_related %}*/
/*                 <div class="text-danger">{{ error_image_related }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-compare">{{ entry_image_compare }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_compare_width" value="{{ theme_default_x_image_compare_width }}" placeholder="{{ entry_width }}" id="input-image-compare" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_compare_height" value="{{ theme_default_x_image_compare_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_compare %}*/
/*                 <div class="text-danger">{{ error_image_compare }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-wishlist">{{ entry_image_wishlist }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_wishlist_width" value="{{ theme_default_x_image_wishlist_width }}" placeholder="{{ entry_width }}" id="input-image-wishlist" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_wishlist_height" value="{{ theme_default_x_image_wishlist_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_wishlist %}*/
/*                 <div class="text-danger">{{ error_image_wishlist }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-cart">{{ entry_image_cart }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_cart_width" value="{{ theme_default_x_image_cart_width }}" placeholder="{{ entry_width }}" id="input-image-cart" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_cart_height" value="{{ theme_default_x_image_cart_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_cart %}*/
/*                 <div class="text-danger">{{ error_image_cart }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-image-location">{{ entry_image_location }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_location_width" value="{{ theme_default_x_image_location_width }}" placeholder="{{ entry_width }}" id="input-image-location" class="form-control" />*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_x_image_location_height" value="{{ theme_default_x_image_location_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_location %}*/
/*                 <div class="text-danger">{{ error_image_location }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_slideshow }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-slideshow_home_status">{{ entry_slideshow_home_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_default_x_slideshow_home_status" id="input-slideshow_home_status" class="form-control">*/
/*                   {% if theme_default_x_slideshow_home_status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-slideshow_home_banner_id">{{ entry_slideshow_banner }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_default_x_slideshow_home_banner_id" id="input-slideshow_home_banner_id" class="form-control">*/
/*                   {% for banner in banners %} {% if banner.banner_id == theme_default_x_slideshow_home_banner_id %}*/
/*                   <option value="{{ banner.banner_id }}" selected="selected">{{ banner.name }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ banner.banner_id }}">{{ banner.name }}</option>*/
/*                   {% endif %} {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_map }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-map_home_status">{{ entry_map_home_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_default_x_map_home_status" id="input-map_home_status" class="form-control">*/
/*                   {% if theme_default_x_map_home_status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-map_home_key">{{ entry_google_key }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="theme_default_x_map_home_key" value="{{ theme_default_x_map_home_key }}" placeholder="{{ entry_google_key }}" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
