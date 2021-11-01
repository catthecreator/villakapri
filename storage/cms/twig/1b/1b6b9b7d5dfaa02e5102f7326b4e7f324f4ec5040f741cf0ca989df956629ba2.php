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

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_9aef82dcc670d644abc412e37545d6e8685c33eaf63c4bc111879ffd39156aaa extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 1), "baseFileName", [], "any", false, false, true, 1) == "home")) {
            // line 2
            echo "<nav class=\"fullscreen\" id=\"mobileNav\">
\t<div>
\t\t<div class=\"hamburger hamburger--collapse is-active top-panel__hamburger pt-3 mt-2\" data-fullscreen type=\"button\">
      <span class=\"hamburger-box\">
        <span class=\"hamburger-inner\"></span>
      </span>
\t\t</div>
\t</div>
\t<menu class=\"fullscreen__menu\">
\t\t<li><a href=\"#preimushestva\" class=\"fullscreen__menu-link\">Преимущества</a></li>
\t\t<li><a href=\"#katalog\" class=\"fullscreen__menu-link\">Каталог</a></li>
\t\t<li><a href=\"#gallery\" class=\"fullscreen__menu-link\">Галерея</a></li>
\t\t<li><a href=\"#about\" class=\"fullscreen__menu-link\">О застройщике</a></li>
\t\t<li><a href=\"#progress\" class=\"fullscreen__menu-link\">Ход строительства</a></li>
\t\t<li><a href=\"#contacts\" class=\"fullscreen__menu-link\">Контакты</a></li>
\t</menu>
</nav>
";
        }
        // line 20
        echo "<div class=\"top-panel\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-3 d-flex d-md-none\">
\t\t\t\t<!--          <img src=\"img/open-menu.svg\" class=\"img-fluid top-panel__hamburger\" alt=\"\">-->
\t\t\t\t";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 25), "baseFileName", [], "any", false, false, true, 25) == "home")) {
            // line 26
            echo "\t\t\t\t<div class=\"hamburger hamburger--collapse is-active1 top-panel__hamburger pt-3 mt-2\"
\t\t\t\t\t\t data-fullscreen=\"#mobileNav\" type=\"button\">
                  <span class=\"hamburger-box\">
                    <span class=\"hamburger-inner\"></span>
                  </span>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t</div>
\t\t\t<div class=\"col order-md-2 d-_flex d-md-block\">
\t\t\t\t<div>
\t\t\t\t\t<a class=\"top-panel__phone\" href=\"tel:";
        // line 36
        echo call_user_func_array($this->env->getFunction('utmTracker')->getCallable(), ["defaultPhone"]);
        echo "\">";
        echo call_user_func_array($this->env->getFunction('utmTracker')->getCallable(), ["defaultPhone"]);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block top-panel__cta-button\" data-toggle=\"modal\" data-target=\"#ctaModal\">Заказать звонок</a>
\t\t\t</div>
\t\t\t<div class=\"col-3 col-xl-9 col-md-7 col-lg-8 order-md-1 d-flex\">
\t\t\t\t<a href=\"/\"><img data-src=\"img/logo/logo_vilka.svg\" alt=\"\" class=\"lazy img-fluid top-panel__logo\"></a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  79 => 33,  70 => 26,  68 => 25,  61 => 20,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array();
        static $functions = array("utmTracker" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['utmTracker']
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
