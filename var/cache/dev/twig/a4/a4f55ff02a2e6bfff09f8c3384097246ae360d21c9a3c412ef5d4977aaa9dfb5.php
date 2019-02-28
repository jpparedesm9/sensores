<?php

/* AppBundle::template.html.twig */
class __TwigTemplate_24526902fb39edfdda6ea1f7da0803c2527849492031a29550cb353fe71a52f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"wide wow-animation\" lang=\"en\">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- Stylesheets-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fonts.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
  </head>
  <body>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <div class=\"ie-panel\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"images/ie8-panel/warning_bar_0000_us.jpg\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <!-- Page Loader-->
    <div class=\"preloader\" id=\"preloader\">
      <div class=\"page-loader-logo\">
        <div class=\"brand\">
          <div class=\"brand__name\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-default-134x49.png"), "html", null, true);
        echo "\" alt=\"\" width=\"134\" height=\"49\"/>
          </div>
        </div>
      </div>
      <div class=\"page-loader-body\">
        <div id=\"loadingProgressG\">
          <div class=\"loadingProgressG\" id=\"loadingProgressG_1\"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class=\"page\">
      <!-- Page Header-->
      <header class=\"page-header section\">
        <!-- RD Navbar-->
        <div class=\"rd-navbar-wrap\">
          <nav class=\"rd-navbar\" data-layout=\"rd-navbar-fixed\" data-sm-layout=\"rd-navbar-fixed\" data-sm-device-layout=\"rd-navbar-fixed\" data-md-layout=\"rd-navbar-fixed\" data-md-device-layout=\"rd-navbar-fixed\" data-lg-device-layout=\"rd-navbar-fixed\" data-lg-layout=\"rd-navbar-static\" data-xl-device-layout=\"rd-navbar-static\" data-xl-layout=\"rd-navbar-static\" data-xxl-device-layout=\"rd-navbar-static\" data-xxl-layout=\"rd-navbar-static\" data-stick-up-clone=\"false\" data-md-stick-up-offset=\"113px\" data-lg-stick-up-offset=\"138px\" data-xl-stick-up-offset=\"138px\" data-md-stick-up=\"true\" data-lg-stick-up=\"true\" data-xl-stick-up=\"true\">
            <div class=\"rd-navbar-aside-outer\">
              <div class=\"rd-navbar-aside\">
                <!-- RD Navbar Panel -->
                <div class=\"rd-navbar-panel\">
                  <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar-nav-wrap\"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class=\"rd-navbar-brand\"><a class=\"brand\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                      <div class=\"brand__name\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-default-134x49.png"), "html", null, true);
        echo "\" alt=\"\" width=\"134\" height=\"49\"/>
                      </div></a></div>
                </div>
                <!-- RD Navbar Content-->
                <div class=\"rd-navbar-content-outer\">
                  <div class=\"rd-navbar-content__toggle rd-navbar-static--hidden\" data-rd-navbar-toggle=\".rd-navbar-content\"><span></span></div>
                  <div class=\"rd-navbar-content\">
                    <ul class=\"rd-navbar-items-list\">
                      <li>
                        <div class=\"unit unit-spacing-sm flex-row align-items-center\">
                          <div class=\"unit__left\"><span class=\"icon icon-md icon-primary fl-bigmug-line-trophy55\"></span></div>
                          <div class=\"unit__body\">
                            <p>#1 International <br> Architecture Company</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"unit unit-spacing-sm flex-row align-items-center\">
                          <div class=\"unit__left\"><span class=\"icon icon-md icon-primary fl-bigmug-line-circular220\"></span></div>
                          <div class=\"unit__body\">
                            <p>Certified <br> ISO 9001:2008</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class=\"rd-navbar-content__item\"><a class=\"button button-xs button-lighter\" href=\"contacts.html\">Get a quote</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"rd-navbar-main-outer\">
              <div class=\"rd-navbar-main\">
                <!-- RD Navbar Nav -->
                <div class=\"rd-navbar-nav-wrap\">
                  <!-- RD Navbar Search-->
                  <div class=\"rd-navbar-search rd-navbar-search-toggled\">
                    <button class=\"rd-navbar-search-toggle\" data-rd-navbar-toggle=\".rd-navbar-search\"></button>
                    <form class=\"rd-search\" action=\"search-results.html\" data-search-live=\"rd-search-results-live\" method=\"GET\">
                      <div class=\"form-wrap\">
                        <input class=\"form-input\" id=\"rd-navbar-search-form-input\" type=\"text\" name=\"s\" autocomplete=\"off\">
                        <label class=\"form-label\" for=\"rd-navbar-search-form-input\">Search...</label>
                      </div>
                      <button class=\"rd-navbar-search-submit\" type=\"submit\"></button>
                      <div class=\"rd-search-results-live\" id=\"rd-search-results-live\"></div>
                    </form>
                  </div>
                  <!-- RD Navbar Nav-->
                  <ul class=\"rd-navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
                    </li>
                    <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_us");
        echo "\">Acerca de Nosotros</a></li>
                    <li><a href=\"contacts.html\">Cont&aacute;ctanos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper -->
      ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "      <!-- Page Footer-->
      <footer class=\"section footer-modern bg-gray-darker\">
        <div class=\"footer-modern__inner\">
          <div class=\"container\">
            <div class=\"row justify-content-sm-center row-90\">
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <!-- Box decorated-->
                <article class=\"box-decorated\">
                  <h4 class=\"box-decorated__title\">Call Us Now</h4>
                  <dl class=\"list-terms-inline\">
                    <dt>Phone #1</dt>
                    <dd><a href=\"tel:#\">+1 (409) 987–5874</a></dd>
                  </dl>
                  <dl class=\"list-terms-inline\">
                    <dt>Phone #2</dt>
                    <dd><a href=\"tel:#\">+1 (409) 123–3434</a></dd>
                  </dl>
                </article>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <!-- Box decorated-->
                <article class=\"box-decorated\">
                  <h4 class=\"box-decorated__title\">Send a Message</h4>
                  <dl class=\"list-terms-inline\">
                    <dt>Sales department</dt>
                    <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                  </dl>
                  <dl class=\"list-terms-inline\">
                    <dt>Support</dt>
                    <dd><a href=\"mailto:#\">support@demolink.org</a></dd>
                  </dl>
                </article>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <!-- Box decorated-->
                <article class=\"box-decorated\">
                  <h4 class=\"box-decorated__title\">Main Office</h4>
                  <p>6036 Richmond hwy., Alexandria, VA, 2230</p>
                  <ul class=\"list-inline-0\">
                    <li>
                      <dl class=\"list-terms-inline\">
                        <dt>Weekdays</dt>
                        <dd>8:00–20:00</dd>
                      </dl>
                    </li>
                    <li>
                      <dl class=\"list-terms-inline\">
                        <dt>Weekends</dt>
                        <dd>Closed</dd>
                      </dl>
                    </li>
                  </ul>
                </article>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\"><a class=\"brand\" href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                  <div class=\"brand__name\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-inverse-134x49.png"), "html", null, true);
        echo "\" alt=\"\" width=\"134\" height=\"49\"/>
                  </div></a>
                <p class=\"text-small\">ARCH company is a diversified global architecture company that brings best designers and architects together.</p>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <h4 class=\"heading-decorated\">Useful Links</h4>
                <ul class=\"list-nav\">
                  <li><a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                  <li><a href=\"about-us.html\">About us</a>
                  </li>
                  <li><a href=\"invest.html\">Invest</a>
                  </li>
                  <li><a href=\"portfolio.html\">Portfolio</a>
                  </li>
                  <li><a href=\"#\">Media</a></li>
                  <li><a href=\"careers.html\">Careers</a>
                  </li>
                </ul>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <h4 class=\"heading-decorated\">Subscribe Now</h4>
                <!-- RD Mailform-->
                <form class=\"rd-mailform rd-mailform_sm rd-mailform_inline\" data-form-output=\"form-output-global\" data-form-type=\"subscribe\" method=\"post\" action=\"bat/rd-mailform.php\">
                  <div class=\"form-wrap\">
                    <input class=\"form-input\" id=\"footer-form-subscribe-email\" type=\"email\" name=\"email\" data-constraints=\"@Email @Required\">
                    <label class=\"form-label\" for=\"footer-form-subscribe-email\">Enter Your E-mail</label>
                  </div>
                  <button class=\"button button-primary\" type=\"submit\">Send</button>
                </form>
              </div>
            </div>
          </div>
          <div class=\"divider\"></div>
          <div class=\"container text-center\">
            <div class=\"row row-20\">
              <div class=\"col-md-6 text-md-left\">
                <!-- Rights-->
                <p class=\"rights\"><span>Arch company</span><span>&nbsp;&copy;&nbsp;</span><span class=\"copyright-year\"></span>.&nbsp;<br class=\"d-sm-none\"><a class=\"link-underline\" href=\"privacy-policy.html\">Privacy Policy</a></p>
              </div>
              <div class=\"col-md-6 text-md-right\">
                <ul class=\"list-inline-xxs\">
                  <li>
                    <p>Follow Us</p>
                  </li>
                  <li><a class=\"icon icon-xs icon-style-modern fa fa-twitter\" href=\"#\"></a></li>
                  <li><a class=\"icon icon-xs icon-style-modern fa fa-facebook\" href=\"#\"></a></li>
                  <li><a class=\"icon icon-xs icon-style-modern fa fa-instagram\" href=\"#\"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class=\"snackbars\" id=\"form-output-global\"></div>
    <!-- Javascript-->
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 109
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 110
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 110,  306 => 109,  292 => 224,  288 => 223,  235 => 173,  225 => 166,  221 => 165,  165 => 111,  163 => 109,  149 => 98,  144 => 96,  93 => 48,  89 => 47,  63 => 24,  51 => 15,  47 => 14,  43 => 13,  37 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"wide wow-animation\" lang=\"en\">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <link rel=\"icon\" href=\"{{asset('assets/images/favicon.ico')}}\" type=\"image/x-icon\">
    <!-- Stylesheets-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/fonts.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
  </head>
  <body>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <div class=\"ie-panel\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"images/ie8-panel/warning_bar_0000_us.jpg\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <!-- Page Loader-->
    <div class=\"preloader\" id=\"preloader\">
      <div class=\"page-loader-logo\">
        <div class=\"brand\">
          <div class=\"brand__name\"><img src=\"{{asset('assets/images/logo-default-134x49.png')}}\" alt=\"\" width=\"134\" height=\"49\"/>
          </div>
        </div>
      </div>
      <div class=\"page-loader-body\">
        <div id=\"loadingProgressG\">
          <div class=\"loadingProgressG\" id=\"loadingProgressG_1\"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class=\"page\">
      <!-- Page Header-->
      <header class=\"page-header section\">
        <!-- RD Navbar-->
        <div class=\"rd-navbar-wrap\">
          <nav class=\"rd-navbar\" data-layout=\"rd-navbar-fixed\" data-sm-layout=\"rd-navbar-fixed\" data-sm-device-layout=\"rd-navbar-fixed\" data-md-layout=\"rd-navbar-fixed\" data-md-device-layout=\"rd-navbar-fixed\" data-lg-device-layout=\"rd-navbar-fixed\" data-lg-layout=\"rd-navbar-static\" data-xl-device-layout=\"rd-navbar-static\" data-xl-layout=\"rd-navbar-static\" data-xxl-device-layout=\"rd-navbar-static\" data-xxl-layout=\"rd-navbar-static\" data-stick-up-clone=\"false\" data-md-stick-up-offset=\"113px\" data-lg-stick-up-offset=\"138px\" data-xl-stick-up-offset=\"138px\" data-md-stick-up=\"true\" data-lg-stick-up=\"true\" data-xl-stick-up=\"true\">
            <div class=\"rd-navbar-aside-outer\">
              <div class=\"rd-navbar-aside\">
                <!-- RD Navbar Panel -->
                <div class=\"rd-navbar-panel\">
                  <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar-nav-wrap\"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class=\"rd-navbar-brand\"><a class=\"brand\" href=\"{{path('homepage')}}\">
                      <div class=\"brand__name\"><img src=\"{{asset('assets/images/logo-default-134x49.png')}}\" alt=\"\" width=\"134\" height=\"49\"/>
                      </div></a></div>
                </div>
                <!-- RD Navbar Content-->
                <div class=\"rd-navbar-content-outer\">
                  <div class=\"rd-navbar-content__toggle rd-navbar-static--hidden\" data-rd-navbar-toggle=\".rd-navbar-content\"><span></span></div>
                  <div class=\"rd-navbar-content\">
                    <ul class=\"rd-navbar-items-list\">
                      <li>
                        <div class=\"unit unit-spacing-sm flex-row align-items-center\">
                          <div class=\"unit__left\"><span class=\"icon icon-md icon-primary fl-bigmug-line-trophy55\"></span></div>
                          <div class=\"unit__body\">
                            <p>#1 International <br> Architecture Company</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"unit unit-spacing-sm flex-row align-items-center\">
                          <div class=\"unit__left\"><span class=\"icon icon-md icon-primary fl-bigmug-line-circular220\"></span></div>
                          <div class=\"unit__body\">
                            <p>Certified <br> ISO 9001:2008</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class=\"rd-navbar-content__item\"><a class=\"button button-xs button-lighter\" href=\"contacts.html\">Get a quote</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"rd-navbar-main-outer\">
              <div class=\"rd-navbar-main\">
                <!-- RD Navbar Nav -->
                <div class=\"rd-navbar-nav-wrap\">
                  <!-- RD Navbar Search-->
                  <div class=\"rd-navbar-search rd-navbar-search-toggled\">
                    <button class=\"rd-navbar-search-toggle\" data-rd-navbar-toggle=\".rd-navbar-search\"></button>
                    <form class=\"rd-search\" action=\"search-results.html\" data-search-live=\"rd-search-results-live\" method=\"GET\">
                      <div class=\"form-wrap\">
                        <input class=\"form-input\" id=\"rd-navbar-search-form-input\" type=\"text\" name=\"s\" autocomplete=\"off\">
                        <label class=\"form-label\" for=\"rd-navbar-search-form-input\">Search...</label>
                      </div>
                      <button class=\"rd-navbar-search-submit\" type=\"submit\"></button>
                      <div class=\"rd-search-results-live\" id=\"rd-search-results-live\"></div>
                    </form>
                  </div>
                  <!-- RD Navbar Nav-->
                  <ul class=\"rd-navbar-nav\">
                    <li class=\"active\"><a href=\"{{path('homepage')}}\">Home</a>
                    </li>
                    <li><a href=\"{{path('about_us')}}\">Acerca de Nosotros</a></li>
                    <li><a href=\"contacts.html\">Cont&aacute;ctanos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper -->
      {%block content%}
      {%endblock%}
      <!-- Page Footer-->
      <footer class=\"section footer-modern bg-gray-darker\">
        <div class=\"footer-modern__inner\">
          <div class=\"container\">
            <div class=\"row justify-content-sm-center row-90\">
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <!-- Box decorated-->
                <article class=\"box-decorated\">
                  <h4 class=\"box-decorated__title\">Call Us Now</h4>
                  <dl class=\"list-terms-inline\">
                    <dt>Phone #1</dt>
                    <dd><a href=\"tel:#\">+1 (409) 987–5874</a></dd>
                  </dl>
                  <dl class=\"list-terms-inline\">
                    <dt>Phone #2</dt>
                    <dd><a href=\"tel:#\">+1 (409) 123–3434</a></dd>
                  </dl>
                </article>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <!-- Box decorated-->
                <article class=\"box-decorated\">
                  <h4 class=\"box-decorated__title\">Send a Message</h4>
                  <dl class=\"list-terms-inline\">
                    <dt>Sales department</dt>
                    <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                  </dl>
                  <dl class=\"list-terms-inline\">
                    <dt>Support</dt>
                    <dd><a href=\"mailto:#\">support@demolink.org</a></dd>
                  </dl>
                </article>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <!-- Box decorated-->
                <article class=\"box-decorated\">
                  <h4 class=\"box-decorated__title\">Main Office</h4>
                  <p>6036 Richmond hwy., Alexandria, VA, 2230</p>
                  <ul class=\"list-inline-0\">
                    <li>
                      <dl class=\"list-terms-inline\">
                        <dt>Weekdays</dt>
                        <dd>8:00–20:00</dd>
                      </dl>
                    </li>
                    <li>
                      <dl class=\"list-terms-inline\">
                        <dt>Weekends</dt>
                        <dd>Closed</dd>
                      </dl>
                    </li>
                  </ul>
                </article>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\"><a class=\"brand\" href=\"{{path('homepage')}}\">
                  <div class=\"brand__name\"><img src=\"{{asset('assets/images/logo-inverse-134x49.png')}}\" alt=\"\" width=\"134\" height=\"49\"/>
                  </div></a>
                <p class=\"text-small\">ARCH company is a diversified global architecture company that brings best designers and architects together.</p>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <h4 class=\"heading-decorated\">Useful Links</h4>
                <ul class=\"list-nav\">
                  <li><a href=\"{{path('homepage')}}\">Home</a></li>
                  <li><a href=\"about-us.html\">About us</a>
                  </li>
                  <li><a href=\"invest.html\">Invest</a>
                  </li>
                  <li><a href=\"portfolio.html\">Portfolio</a>
                  </li>
                  <li><a href=\"#\">Media</a></li>
                  <li><a href=\"careers.html\">Careers</a>
                  </li>
                </ul>
              </div>
              <div class=\"col-sm-10 col-md-6 col-lg-4\">
                <h4 class=\"heading-decorated\">Subscribe Now</h4>
                <!-- RD Mailform-->
                <form class=\"rd-mailform rd-mailform_sm rd-mailform_inline\" data-form-output=\"form-output-global\" data-form-type=\"subscribe\" method=\"post\" action=\"bat/rd-mailform.php\">
                  <div class=\"form-wrap\">
                    <input class=\"form-input\" id=\"footer-form-subscribe-email\" type=\"email\" name=\"email\" data-constraints=\"@Email @Required\">
                    <label class=\"form-label\" for=\"footer-form-subscribe-email\">Enter Your E-mail</label>
                  </div>
                  <button class=\"button button-primary\" type=\"submit\">Send</button>
                </form>
              </div>
            </div>
          </div>
          <div class=\"divider\"></div>
          <div class=\"container text-center\">
            <div class=\"row row-20\">
              <div class=\"col-md-6 text-md-left\">
                <!-- Rights-->
                <p class=\"rights\"><span>Arch company</span><span>&nbsp;&copy;&nbsp;</span><span class=\"copyright-year\"></span>.&nbsp;<br class=\"d-sm-none\"><a class=\"link-underline\" href=\"privacy-policy.html\">Privacy Policy</a></p>
              </div>
              <div class=\"col-md-6 text-md-right\">
                <ul class=\"list-inline-xxs\">
                  <li>
                    <p>Follow Us</p>
                  </li>
                  <li><a class=\"icon icon-xs icon-style-modern fa fa-twitter\" href=\"#\"></a></li>
                  <li><a class=\"icon icon-xs icon-style-modern fa fa-facebook\" href=\"#\"></a></li>
                  <li><a class=\"icon icon-xs icon-style-modern fa fa-instagram\" href=\"#\"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class=\"snackbars\" id=\"form-output-global\"></div>
    <!-- Javascript-->
    <script src=\"{{asset('assets/js/core.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/script.js')}}\"></script>
  </body>
</html>
", "AppBundle::template.html.twig", "/Library/WebServer/Documents/sensores2/src/AppBundle/Resources/views/template.html.twig");
    }
}
