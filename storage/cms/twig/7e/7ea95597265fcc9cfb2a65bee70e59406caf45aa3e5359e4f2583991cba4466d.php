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

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/modal.htm */
class __TwigTemplate_e979012f252792a5b3dceb0ec004c2b5be7fba828b82602e1433b1c3901db64a extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"ctaModal\" tabindex=\"-1\">
  <div class=\"modal-dialog modal-dialog-centered modal-md\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Введите ваш номер телефона</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
            <div class=\"form-group\">
              <input type=\"tel\" class=\"form-control phone\" placeholder=\"+7 (900) 000-00-00\" required>
              <label class=\"mt-3\">
                <small class=\"form-text text-muted\">
                  <input type=\"checkbox\" class=\"agreement\" checked>&nbsp;&nbsp;Я согласен(а) с условиями пользовательского соглашения и политики обработки персональных данных</small>
              </label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Заказать звонок</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"cta-consult-modal\" tabindex=\"-1\">
  <div class=\"modal-dialog modal-dialog-centered modal-md\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Запишитесь на презентацию</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
            <div class=\"form-group\">
              <input type=\"tel\" class=\"form-control phone\" placeholder=\"+7 (900) 000-00-00\" required>
              <label class=\"mt-3\">
                <small class=\"form-text text-muted\">
                  <input type=\"checkbox\" class=\"agreement\" checked>&nbsp;&nbsp;Я согласен(а) с условиями пользовательского соглашения и политики обработки персональных данных</small>
              </label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Заказать звонок</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"loadingModal\" tabindex=\"-1\" style=\"z-index:999\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog modal-dialog-centered d-flex justify-content-center\" role=\"document\">
        <div class=\"spinner-border text-light\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/modal.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/modal.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
