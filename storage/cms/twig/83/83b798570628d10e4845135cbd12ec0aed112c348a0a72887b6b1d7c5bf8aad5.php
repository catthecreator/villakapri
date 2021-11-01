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

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/cta_form_wide.htm */
class __TwigTemplate_055e371807e2ab90036cbf1c01dca05f6daf99915c70aaac4bac16e4b113e5cc extends \Twig\Template
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
        echo "<div class=\"tertiary cta-form py-5\">
  <form class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"h h_2 text-center mb-4 cta-form__title\">";
        // line 5
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 5, $this->source), "Есть вопросы? Задайте их нашим специалистам")) : ("Есть вопросы? Задайте их нашим специалистам")), "html", null, true);
        echo "</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-12 d-md-flex my-md-3\">
        <input type=\"text\" name=\"fio\" class=\"cta-form__input-text fio\" placeholder=\"Иванов Иван\">
        <input type=\"tel\" class=\"cta-form__input-text phone\" name=\"phone\" placeholder=\"+7 (912) 345-67-89\">
      </div>
    </div>
    <div class=\"pl-md-5\">
      <label class=\"checkbox ml-md-2\">
        <input type=\"checkbox\" name=\"agreement\" class=\"agreement\" checked>
        <span class=\"checkbox__area\"></span>
        Я согласен(а) с&nbsp;условиями пользовательского соглашения и&nbsp;политики обработки персональных данных
      </label>
    </div>
    <div class=\"text-center mt-4\">
      <input type=\"submit\" class=\"btn btn-primary cta-form__btn\" value=\"Получить ответы на&nbsp;вопросы\">
    </div>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/cta_form_wide.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/cta_form_wide.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5, "default" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'default'],
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
