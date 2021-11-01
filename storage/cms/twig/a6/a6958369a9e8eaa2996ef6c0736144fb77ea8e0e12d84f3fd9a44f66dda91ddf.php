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

/* /var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_040ba97bc322defab1f4fe7c808e9066e9f3ccb356e5cced9d08f5b17141cf07 extends \Twig\Template
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
        echo "<header class=\"header\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"container\">
          <h1 class=\"header__h1 h\">
            Современный комфортный<br>
            дом в&nbsp;пригороде Ставрополя
            <!--span class=\"header__price\">от
              <span class=\"header__price-digit\">
                <span class=\"header__price-digit\">3</span>,00</span><br>
              &nbsp;&nbsp;&nbsp;млн руб.
            </span-->
          </h1>
        </div>
      </div>
    </div>
  </div>
</header>
   
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"owl-carousel owl-theme gallery__owl my-5\">
        <div class=\"item\">
                <a data-toggle=\"modal\" data-target=\"#cta-consult-modal\" href=\"#\">
                    <img class=\"owl-lazy\" data-src=\"/storage/app/media/1110%D1%85302.jpg\" alt=\"\">
                </a>
        </div>
<!--         <div class=\"item\">
        <a data-toggle=\"modal\" data-target=\"#cta-consult-modal\" href=\"#\">
            <img class=\"owl-lazy\" data-src=\"img/main-slider/week_good.jpg\" alt=\"\">
        </a>
</div> -->
<!--
        <div class=\"item\">
          <a data-toggle=\"modal\" data-target=\"#cta-consult-modal\" href=\"#\">
            <img class=\"owl-lazy\" data-src=\"img/main-slider/week_good.jpg\" alt=\"\">
          </a>
        </div>

                        <div class=\"item\">
            <a data-toggle=\"modal\" data-target=\"#cta-consult-modal\" href=\"#\">
                <img class=\"owl-lazy\" data-src=\"img/main-slider/rejim.jpg\" alt=\"\">
            </a>
        </div> 
       <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/2.jpg\" alt=\"\"></div> 
-->
      </div>
    </div>
  </div>
</div>
<div class=\"trigger\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <a id=\"preimushestva\"></a>
        <h2 class=\"h h_2 h_primary text-center trigger__header\">
          Выбирая дом в&nbsp;ЖК&nbsp;&laquo;Вилла-Капри&raquo; Вы&nbsp;получаете
        </h2>
      </div>
      <div class=\"col-12 col-sm-6 col-lg-4\">
        <div class=\"trigger__card\">
          <div class=\"trigger__image\">
            <img data-src=\"img/internet.svg\" class=\"lazy img-fluid\" alt=\"\">
          </div>
          <div class=\"trigger__text\">Три типа домов. <br>Особняки, дуплексы и&nbsp;флэтхаусы.</div>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-lg-4\">
        <div class=\"trigger__card\">
          <div class=\"trigger__image\">
            <img data-src=\"img/sketch.svg\" class=\"lazy img-fluid\" alt=\"\">
          </div>
          <div class=\"trigger__text\">Современный дизайн <br>
            и использование <br>
            энергоэффективных <br> строительных материалов
          </div>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-lg-4\">
        <div class=\"trigger__card\">
          <div class=\"trigger__image\">
            <img data-src=\"img/interior-design.svg\" class=\"lazy img-fluid\" alt=\"\">
          </div>
          <div class=\"trigger__text\">От 80 до 120 кв. метров <br> домашнего уюта</div>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-lg-4\">
        <div class=\"trigger__card\">
          <div class=\"trigger__image\">
            <img data-src=\"img/architecture.svg\" class=\"lazy img-fluid\" alt=\"\">
          </div>
          <div class=\"trigger__text\">Продуманную планировку <br>
            с 3-мя спальнями, <br>
            гардеробной и террасой
          </div>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-lg-4\">
        <div class=\"trigger__card\">
          <div class=\"trigger__image\">
            <img data-src=\"img/tile.svg\" class=\"lazy img-fluid\" alt=\"\">
          </div>
          <div class=\"trigger__text\">Облагороженный <br>
            брусчаткой двор <br>
            от 2,6 до 6 соток
          </div>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-lg-4\">
        <div class=\"trigger__card\">
          <div class=\"trigger__image\">
            <img data-src=\"img/pickup-car.svg\" class=\"lazy img-fluid\" alt=\"\">
          </div>
          <div class=\"trigger__text\">Парковочное место <br>
            с навесом <br>
            и автоматическими распашными воротами
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"house my-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
      <a id=\"katalog\"></a>
        <h2 class=\"h h_2 text-center mb-5\">Таким может быть ваш дом</h2>
      </div>
      <div class=\"col-12 col-md-10 offset-md-1 house__col-12\">

        ";
        // line 135
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("house_types"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 136
        echo "


      </div>
    </div>
  </div>
</div>

";
        // line 144
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cta_form_wide"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 145
        echo "
<div class=\"gallery\">
    <a id=\"gallery\"></a>
  <h2 class=\"h h_2 text-center my-5\">Жилой квартал &laquo;Вилла Капри&raquo;</h2>

  <div class=\"owl-carousel owl-theme gallery__owl\">
      <div class=\"item\">
        <picture>
<!--          <source class=\"lazy\" type=\"image/webp\" data-srcset=\"img/gallery/1.webp\">-->
          <img class=\"lazy\" data-src=\"img/gallery/1.jpg\" alt=\"\">
        </picture>
      </div>
      <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/2.jpg\" alt=\"\"></div>
      <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/3.jpg\" alt=\"\"></div>
      <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/4.jpg\" alt=\"\"></div>
      <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/5.jpg\" alt=\"\"></div>
      <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/6.jpg\" alt=\"\"></div>
      <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/7.jpg\" alt=\"\"></div>
      <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/8.jpg\" alt=\"\"></div>
      <div class=\"item\"><img class=\"owl-lazy\" data-src=\"img/gallery/9.jpg\" alt=\"\"></div>
  </div>
</div>


<div class=\"reasons\">
  <h2 class=\"reasons__title h h_2 h_primary py-3 py-md-5\">
    <div class=\"reasons__title-digit\">6</div>
    <div class=\"reasons__title-text\">ПРИЧИН КУПИТЬ ДОМ<br>В ЖК &laquo;ВИЛЛА-КАПРИ&raquo;</div>
  </h2>
  <div class=\"tertiary py-5\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-10 offset-1\">
          <div class=\"row\">
            <div class=\"col-md-6 reasons__trigger\">
              <div class=\"reasons__trigger-digit\">1</div>
              <div class=\"reasons__trigger-text\">240 современных <br>
                домов
              </div>
            </div>
            <div class=\"col-md-6 reasons__trigger\">
              <div class=\"reasons__trigger-digit\">2</div>
              <div class=\"reasons__trigger-text\">Асфальтированные <br>
                дороги внутри поселка
              </div>
            </div>
            <div class=\"col-md-6 reasons__trigger\">
              <div class=\"reasons__trigger-digit\">3</div>
              <div class=\"reasons__trigger-text\">Поблизости ухоженный<br>лесной массив
              </div>
            </div>
<!--             <div class=\"col-md-6 reasons__trigger\">
  <div class=\"reasons__trigger-digit\">4</div>
  <div class=\"reasons__trigger-text\">Закрытая <br>
    территория
  </div>
</div> -->
            <div class=\"col-md-6 reasons__trigger\">
              <div class=\"reasons__trigger-digit\">4</div>
              <div class=\"reasons__trigger-text\">Уникальная архитектура зданий
              </div>
            </div>
            <div class=\"col-md-6 reasons__trigger\">
              <div class=\"reasons__trigger-digit\">5</div>
              <div class=\"reasons__trigger-text\">Пригород Ставрополя 5 км
              </div>
            </div>
            <div class=\"col-md-6 reasons__trigger\">
              <div class=\"reasons__trigger-digit\">6</div>
              <div class=\"reasons__trigger-text\">Центральные коммуникации
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"payment-methods py-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"h h_2 payment-methods__title text-center\">Выбирайте наиболее удобный способ оплаты</h2>
      </div>
    </div>
    <div class=\"row no-gutters mt-4 mt-md-5\">
      <div class=\"col-4\">
        <figure class=\"payment-methods__bullet\"><img data-src=\"img/payment-methods/nalichka.svg\" alt=\"\"
                                                     class=\"lazy payment-methods__bullet-img img-fluid\">
          <figcaption class=\"payment-methods__bullet-caption\">
            Наличный расчет
          </figcaption>
        </figure>
      </div>
      <div class=\"col-4\">
        <figure class=\"payment-methods__bullet\"><img data-src=\"img/payment-methods/ipoteka.svg\" alt=\"\"
                                                     class=\"lazy payment-methods__bullet-img img-fluid\">
          <figcaption class=\"payment-methods__bullet-caption\">
            Ипотека
          </figcaption>
        </figure>
      </div>
      <div class=\"col-4\">
        <figure class=\"payment-methods__bullet\"><img data-src=\"img/payment-methods/mk.svg\" alt=\"\"
                                                     class=\"lazy payment-methods__bullet-img img-fluid\">
          <figcaption class=\"payment-methods__bullet-caption\">
            Материнский капитал
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>

";
        // line 259
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title'] = "Консультант поможет Вам с расчетами"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cta_form_wide"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 260
        echo "
<div class=\"about\">
    <a id=\"about\"></a>
  <h2 class=\"h h_2 text-center my-4 my-md-5\">О застройщике</h2>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-5 mb-4\">
        <img data-src=\"img/about.jpg\" alt=\"\" class=\"lazy img-fluid\">
      </div>
      <div class=\"col-md-7 about__text\">
        С 2003 года Строительная группа «Третий Рим» возводит качественное и комфортное жилье для жителей Ставрополья и
        других регионов России. Благодаря наработанному опыту в сфере строительства, тысячи семей приобрели недвижимость
        от застройщика разного формата:

        <ul class=\"about__list\">
          <li>дома коттеджного типа;</li>
          <li>квартиры в жилом комплексе «Вершина», в микрорайонах «Акварель» и «Радуга»;</li>
          <li>квартиры и дома с участками в активно развивающемся жилом районе «Гармония», включая практичные</li>
          <li>таунхаусы, комфортные флэтхаусы, просторные дуплексы и статусные особняки;</li>
          <li>коммерческие помещения в полуцокольных этажах новостроек и в отдельностоящих зданиях.</li>
        </ul>

        Предпочитая наши объекты, клиенты выбирают жилье, построенное в лучших традициях градостроительства европейских
        городов. На выбор предлагается несколько форматов жилья:

        <ul class=\"about__list\">
          <li>в состоянии «стяжка чистовая»;</li>
          <li>«с ремонтом под ключ»;</li>
          <li>в концепции «заходи и живи»: с финишным ремонтом, мебелью и текстилем.</li>
        </ul>
        Комфорт проживания в жилых комплексах обеспечивают объекты делового и социального назначения, а также
        благоустроенная придомовая территория и места отдыха.
      </div>
    </div>
    <div class=\"row\">
      <!-- <div class=\"col-md-4 col-6\"><img data-src=\"img/logo/akvarel.png\" alt=\"\" class=\"lazy img-fluid about__img\"></div> -->
      <div class=\"col-md-12 col-12\"><img data-src=\"img/logo/garmonya.png\" alt=\"\" class=\"lazy img-fluid about__img\"></div>
      <!--div class=\"col-md-3 col-6\"><img data-src=\"img/logo/raduga.png\" alt=\"\" class=\"lazy img-fluid about__img\"></div-->
      <!-- <div class=\"col-md-4 col-6\"><img data-src=\"img/logo/vershina.png\" alt=\"\" class=\"lazy img-fluid about__img\"></div> -->
    </div>
  </div>
</div>
<div class=\"construction-progress py-4 py-md-5\">
    <a id=\"progress\"></a>
  <h2 class=\"text-center h h_2 my-4 my-md-5\">
    Ход строительства
  </h2>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"owl-carousel owl-theme construction-progress__gallery\">
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/20022021/1.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/20022021/2.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/20022021/3.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/20022021/4.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/20022021/5.jpg\" alt=\"\">
          </div>
          
          
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/16122020/1.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/16122020/2.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/16122020/3.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/16122020/4.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/16122020/5.jpg\" alt=\"\">
          </div>
          
          
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/09102020/1-min.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/09102020/2-min.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/09102020/3-min.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/09102020/4-min.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/09102020/5-min.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/09102020/6-min.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/09102020/7-min.jpg\" alt=\"\">
          </div>
          
          
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/2212/1-1.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/2212/1-2.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/2212/1-3.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/2212/1-4.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/2212/1-5.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/2212/1-6.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/2212/1-7.jpg\" alt=\"\">
          </div>
          <div class=\"construction-progress__gallery-item\">
            <img class=\"owl-lazy\" data-src=\"img/construction-progress/ls.jpg\" alt=\"\">
          </div>
            

<!--           <div class=\"construction-progress__gallery-item\">
  <img class=\"owl-lazy\" data-src=\"img/construction-progress/1-min.jpg\" alt=\"\">
</div>
<div class=\"construction-progress__gallery-item\">
  <img class=\"owl-lazy\" data-src=\"img/construction-progress/2-min.jpg\" alt=\"\">
</div>
<div class=\"construction-progress__gallery-item\">
  <img class=\"owl-lazy\" data-src=\"img/construction-progress/3-min.jpg\" alt=\"\">
</div>
<div class=\"construction-progress__gallery-item\">
  <img class=\"owl-lazy\" data-src=\"img/construction-progress/4-min.jpg\" alt=\"\">
</div>
<div class=\"construction-progress__gallery-item\">
  <img class=\"owl-lazy\" data-src=\"img/construction-progress/5-min.jpg\" alt=\"\">
</div>
<div class=\"construction-progress__gallery-item\">
  <img class=\"owl-lazy\" data-src=\"img/construction-progress/6-min.jpg\" alt=\"\">
</div>
<div class=\"construction-progress__gallery-item\">
  <img class=\"owl-lazy\" data-src=\"img/construction-progress/7-min.jpg\" alt=\"\">
</div> -->
        </div>
      </div>
    </div>
  </div>
</div>
<a id=\"contacts\"></a>
<div class=\"contacts tertiary mt-4 mt-mb-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4 py-3\">
        <div class=\"text-center\">
          <img data-src=\"img/contacts.jpg\" class=\"lazy img-fluid\" alt=\"\">
        </div>
        <div class=\"contacts__text py-4\">
          г. Михайловск,<br>
          ул. Ботаническая 21а<br>
          тел: <a href=\"tel:";
        // line 431
        echo call_user_func_array($this->env->getFunction('utmTracker')->getCallable(), ["defaultPhone"]);
        echo "\">";
        echo call_user_func_array($this->env->getFunction('utmTracker')->getCallable(), ["defaultPhone"]);
        echo "</a>
          
          <a href=\"https://maps.google.com/maps?q=45.1280394%2C42.051404&z=17&hl=ru\" class=\"btn btn-primary mt-3\" target=\"_blank\">Открыть на карте</a>
          
          <br><br>
          Режим работы:<br>
          Пн-Вс: с 9:00 - 20:00<br>
        </div>
        <a data-toggle=\"modal\" data-target=\"#ctaModal\" class=\"btn btn-primary btn-block\">СВЯЗАТЬСЯ С НАМИ</a>
      </div>
      <div class=\"col-md-8 d-none d-md-block\">
        <iframe
            class=\"lazy\"
            data-src=\"https://yandex.ru/map-widget/v1/?um=constructor%3A8453bad03bedc49a837df944a1ba06bc698d88e8de54ffd76e5e1a7b8d9080b6&amp;source=constructor\"
            width=\"100%\" height=\"100%\" frameborder=\"0\"></iframe>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 431,  314 => 260,  309 => 259,  193 => 145,  189 => 144,  179 => 136,  175 => 135,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u0159825/data/www/villa-kapri.ru/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 135);
        static $filters = array();
        static $functions = array("utmTracker" => 431);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
