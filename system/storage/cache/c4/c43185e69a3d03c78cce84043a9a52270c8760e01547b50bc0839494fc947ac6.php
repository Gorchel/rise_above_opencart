<?php

/* journal3/template/product/product.twig */
class __TwigTemplate_3ea79ced1c964b440213ac3ded47338b54a48c4032e456fbf833823be8409e94 extends Twig_Template
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
        $context["stylePrefix"] = (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["direction"] = (((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method") == "left") || ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method") == "right"))) ? ("vertical") : ("horizontal"));
        // line 3
        $context["carousel"] = (((isset($context["direction"]) ? $context["direction"] : null) == "vertical") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesCarousel")), "method"));
        // line 4
        $context["carouselOptions"] = array("slidesPerView" => "auto", "spaceBetween" => (($this->getAttribute($this->getAttribute(        // line 6
(isset($context["j3"]) ? $context["j3"] : null), "settings", array(), "any", false, true), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesSpacing")), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array(), "any", false, true), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesSpacing")), "method"), 0)) : (0)), "direction" =>         // line 7
(isset($context["direction"]) ? $context["direction"] : null));
        // line 9
        $context["galleryOptions"] = array("thumbWidth" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_popup_thumb.width"), "method"), "thumbConHeight" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_popup_thumb.height"), "method"), "addClass" => "lg-product-images");
        // line 14
        $context["quickviewExpand"] = ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method") || ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalExpandCharactersLimit"), "method") > 0) && (isset($context["description"]) ? $context["description"] : null)) && (twig_length_filter($this->env, (isset($context["description"]) ? $context["description"] : null)) <= $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalExpandCharactersLimit"), "method"))))) ? ("no-expand") : (""));
        // line 15
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 16
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 17
            echo "<ul class=\"breadcrumb\">
  ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 19
                echo "  <li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "</ul>
";
            // line 22
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
                // line 23
                echo "  <h1 class=\"title page-title\"><span>";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</span></h1>
";
            }
            // line 25
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
            echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 27
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
    <div id=\"content\" class=\"";
            // line 28
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">
      ";
        }
        // line 30
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 31
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 32
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method"))) {
                // line 33
                echo "          <h1 class=\"title page-title\">";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</h1>
        ";
            }
            // line 35
            echo "      ";
        }
        // line 36
        echo "      ";
        $context["classes"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => array("out-of-stock" => (        // line 37
(isset($context["product_quantity"]) ? $context["product_quantity"] : null) <= 0), "has-countdown" =>         // line 38
(isset($context["date_end"]) ? $context["date_end"] : null), "has-zero-price" =>  !        // line 39
(isset($context["product_price_value"]) ? $context["product_price_value"] : null), "has-extra-button" =>         // line 40
(isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null))), "method");
        // line 42
        echo "      <div class=\"product-info ";
        echo (isset($context["classes"]) ? $context["classes"] : null);
        echo "\">
        ";
        // line 43
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 44
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 45
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo " position-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method");
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 46
            echo twig_jsonencode_filter($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "carousel", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getJs", array(), "method"), 1 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ImageCarouselStyle")), "method"), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 1) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesStatus")), "method")) && (isset($context["carousel"]) ? $context["carousel"] : null)) && ((isset($context["direction"]) ? $context["direction"] : null) == "vertical"))) {
                echo "style=\"width: calc(100% - ";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_additional.width"), "method");
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\" ";
            // line 47
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">
                  ";
            // line 49
            $context["gallery"] = array();
            // line 50
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 51
                echo "                    ";
                $context["gallery"] = twig_array_merge((isset($context["gallery"]) ? $context["gallery"] : null), array(0 => array("src" => $this->getAttribute($context["image"], "popup", array()), "thumb" => $this->getAttribute($context["image"], "galleryThumb", array()), "subHtml" => (isset($context["heading_title"]) ? $context["heading_title"] : null))));
                // line 52
                echo "                    <div class=\"swiper-slide\" ";
                if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryStatus")), "method"))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo $this->getAttribute($context["loop"], "index0", array());
                    echo "\" ";
                }
                echo ">
                      <img src=\"";
                // line 53
                echo $this->getAttribute($context["image"], "image", array());
                echo "\" ";
                if ($this->getAttribute($context["image"], "image2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["image"], "image", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["image"], "image2x", array());
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_thumb.width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_thumb.height"), "method");
                echo "\"/>
                    </div>
                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
              ";
            // line 65
            if ((isset($context["product_labels"]) ? $context["product_labels"] : null)) {
                // line 66
                echo "                <div class=\"product-labels\">
                  ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_labels"]) ? $context["product_labels"] : null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 68
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo $this->getAttribute($context["label"], "display", array());
                    echo "\"><b>";
                    echo $this->getAttribute($context["label"], "label", array());
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                </div>
              ";
            }
            // line 72
            echo "            </div>
            ";
            // line 73
            if (((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 1) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesStatus")), "method"))) {
                // line 74
                echo "              ";
                if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                    // line 75
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if (((isset($context["direction"]) ? $context["direction"] : null) == "vertical")) {
                        echo "style=\"width: ";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_additional.width"), "method");
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\" ";
                    // line 76
                    if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 79
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo $this->getAttribute($context["loop"], "index0", array());
                        echo "\">
                          <img src=\"";
                        // line 80
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" ";
                        if ($this->getAttribute($context["image"], "thumb2x", array())) {
                            echo "srcset=\"";
                            echo $this->getAttribute($context["image"], "thumb", array());
                            echo " 1x, ";
                            echo $this->getAttribute($context["image"], "thumb2x", array());
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"/>
                        </div>
                      ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
              ";
                } else {
                    // line 92
                    echo "                <div class=\"additional-images\">
                  ";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 94
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo $this->getAttribute($context["loop"], "index0", array());
                        echo "\">
                      <img src=\"";
                        // line 95
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"/>
                    </div>
                  ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "                </div>
              ";
                }
                // line 100
                echo "            ";
            }
            // line 101
            echo "          </div>
          ";
            // line 102
            if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryStatus")), "method"))) {
                // line 103
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["gallery"]) ? $context["gallery"] : null)));
                echo "' data-options='";
                echo twig_jsonencode_filter((isset($context["galleryOptions"]) ? $context["galleryOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
          ";
            }
            // line 105
            echo "          ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
                // line 106
                echo "            ";
                if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "image", array())) {
                    // line 107
                    echo "            <div class=\"product-blocks blocks-image\">
              ";
                    // line 108
                    echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "image", array()));
                    echo "
            </div>
            ";
                }
                // line 111
                echo "          ";
            }
            // line 112
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "image")))) {
                // line 113
                echo "            <div class=\"description ";
                echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
                // line 116
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
                </div>
                ";
                // line 118
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                    // line 119
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 121
                echo "              </div>
            </div>
          ";
            }
            // line 124
            echo "          ";
            if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "image"))) {
                // line 125
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 126
                echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
                echo "</span>
              ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 128
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["tag"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["tag"], "tag", array());
                    echo "</a>
                ";
                    // line 129
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "<b>,</b>";
                    }
                    // line 130
                    echo "              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "            </div>
          ";
            }
            // line 133
            echo "        </div>
        ";
        }
        // line 135
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 137
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 138
            echo "          <div class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
          ";
            // line 139
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "top", array())) {
                // line 140
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 141
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "top", array()));
                echo "
          </div>
          ";
            }
            // line 144
            echo "          ";
        }
        // line 145
        echo "
          ";
        // line 146
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "top")))) {
            // line 147
            echo "            <div class=\"description ";
            echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 150
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
                </div>
                ";
            // line 152
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                // line 153
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 155
            echo "              </div>
            </div>
          ";
        }
        // line 158
        echo "
          ";
        // line 159
        if ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Stats")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "StatsPosition")), "method") == "default"))) {
            // line 160
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 162
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStock")), "method")) {
                // line 163
                echo "                  <li class=\"product-stock ";
                if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                echo ":</b> <span>";
                echo (isset($context["stock"]) ? $context["stock"] : null);
                echo "</span></li>
                ";
            }
            // line 165
            echo "                ";
            if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "list"))) {
                // line 166
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerText")), "method");
                echo ":</b> <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
                ";
            }
            // line 168
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductReward")), "method") && (isset($context["reward"]) ? $context["reward"] : null))) {
                // line 169
                echo "                  <li class=\"product-reward\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductRewardText")), "method");
                echo ":</b> <span>";
                echo (isset($context["reward"]) ? $context["reward"] : null);
                echo "</span></li>
                ";
            }
            // line 171
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModel")), "method") && (isset($context["model"]) ? $context["model"] : null))) {
                // line 172
                echo "                  <li class=\"product-model\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModelText")), "method");
                echo ":</b> <span>";
                echo (isset($context["model"]) ? $context["model"] : null);
                echo "</span></li>
                ";
            }
            // line 174
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeight")), "method") && (isset($context["product_weight"]) ? $context["product_weight"] : null))) {
                // line 175
                echo "                  <li class=\"product-weight\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeightText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_weight"]) ? $context["product_weight"] : null);
                echo "</span></li>
                ";
            }
            // line 177
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimension")), "method") && (isset($context["product_dimension"]) ? $context["product_dimension"] : null))) {
                // line 178
                echo "                  <li class=\"product-dimension\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimensionText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_length"]) ? $context["product_length"] : null);
                echo " x ";
                echo (isset($context["product_width"]) ? $context["product_width"] : null);
                echo " x ";
                echo (isset($context["product_height"]) ? $context["product_height"] : null);
                echo "</span></li>
                ";
            }
            // line 180
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKU")), "method") && (isset($context["product_sku"]) ? $context["product_sku"] : null))) {
                // line 181
                echo "                  <li class=\"product-sku\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKUText")), "method");
                echo ":</b> <span> ";
                echo (isset($context["product_sku"]) ? $context["product_sku"] : null);
                echo "</span></li>
                ";
            }
            // line 183
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPC")), "method") && (isset($context["product_upc"]) ? $context["product_upc"] : null))) {
                // line 184
                echo "                  <li class=\"product-upc\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPCText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_upc"]) ? $context["product_upc"] : null);
                echo "</span></li>
                ";
            }
            // line 186
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEAN")), "method") && (isset($context["product_ean"]) ? $context["product_ean"] : null))) {
                // line 187
                echo "                  <li class=\"product-ean\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEANText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_ean"]) ? $context["product_ean"] : null);
                echo "</span></li>
                ";
            }
            // line 189
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJAN")), "method") && (isset($context["product_jan"]) ? $context["product_jan"] : null))) {
                // line 190
                echo "                  <li class=\"product-jan\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJANText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_jan"]) ? $context["product_jan"] : null);
                echo "</span></li>
                ";
            }
            // line 192
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBN")), "method") && (isset($context["product_isbn"]) ? $context["product_isbn"] : null))) {
                // line 193
                echo "                  <li class=\"product-isbn\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBNText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_isbn"]) ? $context["product_isbn"] : null);
                echo "</span></li>
                ";
            }
            // line 195
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPN")), "method") && (isset($context["product_mpn"]) ? $context["product_mpn"] : null))) {
                // line 196
                echo "                  <li class=\"product-mpn\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPNText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_mpn"]) ? $context["product_mpn"] : null);
                echo "</span></li>
                ";
            }
            // line 198
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocation")), "method") && (isset($context["product_location"]) ? $context["product_location"] : null))) {
                // line 199
                echo "                  <li class=\"product-location\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocationText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_location"]) ? $context["product_location"] : null);
                echo "</span></li>
                ";
            }
            // line 201
            echo "              </ul>
              ";
            // line 202
            if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "image"))) {
                // line 203
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 204
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">
                    ";
                // line 205
                if ((isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null)) {
                    // line 206
                    echo "                      <img src=\"";
                    echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                    echo "\" ";
                    if ((isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null)) {
                        echo "srcset=\"";
                        echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                        echo " 1x, ";
                        echo (isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "\"/>
                    ";
                }
                // line 208
                echo "                    <span>";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 212
            echo "              ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CustomStats")), "method")) {
                // line 213
                echo "                <div class=\"custom-stats\">
                  ";
                // line 214
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSold")), "method")) {
                    // line 215
                    echo "                    <div class=\"product-sold\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "SoldText"), 1 => (isset($context["products_sold"]) ? $context["products_sold"] : null)), "method");
                    echo "</b></div>
                  ";
                }
                // line 217
                echo "                  ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductViews")), "method")) {
                    // line 218
                    echo "                    <div class=\"product-views\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ViewsText"), 1 => (isset($context["product_views"]) ? $context["product_views"] : null)), "method");
                    echo "</b></div>
                  ";
                }
                // line 220
                echo "                </div>
              ";
            }
            // line 222
            echo "            </div>
          ";
        }
        // line 224
        echo "
          ";
        // line 225
        if (((isset($context["review_status"]) ? $context["review_status"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method"))) {
            // line 226
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 229
                echo "                  ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    // line 230
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 233
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 238
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 241
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
                <b>";
            // line 242
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "RatingSeparator")), "method");
            echo "</b>
                <a>";
            // line 243
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 247
        echo "
          ";
        // line 248
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) ? ("quickviewCountdown") : ("countdownStatus"))), "method"))) {
            // line 249
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 250
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CountdownText")), "method")) {
                // line 251
                echo "              <h5 class=\"countdown-title title\">";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CountdownText")), "method");
                echo "</h5>
              ";
            }
            // line 253
            echo "              <div class=\"countdown\" data-date=\"";
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 254
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownDay"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 255
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownHour"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 256
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownMin"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 257
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownSec"), "method");
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 261
        echo "
          ";
        // line 262
        if (((isset($context["price"]) ? $context["price"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method"))) {
            // line 263
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">
               ";
            // line 266
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 267
                echo "                 <div class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</div>
               ";
            } else {
                // line 269
                echo "                 <div class=\"product-price-new\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 270
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</div>
               ";
            }
            // line 272
            echo "             </div>
             ";
            // line 273
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 274
                echo "               <div class=\"product-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</div>
             ";
            }
            // line 276
            echo "             ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 277
                echo "               <div class=\"product-points\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</div>
             ";
            }
            // line 279
            echo "
             ";
            // line 280
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 281
                echo "               <div class=\"discounts\">
                 ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 283
                    echo "                   <div class=\"product-discount\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "               </div>
             ";
            }
            // line 287
            echo "           </div>
            ";
            // line 288
            if ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Stats")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "StatsPosition")), "method") == "price"))) {
                // line 289
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 291
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStock")), "method")) {
                    // line 292
                    echo "                    <li class=\"product-stock ";
                    if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["stock"]) ? $context["stock"] : null);
                    echo "</span></li>
                  ";
                }
                // line 294
                echo "                  ";
                if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "list"))) {
                    // line 295
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerText")), "method");
                    echo ":</b> <a href=\"";
                    echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                    echo "\">";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "</a></li>
                  ";
                }
                // line 297
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductReward")), "method") && (isset($context["reward"]) ? $context["reward"] : null))) {
                    // line 298
                    echo "                    <li class=\"product-reward\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductRewardText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["reward"]) ? $context["reward"] : null);
                    echo "</span></li>
                  ";
                }
                // line 300
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModel")), "method") && (isset($context["model"]) ? $context["model"] : null))) {
                    // line 301
                    echo "                    <li class=\"product-model\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModelText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["model"]) ? $context["model"] : null);
                    echo "</span></li>
                  ";
                }
                // line 303
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeight")), "method") && (isset($context["product_weight"]) ? $context["product_weight"] : null))) {
                    // line 304
                    echo "                    <li class=\"product-weight\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeightText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_weight"]) ? $context["product_weight"] : null);
                    echo "</span></li>
                  ";
                }
                // line 306
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimension")), "method") && (isset($context["product_dimension"]) ? $context["product_dimension"] : null))) {
                    // line 307
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimensionText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_length"]) ? $context["product_length"] : null);
                    echo " x ";
                    echo (isset($context["product_width"]) ? $context["product_width"] : null);
                    echo " x ";
                    echo (isset($context["product_height"]) ? $context["product_height"] : null);
                    echo "</span></li>
                  ";
                }
                // line 309
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKU")), "method") && (isset($context["product_sku"]) ? $context["product_sku"] : null))) {
                    // line 310
                    echo "                    <li class=\"product-sku\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKUText")), "method");
                    echo ":</b> <span> ";
                    echo (isset($context["product_sku"]) ? $context["product_sku"] : null);
                    echo "</span></li>
                  ";
                }
                // line 312
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPC")), "method") && (isset($context["product_upc"]) ? $context["product_upc"] : null))) {
                    // line 313
                    echo "                    <li class=\"product-upc\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPCText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_upc"]) ? $context["product_upc"] : null);
                    echo "</span></li>
                  ";
                }
                // line 315
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEAN")), "method") && (isset($context["product_ean"]) ? $context["product_ean"] : null))) {
                    // line 316
                    echo "                    <li class=\"product-ean\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEANText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_ean"]) ? $context["product_ean"] : null);
                    echo "</span></li>
                  ";
                }
                // line 318
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJAN")), "method") && (isset($context["product_jan"]) ? $context["product_jan"] : null))) {
                    // line 319
                    echo "                    <li class=\"product-jan\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJANText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_jan"]) ? $context["product_jan"] : null);
                    echo "</span></li>
                  ";
                }
                // line 321
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBN")), "method") && (isset($context["product_isbn"]) ? $context["product_isbn"] : null))) {
                    // line 322
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBNText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_isbn"]) ? $context["product_isbn"] : null);
                    echo "</span></li>
                  ";
                }
                // line 324
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPN")), "method") && (isset($context["product_mpn"]) ? $context["product_mpn"] : null))) {
                    // line 325
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPNText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_mpn"]) ? $context["product_mpn"] : null);
                    echo "</span></li>
                  ";
                }
                // line 327
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocation")), "method") && (isset($context["product_location"]) ? $context["product_location"] : null))) {
                    // line 328
                    echo "                    <li class=\"product-location\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocationText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_location"]) ? $context["product_location"] : null);
                    echo "</span></li>
                  ";
                }
                // line 330
                echo "                </ul>
                ";
                // line 331
                if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "image"))) {
                    // line 332
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 333
                    echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                    echo "\">
                      ";
                    // line 334
                    if ((isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null)) {
                        // line 335
                        echo "                        <img src=\"";
                        echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                        echo "\" ";
                        if ((isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null)) {
                            echo "srcset=\"";
                            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                            echo " 1x, ";
                            echo (isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                        echo "\"/>
                      ";
                    }
                    // line 337
                    echo "                      <span>";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 341
                echo "                ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CustomStats")), "method")) {
                    // line 342
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 343
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSold")), "method")) {
                        // line 344
                        echo "                      <div class=\"product-sold\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "SoldText"), 1 => (isset($context["products_sold"]) ? $context["products_sold"] : null)), "method");
                        echo "</b></div>
                    ";
                    }
                    // line 346
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductViews")), "method")) {
                        // line 347
                        echo "                      <div class=\"product-views\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ViewsText"), 1 => (isset($context["product_views"]) ? $context["product_views"] : null)), "method");
                        echo "</b></div>
                    ";
                    }
                    // line 349
                    echo "                  </div>
                ";
                }
                // line 351
                echo "              </div>
            ";
            }
            // line 353
            echo "          </div>
          ";
        }
        // line 355
        echo "
          ";
        // line 356
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 357
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 358
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 359
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 360
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 361
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushSelect")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 362
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 363
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 364
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 365
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 366
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 367
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 368
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 369
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 371
                    echo "              </select>
            </div>
            ";
                }
                // line 374
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 375
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushRadio")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 376
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 377
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 378
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 380
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 381
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "PushTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 382
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 383
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                      ";
                        // line 384
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 385
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 386
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                        </span>
                      ";
                        }
                        // line 389
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 392
                    echo " </div>
            </div>
            ";
                }
                // line 395
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 396
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushCheckbox")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 397
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 398
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 399
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 401
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 402
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "PushTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 403
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 404
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                      ";
                        // line 405
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 406
                            echo "                        <span class=\"option-price\">(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")</span>
                      ";
                        }
                        // line 408
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 411
                    echo " </div>
            </div>
            ";
                }
                // line 414
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 415
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 416
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 417
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 420
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 421
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 422
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 423
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 426
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 427
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\">";
                    // line 428
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 429
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 430
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 433
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 434
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 435
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 437
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 443
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 444
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 445
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 447
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 453
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 454
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 455
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 457
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 463
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 464
            echo "          </div>
          ";
        }
        // line 466
        echo "
          ";
        // line 467
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 468
            echo "            <h3 class=\"title recurring-title\">";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 471
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 472
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 473
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 479
        echo "
          ";
        // line 480
        if (((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) || ((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")))) {
            // line 481
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">
                ";
            // line 484
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method")) {
                // line 485
                echo "                <div class=\"stepper\">
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 486
                echo (isset($context["minimum"]) ? $context["minimum"] : null);
                echo "\" data-minimum=\"";
                echo (isset($context["minimum"]) ? $context["minimum"] : null);
                echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 487
                echo (isset($context["product_id"]) ? $context["product_id"] : null);
                echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 493
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartTooltipStatus")), "method"))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartTooltipPosition")), "method");
                    echo "\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" ";
                }
                echo "><span class=\"btn-text\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></a>
                ";
            }
            // line 495
            echo "                ";
            if (((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method"))) {
                // line 496
                echo "                  <div class=\"extra-group\">
                    ";
                // line 497
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 498
                    echo "                      <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "-extra\" ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Extra") . $this->getAttribute($context["loop"], "index", array())) . "ButtonDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ExtraTooltipStatus")), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ExtraTooltipPosition")), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($context["extra_button"], "label", array());
                        echo "\" ";
                    }
                    echo " ";
                    if (($this->getAttribute($context["extra_button"], "action", array()) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    echo " ";
                    if ((($this->getAttribute($context["extra_button"], "action", array()) == "link") && $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array()))) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array());
                        echo "\" ";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["extra_button"], "link", array())), "method");
                        echo " data-product_id=\"";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo "\"";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span>\"><span class=\"btn-text\">";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span></a>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 500
                echo "                  </div>
                ";
            }
            // line 502
            echo "              </div>

              ";
            // line 504
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method"))) {
                // line 505
                echo "              <div class=\"wishlist-compare\">
                ";
                // line 506
                if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
                    // line 507
                    echo "                  ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) {
                        // line 508
                        echo "                  <a class=\"btn btn-wishlist\" ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistTooltipStatus")), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo ");\"><span class=\"btn-text\">";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></a>
                  ";
                    }
                    // line 510
                    echo "
                  ";
                    // line 511
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) {
                        // line 512
                        echo "                  <a class=\"btn btn-compare\" ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareTooltipStatus")), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo ");\"><span class=\"btn-text\">";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "</span></a>
                  ";
                    }
                    // line 514
                    echo "                ";
                }
                // line 515
                echo "                ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) {
                    // line 516
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo (isset($context["view_more_url"]) ? $context["view_more_url"] : null);
                    echo "\" target=\"_top\" ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsTooltipStatus")), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsTooltipPosition")), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExtraText"), "method");
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExtraText"), "method");
                    echo "</span></a>
                ";
                }
                // line 518
                echo "              </div>
              ";
            }
            // line 520
            echo "            </div>
          </div>
          ";
        }
        // line 523
        echo "
          ";
        // line 524
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 525
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
          ";
        }
        // line 527
        echo "          </div>
          ";
        // line 528
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 529
            echo "          ";
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "bottom", array())) {
                // line 530
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 531
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "bottom", array()));
                echo "
          </div>
          ";
            }
            // line 534
            echo "          ";
        }
        // line 535
        echo "          ";
        if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "details"))) {
            // line 536
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 537
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
              ";
            // line 538
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 539
                echo "                <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>
                ";
                // line 540
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<b>,</b>";
                }
                // line 541
                echo "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 542
            echo "            </div>
          ";
        }
        // line 544
        echo "        </div>
      </div>
      ";
        // line 546
        if (((((isset($context["description"]) ? $context["description"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "default"))) {
            // line 547
            echo "        <div class=\"description ";
            echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 550
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
            </div>
            ";
            // line 552
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                // line 553
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 555
            echo "          </div>
        </div>
      ";
        }
        // line 558
        echo "      ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 559
            echo "        ";
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "default", array())) {
                // line 560
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 561
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "default", array()));
                echo "
        </div>
        ";
            }
            // line 564
            echo "      ";
        }
        // line 565
        echo "      ";
        if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "default"))) {
            // line 566
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 567
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
          ";
            // line 568
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 569
                echo "            <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>
            ";
                // line 570
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<b>,</b>";
                }
                // line 571
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 572
            echo "        </div>
      ";
        }
        // line 574
        echo "      ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 575
            echo "      ";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>
    ";
            // line 576
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>
</div>
";
        }
        // line 579
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
    dataType: 'json',
    beforeSend: function () {
      \$('#button-cart').button('loading');
    },
    complete: function () {
      \$('#button-cart').button('reset');
    },
    success: function (json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');

        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - 50 }, 'slow');
        } catch (e) {
        }
      }

      if (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items').removeClass('count-zero');
        } else {
          parent.\$('#cart-items').addClass('count-zero');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 694
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 699
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 705
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 773
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 777
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - 100
      }, 200);
    }
  });
});
//--></script>
";
        // line 831
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 832
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/seo/rich_snippets", 1 => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)), "method");
            echo "
";
        }
        // line 834
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2381 => 834,  2376 => 832,  2374 => 831,  2317 => 777,  2310 => 773,  2239 => 705,  2230 => 699,  2222 => 694,  2105 => 579,  2099 => 576,  2094 => 575,  2091 => 574,  2087 => 572,  2073 => 571,  2069 => 570,  2062 => 569,  2045 => 568,  2041 => 567,  2038 => 566,  2035 => 565,  2032 => 564,  2026 => 561,  2023 => 560,  2020 => 559,  2017 => 558,  2012 => 555,  2008 => 553,  2006 => 552,  2001 => 550,  1994 => 547,  1992 => 546,  1988 => 544,  1984 => 542,  1970 => 541,  1966 => 540,  1959 => 539,  1942 => 538,  1938 => 537,  1935 => 536,  1932 => 535,  1929 => 534,  1923 => 531,  1920 => 530,  1917 => 529,  1915 => 528,  1912 => 527,  1906 => 525,  1904 => 524,  1901 => 523,  1896 => 520,  1892 => 518,  1876 => 516,  1873 => 515,  1870 => 514,  1854 => 512,  1852 => 511,  1849 => 510,  1833 => 508,  1830 => 507,  1828 => 506,  1825 => 505,  1823 => 504,  1819 => 502,  1815 => 500,  1770 => 498,  1753 => 497,  1750 => 496,  1747 => 495,  1732 => 493,  1723 => 487,  1717 => 486,  1714 => 485,  1712 => 484,  1707 => 481,  1705 => 480,  1702 => 479,  1696 => 475,  1685 => 473,  1681 => 472,  1677 => 471,  1670 => 468,  1668 => 467,  1665 => 466,  1661 => 464,  1655 => 463,  1642 => 457,  1635 => 455,  1626 => 454,  1623 => 453,  1610 => 447,  1603 => 445,  1594 => 444,  1591 => 443,  1578 => 437,  1571 => 435,  1562 => 434,  1559 => 433,  1551 => 430,  1543 => 429,  1539 => 428,  1530 => 427,  1527 => 426,  1515 => 423,  1509 => 422,  1500 => 421,  1497 => 420,  1485 => 417,  1479 => 416,  1470 => 415,  1467 => 414,  1462 => 411,  1453 => 408,  1446 => 406,  1444 => 405,  1440 => 404,  1437 => 403,  1410 => 402,  1404 => 401,  1400 => 399,  1394 => 398,  1390 => 397,  1377 => 396,  1374 => 395,  1369 => 392,  1360 => 389,  1353 => 386,  1350 => 385,  1348 => 384,  1344 => 383,  1341 => 382,  1314 => 381,  1308 => 380,  1304 => 378,  1298 => 377,  1294 => 376,  1281 => 375,  1278 => 374,  1273 => 371,  1266 => 369,  1259 => 368,  1257 => 367,  1250 => 366,  1246 => 365,  1242 => 364,  1236 => 363,  1230 => 362,  1217 => 361,  1214 => 360,  1210 => 359,  1206 => 358,  1203 => 357,  1201 => 356,  1198 => 355,  1194 => 353,  1190 => 351,  1186 => 349,  1180 => 347,  1177 => 346,  1171 => 344,  1169 => 343,  1166 => 342,  1163 => 341,  1155 => 337,  1139 => 335,  1137 => 334,  1133 => 333,  1130 => 332,  1128 => 331,  1125 => 330,  1117 => 328,  1114 => 327,  1106 => 325,  1103 => 324,  1095 => 322,  1092 => 321,  1084 => 319,  1081 => 318,  1073 => 316,  1070 => 315,  1062 => 313,  1059 => 312,  1051 => 310,  1048 => 309,  1036 => 307,  1033 => 306,  1025 => 304,  1022 => 303,  1014 => 301,  1011 => 300,  1003 => 298,  1000 => 297,  990 => 295,  987 => 294,  973 => 292,  971 => 291,  967 => 289,  965 => 288,  962 => 287,  958 => 285,  947 => 283,  943 => 282,  940 => 281,  938 => 280,  935 => 279,  927 => 277,  924 => 276,  916 => 274,  914 => 273,  911 => 272,  906 => 270,  901 => 269,  895 => 267,  893 => 266,  888 => 263,  886 => 262,  883 => 261,  876 => 257,  872 => 256,  868 => 255,  864 => 254,  859 => 253,  853 => 251,  851 => 250,  848 => 249,  846 => 248,  843 => 247,  836 => 243,  832 => 242,  828 => 241,  824 => 239,  818 => 238,  811 => 233,  806 => 230,  803 => 229,  799 => 228,  795 => 226,  793 => 225,  790 => 224,  786 => 222,  782 => 220,  776 => 218,  773 => 217,  767 => 215,  765 => 214,  762 => 213,  759 => 212,  751 => 208,  735 => 206,  733 => 205,  729 => 204,  726 => 203,  724 => 202,  721 => 201,  713 => 199,  710 => 198,  702 => 196,  699 => 195,  691 => 193,  688 => 192,  680 => 190,  677 => 189,  669 => 187,  666 => 186,  658 => 184,  655 => 183,  647 => 181,  644 => 180,  632 => 178,  629 => 177,  621 => 175,  618 => 174,  610 => 172,  607 => 171,  599 => 169,  596 => 168,  586 => 166,  583 => 165,  569 => 163,  567 => 162,  563 => 160,  561 => 159,  558 => 158,  553 => 155,  549 => 153,  547 => 152,  542 => 150,  535 => 147,  533 => 146,  530 => 145,  527 => 144,  521 => 141,  518 => 140,  516 => 139,  511 => 138,  509 => 137,  505 => 135,  501 => 133,  497 => 131,  483 => 130,  479 => 129,  472 => 128,  455 => 127,  451 => 126,  448 => 125,  445 => 124,  440 => 121,  436 => 119,  434 => 118,  429 => 116,  422 => 113,  419 => 112,  416 => 111,  410 => 108,  407 => 107,  404 => 106,  401 => 105,  393 => 103,  391 => 102,  388 => 101,  385 => 100,  381 => 98,  360 => 95,  355 => 94,  338 => 93,  335 => 92,  324 => 83,  295 => 80,  290 => 79,  273 => 78,  266 => 76,  255 => 75,  252 => 74,  250 => 73,  247 => 72,  243 => 70,  230 => 68,  226 => 67,  223 => 66,  221 => 65,  210 => 56,  175 => 53,  166 => 52,  163 => 51,  145 => 50,  143 => 49,  136 => 47,  126 => 46,  120 => 45,  117 => 44,  115 => 43,  110 => 42,  108 => 40,  107 => 39,  106 => 38,  105 => 37,  103 => 36,  100 => 35,  94 => 33,  91 => 32,  89 => 31,  84 => 30,  79 => 28,  75 => 27,  70 => 25,  64 => 23,  62 => 22,  59 => 21,  48 => 19,  44 => 18,  41 => 17,  39 => 16,  35 => 15,  33 => 14,  31 => 11,  30 => 10,  29 => 9,  27 => 7,  26 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set stylePrefix = j3.document.isPopup('quickview') ? 'quickviewPageStyle' : 'productPageStyle' %}*/
/* {% set direction = j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'left' or j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'right' ? 'vertical' : 'horizontal' %}*/
/* {% set carousel = direction == 'vertical' or j3.settings.get(stylePrefix ~ 'AdditionalImagesCarousel') %}*/
/* {% set carouselOptions = {*/
/*   slidesPerView: 'auto',*/
/*   spaceBetween: j3.settings.get(stylePrefix ~ 'AdditionalImagesSpacing')|default(0),*/
/*   direction: direction*/
/* } %}*/
/* {% set galleryOptions = {*/
/*   thumbWidth: j3.settings.get('image_dimensions_popup_thumb.width'),*/
/*   thumbConHeight: j3.settings.get('image_dimensions_popup_thumb.height'),*/
/*   addClass: 'lg-product-images'*/
/* } %}*/
/* {% set quickviewExpand = not j3.settings.get('quickviewExpandButton') or (j3.settings.get('globalExpandCharactersLimit') > 0 and description and description|length <= j3.settings.get('globalExpandCharactersLimit')) ? 'no-expand': '' %}*/
/* {{ header }}*/
/* {% if not j3.document.isPopup() %}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title"><span>{{ heading_title }}</span></h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div id="product-product" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     <div id="content" class="{{ class }}">*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       {% if not j3.document.isPopup('options') %}*/
/*         {% if j3.settings.get('pageTitlePosition') == 'default' or j3.document.isPopup('quickview') %}*/
/*           <h1 class="title page-title">{{ heading_title }}</h1>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% set classes = j3.classes({*/
/*         'out-of-stock': product_quantity <= 0,*/
/*         'has-countdown': date_end,*/
/*         'has-zero-price': not product_price_value,*/
/*         'has-extra-button': product_extra_buttons,*/
/*       }) %}*/
/*       <div class="product-info {{ classes }}">*/
/*         {% if not j3.document.isPopup('options') %}*/
/*         <div class="product-left">*/
/*           <div class="product-image direction-{{ direction }} position-{{ j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') }}">*/
/*             <div class="swiper main-image" data-options='{{ j3.carousel(j3.document.getJs(), stylePrefix ~ 'ImageCarouselStyle')|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') and carousel and direction == 'vertical' %}style="width: calc(100% - {{ j3.settings.get('image_dimensions_additional.width') }}px)"{% endif %}>*/
/*               <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% set gallery = [] %}*/
/*                   {% for image in images %}*/
/*                     {% set gallery = gallery|merge([{src: image.popup, thumb: image.galleryThumb, subHtml: heading_title}]) %}*/
/*                     <div class="swiper-slide" {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %} data-gallery=".lightgallery-product-images" data-index="{{ loop.index0 }}" {% endif %}>*/
/*                       <img src="{{ image.image }}" {% if image.image2x %}srcset="{{ image.image }} 1x, {{ image.image2x }} 2x"{% endif %} data-largeimg="{{ image.popup }}" alt="{{ heading_title }}" title="{{ heading_title }}" width="{{ j3.settings.get('image_dimensions_thumb.width') }}" height="{{ j3.settings.get('image_dimensions_thumb.height') }}"/>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="swiper-controls">*/
/*                 <div class="swiper-buttons">*/
/*                   <div class="swiper-button-prev"></div>*/
/*                   <div class="swiper-button-next"></div>*/
/*                 </div>*/
/*                 <div class="swiper-pagination"></div>*/
/*               </div>*/
/*               {% if product_labels %}*/
/*                 <div class="product-labels">*/
/*                   {% for id, label in product_labels %}*/
/*                     <span class="product-label product-label-{{ id }} product-label-{{ label.display }}"><b>{{ label.label }}</b></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') %}*/
/*               {% if carousel %}*/
/*                 <div class="swiper additional-images" data-options='{{ carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if direction == 'vertical' %}style="width: {{ j3.settings.get('image_dimensions_additional.width') }}px"{% endif %}>*/
/*                   <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                     <div class="swiper-wrapper">*/
/*                       {% for image in images %}*/
/*                         <div class="swiper-slide additional-image" data-index="{{ loop.index0 }}">*/
/*                           <img src="{{ image.thumb }}" {% if image.thumb2x %}srcset="{{ image.thumb }} 1x, {{ image.thumb2x }} 2x"{% endif %} alt="{{ heading_title }}" title="{{ heading_title }}"/>*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="swiper-buttons">*/
/*                     <div class="swiper-button-prev"></div>*/
/*                     <div class="swiper-button-next"></div>*/
/*                   </div>*/
/*                   <div class="swiper-pagination"></div>*/
/*                 </div>*/
/*               {% else %}*/
/*                 <div class="additional-images">*/
/*                   {% for image in images %}*/
/*                     <div class="additional-image" data-index="{{ loop.index0 }}">*/
/*                       <img src="{{ image.thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}"/>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           </div>*/
/*           {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %}*/
/*           <div class="lightgallery lightgallery-product-images" data-images='{{ gallery|json_encode|e }}' data-options='{{ galleryOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'></div>*/
/*           {% endif %}*/
/*           {% if not j3.document.isPopup('options') %}*/
/*             {% if product_blocks.image %}*/
/*             <div class="product-blocks blocks-image">*/
/*               {{ product_blocks.image|join }}*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           {% if j3.document.isPopup('quickview') and (j3.settings.get('quickviewDescription')and j3.settings.get('quickviewDescriptionPosition') == 'image') %}*/
/*             <div class="description {{ quickviewExpand }}">*/
/*               <div class="expand-block">*/
/*                 <div class="expand-content">*/
/*                   {{ description }}*/
/*                 </div>*/
/*                 {% if j3.settings.get('quickviewExpandButton') %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'image') %}*/
/*             <div class="tags">*/
/*               <span class="tags-title">{{ text_tags }}</span>*/
/*               {% for tag in tags %}*/
/*                 <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*                 {% if not loop.last %}<b>,</b>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="product-right">*/
/*           <div id="product" class="product-details">*/
/*           {% if not j3.document.isPopup('options') %}*/
/*           <div class="title page-title">{{ heading_title }}</div>*/
/*           {% if product_blocks.top %}*/
/*           <div class="product-blocks blocks-top">*/
/*           {{ product_blocks.top|join }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/* */
/*           {% if j3.document.isPopup('quickview') and (j3.settings.get('quickviewDescription')and j3.settings.get('quickviewDescriptionPosition') == 'top') %}*/
/*             <div class="description {{ quickviewExpand }}">*/
/*               <div class="expand-block">*/
/*                 <div class="expand-content">*/
/*                   {{ description }}*/
/*                 </div>*/
/*                 {% if j3.settings.get('quickviewExpandButton') %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if not j3.document.isPopup('options') and j3.settings.get(stylePrefix ~ 'Stats') and (j3.settings.get(stylePrefix ~ 'StatsPosition') == 'default') %}*/
/*             <div class="product-stats">*/
/*               <ul class="list-unstyled">*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductStock')%}*/
/*                   <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'list') %}*/
/*                   <li class="product-manufacturer"><b>{{ j3.settings.get(stylePrefix ~ 'ProductManufacturerText') }}:</b> <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductReward') and reward %}*/
/*                   <li class="product-reward"><b>{{ j3.settings.get(stylePrefix ~ 'ProductRewardText') }}:</b> <span>{{ reward }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductModel') and model %}*/
/*                   <li class="product-model"><b>{{ j3.settings.get(stylePrefix ~ 'ProductModelText') }}:</b> <span>{{ model }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductWeight') and product_weight %}*/
/*                   <li class="product-weight"><b>{{ j3.settings.get(stylePrefix ~ 'ProductWeightText') }}:</b> <span>{{ product_weight }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductDimension') and product_dimension %}*/
/*                   <li class="product-dimension"><b>{{ j3.settings.get(stylePrefix ~ 'ProductDimensionText') }}:</b> <span>{{ product_length }} x {{ product_width }} x {{ product_height }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}*/
/*                   <li class="product-sku"><b>{{ j3.settings.get(stylePrefix ~ 'ProductSKUText') }}:</b> <span> {{ product_sku }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductUPC') and product_upc %}*/
/*                   <li class="product-upc"><b>{{ j3.settings.get(stylePrefix ~ 'ProductUPCText') }}:</b> <span>{{ product_upc }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductEAN') and product_ean %}*/
/*                   <li class="product-ean"><b>{{ j3.settings.get(stylePrefix ~ 'ProductEANText') }}:</b> <span>{{ product_ean }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductJAN') and product_jan %}*/
/*                   <li class="product-jan"><b>{{ j3.settings.get(stylePrefix ~ 'ProductJANText') }}:</b> <span>{{ product_jan }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductISBN') and product_isbn %}*/
/*                   <li class="product-isbn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductISBNText') }}:</b> <span>{{ product_isbn }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductMPN') and product_mpn %}*/
/*                   <li class="product-mpn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductMPNText') }}:</b> <span>{{ product_mpn }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductLocation') and product_location %}*/
/*                   <li class="product-location"><b>{{ j3.settings.get(stylePrefix ~ 'ProductLocationText') }}:</b> <span>{{ product_location }}</span></li>*/
/*                 {% endif %}*/
/*               </ul>*/
/*               {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'image') %}*/
/*                 <div class="brand-image product-manufacturer">*/
/*                   <a href="{{ manufacturers }}">*/
/*                     {% if manufacturer_image %}*/
/*                       <img src="{{ manufacturer_image }}" {% if manufacturer_image2x %}srcset="{{ manufacturer_image }} 1x, {{ manufacturer_image2x }} 2x"{% endif %} alt="{{ manufacturer }}"/>*/
/*                     {% endif %}*/
/*                     <span>{{ manufacturer }}</span>*/
/*                   </a>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if j3.settings.get(stylePrefix ~ 'CustomStats')%}*/
/*                 <div class="custom-stats">*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductSold')%}*/
/*                     <div class="product-sold"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'SoldText', products_sold) }}</b></div>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductViews')%}*/
/*                     <div class="product-views"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'ViewsText', product_views) }}</b></div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if review_status and not j3.document.isPopup() %}*/
/*             <div class="rating rating-page">*/
/*               <div class="rating-stars">*/
/*                 {% for i in 1..5 %}*/
/*                   {% if rating < i %}*/
/*                     <span class="fa fa-stack">*/
/*                       <i class="fa fa-star-o fa-stack-1x"></i>*/
/*                     </span>{% else %}*/
/*                     <span class="fa fa-stack">*/
/*                       <i class="fa fa-star fa-stack-1x"></i>*/
/*                       <i class="fa fa-star-o fa-stack-1x"></i>*/
/*                     </span>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <div class="review-links">*/
/*                 <a>{{ reviews }}</a>*/
/*                 <b>{{ j3.settings.get(stylePrefix ~ 'RatingSeparator') }}</b>*/
/*                 <a>{{ text_write }}</a>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if date_end and j3.settings.get(j3.document.isPopup() ? 'quickviewCountdown' : 'countdownStatus') %}*/
/*             <div class="countdown-wrapper">*/
/*               {% if j3.settings.get(stylePrefix ~ 'CountdownText') %}*/
/*               <h5 class="countdown-title title">{{ j3.settings.get(stylePrefix ~ 'CountdownText') }}</h5>*/
/*               {% endif %}*/
/*               <div class="countdown" data-date="{{ date_end }}">*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownDay') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownHour') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownMin') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownSec') }}</span></div>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if price and not j3.document.isPopup('options') %}*/
/*           <div class="product-price-group">*/
/*            <div class="price-wrapper">*/
/*              <div class="price-group">*/
/*                {% if not special %}*/
/*                  <div class="product-price">{{ price }}</div>*/
/*                {% else %}*/
/*                  <div class="product-price-new">{{ special }}</div>*/
/*                  <div class="product-price-old">{{ price }}</div>*/
/*                {% endif %}*/
/*              </div>*/
/*              {% if tax %}*/
/*                <div class="product-tax">{{ text_tax }} {{ tax }}</div>*/
/*              {% endif %}*/
/*              {% if points %}*/
/*                <div class="product-points">{{ text_points }} {{ points }}</div>*/
/*              {% endif %}*/
/* */
/*              {% if discounts %}*/
/*                <div class="discounts">*/
/*                  {% for discount in discounts %}*/
/*                    <div class="product-discount">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</div>*/
/*                  {% endfor %}*/
/*                </div>*/
/*              {% endif %}*/
/*            </div>*/
/*             {% if not j3.document.isPopup('options') and j3.settings.get(stylePrefix ~ 'Stats') and (j3.settings.get(stylePrefix ~ 'StatsPosition') == 'price') %}*/
/*               <div class="product-stats">*/
/*                 <ul class="list-unstyled">*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductStock')%}*/
/*                     <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'list') %}*/
/*                     <li class="product-manufacturer"><b>{{ j3.settings.get(stylePrefix ~ 'ProductManufacturerText') }}:</b> <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductReward') and reward %}*/
/*                     <li class="product-reward"><b>{{ j3.settings.get(stylePrefix ~ 'ProductRewardText') }}:</b> <span>{{ reward }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductModel') and model %}*/
/*                     <li class="product-model"><b>{{ j3.settings.get(stylePrefix ~ 'ProductModelText') }}:</b> <span>{{ model }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductWeight') and product_weight %}*/
/*                     <li class="product-weight"><b>{{ j3.settings.get(stylePrefix ~ 'ProductWeightText') }}:</b> <span>{{ product_weight }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductDimension') and product_dimension %}*/
/*                     <li class="product-dimension"><b>{{ j3.settings.get(stylePrefix ~ 'ProductDimensionText') }}:</b> <span>{{ product_length }} x {{ product_width }} x {{ product_height }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}*/
/*                     <li class="product-sku"><b>{{ j3.settings.get(stylePrefix ~ 'ProductSKUText') }}:</b> <span> {{ product_sku }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductUPC') and product_upc %}*/
/*                     <li class="product-upc"><b>{{ j3.settings.get(stylePrefix ~ 'ProductUPCText') }}:</b> <span>{{ product_upc }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductEAN') and product_ean %}*/
/*                     <li class="product-ean"><b>{{ j3.settings.get(stylePrefix ~ 'ProductEANText') }}:</b> <span>{{ product_ean }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductJAN') and product_jan %}*/
/*                     <li class="product-jan"><b>{{ j3.settings.get(stylePrefix ~ 'ProductJANText') }}:</b> <span>{{ product_jan }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductISBN') and product_isbn %}*/
/*                     <li class="product-isbn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductISBNText') }}:</b> <span>{{ product_isbn }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductMPN') and product_mpn %}*/
/*                     <li class="product-mpn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductMPNText') }}:</b> <span>{{ product_mpn }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductLocation') and product_location %}*/
/*                     <li class="product-location"><b>{{ j3.settings.get(stylePrefix ~ 'ProductLocationText') }}:</b> <span>{{ product_location }}</span></li>*/
/*                   {% endif %}*/
/*                 </ul>*/
/*                 {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'image') %}*/
/*                   <div class="brand-image product-manufacturer">*/
/*                     <a href="{{ manufacturers }}">*/
/*                       {% if manufacturer_image %}*/
/*                         <img src="{{ manufacturer_image }}" {% if manufacturer_image2x %}srcset="{{ manufacturer_image }} 1x, {{ manufacturer_image2x }} 2x"{% endif %} alt="{{ manufacturer }}"/>*/
/*                       {% endif %}*/
/*                       <span>{{ manufacturer }}</span>*/
/*                     </a>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'CustomStats')%}*/
/*                   <div class="custom-stats">*/
/*                     {% if j3.settings.get(stylePrefix ~ 'ProductSold')%}*/
/*                       <div class="product-sold"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'SoldText', products_sold) }}</b></div>*/
/*                     {% endif %}*/
/*                     {% if j3.settings.get(stylePrefix ~ 'ProductViews')%}*/
/*                       <div class="product-views"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'ViewsText', product_views) }}</b></div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if options %}*/
/*           <div class="product-options">*/
/*             <h3 class="options-title title">{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushSelect') %}push-option{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushRadio') %}push-option{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'PushTooltipPosition') }}" title="{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}"/> {% endif %}*/
/*                     <span class="option-value">*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                         <span class="option-price">*/
/*                           ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                         </span>*/
/*                       {% endif %}*/
/*                     </span>*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushCheckbox') %}push-option{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'PushTooltipPosition') }}" title="{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}"/> {% endif %}*/
/*                     <span class="option-value">*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                         <span class="option-price">({{ option_value.price_prefix }}{{ option_value.price }})</span>*/
/*                       {% endif %}*/
/*                     </span>*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if recurrings %}*/
/*             <h3 class="title recurring-title">{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if j3.settings.get('catalogCartStatus') or j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') or (product_extra_buttons and not j3.document.isPopup()) %}*/
/*           <div class="button-group-page">*/
/*             <div class="buttons-wrapper">*/
/*               <div class="stepper-group cart-group">*/
/*                 {% if j3.settings.get('catalogCartStatus') %}*/
/*                 <div class="stepper">*/
/*                   <input id="product-quantity" type="text" name="quantity" value="{{ minimum }}" data-minimum="{{ minimum }}" class="form-control"/>*/
/*                   <input id="product-id" type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                   <span>*/
/*                   <i class="fa fa-angle-up"></i>*/
/*                   <i class="fa fa-angle-down"></i>*/
/*                 </span>*/
/*                 </div>*/
/*                 <a id="button-cart" data-loading-text="<span class='btn-text'>{{ button_cart }}</span>" class="btn btn-cart" {% if (j3.settings.get(stylePrefix ~ 'CartDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'CartTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-cart-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'CartTooltipPosition') }}" title="{{ button_cart }}" {% endif %}><span class="btn-text">{{ button_cart }}</span></a>*/
/*                 {% endif %}*/
/*                 {% if product_extra_buttons and not j3.document.isPopup() %}*/
/*                   <div class="extra-group">*/
/*                     {% for id, extra_button in product_extra_buttons %}*/
/*                       <a class="btn btn-extra btn-extra-{{ id }} btn-{{ loop.index }}-extra" {% if (j3.settings.get(stylePrefix ~ 'Extra' ~ loop.index ~ 'ButtonDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'ExtraTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="extra-tooltip pp-extra-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'ExtraTooltipPosition') }}" title="{{ extra_button.label }}" {% endif %} {% if extra_button.action == 'quickbuy' %}data-quick-buy{% endif %} {% if extra_button.action == 'link' and extra_button.link.href %}href="{{ extra_button.link.href }}" {{ j3.linkAttrs(extra_button.link) }} data-product_id="{{ product_id }}"{% endif %} data-loading-text="<span class='btn-text'>{{ extra_button.label }}</span>"><span class="btn-text">{{ extra_button.label }}</span></a>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/* */
/*               {% if j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}*/
/*               <div class="wishlist-compare">*/
/*                 {% if not j3.document.isPopup('options') %}*/
/*                   {% if j3.settings.get('catalogWishlistStatus') %}*/
/*                   <a class="btn btn-wishlist" {% if (j3.settings.get(stylePrefix ~ 'WishlistDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'WishlistTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-wishlist-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'WishlistTooltipPosition') }}" title="{{ button_wishlist }}" {% endif %} onclick="parent.wishlist.add({{ product_id }});"><span class="btn-text">{{ button_wishlist }}</span></a>*/
/*                   {% endif %}*/
/* */
/*                   {% if j3.settings.get('catalogCompareStatus') %}*/
/*                   <a class="btn btn-compare" {% if (j3.settings.get(stylePrefix ~ 'CompareDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'CompareTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-compare-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'CompareTooltipPosition') }}" title="{{ button_compare }}" {% endif %} onclick="parent.compare.add({{ product_id }});"><span class="btn-text">{{ button_compare }}</span></a>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*                 {% if j3.document.isPopup('quickview') %}*/
/*                   <a class="btn btn-more-details" href="{{ view_more_url }}" target="_top" {% if (j3.settings.get(stylePrefix ~ 'MoreDetailsDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'MoreDetailsTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="more-details-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'MoreDetailsTooltipPosition') }}" title="{{ j3.settings.get('quickviewExtraText') }}" {% endif %}><span class="btn-text">{{ j3.settings.get('quickviewExtraText') }}</span></a>*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if minimum > 1 %}*/
/*             <div class="minimum alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*           {% endif %}*/
/*           </div>*/
/*           {% if not j3.document.isPopup('options') %}*/
/*           {% if product_blocks.bottom %}*/
/*           <div class="product-blocks blocks-bottom">*/
/*             {{ product_blocks.bottom|join }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'details') %}*/
/*             <div class="tags">*/
/*               <span class="tags-title">{{ text_tags }}</span>*/
/*               {% for tag in tags %}*/
/*                 <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*                 {% if not loop.last %}<b>,</b>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       {% if description and j3.document.isPopup('quickview') and j3.settings.get('quickviewDescription') and (j3.settings.get('quickviewDescriptionPosition') == 'default') %}*/
/*         <div class="description {{ quickviewExpand }}">*/
/*           <div class="expand-block">*/
/*             <div class="expand-content">*/
/*               {{ description }}*/
/*             </div>*/
/*             {% if j3.settings.get('quickviewExpandButton') %}*/
/*               <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not j3.document.isPopup('options') %}*/
/*         {% if product_blocks.default %}*/
/*         <div class="product-blocks blocks-default">*/
/*           {{ product_blocks.default|join }}*/
/*         </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'default') %}*/
/*         <div class="tags">*/
/*           <span class="tags-title">{{ text_tags }}</span>*/
/*           {% for tag in tags %}*/
/*             <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*             {% if not loop.last %}<b>,</b>{% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not j3.document.isPopup() %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart, [data-quick-buy]').on('click', function () {*/
/*   var $btn = $(this);*/
/*   $.ajax({*/
/*     url: 'index.php?route=checkout/cart/add',*/
/*     type: 'post',*/
/*     data: $(*/
/*       '#product .button-group-page input[type=\'text\'], #product .button-group-page input[type=\'hidden\'], #product .button-group-page input[type=\'radio\']:checked, #product .button-group-page input[type=\'checkbox\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +*/
/*       '#product .product-options input[type=\'text\'], #product .product-options input[type=\'hidden\'], #product .product-options input[type=\'radio\']:checked, #product .product-options input[type=\'checkbox\']:checked, #product .product-options select, #product .product-options textarea, ' +*/
/*       '#product select[name="recurring_id"]'*/
/*     ),*/
/*     dataType: 'json',*/
/*     beforeSend: function () {*/
/*       $('#button-cart').button('loading');*/
/*     },*/
/*     complete: function () {*/
/*       $('#button-cart').button('reset');*/
/*     },*/
/*     success: function (json) {*/
/*       $('.alert-dismissible, .text-danger').remove();*/
/*       $('.form-group').removeClass('has-error');*/
/* */
/*       if (json['error']) {*/
/*         if (json['error']['option']) {*/
/*           for (i in json['error']['option']) {*/
/*             var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*             if (element.parent().hasClass('input-group')) {*/
/*               element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             } else {*/
/*               element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             }*/
/*           }*/
/*         }*/
/* */
/*         if (json['error']['recurring']) {*/
/*           $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*         }*/
/* */
/*         // Highlight any found errors*/
/*         $('.text-danger').parent().addClass('has-error');*/
/* */
/*         try {*/
/*           $('html, body').animate({ scrollTop: $('.form-group.has-error').offset().top - 50 }, 'slow');*/
/*         } catch (e) {*/
/*         }*/
/*       }*/
/* */
/*       if (json['success']) {*/
/*         if ($('html').hasClass('popup-options')) {*/
/*           parent.$(".popup-options .popup-close").trigger('click');*/
/*         }*/
/* */
/*         if (json['notification']) {*/
/*           parent.show_notification(json['notification']);*/
/*         } else {*/
/*           parent.$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         parent.$('#cart-total').html(json['total']);*/
/*         parent.$('#cart-items').html(json['items_count']);*/
/* */
/*         if (json['items_count']) {*/
/*           parent.$('#cart-items').removeClass('count-zero');*/
/*         } else {*/
/*           parent.$('#cart-items').addClass('count-zero');*/
/*         }*/
/* */
/*         if (Journal['scrollToTop']) {*/
/*           parent.$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*         }*/
/* */
/*         parent.$('.cart-content ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*         if (window.location.href.indexOf('quick_buy=true') !== -1) {*/
/*           parent.location.href = Journal['checkoutUrl'];*/
/*         }*/
/* */
/*         if ($btn.data('quick-buy') !== undefined) {*/
/*           location = Journal['checkoutUrl'];*/
/*         }*/
/* */
/*         if (parent.window['_QuickCheckout']) {*/
/*           parent.window['_QuickCheckout'].save();*/
/*         }*/
/*       }*/
/*     },*/
/*     error: function (xhr, ajaxOptions, thrownError) {*/
/*       alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $(function () {*/
/*   $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/*   });*/
/* */
/*   $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*   $('#button-review').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function() {*/
/*         $('#button-review').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-review').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function () {*/
/*   $('.review-links a').on('click', function () {*/
/*     var $review = $('#review');*/
/*     if ($review.length) {*/
/*       $('a[href="#' + $review.closest('.module-item').attr('id') + '"]').trigger('click');*/
/*       $('a[href="#' + $review.closest('.tab-pane').attr('id') + '"]').trigger('click');*/
/*       $('a[href="#' + $review.closest('.panel-collapse').attr('id') + '"]').trigger('click');*/
/* */
/*       $([document.documentElement, document.body]).animate({*/
/*         scrollTop: $review.offset().top - 100*/
/*       }, 200);*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* {% if not j3.document.isPopup() %}*/
/* {{ j3.loadController('journal3/seo/rich_snippets', breadcrumbs) }}*/
/* {% endif %}*/
/* {{ footer }}*/
/* */