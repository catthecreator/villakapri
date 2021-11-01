<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/house_gallery.htm */
class __TwigTemplate_e0954437d4e3b5dfbf1d54fc3f020079daa070110e154e09dce39d24a5b4a9c2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"owl-carousel owl-theme house__carousel\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "
  ";
            // line 6
            $context["img"] = twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 6)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 6);
            // line 7
            echo "  ";
            if (($context["img"] ?? null)) {
                // line 8
                echo "  <div class=\"house__card\">
    <div class=\"house__card-inner\">
      <div class=\"row\">
        <div class=\"col-lg-7 order-lg-2\">
          <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\"><img data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["img"] ?? null), 12, $this->source), "html", null, true);
                echo "\" alt=\"\" class=\"lazy house__img img-fluid\"></a>
        </div>
        <div class=\"col-lg-5 order-lg-1\">
          <div class=\"p-4\">
            <div class=\"house__title h h_primary\">
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</a>
            </div>

            <div class=\"row\">

              ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["post"], "house_area", [], "any", false, false, true, 22)) {
                    // line 23
                    echo "              <div class=\"col-12 col-sm-6 col-lg-12\">
                <div class=\"row house__trigger-row\">
                  <div class=\"col-3 col-sm-4 col-md-3 d-flex\"><img data-src=\"img/ploshad.svg\" alt=\"\"
                                                                   class=\"lazy img-fluid house__trigger-img\">
                  </div>
                  <div class=\"col house__trigger-text\">
                    Площадь
                    <div class=\"house__digit\">";
                    // line 30
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "house_area", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo " кв. м</div>
                  </div>
                </div>
              </div>
              ";
                }
                // line 35
                echo "
              ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["post"], "plottage", [], "any", false, false, true, 36)) {
                    // line 37
                    echo "              <div class=\"col-12 col-sm-6 col-lg-12\">
                <div class=\"row house__trigger-row\">
                  <div class=\"col-3 col-sm-4 col-md-3 d-flex\"><img data-src=\"img/list.svg\" alt=\"\"
                                                                   class=\"lazy img-fluid house__trigger-img\">
                  </div>
                  <div class=\"col house__trigger-text\">
                    Участок
                    <div class=\"house__digit\">";
                    // line 44
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "plottage", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo " сот.</div>
                  </div>
                </div>
              </div>
              ";
                }
                // line 49
                echo "            </div>
            <div class=\"row house__trigger-row\">
              <div class=\"col-12\">
                ";
                // line 53
                echo "                <a data-toggle=\"modal\" data-target=\"#ctaModal\" class=\"btn btn-primary btn-block\">УЗНАТЬ ЦЕНУ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
            }
            // line 62
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/house_gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 63,  140 => 62,  129 => 53,  124 => 49,  116 => 44,  107 => 37,  105 => 36,  102 => 35,  94 => 30,  85 => 23,  83 => 22,  73 => 17,  63 => 12,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/house_gallery.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 4, "if" => 7);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
