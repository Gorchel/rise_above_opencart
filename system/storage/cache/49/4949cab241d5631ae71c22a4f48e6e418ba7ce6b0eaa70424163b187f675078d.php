<?php

/* journal3/template/journal3/module/master_slider.twig */
class __TwigTemplate_851f66c7b530cf59e97608d19c64cb841c8e08bb7ac6081f3519dfa01007c858 extends Twig_Template
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
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\" style=\"background-image:url('";
        echo (isset($context["first_image"]) ? $context["first_image"] : null);
        echo "')\">
  ";
        // line 2
        if (((isset($context["staticText"]) ? $context["staticText"] : null) && $this->getAttribute((isset($context["staticTextLink"]) ? $context["staticTextLink"] : null), "href", array()))) {
            // line 3
            echo "    <a href=\"";
            echo $this->getAttribute((isset($context["staticTextLink"]) ? $context["staticTextLink"] : null), "href", array());
            echo "\" class=\"slider-static-text static-text-1\"><span>";
            echo (isset($context["staticText"]) ? $context["staticText"] : null);
            echo "</span></a>
  ";
        } elseif (        // line 4
(isset($context["staticText"]) ? $context["staticText"] : null)) {
            // line 5
            echo "    <div class=\"slider-static-text static-text-1\"><span>";
            echo (isset($context["staticText"]) ? $context["staticText"] : null);
            echo "</span></div>
  ";
        }
        // line 7
        echo "  ";
        if (((isset($context["static2Text"]) ? $context["static2Text"] : null) && $this->getAttribute((isset($context["static2TextLink"]) ? $context["static2TextLink"] : null), "href", array()))) {
            // line 8
            echo "    <a href=\"";
            echo $this->getAttribute((isset($context["static2TextLink"]) ? $context["static2TextLink"] : null), "href", array());
            echo "\" class=\"slider-static-text static-text-2\"><span>";
            echo (isset($context["static2Text"]) ? $context["static2Text"] : null);
            echo "</span></a>
  ";
        } elseif (        // line 9
(isset($context["static2Text"]) ? $context["static2Text"] : null)) {
            // line 10
            echo "    <div class=\"slider-static-text static-text-2\"><span>";
            echo (isset($context["static2Text"]) ? $context["static2Text"] : null);
            echo "</span></div>
  ";
        }
        // line 12
        echo "  <img src=\"";
        echo (isset($context["first_image"]) ? $context["first_image"] : null);
        echo "\" ";
        if ((isset($context["first_image2x"]) ? $context["first_image2x"] : null)) {
            echo "srcset=\"";
            echo (isset($context["first_image"]) ? $context["first_image"] : null);
            echo " 1x, ";
            echo (isset($context["first_image2x"]) ? $context["first_image2x"] : null);
            echo " 2x\"";
        }
        echo " alt=\"";
        echo (isset($context["first_alt"]) ? $context["first_alt"] : null);
        echo "\">
  ";
        // line 14
        echo "  <div class=\"master-slider ms-skin-minimal\" data-options='";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null), twig_constant("JSON_FORCE_OBJECT"));
        echo "' ";
        if ((isset($context["parallaxMode"]) ? $context["parallaxMode"] : null)) {
            echo "data-parallax=\"";
            echo (isset($context["parallax"]) ? $context["parallax"] : null);
            echo "\"";
        }
        echo ">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "      <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
            echo "\" ";
            if ($this->getAttribute($context["item"], "delay", array())) {
                echo "data-delay=\"";
                echo $this->getAttribute($context["item"], "delay", array());
                echo "\"";
            }
            echo ">
        <img src=\"";
            // line 17
            echo $this->getAttribute($context["item"], "image", array());
            echo "\" ";
            if ($this->getAttribute($context["item"], "image2x", array())) {
                echo " srcset=\"";
                echo $this->getAttribute($context["item"], "image", array());
                echo " 1x, ";
                echo $this->getAttribute($context["item"], "image2x", array());
                echo " 2x\" ";
            }
            echo " alt=\"";
            echo $this->getAttribute($context["item"], "alt", array());
            echo "\" width=\"";
            echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "width", array());
            echo "\" height=\"";
            echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "height", array());
            echo "\"/>

        ";
            // line 19
            if (((isset($context["thumbnails"]) ? $context["thumbnails"] : null) && $this->getAttribute($context["item"], "thumb", array()))) {
                // line 20
                echo "          <img src=\"";
                echo $this->getAttribute($context["item"], "thumb", array());
                echo "\" ";
                if ($this->getAttribute($context["item"], "thumb2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["item"], "thumb", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["item"], "thumb2x", array());
                    echo " 2x\"";
                }
                echo " alt=\"";
                echo $this->getAttribute($context["item"], "alt", array());
                echo "\" class=\"ms-thumb\"/>
        ";
            }
            // line 22
            echo "
        ";
            // line 23
            if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                // line 24
                echo "          <a href=\"";
                echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                echo "\" ";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                echo "></a>
        ";
            }
            // line 26
            echo "
        ";
            // line 27
            if (($this->getAttribute($context["item"], "type", array()) == "video")) {
                // line 28
                echo "          ";
                if (($this->getAttribute($context["item"], "videoType", array()) == "html5")) {
                    // line 29
                    echo "            <video data-autopause=\"true\" ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "ios"), "method")) {
                        echo "playsinline";
                    }
                    echo ">
              ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "videoSrc", array()));
                    foreach ($context['_seq'] as $context["type"] => $context["src"]) {
                        // line 31
                        echo "                <source src=\"";
                        echo $context["src"];
                        echo "\" type=\"video/";
                        echo $context["type"];
                        echo "\"/>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['type'], $context['src'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "            </video>
          ";
                } elseif (($this->getAttribute(                // line 34
$context["item"], "videoType", array()) == "youtube")) {
                    // line 35
                    echo "            <a href=\"https://www.youtube.com/embed/";
                    echo $this->getAttribute($context["item"], "videoSrc", array());
                    echo "?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1\" data-type=\"video\"></a>
          ";
                } elseif (($this->getAttribute(                // line 36
$context["item"], "videoType", array()) == "vimeo")) {
                    // line 37
                    echo "            <a href=\"https://player.vimeo.com/video/";
                    echo $this->getAttribute($context["item"], "videoSrc", array());
                    echo "\" data-type=\"video\"></a>
          ";
                }
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 42
                echo "          ";
                if (($this->getAttribute($context["subitem"], "type", array()) == "text")) {
                    // line 43
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\" ";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo ">";
                    echo $this->getAttribute($context["subitem"], "text", array());
                    echo "</div>
          ";
                } elseif (($this->getAttribute(                // line 44
$context["subitem"], "type", array()) == "hotspot")) {
                    // line 45
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\" ";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo "><div class=\"product-tt\">";
                    echo $this->getAttribute($context["subitem"], "text", array());
                    echo "</div></div>
          ";
                } elseif (($this->getAttribute(                // line 46
$context["subitem"], "type", array()) == "shape")) {
                    // line 47
                    echo "            <img class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\" ";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" alt=\"";
                    echo $this->getAttribute($context["subitem"], "alt", array());
                    echo "\"/>
          ";
                } elseif (($this->getAttribute(                // line 48
$context["subitem"], "type", array()) == "button")) {
                    // line 49
                    echo "            <a class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\" ";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo " ";
                    if ($this->getAttribute($this->getAttribute($context["subitem"], "link", array()), "href", array())) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($context["subitem"], "link", array()), "href", array());
                        echo "\" ";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["subitem"], "link", array())), "method");
                        echo " ";
                    }
                    echo "><span>";
                    echo $this->getAttribute($context["subitem"], "text", array());
                    echo "</span></a>
          ";
                } elseif (($this->getAttribute(                // line 50
$context["subitem"], "type", array()) == "image")) {
                    // line 51
                    echo "            <img class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\" ";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"";
                    echo $this->getAttribute($context["subitem"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["subitem"], "alt", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["subitem"], "width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["subitem"], "height", array());
                    echo "\"/>
          ";
                } elseif (($this->getAttribute(                // line 52
$context["subitem"], "type", array()) == "video")) {
                    // line 53
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\" ";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo ">
              ";
                    // line 54
                    if (($this->getAttribute($context["subitem"], "videoType", array()) == "html5")) {
                        // line 55
                        echo "                <video controls>
                  ";
                        // line 56
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subitem"], "videoSrc", array()));
                        foreach ($context['_seq'] as $context["type"] => $context["src"]) {
                            // line 57
                            echo "                    <source src=\"";
                            echo $context["src"];
                            echo "\" type=\"video/";
                            echo $context["type"];
                            echo "\"/>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['type'], $context['src'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 59
                        echo "                </video>
              ";
                    } elseif (($this->getAttribute(                    // line 60
$context["subitem"], "videoType", array()) == "youtube")) {
                        // line 61
                        echo "                <iframe src=\"https://www.youtube.com/embed/";
                        echo $this->getAttribute($context["subitem"], "videoSrc", array());
                        echo "?hd=1&wmode=opaque&controls=1&showinfo=0\"></iframe>
              ";
                    } elseif (($this->getAttribute(                    // line 62
$context["subitem"], "videoType", array()) == "vimeo")) {
                        // line 63
                        echo "                <iframe src=\"https://player.vimeo.com/video/";
                        echo $this->getAttribute($context["subitem"], "videoSrc", array());
                        echo "\"></iframe>
              ";
                    }
                    // line 65
                    echo "            </div>
          ";
                }
                // line 67
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/master_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 70,  337 => 68,  331 => 67,  327 => 65,  321 => 63,  319 => 62,  314 => 61,  312 => 60,  309 => 59,  298 => 57,  294 => 56,  291 => 55,  289 => 54,  282 => 53,  280 => 52,  265 => 51,  263 => 50,  246 => 49,  244 => 48,  235 => 47,  233 => 46,  224 => 45,  222 => 44,  213 => 43,  210 => 42,  206 => 41,  203 => 40,  200 => 39,  194 => 37,  192 => 36,  187 => 35,  185 => 34,  182 => 33,  171 => 31,  167 => 30,  160 => 29,  157 => 28,  155 => 27,  152 => 26,  144 => 24,  142 => 23,  139 => 22,  123 => 20,  121 => 19,  102 => 17,  91 => 16,  87 => 15,  76 => 14,  61 => 12,  55 => 10,  53 => 9,  46 => 8,  43 => 7,  37 => 5,  35 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}" style="background-image:url('{{ first_image }}')">*/
/*   {% if staticText and staticTextLink.href %}*/
/*     <a href="{{ staticTextLink.href }}" class="slider-static-text static-text-1"><span>{{ staticText }}</span></a>*/
/*   {% elseif staticText %}*/
/*     <div class="slider-static-text static-text-1"><span>{{ staticText }}</span></div>*/
/*   {% endif %}*/
/*   {% if static2Text and static2TextLink.href %}*/
/*     <a href="{{ static2TextLink.href }}" class="slider-static-text static-text-2"><span>{{ static2Text }}</span></a>*/
/*   {% elseif static2Text %}*/
/*     <div class="slider-static-text static-text-2"><span>{{ static2Text }}</span></div>*/
/*   {% endif %}*/
/*   <img src="{{ first_image }}" {% if first_image2x %}srcset="{{ first_image }} 1x, {{ first_image2x }} 2x"{% endif %} alt="{{ first_alt }}">*/
/*   {#<img src="{{ first_image }}" alt="{{ first_alt }}" class="img-2">#}*/
/*   <div class="master-slider ms-skin-minimal" data-options='{{ options|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if parallaxMode %}data-parallax="{{ parallax }}"{% endif %}>*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}" {% if item.delay %}data-delay="{{ item.delay }}"{% endif %}>*/
/*         <img src="{{ item.image }}" {% if item.image2x %} srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} alt="{{ item.alt }}" width="{{ options.width }}" height="{{ options.height }}"/>*/
/* */
/*         {% if thumbnails and item.thumb %}*/
/*           <img src="{{ item.thumb }}" {% if item.thumb2x %}srcset="{{ item.thumb }} 1x, {{ item.thumb2x }} 2x"{% endif %} alt="{{ item.alt }}" class="ms-thumb"/>*/
/*         {% endif %}*/
/* */
/*         {% if item.link.href %}*/
/*           <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}></a>*/
/*         {% endif %}*/
/* */
/*         {% if item.type == 'video' %}*/
/*           {% if item.videoType == 'html5' %}*/
/*             <video data-autopause="true" {% if j3.document.hasClass('ios') %}playsinline{% endif %}>*/
/*               {% for type, src in item.videoSrc %}*/
/*                 <source src="{{ src }}" type="video/{{ type }}"/>*/
/*               {% endfor %}*/
/*             </video>*/
/*           {% elseif item.videoType == 'youtube' %}*/
/*             <a href="https://www.youtube.com/embed/{{ item.videoSrc }}?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1" data-type="video"></a>*/
/*           {% elseif item.videoType == 'vimeo' %}*/
/*             <a href="https://player.vimeo.com/video/{{ item.videoSrc }}" data-type="video"></a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% for subitem in item.items %}*/
/*           {% if subitem.type == 'text' %}*/
/*             <div class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }}>{{ subitem.text }}</div>*/
/*           {% elseif subitem.type == 'hotspot' %}*/
/*             <div class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }}><div class="product-tt">{{ subitem.text }}</div></div>*/
/*           {% elseif subitem.type == 'shape' %}*/
/*             <img class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }} src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="{{ subitem.alt }}"/>*/
/*           {% elseif subitem.type == 'button' %}*/
/*             <a class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }} {% if subitem.link.href %}href="{{ subitem.link.href }}" {{ j3.linkAttrs(subitem.link) }} {% endif %}><span>{{ subitem.text }}</span></a>*/
/*           {% elseif subitem.type == 'image' %}*/
/*             <img class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }} src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="{{ subitem.image }}" alt="{{ subitem.alt }}" width="{{ subitem.width }}" height="{{ subitem.height }}"/>*/
/*           {% elseif subitem.type == 'video' %}*/
/*             <div class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }}>*/
/*               {% if subitem.videoType == 'html5' %}*/
/*                 <video controls>*/
/*                   {% for type, src in subitem.videoSrc %}*/
/*                     <source src="{{ src }}" type="video/{{ type }}"/>*/
/*                   {% endfor %}*/
/*                 </video>*/
/*               {% elseif subitem.videoType == 'youtube' %}*/
/*                 <iframe src="https://www.youtube.com/embed/{{ subitem.videoSrc }}?hd=1&wmode=opaque&controls=1&showinfo=0"></iframe>*/
/*               {% elseif subitem.videoType == 'vimeo' %}*/
/*                 <iframe src="https://player.vimeo.com/video/{{ subitem.videoSrc }}"></iframe>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
