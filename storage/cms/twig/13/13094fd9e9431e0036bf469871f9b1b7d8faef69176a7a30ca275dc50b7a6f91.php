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

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm */
class __TwigTemplate_1d6d3a9227ff942912e5ba559bd75879b9190fbca9030e78a9e31402a458a958 extends \Twig\Template
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
        echo "<div class=\"container detail-card\">
  <div class=\"px-4\">
    <nav aria-label=\"breadcrumb\">
      <ol class=\"breadcrumb px-0\">
        <li class=\"breadcrumb-item\"><a href=\"/\">Главная</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</li>
      </ol>
    </nav>
    <h1 class=\"h h_1 h_primary mb-4 mb-md-5\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</h1>
  </div>


  <div class=\"row\">
    <div class=\"col-12 col-md-12 offset-md- house__col-12\">
      ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 15), "count", [], "any", false, false, true, 15)) {
            // line 16
            echo "      <div class=\"owl-carousel owl-theme carousel\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["post_image"]) {
                // line 18
                echo "          <div class=\"px-md-4\"><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post_image"], "path", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\" alt=\"\"></div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </div>
      ";
        }
        // line 22
        echo "    </div>
  </div>
  <div class=\"row my-4 my-md-5\">
    <div class=\"col-12 col-md-6 text-center mb-4\">
      <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "preview_image_2", [], "any", false, false, true, 26), "path", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
    </div>
    <div class=\"col-12 col-md-6\">

      <div class=\"row\">
        <div class=\"col-12 order-md-2 mb-3 mb-md-0\">
          <div class=\"row\">

            ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "house_area", [], "any", false, false, true, 34)) {
            // line 35
            echo "            <div class=\"col-xs-6 col-md-12\">
              <div class=\"row house__trigger-row\">
                <div class=\"col-3 col-sm-4 col-md-3 col-lg-2 d-flex\"><img src=\"img/ploshad.svg\" alt=\"\"
                                                                          class=\"img-fluid house__trigger-img\">
                </div>
                <div class=\"col house__trigger-text\">
                  Площадь
                  <div class=\"house__digit\">";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "house_area", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo " кв. м</div>
                </div>
              </div>
            </div>
            ";
        }
        // line 47
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "plottage", [], "any", false, false, true, 47)) {
            // line 48
            echo "            <div class=\"col-xs-6 col-md-12\">
              <div class=\"row house__trigger-row\">
                <div class=\"col-3 col-sm-4 col-md-3 col-lg-2 d-flex\"><img src=\"img/list.svg\" alt=\"\"
                                                                          class=\"img-fluid house__trigger-img\">
                </div>
                <div class=\"col house__trigger-text\">
                  Участок
                  <div class=\"house__digit\">";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "plottage", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo " сот.</div>
                </div>
              </div>
            </div>
            ";
        }
        // line 60
        echo "          </div>
        </div>
        <div class=\"col-12 order-md-1\">
          <div class=\"detail-card__characteristics\">

            ";
        // line 65
        echo call_user_func_array($this->env->getFilter('md')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, true, 65), 65, $this->source)]);
        echo "
          </div>
        </div>
        <div class=\"col-12 order-md-3\">
        ";
        // line 69
        if (false) {
            // line 70
            echo "          <div class=\"h h_1 h_primary detail-card__price my-3\">
            ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "price", [], "any", false, false, true, 71)) {
                // line 72
                echo "            <span style=\"font-size: .5em\">от</span> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "price", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo " ₽
            ";
            }
            // line 74
            echo "          </div>
          ";
        }
        // line 76
        echo "          ";
        // line 77
        echo "          <a data-toggle=\"modal\" data-target=\"#ctaModal\" class=\"btn btn-primary btn-lg mt-5\">Узнать цену</a>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 77,  170 => 76,  166 => 74,  160 => 72,  158 => 71,  155 => 70,  153 => 69,  146 => 65,  139 => 60,  131 => 55,  122 => 48,  119 => 47,  111 => 42,  102 => 35,  100 => 34,  89 => 26,  83 => 22,  79 => 20,  70 => 18,  66 => 17,  63 => 16,  61 => 15,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "for" => 17);
        static $filters = array("escape" => 6, "raw" => 65, "md" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'md'],
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
