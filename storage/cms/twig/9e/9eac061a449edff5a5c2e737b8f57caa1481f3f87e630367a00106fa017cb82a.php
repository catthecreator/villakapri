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

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_78336c9fdbbb5ca11d1e648a88ecac794eb99a6145dfcb98e80cec3c1d22cc7e extends \Twig\Template
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
        $context["phone"] = "123";
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/favicon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"/favicon/site.webmanifest\">
    <link rel=\"mask-icon\" href=\"/favicon/safari-pinned-tab.svg\" color=\"#5bbad5\">
    <meta name=\"msapplication-TileColor\" content=\"#2b5797\">
    <meta name=\"theme-color\" content=\"#ffffff\">
  <base href=\"";
        // line 15
        echo url("/");
        echo "/assets/\">
  <link rel=\"preload\" as=\"font\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,900;1,700&display=swap\">
  ";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["webpackAssets"] ?? null), "tag", [0 => "main.css"], "method", false, false, true, 17), 17, $this->source);
        echo "
  ";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["webpackAssets"] ?? null), "tag", [0 => "vendors~main.css"], "method", false, false, true, 18), 18, $this->source);
        echo "
  ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 20
        echo "
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-178390383-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178390383-1');
</script>
<script src=\"//code-ya.jivosite.com/widget/rXJ9TguozX\" async></script>
</head>
<body>
  ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
  <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
  <script src=\"js-lib/owl/owl.carousel.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"
          integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\"
          crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
          integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\"
          crossorigin=\"anonymous\"></script>

  ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "  ";
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 49
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 50
        echo "  ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["webpackAssets"] ?? null), "tag", [0 => "main.js"], "method", false, false, true, 50), 50, $this->source);
        echo "
  ";
        // line 51
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["webpackAssets"] ?? null), "tag", [0 => "vendors~main.js"], "method", false, false, true, 51), 51, $this->source);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  136 => 50,  132 => 49,  120 => 48,  116 => 47,  104 => 37,  99 => 36,  94 => 35,  91 => 34,  87 => 33,  72 => 20,  69 => 19,  65 => 18,  61 => 17,  56 => 15,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "styles" => 19, "partial" => 33, "page" => 34, "framework" => 48, "scripts" => 49);
        static $filters = array("raw" => 17);
        static $functions = array("url" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'styles', 'partial', 'page', 'framework', 'scripts'],
                ['raw'],
                ['url']
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
