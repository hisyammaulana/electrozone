<?php

/* default_x/template/information/contact.twig */
class __TwigTemplate_81cad22285618325146e853ce4ad9098a7b64b77a457b854d996431c8ff86464 extends Twig_Template
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
<div id=\"information-contact\" class=\"container\">
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
        <div class=\"panel panel-default-x\">
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <div class=\"row\">
                ";
        // line 24
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 25
            echo "                <div class=\"col-sm-12\"><img src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-thumbnail\" /></div>
                ";
        }
        // line 27
        echo "                <div class=\"col-sm-12\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> <strong>";
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</strong><br />
                  <address>
                    ";
        // line 29
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "
                  </address>
                </div>
                <div class=\"col-sm-12\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> <strong>";
        // line 32
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</strong><br>
                  ";
        // line 33
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
                  <br />
                  ";
        // line 35
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 36
            echo "                  <strong>";
            echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
            echo "</strong><br>
                  ";
            // line 37
            echo (isset($context["fax"]) ? $context["fax"] : null);
            echo "
                  ";
        }
        // line 39
        echo "                </div>
                <div class=\"col-sm-12\">
                  ";
        // line 41
        if ((isset($context["mail"]) ? $context["mail"] : null)) {
            // line 42
            echo "                  <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> <strong>";
            echo (isset($context["text_email"]) ? $context["text_email"] : null);
            echo "</strong><br>
                  ";
            // line 43
            echo (isset($context["mail"]) ? $context["mail"] : null);
            echo "<br /><br />
                  ";
        }
        // line 45
        echo "                </div>
                <div class=\"col-sm-12\">
                  ";
        // line 47
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 48
            echo "                  <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> <strong>";
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />
                  ";
            // line 49
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "<br />
                  <br />
                  ";
        }
        // line 52
        echo "                  ";
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 53
            echo "                  <i class=\"fa fa-commenting-o\" aria-hidden=\"true\"></i> <strong>";
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</strong><br />
                  ";
            // line 54
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "<br />
                  <br />
                  ";
        }
        // line 57
        echo "                </div>
                </div>
              </div>
              ";
        // line 60
        if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
            // line 61
            echo "              <div class=\"col-sm-6\">
                <div id=\"map-inner\" class=\"map-inner\"></div>
                <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=";
            // line 63
            echo (isset($context["google_key"]) ? $context["google_key"] : null);
            echo "&callback=initMap\"></script>
                <script>
                    function initMap() {
                        var lat_lng = new google.maps.LatLng(";
            // line 66
            echo (isset($context["geocode"]) ? $context["geocode"] : null);
            echo ");
                        var map = new google.maps.Map(document.getElementById('map-inner'), {
                            zoom: 17,
                            center: lat_lng,
                            mapTypeControl: false,
                            scaleControl: false,
                            streetViewControl: false,
                            rotateControl: false,
                            fullscreenControl: false,
                            scrollwheel: false
                        });
                        var marker = new google.maps.Marker({
                            position: lat_lng,
                            map: map
                        });
                    }
                </script>
              </div>
              ";
        }
        // line 85
        echo "          </div>
        </div>
      </div>
      ";
        // line 88
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 89
            echo "      <h3>";
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 92
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 94
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle\"
                data-toggle=\"collapse\" data-parent=\"#accordion\">";
                // line 95
                echo $this->getAttribute($context["location"], "name", array());
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 97
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 100
                if ($this->getAttribute($context["location"], "image", array())) {
                    // line 101
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo $this->getAttribute($context["location"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\"
                    class=\"img-thumbnail\" /></div>
                ";
                }
                // line 104
                echo "                <div class=\"col-sm-3\"><strong>";
                echo $this->getAttribute($context["location"], "name", array());
                echo "</strong><br />
                  <address>
                    ";
                // line 106
                echo $this->getAttribute($context["location"], "address", array());
                echo "
                  </address>
                  ";
                // line 108
                if ($this->getAttribute($context["location"], "geocode", array())) {
                    // line 109
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                    echo "&hl=";
                    echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                    echo "&t=m&z=15\"
                    target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    // line 110
                    echo (isset($context["button_map"]) ? $context["button_map"] : null);
                    echo "</a>
                  ";
                }
                // line 112
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 113
                echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                echo "</strong><br>
                  ";
                // line 114
                echo $this->getAttribute($context["location"], "telephone", array());
                echo "<br />
                  <br />
                  ";
                // line 116
                if ($this->getAttribute($context["location"], "fax", array())) {
                    // line 117
                    echo "                  <strong>";
                    echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                    echo "</strong><br>
                  ";
                    // line 118
                    echo $this->getAttribute($context["location"], "fax", array());
                    echo "
                  ";
                }
                // line 120
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 122
                if ($this->getAttribute($context["location"], "open", array())) {
                    // line 123
                    echo "                  <strong>";
                    echo (isset($context["text_open"]) ? $context["text_open"] : null);
                    echo "</strong><br />
                  ";
                    // line 124
                    echo $this->getAttribute($context["location"], "open", array());
                    echo "<br />
                  <br />
                  ";
                }
                // line 127
                echo "                  ";
                if ($this->getAttribute($context["location"], "comment", array())) {
                    // line 128
                    echo "                  <strong>";
                    echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                    echo "</strong><br />
                  ";
                    // line 129
                    echo $this->getAttribute($context["location"], "comment", array());
                    echo "
                  ";
                }
                // line 131
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "      </div>
      ";
        }
        // line 139
        echo "      <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 141
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 143
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 145
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 146
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 147
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 149
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 152
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 154
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 155
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 156
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 158
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 161
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 163
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
              ";
        // line 164
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 165
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
              ";
        }
        // line 167
        echo "            </div>
          </div>
          ";
        // line 169
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 173
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "\" />
          </div>
        </div>
      </form>
    </div>
    ";
        // line 178
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  ";
        // line 179
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
</div>
";
        // line 182
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default_x/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 182,  453 => 179,  449 => 178,  441 => 173,  434 => 169,  430 => 167,  424 => 165,  422 => 164,  418 => 163,  413 => 161,  408 => 158,  402 => 156,  400 => 155,  396 => 154,  391 => 152,  386 => 149,  380 => 147,  378 => 146,  374 => 145,  369 => 143,  364 => 141,  358 => 139,  354 => 137,  343 => 131,  338 => 129,  333 => 128,  330 => 127,  324 => 124,  319 => 123,  317 => 122,  313 => 120,  308 => 118,  303 => 117,  301 => 116,  296 => 114,  292 => 113,  289 => 112,  284 => 110,  277 => 109,  275 => 108,  270 => 106,  264 => 104,  253 => 101,  251 => 100,  245 => 97,  240 => 95,  236 => 94,  232 => 92,  228 => 91,  222 => 89,  220 => 88,  215 => 85,  193 => 66,  187 => 63,  183 => 61,  181 => 60,  176 => 57,  170 => 54,  165 => 53,  162 => 52,  156 => 49,  151 => 48,  149 => 47,  145 => 45,  140 => 43,  135 => 42,  133 => 41,  129 => 39,  124 => 37,  119 => 36,  117 => 35,  112 => 33,  108 => 32,  102 => 29,  96 => 27,  86 => 25,  84 => 24,  75 => 18,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-contact" class="container">*/
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
/*         <h1>{{ heading_title }}</h1>*/
/*         <div class="panel panel-default-x">*/
/*           <div class="panel-body">*/
/*             <div class="row">*/
/*               <div class="col-sm-6">*/
/*                 <div class="row">*/
/*                 {% if image %}*/
/*                 <div class="col-sm-12"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*                 {% endif %}*/
/*                 <div class="col-sm-12"><i class="fa fa-home" aria-hidden="true"></i> <strong>{{ store }}</strong><br />*/
/*                   <address>*/
/*                     {{ address }}*/
/*                   </address>*/
/*                 </div>*/
/*                 <div class="col-sm-12"><i class="fa fa-phone" aria-hidden="true"></i> <strong>{{ text_telephone }}</strong><br>*/
/*                   {{ telephone }}<br />*/
/*                   <br />*/
/*                   {% if fax %}*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ fax }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-12">*/
/*                   {% if mail %}*/
/*                   <i class="fa fa-envelope-o" aria-hidden="true"></i> <strong>{{ text_email }}</strong><br>*/
/*                   {{ mail }}<br /><br />*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-12">*/
/*                   {% if open %}*/
/*                   <i class="fa fa-clock-o" aria-hidden="true"></i> <strong>{{ text_open }}</strong><br />*/
/*                   {{ open }}<br />*/
/*                   <br />*/
/*                   {% endif %}*/
/*                   {% if comment %}*/
/*                   <i class="fa fa-commenting-o" aria-hidden="true"></i> <strong>{{ text_comment }}</strong><br />*/
/*                   {{ comment }}<br />*/
/*                   <br />*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% if geocode %}*/
/*               <div class="col-sm-6">*/
/*                 <div id="map-inner" class="map-inner"></div>*/
/*                 <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ google_key }}&callback=initMap"></script>*/
/*                 <script>*/
/*                     function initMap() {*/
/*                         var lat_lng = new google.maps.LatLng({{ geocode }});*/
/*                         var map = new google.maps.Map(document.getElementById('map-inner'), {*/
/*                             zoom: 17,*/
/*                             center: lat_lng,*/
/*                             mapTypeControl: false,*/
/*                             scaleControl: false,*/
/*                             streetViewControl: false,*/
/*                             rotateControl: false,*/
/*                             fullscreenControl: false,*/
/*                             scrollwheel: false*/
/*                         });*/
/*                         var marker = new google.maps.Marker({*/
/*                             position: lat_lng,*/
/*                             map: map*/
/*                         });*/
/*                     }*/
/*                 </script>*/
/*               </div>*/
/*               {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if locations %}*/
/*       <h3>{{ text_store }}</h3>*/
/*       <div class="panel-group" id="accordion">*/
/*         {% for location in locations %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle"*/
/*                 data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*             <div class="panel-body">*/
/*               <div class="row">*/
/*                 {% if location.image %}*/
/*                 <div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}"*/
/*                     class="img-thumbnail" /></div>*/
/*                 {% endif %}*/
/*                 <div class="col-sm-3"><strong>{{ location.name }}</strong><br />*/
/*                   <address>*/
/*                     {{ location.address }}*/
/*                   </address>*/
/*                   {% if location.geocode %}*/
/*                   <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15"*/
/*                     target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3"> <strong>{{ text_telephone }}</strong><br>*/
/*                   {{ location.telephone }}<br />*/
/*                   <br />*/
/*                   {% if location.fax %}*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ location.fax }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                   {% if location.open %}*/
/*                   <strong>{{ text_open }}</strong><br />*/
/*                   {{ location.open }}<br />*/
/*                   <br />*/
/*                   {% endif %}*/
/*                   {% if location.comment %}*/
/*                   <strong>{{ text_comment }}</strong><br />*/
/*                   {{ location.comment }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_contact }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*               <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <input class="btn btn-primary" type="submit" value="{{ button_submit }}" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*     {{ content_bottom }}</div>*/
/*   {{ column_right }}*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/
