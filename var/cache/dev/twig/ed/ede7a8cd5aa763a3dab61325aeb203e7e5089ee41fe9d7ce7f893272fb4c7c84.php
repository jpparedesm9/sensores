<?php

/* AppBundle:Home:about_us.html.twig */
class __TwigTemplate_03a565a4d68d91d615e8037058d8669d11131f7abb023f4e465724ead9ccf5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::template.html.twig", "AppBundle:Home:about_us.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:about_us.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:about_us.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<!-- Breadcrumbs-->
<section class=\"breadcrumbs-custom bg-image\" style=\"background-image: url(";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg-image-1.jpg"), "html", null, true);
        echo ");\">
  <div class=\"container\">
    <h2 class=\"breadcrumbs-custom__title\">Acerca de Nosotros</h2>
    <ul class=\"breadcrumbs-custom__path\">
      <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
      <li class=\"active\">Acerca de Nosotros</li>
    </ul>
  </div>
</section>


<!-- Experience since 1999-->
<section class=\"section section-md bg-default\">
  <div class=\"container\">
    <div class=\"row row-70 justify-content-md-center justify-content-xl-between\">
      <div class=\"col-md-10 col-lg-6 col-xl-5\">
        <h4>Objetivo General</h4>
        <p>Estimar de forma óptima y robusta variables de contaminación atmosférica en Quito, en condiciones de alta densidad de red de estaciones, para mejorar la interpolación entre los puntos existentes y poder entender el papel que juega un parque urbano en la dispersión y/o la limpieza de la contaminación atmosférica.</p>
        <h4>Objetivos Espec&iacute;ficos</h4>
        <p>Instalar una red de sensores en la regi&oacute;n bajo estudio que nos permita monitorizar en tiempo real el comportamiento de las variables de inter&eacute;s bajo medici&oacute;n y dise&ntilde;ar una interfaz que sea responsable de recolectar los datos y transformarlos, para su posterior procesado y entrega al usuario. Esta interfaz consta de un front-end y un back-end. </p>
        <p>Modelar la contaminación atmosférica:
            <ul>
            <li>- Identificaci&oacute;n de variables de contaminación atmosférica.</li>
            <li>- Obtenci&oacute;n de muestras representativas de las variables bajo estudio.</li>
            <li>- Obtenci&oacute;n de caracter&iacute;sticas de la poblaci&oacute;n a partir de las muestras extra&iacute;das de la\tmisma y estimación de la distribución de dicha poblaci&oacute;n. </li>
            <li>- Tratamiento robusto de datos.</li>
            <li>- Identificaci&oacute;n del sistema dinámico utilizando el dominio transformado.</li>
            <li>- Procesado &oacute;ptimo de se&ntilde;al y estimaci&oacute;n de variables.</li>
            </ul>
        </p>
        <p>
        Dise&ntilde;o de un prototipo de la aplicaci&oacute;n anal&iacute;tica de datos de estimaci&oacute;n de contaminaci&oacute;n urbana, diseño de una interfaz de usuario (human-computer interaction) y estudio de accesibilidad web. 
        </p>
      </div>
      <div class=\"col-md-10 col-lg-6\">
        <div class=\"row grid-2\">
          <div class=\"col-6\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-1-273x214.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"273\" height=\"214\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-2-273x214.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"273\" height=\"214\"/>
          </div>
          <div class=\"col-6\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-3-273x451.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"273\" height=\"451\"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Our History-->
<section class=\"section parallax-container\" data-parallax-img=\"images/parallax-2.jpg')}}\">
  <div class=\"parallax-content\">
    <div class=\"section-md text-center\">
      <div class=\"container\">
        <h2>Our History</h2>
        <div class=\"timeline\">
          <div class=\"timeline__item-wrap\">
            <!-- Timeline item-->
            <article class=\"timeline__item\">
              <div class=\"timeline__item-header\">
                <h5>Foundation,1999</h5>
              </div>
              <div class=\"timeline__item-main\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-4-93x86.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"93\" height=\"86\"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
              </div>
            </article>
          </div>
          <div class=\"timeline__item-wrap\">
            <!-- Timeline item-->
            <article class=\"timeline__item timeline__item-reverse\">
              <div class=\"timeline__item-header\">
                <h5>Recognition,2008</h5>
              </div>
              <div class=\"timeline__item-main\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-5-93x86.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"93\" height=\"86\"/>
                <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
            </article>
          </div>
          <div class=\"timeline__item-wrap\">
            <!-- Timeline item-->
            <article class=\"timeline__item\">
              <div class=\"timeline__item-header\">
                <h5>Industry Leader,2018</h5>
              </div>
              <div class=\"timeline__item-main\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-6-93x86.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"93\" height=\"86\"/>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Social Responsibility & Eco Standards-->
<section class=\"section section-sm bg-default\">
  <div class=\"container\">
    <div class=\"row row-50 justify-content-md-center justify-content-lg-start justify-content-xl-between\">
      <div class=\"col-md-10 col-lg-6\">
        <h4>Social Responsibility</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
        <div class=\"group-3-columns\" data-lightgallery=\"group\">
          <div class=\"column-item\"><a class=\"thumb-elegant\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/image-1_original.jpg"), "html", null, true);
        echo "\" data-lightgallery=\"item\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/image-1-166x139.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"166\" height=\"139\"/>
              <div class=\"thumb-elegant__overlay\"></div></a></div>
          <div class=\"column-item\"><a class=\"thumb-elegant\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/image-2_original.jpg"), "html", null, true);
        echo "\" data-lightgallery=\"item\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/image-2-166x139.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"166\" height=\"139\"/>
              <div class=\"thumb-elegant__overlay\"></div></a></div>
          <div class=\"column-item\"><a class=\"thumb-elegant\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/image-3_original.jpg"), "html", null, true);
        echo "\" data-lightgallery=\"item\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/image-3-166x139.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"166\" height=\"139\"/>
              <div class=\"thumb-elegant__overlay\"></div></a></div>
        </div>
      </div>
      <div class=\"col-md-10 col-lg-6 col-xl-5\">
        <h4>Eco Standards</h4>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <div class=\"group-3-columns\" style=\"max-width: 430px;\" data-lightgallery=\"group\">
          <div class=\"column-item\"><a class=\"thumb-light\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/certificate-1-847x1200.jpg"), "html", null, true);
        echo "\" data-lightgallery=\"item\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/certificate-1-120x171.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"120\" height=\"171\"/>
              <div class=\"thumb-light__overlay\"></div></a></div>
          <div class=\"column-item\"><a class=\"thumb-light\" href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/certificate-1-847x1200.jpg"), "html", null, true);
        echo "\" data-lightgallery=\"item\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/certificate-1-120x171.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"120\" height=\"171\"/>
              <div class=\"thumb-light__overlay\"></div></a></div>
          <div class=\"column-item\"><a class=\"thumb-light\" href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/certificate-1-847x1200.jpg"), "html", null, true);
        echo "\" data-lightgallery=\"item\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/certificate-1-120x171.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"120\" height=\"171\"/>
              <div class=\"thumb-light__overlay\"></div></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Top Management-->
<section class=\"section section-md bg-gray-4\">
  <div class=\"container\">
    <!-- Section Header-->
    <div class=\"section__header\">
      <h4>Our Team</h4>
      <div class=\"section__header-element\"><a class=\"link link-medium\" href=\"contacts.html\">Contact Us</a></div>
    </div>
    <div class=\"row row-30\">
      <div class=\"col-md-6 col-lg-4\">
        <!-- Profile creative-->
        <article class=\"profile-creative\">
          <div class=\"profile-creative__header\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/top-management-1-115x119.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"115\" height=\"119\"/>
          </div>
          <div class=\"profile-creative__main\" data-fixed-height=\"\">
            <p class=\"profile-creative__title\">Sam Wilson</p>
            <p class=\"profile-creative__subtitle\">Founder, CEO</p>
            <div class=\"profile-creative__element\"><a href=\"mailto:#\">info@demolink.org</a></div>
          </div>
        </article>
      </div>
      <div class=\"col-md-6 col-lg-4\">
        <!-- Profile creative-->
        <article class=\"profile-creative\">
          <div class=\"profile-creative__header\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/top-management-2-115x119.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"115\" height=\"119\"/>
          </div>
          <div class=\"profile-creative__main\" data-fixed-height=\"\">
            <p class=\"profile-creative__title\">Jim Lee</p>
            <p class=\"profile-creative__subtitle\">Head Architect</p>
            <div class=\"profile-creative__element\"><a href=\"mailto:#\">info@demolink.org</a></div>
          </div>
        </article>
      </div>
      <div class=\"col-md-6 col-lg-4\">
        <!-- Profile creative-->
        <article class=\"profile-creative\">
          <div class=\"profile-creative__header\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/top-management-3-115x119.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"115\" height=\"119\"/>
          </div>
          <div class=\"profile-creative__main\" data-fixed-height=\"\">
            <p class=\"profile-creative__title\">Peter Wilson</p>
            <p class=\"profile-creative__subtitle\">Interior Designer</p>
            <div class=\"profile-creative__element\"><a href=\"mailto:#\">info@demolink.org</a></div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 166,  258 => 154,  243 => 142,  218 => 122,  211 => 120,  204 => 118,  191 => 110,  184 => 108,  177 => 106,  154 => 86,  140 => 75,  126 => 64,  101 => 42,  94 => 40,  59 => 8,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::template.html.twig' %}
{%block content%}
<!-- Breadcrumbs-->
<section class=\"breadcrumbs-custom bg-image\" style=\"background-image: url({{asset('assets/images/bg-image-1.jpg')}});\">
  <div class=\"container\">
    <h2 class=\"breadcrumbs-custom__title\">Acerca de Nosotros</h2>
    <ul class=\"breadcrumbs-custom__path\">
      <li><a href=\"{{path('homepage')}}\">Home</a></li>
      <li class=\"active\">Acerca de Nosotros</li>
    </ul>
  </div>
</section>


<!-- Experience since 1999-->
<section class=\"section section-md bg-default\">
  <div class=\"container\">
    <div class=\"row row-70 justify-content-md-center justify-content-xl-between\">
      <div class=\"col-md-10 col-lg-6 col-xl-5\">
        <h4>Objetivo General</h4>
        <p>Estimar de forma óptima y robusta variables de contaminación atmosférica en Quito, en condiciones de alta densidad de red de estaciones, para mejorar la interpolación entre los puntos existentes y poder entender el papel que juega un parque urbano en la dispersión y/o la limpieza de la contaminación atmosférica.</p>
        <h4>Objetivos Espec&iacute;ficos</h4>
        <p>Instalar una red de sensores en la regi&oacute;n bajo estudio que nos permita monitorizar en tiempo real el comportamiento de las variables de inter&eacute;s bajo medici&oacute;n y dise&ntilde;ar una interfaz que sea responsable de recolectar los datos y transformarlos, para su posterior procesado y entrega al usuario. Esta interfaz consta de un front-end y un back-end. </p>
        <p>Modelar la contaminación atmosférica:
            <ul>
            <li>- Identificaci&oacute;n de variables de contaminación atmosférica.</li>
            <li>- Obtenci&oacute;n de muestras representativas de las variables bajo estudio.</li>
            <li>- Obtenci&oacute;n de caracter&iacute;sticas de la poblaci&oacute;n a partir de las muestras extra&iacute;das de la\tmisma y estimación de la distribución de dicha poblaci&oacute;n. </li>
            <li>- Tratamiento robusto de datos.</li>
            <li>- Identificaci&oacute;n del sistema dinámico utilizando el dominio transformado.</li>
            <li>- Procesado &oacute;ptimo de se&ntilde;al y estimaci&oacute;n de variables.</li>
            </ul>
        </p>
        <p>
        Dise&ntilde;o de un prototipo de la aplicaci&oacute;n anal&iacute;tica de datos de estimaci&oacute;n de contaminaci&oacute;n urbana, diseño de una interfaz de usuario (human-computer interaction) y estudio de accesibilidad web. 
        </p>
      </div>
      <div class=\"col-md-10 col-lg-6\">
        <div class=\"row grid-2\">
          <div class=\"col-6\"><img src=\"{{asset('assets/images/about-1-273x214.jpg')}}\" alt=\"\" width=\"273\" height=\"214\"/><img src=\"{{asset('assets/images/about-2-273x214.jpg')}}\" alt=\"\" width=\"273\" height=\"214\"/>
          </div>
          <div class=\"col-6\"><img src=\"{{asset('assets/images/about-3-273x451.jpg')}}\" alt=\"\" width=\"273\" height=\"451\"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Our History-->
<section class=\"section parallax-container\" data-parallax-img=\"images/parallax-2.jpg')}}\">
  <div class=\"parallax-content\">
    <div class=\"section-md text-center\">
      <div class=\"container\">
        <h2>Our History</h2>
        <div class=\"timeline\">
          <div class=\"timeline__item-wrap\">
            <!-- Timeline item-->
            <article class=\"timeline__item\">
              <div class=\"timeline__item-header\">
                <h5>Foundation,1999</h5>
              </div>
              <div class=\"timeline__item-main\"><img src=\"{{asset('assets/images/about-4-93x86.jpg')}}\" alt=\"\" width=\"93\" height=\"86\"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
              </div>
            </article>
          </div>
          <div class=\"timeline__item-wrap\">
            <!-- Timeline item-->
            <article class=\"timeline__item timeline__item-reverse\">
              <div class=\"timeline__item-header\">
                <h5>Recognition,2008</h5>
              </div>
              <div class=\"timeline__item-main\"><img src=\"{{asset('assets/images/about-5-93x86.jpg')}}\" alt=\"\" width=\"93\" height=\"86\"/>
                <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
            </article>
          </div>
          <div class=\"timeline__item-wrap\">
            <!-- Timeline item-->
            <article class=\"timeline__item\">
              <div class=\"timeline__item-header\">
                <h5>Industry Leader,2018</h5>
              </div>
              <div class=\"timeline__item-main\"><img src=\"{{asset('assets/images/about-6-93x86.jpg')}}\" alt=\"\" width=\"93\" height=\"86\"/>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Social Responsibility & Eco Standards-->
<section class=\"section section-sm bg-default\">
  <div class=\"container\">
    <div class=\"row row-50 justify-content-md-center justify-content-lg-start justify-content-xl-between\">
      <div class=\"col-md-10 col-lg-6\">
        <h4>Social Responsibility</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
        <div class=\"group-3-columns\" data-lightgallery=\"group\">
          <div class=\"column-item\"><a class=\"thumb-elegant\" href=\"{{asset('assets/images/image-1_original.jpg')}}\" data-lightgallery=\"item\"><img src=\"{{asset('assets/images/image-1-166x139.jpg')}}\" alt=\"\" width=\"166\" height=\"139\"/>
              <div class=\"thumb-elegant__overlay\"></div></a></div>
          <div class=\"column-item\"><a class=\"thumb-elegant\" href=\"{{asset('assets/images/image-2_original.jpg')}}\" data-lightgallery=\"item\"><img src=\"{{asset('assets/images/image-2-166x139.jpg')}}\" alt=\"\" width=\"166\" height=\"139\"/>
              <div class=\"thumb-elegant__overlay\"></div></a></div>
          <div class=\"column-item\"><a class=\"thumb-elegant\" href=\"{{asset('assets/images/image-3_original.jpg')}}\" data-lightgallery=\"item\"><img src=\"{{asset('assets/images/image-3-166x139.jpg')}}\" alt=\"\" width=\"166\" height=\"139\"/>
              <div class=\"thumb-elegant__overlay\"></div></a></div>
        </div>
      </div>
      <div class=\"col-md-10 col-lg-6 col-xl-5\">
        <h4>Eco Standards</h4>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <div class=\"group-3-columns\" style=\"max-width: 430px;\" data-lightgallery=\"group\">
          <div class=\"column-item\"><a class=\"thumb-light\" href=\"{{asset('assets/images/certificate-1-847x1200.jpg')}}\" data-lightgallery=\"item\"><img src=\"{{asset('assets/images/certificate-1-120x171.jpg')}}\" alt=\"\" width=\"120\" height=\"171\"/>
              <div class=\"thumb-light__overlay\"></div></a></div>
          <div class=\"column-item\"><a class=\"thumb-light\" href=\"{{asset('assets/images/certificate-1-847x1200.jpg')}}\" data-lightgallery=\"item\"><img src=\"{{asset('assets/images/certificate-1-120x171.jpg')}}\" alt=\"\" width=\"120\" height=\"171\"/>
              <div class=\"thumb-light__overlay\"></div></a></div>
          <div class=\"column-item\"><a class=\"thumb-light\" href=\"{{asset('assets/images/certificate-1-847x1200.jpg')}}\" data-lightgallery=\"item\"><img src=\"{{asset('assets/images/certificate-1-120x171.jpg')}}\" alt=\"\" width=\"120\" height=\"171\"/>
              <div class=\"thumb-light__overlay\"></div></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Top Management-->
<section class=\"section section-md bg-gray-4\">
  <div class=\"container\">
    <!-- Section Header-->
    <div class=\"section__header\">
      <h4>Our Team</h4>
      <div class=\"section__header-element\"><a class=\"link link-medium\" href=\"contacts.html\">Contact Us</a></div>
    </div>
    <div class=\"row row-30\">
      <div class=\"col-md-6 col-lg-4\">
        <!-- Profile creative-->
        <article class=\"profile-creative\">
          <div class=\"profile-creative__header\"><img src=\"{{asset('assets/images/top-management-1-115x119.jpg')}}\" alt=\"\" width=\"115\" height=\"119\"/>
          </div>
          <div class=\"profile-creative__main\" data-fixed-height=\"\">
            <p class=\"profile-creative__title\">Sam Wilson</p>
            <p class=\"profile-creative__subtitle\">Founder, CEO</p>
            <div class=\"profile-creative__element\"><a href=\"mailto:#\">info@demolink.org</a></div>
          </div>
        </article>
      </div>
      <div class=\"col-md-6 col-lg-4\">
        <!-- Profile creative-->
        <article class=\"profile-creative\">
          <div class=\"profile-creative__header\"><img src=\"{{asset('assets/images/top-management-2-115x119.jpg')}}\" alt=\"\" width=\"115\" height=\"119\"/>
          </div>
          <div class=\"profile-creative__main\" data-fixed-height=\"\">
            <p class=\"profile-creative__title\">Jim Lee</p>
            <p class=\"profile-creative__subtitle\">Head Architect</p>
            <div class=\"profile-creative__element\"><a href=\"mailto:#\">info@demolink.org</a></div>
          </div>
        </article>
      </div>
      <div class=\"col-md-6 col-lg-4\">
        <!-- Profile creative-->
        <article class=\"profile-creative\">
          <div class=\"profile-creative__header\"><img src=\"{{asset('assets/images/top-management-3-115x119.jpg')}}\" alt=\"\" width=\"115\" height=\"119\"/>
          </div>
          <div class=\"profile-creative__main\" data-fixed-height=\"\">
            <p class=\"profile-creative__title\">Peter Wilson</p>
            <p class=\"profile-creative__subtitle\">Interior Designer</p>
            <div class=\"profile-creative__element\"><a href=\"mailto:#\">info@demolink.org</a></div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
{%endblock%}
", "AppBundle:Home:about_us.html.twig", "/Library/WebServer/Documents/sensores2/src/AppBundle/Resources/views/Home/about_us.html.twig");
    }
}
