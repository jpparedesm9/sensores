<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_ac6bef112f370a6522f2f66b2d5343af0d0d35f7223bc74413d15eb8bcd5bb60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::template.html.twig", "AppBundle:Home:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

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
        echo "      <section class=\"section swiper-slider_style-1\">
        <div class=\"swiper-container swiper-slider swiper-slider_height-1\" data-loop=\"true\" data-autoplay=\"4200\" data-simulate-touch=\"false\" data-additional-slides=\"0\" data-custom-prev=\"#swiper-prev\" data-custom-next=\"#swiper-next\" data-custom-slide-effect=\"interLeaveEffect\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide context-light\">
              <div class=\"slide-inner\" style=\"background-image: url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider-1-slide-1-1920x749.jpg"), "html", null, true);
        echo ");\">
                <div class=\"swiper-slide-caption\">
                  <div class=\"container\">
                    <h1 data-caption-animate=\"fadeInUpSmall\">Welcome to <br> ARCH Company</h1>
                    <div class=\"object-decorated\"><span class=\"object-decorated__divider\" data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"300\"></span>
                      <h4 data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"550\">Leading Architecture Solutions Provider</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"slide-inner\" style=\"background-image: url(";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider-1-slide-2-1920x749.jpg"), "html", null, true);
        echo ");\">
                <div class=\"swiper-slide-caption\">
                  <div class=\"container\">
                    <h1 data-caption-animate=\"fadeInUpSmall\">Designing Your <br> Daily Comfort</h1>
                    <div class=\"object-decorated\"><span class=\"object-decorated__divider\" data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"300\"></span>
                      <h4 data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"550\">Top-notch Architecture Services</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"slide-inner\" style=\"background-image: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider-1-slide-3-1920x749.jpg"), "html", null, true);
        echo ");\">
                <div class=\"swiper-slide-caption\">
                  <div class=\"container\">
                    <h1 data-caption-animate=\"fadeInUpSmall\">Creating Stunning <br> Architecture</h1>
                    <div class=\"object-decorated\"><span class=\"object-decorated__divider\" data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"300\"></span>
                      <h4 data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"550\">100% High Quality Guarantee</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
        <div class=\"swiper-navigation swiper-navigation_modern\">
          <div class=\"swiper-button-prev\" id=\"swiper-prev\"></div>
          <div class=\"swiper-button-next\" id=\"swiper-next\"></div>
        </div>
      </section>

      <!-- Production-->
      <section class=\"section section-md bg-default\">
        <div class=\"container\">
          <div class=\"row row-30 row-flex\">
            <div class=\"col-lg-3 col-sm-6 wow fadeIn\">
              <!-- Box feature-->
              <article class=\"box-feature\">
                <div class=\"box-feature__icon linearicons-pencil-ruler2\"></div>
                <p class=\"box-feature__title\">Project Planning</p>
              </article>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeIn\" data-wow-delay=\".1s\">
              <!-- Box feature-->
              <article class=\"box-feature\">
                <div class=\"box-feature__icon linearicons-pencil-ruler\"></div>
                <p class=\"box-feature__title\">Architecture Engineering</p>
              </article>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeIn\" data-wow-delay=\".2s\">
              <!-- Box feature-->
              <article class=\"box-feature\">
                <div class=\"box-feature__icon linearicons-tree\"></div>
                <p class=\"box-feature__title\">Landscape Design</p>
              </article>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeIn\" data-wow-delay=\".3s\">
              <!-- Box feature-->
              <article class=\"box-feature\">
                <div class=\"box-feature__icon linearicons-apartment\"></div>
                <p class=\"box-feature__title\">Turnkey Construction</p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Experience since 1999-->
      <section class=\"section section-md bg-gray-4\">
        <div class=\"container\">
          <div class=\"row row-50 justify-content-md-center flex-lg-row-reverse justify-content-lg-between align-items-lg-center\">
            <div class=\"col-md-10 col-lg-6 col-xl-5 wow fadeInRight\">
              <div class=\"block-wrap-1\">
                <h2><span>Experience</span><span class=\"object-decorated object-decorated_inline\" style=\"max-width: 125px;\"><span class=\"object-decorated__divider\"></span><span class=\"heading-5\">since 1999</span></span></h2>
                <p>Our company has been the leading provider of architecture services to clients inside and outside of the USA since 1999. We pay attention to every demand of our customers.</p>
                <div class=\"group-lg group-middle\"><a class=\"button button-primary\" href=\"contacts.html\">get a quote</a>
                  <div>
                    <div class=\"unit flex-row align-items-center unit-spacing-xs\">
                      <div class=\"unit__left\" style=\"font-size: 0;\"><a class=\"link link-video\" href=\"//vimeo.com/160237084\" data-lightbox=\"iframe\"></a></div>
                      <div class=\"unit__body\">
                        <h5>Video <br> Presentation</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-10 col-lg-6 wow fadeInLeft\">
              <div class=\"grid-layout-2x2\">
                <div class=\"grid-item\">
                  <!-- Box counter-->
                  <article class=\"box-counter-modern\">
                    <div class=\"box-counter-modern__wrap\">
                      <div class=\"counter\" data-zero=\"true\">17</div>
                    </div>
                    <p class=\"box-counter-modern__title\">Years of experience</p>
                  </article>
                </div>
                <div class=\"grid-item\">
                  <!-- Box counter-->
                  <article class=\"box-counter-modern\">
                    <div class=\"box-counter-modern__wrap\">
                      <div class=\"counter\" data-zero=\"true\">96</div>
                    </div>
                    <p class=\"box-counter-modern__title\">Happy clients</p>
                  </article>
                </div>
                <div class=\"grid-item\">
                  <!-- Box counter-->
                  <article class=\"box-counter-modern\">
                    <div class=\"box-counter-modern__wrap\"><span>#</span><span class=\"big\">01</span></div>
                    <p class=\"box-counter-modern__title\">Architecture company</p>
                  </article>
                </div>
                <div class=\"grid-item\">
                  <!-- Box counter-->
                  <article class=\"box-counter-modern\">
                    <div class=\"box-counter-modern__wrap\">
                      <div class=\"counter\" data-zero=\"true\">264</div>
                    </div>
                    <p class=\"box-counter-modern__title\">Successful projects</p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Projects-->
      <section class=\"section section-md bg-default text-center\">
        <div class=\"container-fullwidth\">
          <h2>Our Projects</h2>
          <!-- Owl Carousel-->
          <div class=\"owl-carousel owl-carousel_style-2 wow fadeIn\" data-items=\"1\" data-sm-items=\"2\" data-lg-items=\"3\" data-xl-items=\"4\" data-dots=\"false\" data-nav=\"true\" data-loop=\"true\" data-stage-padding=\"0\" data-md-stage-padding=\"20\" data-lg-stage-padding=\"0\" data-md-margin=\"15\" data-xl-margin=\"0\" data-mouse-drag=\"false\">
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/project-1-481x383.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Star Cafe</a></h5>
                  <p>This project was designed and constructed by our architects last summer. Now it is one of the best cafes.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/project-2-481x383.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Art Museum</a></h5>
                  <p>Our team has redesigned and improved this museum’s exterior in less than a month two years ago.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/project-3-481x383.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Local Airport</a></h5>
                  <p>ARCH has worked on this airport reconstruction together with our partners in spring 2010.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/project-4-481x383.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Business Center</a></h5>
                  <p>Our team was hired to work on a new exterior and interior design of Hearst Business Center in March 2012.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/project-5-481x383.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Community Center</a></h5>
                  <p>Our architects have recently finished working on exterior of well-known LA Community & Youth Center.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials-->
      <section class=\"section section-md bg-default text-center\">
        <div class=\"container\">
          <h2>Testimonials</h2>
          <div class=\"row row-50\">
            <div class=\"col-md-6 col-lg-4 wow fadeInUpSmall\">
                    <!-- Quote creative-->
                    <article class=\"quote-creative\">
                      <div class=\"quote-creative__header\">
                        <div class=\"quote-creative__image-wrap\"><img class=\"quote-creative__image\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/testimonials-1-88x88.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"88\" height=\"88\"/>
                        </div>
                      </div>
                      <div class=\"quote-creative__main\">
                        <p class=\"q\">We selected ARCH because of their architects’ rigorous design background and education. They exceeded our expectations and emerged as leaders of our project.</p>
                        <ul class=\"quote-creative__meta\">
                          <li><span class=\"cite\">Jeffrey Neddery</span></li>
                          <li><span class=\"small\">Regular Client</span></li>
                        </ul>
                      </div>
                    </article>
            </div>
            <div class=\"col-md-6 col-lg-4 wow fadeInUpSmall\" data-wow-delay=\".2s\">
                    <!-- Quote creative-->
                    <article class=\"quote-creative\">
                      <div class=\"quote-creative__header\">
                        <div class=\"quote-creative__image-wrap\"><img class=\"quote-creative__image\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/testimonials-2-88x88.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"88\" height=\"88\"/>
                        </div>
                      </div>
                      <div class=\"quote-creative__main\">
                        <p class=\"q\">When we needed design and architecture specialists, your team was there for us. You took all our ideas and demands into consideration and made a great project.</p>
                        <ul class=\"quote-creative__meta\">
                          <li><span class=\"cite\">Sam Smith</span></li>
                          <li><span class=\"small\">Regular Client</span></li>
                        </ul>
                      </div>
                    </article>
            </div>
            <div class=\"col-md-6 col-lg-4 wow fadeInUpSmall\" data-wow-delay=\".3s\">
                    <!-- Quote creative-->
                    <article class=\"quote-creative\">
                      <div class=\"quote-creative__header\">
                        <div class=\"quote-creative__image-wrap\"><img class=\"quote-creative__image\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/testimonials-3-88x88.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"88\" height=\"88\"/>
                        </div>
                      </div>
                      <div class=\"quote-creative__main\">
                        <p class=\"q\">I have worked with many architecture companies offering design &amp; construction services, and out of all you were one who really stood out from the rest.</p>
                        <ul class=\"quote-creative__meta\">
                          <li><span class=\"cite\">Ann Peters</span></li>
                          <li><span class=\"small\">Regular Client</span></li>
                        </ul>
                      </div>
                    </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Brands-->
      <section class=\"section parallax-container\" data-parallax-img=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/parallax-1.jpg"), "html", null, true);
        echo "\">
        <div class=\"parallax-content\">
          <div class=\"section-sm owl-outer-navigation-wrap\">
            <div class=\"container\">
              <!-- Owl Carousel-->
              <div class=\"owl-carousel owl-carousel_style-1 text-center\" data-items=\"1\" data-sm-items=\"2\" data-md-items=\"3\" data-lg-items=\"4\" data-dots=\"true\" data-nav=\"true\" data-stage-padding=\"15\" data-loop=\"true\" data-margin=\"30\" data-mouse-drag=\"false\" data-nav-custom=\"#owl-carousel-nav\">
                <div class=\"item\"><a class=\"link-image\" href=\"#\"><img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brand-1-156x45.png"), "html", null, true);
        echo "\" alt=\"\" width=\"156\" height=\"45\"/></a></div>
                <div class=\"item\"><a class=\"link-image\" href=\"#\"><img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brand-2-126x69.png"), "html", null, true);
        echo "\" alt=\"\" width=\"126\" height=\"69\"/></a></div>
                <div class=\"item\"><a class=\"link-image\" href=\"#\"><img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brand-3-150x36.png"), "html", null, true);
        echo "\" alt=\"\" width=\"150\" height=\"36\"/></a></div>
                <div class=\"item\"><a class=\"link-image\" href=\"#\"><img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brand-4-130x45.png"), "html", null, true);
        echo "\" alt=\"\" width=\"130\" height=\"45\"/></a></div>
              </div>
            </div>
            <div class=\"owl-outer-navigation\" id=\"owl-carousel-nav\"><a class=\"owl-arrow owl-arrow-prev fl-budicons-free-left161\" href=\"#\"></a><a class=\"owl-arrow owl-arrow-next fl-budicons-free-right163\" href=\"#\"></a></div>
          </div>
        </div>
      </section>


      <!-- Latest News-->
      <section class=\"section section-md bg-default\">
        <div class=\"container\">
          <!-- Section Header-->
          <div class=\"section__header\">
            <h4>Latest News</h4>
            <div class=\"section__header-element\"><a class=\"link link-md\" href=\"#\">See All News</a></div>
          </div>
          <div class=\"row row-50\">
            <div class=\"col-md-6 col-lg-4 wow fadeInRightSmall\">
              <!-- Post minimal-->
              <article class=\"post-minimal\">
                <time class=\"post-minimal__time\" datetime=\"2018\">April 13, 2018</time>
                <div class=\"post-minimal__divider\"></div>
                <h6 class=\"post-minimal__title\"><a href=\"single-post.html\">How Art Influences Modern Architecture Projects</a></h6>
                <p>Looking through our recent, impactful projects, we set out to ask the designers...</p><a class=\"button button-xs button-lighter\" href=\"single-post.html\">read more</a>
              </article>
            </div>
            <div class=\"col-md-6 col-lg-4 wow fadeInRightSmall\" data-wow-delay=\".1s\">
              <!-- Post minimal-->
              <article class=\"post-minimal\">
                <time class=\"post-minimal__time\" datetime=\"2018\">March 25, 2018</time>
                <div class=\"post-minimal__divider\"></div>
                <h6 class=\"post-minimal__title\"><a href=\"single-post.html\">Workplace Design: Integrating the Company Logo</a></h6>
                <p>In recent years advanced materials have emerged and are having a major impact on...</p><a class=\"button button-xs button-lighter\" href=\"single-post.html\">read more</a>
              </article>
            </div>
            <div class=\"col-md-6 col-lg-4 wow fadeInRightSmall\" data-wow-delay=\".2s\">
              <!-- Post minimal-->
              <article class=\"post-minimal\">
                <time class=\"post-minimal__time\" datetime=\"2018\">February 1, 2018</time>
                <div class=\"post-minimal__divider\"></div>
                <h6 class=\"post-minimal__title\"><a href=\"single-post.html\">Committing to the Future of Interior Architecture</a></h6>
                <p>Installations are often a practically invisible part of a building. Miles of...</p><a class=\"button button-xs button-lighter\" href=\"single-post.html\">read more</a>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- RD Google Map-->
      <section class=\"section\">
        <div class=\"google-map-container\" data-zoom=\"4\" data-center=\"6036 Richmond hwy., Alexandria, VA, 2230\" data-styles=\"[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]\">
          <div class=\"google-map\"></div>
          <ul class=\"google-map-markers\">
            <li data-location=\"6036 Richmond hwy., Alexandria, VA, 2230\" data-description=\"6036 Richmond hwy., Alexandria, VA, 2230\" data-icon=\"images/gmap_marker.png\" data-icon-active=\"images/gmap_marker_active.png\"></li>
          </ul>
        </div>
      </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 276,  365 => 275,  361 => 274,  357 => 273,  348 => 267,  328 => 250,  309 => 234,  290 => 218,  265 => 196,  252 => 186,  239 => 176,  226 => 166,  213 => 156,  85 => 31,  70 => 19,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
      <section class=\"section swiper-slider_style-1\">
        <div class=\"swiper-container swiper-slider swiper-slider_height-1\" data-loop=\"true\" data-autoplay=\"4200\" data-simulate-touch=\"false\" data-additional-slides=\"0\" data-custom-prev=\"#swiper-prev\" data-custom-next=\"#swiper-next\" data-custom-slide-effect=\"interLeaveEffect\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide context-light\">
              <div class=\"slide-inner\" style=\"background-image: url({{asset('assets/images/slider-1-slide-1-1920x749.jpg')}});\">
                <div class=\"swiper-slide-caption\">
                  <div class=\"container\">
                    <h1 data-caption-animate=\"fadeInUpSmall\">Welcome to <br> ARCH Company</h1>
                    <div class=\"object-decorated\"><span class=\"object-decorated__divider\" data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"300\"></span>
                      <h4 data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"550\">Leading Architecture Solutions Provider</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"slide-inner\" style=\"background-image: url({{asset('assets/images/slider-1-slide-2-1920x749.jpg')}});\">
                <div class=\"swiper-slide-caption\">
                  <div class=\"container\">
                    <h1 data-caption-animate=\"fadeInUpSmall\">Designing Your <br> Daily Comfort</h1>
                    <div class=\"object-decorated\"><span class=\"object-decorated__divider\" data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"300\"></span>
                      <h4 data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"550\">Top-notch Architecture Services</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"slide-inner\" style=\"background-image: url({{asset('assets/images/slider-1-slide-3-1920x749.jpg')}});\">
                <div class=\"swiper-slide-caption\">
                  <div class=\"container\">
                    <h1 data-caption-animate=\"fadeInUpSmall\">Creating Stunning <br> Architecture</h1>
                    <div class=\"object-decorated\"><span class=\"object-decorated__divider\" data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"300\"></span>
                      <h4 data-caption-animate=\"fadeInRightSmall\" data-caption-delay=\"550\">100% High Quality Guarantee</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
        <div class=\"swiper-navigation swiper-navigation_modern\">
          <div class=\"swiper-button-prev\" id=\"swiper-prev\"></div>
          <div class=\"swiper-button-next\" id=\"swiper-next\"></div>
        </div>
      </section>

      <!-- Production-->
      <section class=\"section section-md bg-default\">
        <div class=\"container\">
          <div class=\"row row-30 row-flex\">
            <div class=\"col-lg-3 col-sm-6 wow fadeIn\">
              <!-- Box feature-->
              <article class=\"box-feature\">
                <div class=\"box-feature__icon linearicons-pencil-ruler2\"></div>
                <p class=\"box-feature__title\">Project Planning</p>
              </article>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeIn\" data-wow-delay=\".1s\">
              <!-- Box feature-->
              <article class=\"box-feature\">
                <div class=\"box-feature__icon linearicons-pencil-ruler\"></div>
                <p class=\"box-feature__title\">Architecture Engineering</p>
              </article>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeIn\" data-wow-delay=\".2s\">
              <!-- Box feature-->
              <article class=\"box-feature\">
                <div class=\"box-feature__icon linearicons-tree\"></div>
                <p class=\"box-feature__title\">Landscape Design</p>
              </article>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeIn\" data-wow-delay=\".3s\">
              <!-- Box feature-->
              <article class=\"box-feature\">
                <div class=\"box-feature__icon linearicons-apartment\"></div>
                <p class=\"box-feature__title\">Turnkey Construction</p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Experience since 1999-->
      <section class=\"section section-md bg-gray-4\">
        <div class=\"container\">
          <div class=\"row row-50 justify-content-md-center flex-lg-row-reverse justify-content-lg-between align-items-lg-center\">
            <div class=\"col-md-10 col-lg-6 col-xl-5 wow fadeInRight\">
              <div class=\"block-wrap-1\">
                <h2><span>Experience</span><span class=\"object-decorated object-decorated_inline\" style=\"max-width: 125px;\"><span class=\"object-decorated__divider\"></span><span class=\"heading-5\">since 1999</span></span></h2>
                <p>Our company has been the leading provider of architecture services to clients inside and outside of the USA since 1999. We pay attention to every demand of our customers.</p>
                <div class=\"group-lg group-middle\"><a class=\"button button-primary\" href=\"contacts.html\">get a quote</a>
                  <div>
                    <div class=\"unit flex-row align-items-center unit-spacing-xs\">
                      <div class=\"unit__left\" style=\"font-size: 0;\"><a class=\"link link-video\" href=\"//vimeo.com/160237084\" data-lightbox=\"iframe\"></a></div>
                      <div class=\"unit__body\">
                        <h5>Video <br> Presentation</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-10 col-lg-6 wow fadeInLeft\">
              <div class=\"grid-layout-2x2\">
                <div class=\"grid-item\">
                  <!-- Box counter-->
                  <article class=\"box-counter-modern\">
                    <div class=\"box-counter-modern__wrap\">
                      <div class=\"counter\" data-zero=\"true\">17</div>
                    </div>
                    <p class=\"box-counter-modern__title\">Years of experience</p>
                  </article>
                </div>
                <div class=\"grid-item\">
                  <!-- Box counter-->
                  <article class=\"box-counter-modern\">
                    <div class=\"box-counter-modern__wrap\">
                      <div class=\"counter\" data-zero=\"true\">96</div>
                    </div>
                    <p class=\"box-counter-modern__title\">Happy clients</p>
                  </article>
                </div>
                <div class=\"grid-item\">
                  <!-- Box counter-->
                  <article class=\"box-counter-modern\">
                    <div class=\"box-counter-modern__wrap\"><span>#</span><span class=\"big\">01</span></div>
                    <p class=\"box-counter-modern__title\">Architecture company</p>
                  </article>
                </div>
                <div class=\"grid-item\">
                  <!-- Box counter-->
                  <article class=\"box-counter-modern\">
                    <div class=\"box-counter-modern__wrap\">
                      <div class=\"counter\" data-zero=\"true\">264</div>
                    </div>
                    <p class=\"box-counter-modern__title\">Successful projects</p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Projects-->
      <section class=\"section section-md bg-default text-center\">
        <div class=\"container-fullwidth\">
          <h2>Our Projects</h2>
          <!-- Owl Carousel-->
          <div class=\"owl-carousel owl-carousel_style-2 wow fadeIn\" data-items=\"1\" data-sm-items=\"2\" data-lg-items=\"3\" data-xl-items=\"4\" data-dots=\"false\" data-nav=\"true\" data-loop=\"true\" data-stage-padding=\"0\" data-md-stage-padding=\"20\" data-lg-stage-padding=\"0\" data-md-margin=\"15\" data-xl-margin=\"0\" data-mouse-drag=\"false\">
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"{{asset('assets/images/project-1-481x383.jpg')}}\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Star Cafe</a></h5>
                  <p>This project was designed and constructed by our architects last summer. Now it is one of the best cafes.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"{{asset('assets/images/project-2-481x383.jpg')}}\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Art Museum</a></h5>
                  <p>Our team has redesigned and improved this museum’s exterior in less than a month two years ago.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"{{asset('assets/images/project-3-481x383.jpg')}}\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Local Airport</a></h5>
                  <p>ARCH has worked on this airport reconstruction together with our partners in spring 2010.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"{{asset('assets/images/project-4-481x383.jpg')}}\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Business Center</a></h5>
                  <p>Our team was hired to work on a new exterior and interior design of Hearst Business Center in March 2012.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
            <div class=\"thumb-janez\">
              <figure class=\"thumb-janez__image-wrap\"><img src=\"{{asset('assets/images/project-5-481x383.jpg')}}\" alt=\"\" width=\"481\" height=\"383\"/>
              </figure>
              <div class=\"thumb-janez__content bg-gray-dark\">
                <div class=\"thumb-janez__content-inner\">
                  <h5><a href=\"#\">Community Center</a></h5>
                  <p>Our architects have recently finished working on exterior of well-known LA Community & Youth Center.</p><a class=\"button button-xs button-darker\" href=\"#\">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials-->
      <section class=\"section section-md bg-default text-center\">
        <div class=\"container\">
          <h2>Testimonials</h2>
          <div class=\"row row-50\">
            <div class=\"col-md-6 col-lg-4 wow fadeInUpSmall\">
                    <!-- Quote creative-->
                    <article class=\"quote-creative\">
                      <div class=\"quote-creative__header\">
                        <div class=\"quote-creative__image-wrap\"><img class=\"quote-creative__image\" src=\"{{asset('assets/images/testimonials-1-88x88.jpg')}}\" alt=\"\" width=\"88\" height=\"88\"/>
                        </div>
                      </div>
                      <div class=\"quote-creative__main\">
                        <p class=\"q\">We selected ARCH because of their architects’ rigorous design background and education. They exceeded our expectations and emerged as leaders of our project.</p>
                        <ul class=\"quote-creative__meta\">
                          <li><span class=\"cite\">Jeffrey Neddery</span></li>
                          <li><span class=\"small\">Regular Client</span></li>
                        </ul>
                      </div>
                    </article>
            </div>
            <div class=\"col-md-6 col-lg-4 wow fadeInUpSmall\" data-wow-delay=\".2s\">
                    <!-- Quote creative-->
                    <article class=\"quote-creative\">
                      <div class=\"quote-creative__header\">
                        <div class=\"quote-creative__image-wrap\"><img class=\"quote-creative__image\" src=\"{{asset('assets/images/testimonials-2-88x88.jpg')}}\" alt=\"\" width=\"88\" height=\"88\"/>
                        </div>
                      </div>
                      <div class=\"quote-creative__main\">
                        <p class=\"q\">When we needed design and architecture specialists, your team was there for us. You took all our ideas and demands into consideration and made a great project.</p>
                        <ul class=\"quote-creative__meta\">
                          <li><span class=\"cite\">Sam Smith</span></li>
                          <li><span class=\"small\">Regular Client</span></li>
                        </ul>
                      </div>
                    </article>
            </div>
            <div class=\"col-md-6 col-lg-4 wow fadeInUpSmall\" data-wow-delay=\".3s\">
                    <!-- Quote creative-->
                    <article class=\"quote-creative\">
                      <div class=\"quote-creative__header\">
                        <div class=\"quote-creative__image-wrap\"><img class=\"quote-creative__image\" src=\"{{asset('assets/images/testimonials-3-88x88.jpg')}}\" alt=\"\" width=\"88\" height=\"88\"/>
                        </div>
                      </div>
                      <div class=\"quote-creative__main\">
                        <p class=\"q\">I have worked with many architecture companies offering design &amp; construction services, and out of all you were one who really stood out from the rest.</p>
                        <ul class=\"quote-creative__meta\">
                          <li><span class=\"cite\">Ann Peters</span></li>
                          <li><span class=\"small\">Regular Client</span></li>
                        </ul>
                      </div>
                    </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Brands-->
      <section class=\"section parallax-container\" data-parallax-img=\"{{asset('assets/images/parallax-1.jpg')}}\">
        <div class=\"parallax-content\">
          <div class=\"section-sm owl-outer-navigation-wrap\">
            <div class=\"container\">
              <!-- Owl Carousel-->
              <div class=\"owl-carousel owl-carousel_style-1 text-center\" data-items=\"1\" data-sm-items=\"2\" data-md-items=\"3\" data-lg-items=\"4\" data-dots=\"true\" data-nav=\"true\" data-stage-padding=\"15\" data-loop=\"true\" data-margin=\"30\" data-mouse-drag=\"false\" data-nav-custom=\"#owl-carousel-nav\">
                <div class=\"item\"><a class=\"link-image\" href=\"#\"><img src=\"{{asset('assets/images/brand-1-156x45.png')}}\" alt=\"\" width=\"156\" height=\"45\"/></a></div>
                <div class=\"item\"><a class=\"link-image\" href=\"#\"><img src=\"{{asset('assets/images/brand-2-126x69.png')}}\" alt=\"\" width=\"126\" height=\"69\"/></a></div>
                <div class=\"item\"><a class=\"link-image\" href=\"#\"><img src=\"{{asset('assets/images/brand-3-150x36.png')}}\" alt=\"\" width=\"150\" height=\"36\"/></a></div>
                <div class=\"item\"><a class=\"link-image\" href=\"#\"><img src=\"{{asset('assets/images/brand-4-130x45.png')}}\" alt=\"\" width=\"130\" height=\"45\"/></a></div>
              </div>
            </div>
            <div class=\"owl-outer-navigation\" id=\"owl-carousel-nav\"><a class=\"owl-arrow owl-arrow-prev fl-budicons-free-left161\" href=\"#\"></a><a class=\"owl-arrow owl-arrow-next fl-budicons-free-right163\" href=\"#\"></a></div>
          </div>
        </div>
      </section>


      <!-- Latest News-->
      <section class=\"section section-md bg-default\">
        <div class=\"container\">
          <!-- Section Header-->
          <div class=\"section__header\">
            <h4>Latest News</h4>
            <div class=\"section__header-element\"><a class=\"link link-md\" href=\"#\">See All News</a></div>
          </div>
          <div class=\"row row-50\">
            <div class=\"col-md-6 col-lg-4 wow fadeInRightSmall\">
              <!-- Post minimal-->
              <article class=\"post-minimal\">
                <time class=\"post-minimal__time\" datetime=\"2018\">April 13, 2018</time>
                <div class=\"post-minimal__divider\"></div>
                <h6 class=\"post-minimal__title\"><a href=\"single-post.html\">How Art Influences Modern Architecture Projects</a></h6>
                <p>Looking through our recent, impactful projects, we set out to ask the designers...</p><a class=\"button button-xs button-lighter\" href=\"single-post.html\">read more</a>
              </article>
            </div>
            <div class=\"col-md-6 col-lg-4 wow fadeInRightSmall\" data-wow-delay=\".1s\">
              <!-- Post minimal-->
              <article class=\"post-minimal\">
                <time class=\"post-minimal__time\" datetime=\"2018\">March 25, 2018</time>
                <div class=\"post-minimal__divider\"></div>
                <h6 class=\"post-minimal__title\"><a href=\"single-post.html\">Workplace Design: Integrating the Company Logo</a></h6>
                <p>In recent years advanced materials have emerged and are having a major impact on...</p><a class=\"button button-xs button-lighter\" href=\"single-post.html\">read more</a>
              </article>
            </div>
            <div class=\"col-md-6 col-lg-4 wow fadeInRightSmall\" data-wow-delay=\".2s\">
              <!-- Post minimal-->
              <article class=\"post-minimal\">
                <time class=\"post-minimal__time\" datetime=\"2018\">February 1, 2018</time>
                <div class=\"post-minimal__divider\"></div>
                <h6 class=\"post-minimal__title\"><a href=\"single-post.html\">Committing to the Future of Interior Architecture</a></h6>
                <p>Installations are often a practically invisible part of a building. Miles of...</p><a class=\"button button-xs button-lighter\" href=\"single-post.html\">read more</a>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- RD Google Map-->
      <section class=\"section\">
        <div class=\"google-map-container\" data-zoom=\"4\" data-center=\"6036 Richmond hwy., Alexandria, VA, 2230\" data-styles=\"[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]\">
          <div class=\"google-map\"></div>
          <ul class=\"google-map-markers\">
            <li data-location=\"6036 Richmond hwy., Alexandria, VA, 2230\" data-description=\"6036 Richmond hwy., Alexandria, VA, 2230\" data-icon=\"images/gmap_marker.png\" data-icon-active=\"images/gmap_marker_active.png\"></li>
          </ul>
        </div>
      </section>
{%endblock%}
", "AppBundle:Home:index.html.twig", "/Library/WebServer/Documents/sensores2/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
