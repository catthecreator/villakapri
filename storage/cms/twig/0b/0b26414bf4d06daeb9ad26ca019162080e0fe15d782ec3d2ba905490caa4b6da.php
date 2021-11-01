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

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/scripts.htm */
class __TwigTemplate_ed5cc7fc24fec84d076bb32a762e7e2806c78989a8231b6edb88f6c7feceda6c extends \Twig\Template
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
        echo "<script>
  \$('form').on('submit', function (e) {
    var form = \$(\$(this)[0]);
    var \$phone = form.find(\".phone\");
    var agreement = form.find('.agreement').prop('checked');
    var digits = \$phone.val().replace(/\\D+/g, \"\");
    if (digits.length < 6) {
      \$phone.css('border', '2px solid red');
      alert(\"Пожалуйста, введите корректный номер телефона!\");
      e.preventDefault();
      return false;
    }

    if (!agreement) {
      alert('Необходимо согласие с условиями пользовательского соглашения и политикой обработки персональных данных ');
      e.preventDefault();
      return false;

    }

    \$(\"#loadingModal\").modal();
    \$(\"#ctaModal\").modal('hide');
    //var loading = \$.fancybox.open('<div class=\"fancybox-loading\" style=\"overflow:hidden;\"></div>');
    //\$.fancybox.showLoading();
    var name = \$(this).find('.form-name').val();
    var fio = \$(this).find('.fio').val();
    var email = \$(this).find('.email').val();
    //  var form = \$(\$(this)[0]);
    var dataForm = new FormData(this);
    dataForm.append('web_form_submit', 'Y');
    var phone = \$phone.val();
    \$.request(\"onBitrix24LeadSend\", {
      data: {
        phone: phone,
        title: name,
        name: fio,
        email: email,
      },
      success: function (data) {
        //loading.close();
        \$(\"#loadingModal\").modal('hide');
        ym(67176004,'reachGoal','lead');
        gtag('event','lead',{'event_category':'submit'})
        alert(\"Спасибо за обращение! Наш менеджер свяжется с вами в ближайшее время!\");
        // \$.fancybox.open('Спасибо за обращение! Наш менеджер свяжется с вами в ближайшее время!')
        //ym(<?=getYandexMetrikaCounterId()?>, 'reachGoal', 'bottom_form');
      }
    });
    // \$.ajax({
    //   url: '/ajax/ajax.php',
    //   type: 'POST',
    //   data: {
    //     tel: phone,
    //     title: name,
    //     name: fio,
    //     email: email,
    //   },
    //   success: function (data) {
    //     //loading.close();
    //     \$(\"#loadingModal\").modal('hide');
    //     \$.fancybox.open('Спасибо за обращение! Наш менеджер свяжется с вами в ближайшее время!')
    //     //ym(<?=getYandexMetrikaCounterId()?>, 'reachGoal', 'bottom_form');
    //   }
    // });
    //getForm(name, dataForm, 'static');
    e.preventDefault();
    return false;
  })
</script>

<!-- Yandex.Metrika counter -->
<script type=\"text/javascript\">
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

      ym(67176004, \"init\", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        // defer:true,
      });
</script>
<noscript><div><img src=\"https://mc.yandex.ru/watch/67176004\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
<!-- /Yandex.Metrika counter -->";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/scripts.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/partials/scripts.htm", "");
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
