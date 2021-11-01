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

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm */
class __TwigTemplate_6d13a70acb32b357566a0c44aefd93a65507abe01fa4796e65b6127d35e14208 extends \Twig\Template
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
        echo "<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 order-md-2\">
        <div class=\"row\">
          <div class=\"col-6\">
            <img data-src=\"img/logo/tr.svg\" alt=\"\" class=\"lazy img-fluid\">
          </div>
          <div class=\"col-6 footer__social\">
            <a href=\"https://instagram.com/villa_kapri\" target=\"_blank\"><img data-src=\"img/logo/instagram.svg\" alt=\"\" class=\"lazy img-fluid footer__social-icon\"></a>
            <a href=\"https://www.facebook.com/villa.kapri.26\" target=\"_blank\"><img data-src=\"img/logo/facebook.svg\" alt=\"\" class=\"lazy img-fluid footer__social-icon\"></a>
            <a href=\"https://vk.com/villa.kapri\" target=\"_blank\"><img data-src=\"img/logo/vk.svg\" alt=\"\" class=\"lazy img-fluid footer__social-icon\"></a>
          </div>
          <div class=\"col-12 col-xl-6 offset-xl-6 footer__privacy py-4 py-md-0\">
            <a target=\"_blank\" href=\"/politika-konfidencialnosti\">Политика конфиденциальности</a><br>
            <a target=\"_blank\" href=\"/polzovatelskoe-soglashenie\">Пользовательское соглашение</a>
          </div>
        </div>
      </div>
      <div class=\"col-md-6 order-md-1\">
        <div class=\"footer__info\">
          Ставропольский край, г. Михайловск. Коммерческое обозначение утверждено
          постановлением Администрации г. Михайловска № 1118 от 09.07.2020 г.
          Проектная документация № 03-04/440-ОПЗ, 03-04/440 ПМ. Правообладатель:
          ИП Шинкаренко Роман Викторович ИНН 262302388838 ОГРНИП 320265100051230.
          Земельные участки с КН: 26:11:021001:265, 26:11:021001:271, 26:11:021001:278
          на праве аренды по договорам № 24 от 17.12.2012, 29 от 17.12.2012, 34 от 17.12.2012.
          © 2020 Строительная группа «Третий Рим». При использовании информации
          ссылка на сайт обязательна
        </div>
      </div>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm", "");
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
