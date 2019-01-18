<?php

/* default_x/template/extension/module/map_home.twig */
class __TwigTemplate_9d857a40d84dabc554cbe672f157aea6ef2d95a13978e0fd243139a8f680aa3f extends Twig_Template
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
        if (((isset($context["geocode"]) ? $context["geocode"] : null) && ((isset($context["status"]) ? $context["status"] : null) == 1))) {
            // line 2
            echo "<div class=\"map-home\">
    <h3 class='map-home-title mainTitle'>";
            // line 3
            echo (isset($context["text_titlemap"]) ? $context["text_titlemap"] : null);
            echo "</h3>
    <div id=\"map-home-inner\" class=\"map-home-inner\"></div>
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=";
            // line 5
            echo (isset($context["google_key"]) ? $context["google_key"] : null);
            echo "&callback=initMap\"></script>
    <script>
        function initMap() {
            var lat_lng = new google.maps.LatLng(";
            // line 8
            echo (isset($context["geocode"]) ? $context["geocode"] : null);
            echo ");
            var map = new google.maps.Map(document.getElementById('map-home-inner'), {
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
    }

    public function getTemplateName()
    {
        return "default_x/template/extension/module/map_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if geocode and status == 1 %}*/
/* <div class="map-home">*/
/*     <h3 class='map-home-title mainTitle'>{{ text_titlemap }}</h3>*/
/*     <div id="map-home-inner" class="map-home-inner"></div>*/
/*     <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ google_key }}&callback=initMap"></script>*/
/*     <script>*/
/*         function initMap() {*/
/*             var lat_lng = new google.maps.LatLng({{ geocode }});*/
/*             var map = new google.maps.Map(document.getElementById('map-home-inner'), {*/
/*                 zoom: 17,*/
/*                 center: lat_lng,*/
/*                 mapTypeControl: false,*/
/*                 scaleControl: false,*/
/*                 streetViewControl: false,*/
/*                 rotateControl: false,*/
/*                 fullscreenControl: false,*/
/*                 scrollwheel: false*/
/*             });*/
/*             var marker = new google.maps.Marker({*/
/*                 position: lat_lng,*/
/*                 map: map*/
/*             });*/
/*         }*/
/*     </script>*/
/* </div>*/
/* {% endif %}*/
