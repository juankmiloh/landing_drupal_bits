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

/* themes/custom/landing_theme/templates/node--landingpage--full.html.twig */
class __TwigTemplate_be633b37066f9896bbf0625f37bc8fd6 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        echo "

";
        // line 3
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 3), 3, $this->source))), ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 3)) ? ("node--promoted") : ("")), ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isSticky", [], "method", false, false, true, 3)) ? ("node--sticky") : ("")), (( !twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isPublished", [], "method", false, false, true, 3)) ? ("node--unpublished") : ("")), ((($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 3, $this->source)))) : ("")), "clearfix"];
        // line 4
        echo "<article ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 4), 4, $this->source), "html", null, true);
        echo ">
  <div>
    <div class=\"views-view-grid horizontal cols-4 clearfix col\">
      <div class=\"views-row clearfix row-1\">
        <div class=\"views-col col-1\" style=\"width: 25%;\">
          <!-- THEME DEBUG -->
          <!-- THEME HOOK: 'views_view_fields' -->
          <!-- BEGIN OUTPUT from 'core/modules/views/templates/views-view-fields.html.twig' -->

          <!-- THEME DEBUG -->
          <!-- THEME HOOK: 'views_view_field' -->
          <!-- BEGIN OUTPUT from 'core/modules/views/templates/views-view-field.html.twig' -->
          <div class=\"header-topbar style-2\">
            <div class=\"octf-area-wrap\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <ul class=\"social-list\">
                      <li>
                        <a href=\"https://twitter.com/BITSAmericasSAS\" target=\"_blank\" aria-label=\"Red Social Twitterb\">
                          <svg class=\"svg-inline--fa fa-twitter\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" data-icon=\"twitter\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" data-fa-i2svg=\"\">
                            <path fill=\"currentColor\" d=\"M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z\"></path>
                          </svg>
                          <!-- <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i> Font Awesome fontawesome.com -->
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END OUTPUT from 'core/modules/views/templates/views-view-field.html.twig' -->

          <!-- END OUTPUT from 'core/modules/views/templates/views-view-fields.html.twig' -->
        </div>
        <div class=\"views-col col-2\" style=\"width: 25%;\">
          <!-- THEME DEBUG -->
          <!-- THEME HOOK: 'views_view_fields' -->
          <!-- BEGIN OUTPUT from 'core/modules/views/templates/views-view-fields.html.twig' -->

          <!-- THEME DEBUG -->
          <!-- THEME HOOK: 'views_view_field' -->
          <!-- BEGIN OUTPUT from 'core/modules/views/templates/views-view-field.html.twig' -->
          <div class=\"header-topbar style-2\">
            <div class=\"octf-area-wrap\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <ul class=\"social-list\">
                      <li>
                        <a href=\"https://twitter.com/BITSAmericasSAS\" target=\"_blank\" aria-label=\"Red Social Twitterb\">
                          <svg class=\"svg-inline--fa fa-facebook-f\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" data-icon=\"facebook-f\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" data-fa-i2svg=\"\">
                            <path fill=\"currentColor\" d=\"M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z\"></path>
                          </svg>
                          <!-- <i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i> Font Awesome fontawesome.com -->
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END OUTPUT from 'core/modules/views/templates/views-view-field.html.twig' -->

          <!-- END OUTPUT from 'core/modules/views/templates/views-view-fields.html.twig' -->
        </div>
        <div class=\"views-col col-3\" style=\"width: 25%;\">
          <!-- THEME DEBUG -->
          <!-- THEME HOOK: 'views_view_fields' -->
          <!-- BEGIN OUTPUT from 'core/modules/views/templates/views-view-fields.html.twig' -->

          <!-- THEME DEBUG -->
          <!-- THEME HOOK: 'views_view_field' -->
          <!-- BEGIN OUTPUT from 'core/modules/views/templates/views-view-field.html.twig' -->
          <div class=\"header-topbar style-2\">
            <div class=\"octf-area-wrap\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <ul class=\"social-list\">
                      <li>
                        <a href=\"https://twitter.com/BITSAmericasSAS\" target=\"_blank\" aria-label=\"Red Social Twitterb\">
                          <svg class=\"svg-inline--fa fa-instagram\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" data-icon=\"instagram\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" data-fa-i2svg=\"\">
                            <path fill=\"currentColor\" d=\"M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z\"></path>
                          </svg>
                          <!-- <i class=\"fab fa-instagram\" aria-hidden=\"true\"></i> Font Awesome fontawesome.com -->
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END OUTPUT from 'core/modules/views/templates/views-view-field.html.twig' -->

          <!-- END OUTPUT from 'core/modules/views/templates/views-view-fields.html.twig' -->
        </div>
        <div class=\"views-col col-4\" style=\"width: 25%;\">
          <!-- THEME DEBUG -->
          <!-- THEME HOOK: 'views_view_fields' -->
          <!-- BEGIN OUTPUT from 'core/modules/views/templates/views-view-fields.html.twig' -->

          <!-- THEME DEBUG -->
          <!-- THEME HOOK: 'views_view_field' -->
          <!-- BEGIN OUTPUT from 'core/modules/views/templates/views-view-field.html.twig' -->
          <div class=\"header-topbar style-2\">
            <div class=\"octf-area-wrap\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <ul class=\"social-list\">
                      <li>
                        <a href=\"https://twitter.com/BITSAmericasSAS\" target=\"_blank\" aria-label=\"Red Social Twitterb\">
                          <svg class=\"svg-inline--fa fa-linkedin-in\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" data-icon=\"linkedin-in\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" data-fa-i2svg=\"\">
                            <path fill=\"currentColor\" d=\"M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z\"></path>
                          </svg>
                          <!-- <i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i> Font Awesome fontawesome.com -->
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END OUTPUT from 'core/modules/views/templates/views-view-field.html.twig' -->

          <!-- END OUTPUT from 'core/modules/views/templates/views-view-fields.html.twig' -->
        </div>
      </div>
    </div>

    ";
        // line 140
        echo "
    <div class=\"header-topbar style-2\">
      <div class=\"octf-area-wrap\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-1\">
              <ul class=\"social-list\">
                <li>
                  <a href=\"https://twitter.com/BITSAmericasSAS\" target=\"_blank\" aria-label=\"Red Social Twitterb\"><i class=\"";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_clase_icono"] ?? null), 148, $this->source), "html", null, true);
        echo "\" aria-hidden=\"true\"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 158
        echo "
    <div class=\"header-topbar style-2\">
      <div class=\"octf-area-wrap\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <ul class=\"social-list\">
                <li>
                  <a href=\"https://twitter.com/BITSAmericasSAS\" target=\"_blank\" aria-label=\"Red Social Twitterb\"><i class=\"fab fa-twitter\"></i></a>
                </li>
                <li>
                  <a href=\"https://www.facebook.com/BITSAmericasSAS/\" target=\"_blank\" aria-label=\"Red Social Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                </li>
                <li>
                  <a href=\"https://www.linkedin.com/company/3611874/admin/\" target=\"_blank\" aria-label=\"Red Social LinkedIn\"><i class=\"fab fa-linkedin-in\"></i></a>
                </li>
                <li>
                  <a href=\"https://www.instagram.com/bitsamericassas/?hl=es-la\" target=\"_blank\" aria-label=\"Red Social Instagram\"><i class=\"fab fa-instagram\"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 185
        echo "
    <div class=\"header-topbar style-2\">
      <div class=\"octf-area-wrap\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <ul class=\"social-list\">
                <li>
                  <a href=\"https://twitter.com/BITSAmericasSAS\" target=\"_blank\" aria-label=\"Red Social Twitterb\"><i class=\"fab fa-twitter\"></i></a>
                </li>
                <li>
                  <a href=\"https://www.facebook.com/BITSAmericasSAS/\" target=\"_blank\" aria-label=\"Red Social Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                </li>
                <li>
                  <a href=\"https://www.linkedin.com/company/3611874/admin/\" target=\"_blank\" aria-label=\"Red Social LinkedIn\"><i class=\"fab fa-linkedin-in\"></i></a>
                </li>
                <li>
                  <a href=\"https://www.instagram.com/bitsamericassas/?hl=es-la\" target=\"_blank\" aria-label=\"Red Social Instagram\"><i class=\"fab fa-instagram\"></i></a>
                </li>
              </ul>
            </div>
            <div class=\"col-md-8\">
              <ul class=\"topbar-info align-self-end clearfix\">
                <li>
                  <a href=\"tel:+57 3052036640\"><i class=\"fas fa-phone-alt\"></i> +57 3052036640</a>
                </li>
                <li>
                  <a href=\"cdn-cgi/l/email-protection.html#22414d4f4750414b434e62404b5651434f47504b4143510c414d4f\"><i class=\"fas fa-envelope\"></i> comercial@bitsamericas.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br /><br /><br />

    ";
        // line 223
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cabecera_landing", [], "any", false, false, true, 223)))) {
            // line 224
            echo "      <div class=\"d-flex container-fluid\" lc-helper=\"background\" style=\"height:50vh;background:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cabecera_landing", [], "any", false, false, true, 224)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 224), "entity", [], "any", false, false, true, 224), "uri", [], "any", false, false, true, 224), "value", [], "any", false, false, true, 224), 224, $this->source)), "html", null, true);
            echo ")  center / cover no-repeat;\"></div>
    ";
        }
        // line 226
        echo "
    <div class=\"container p-lg-5 bg-body mt-md-n6 position-relative rounded\">
      <div class=\"row\">
        <div class=\"col-md-4 text-center align-self-center\">
          <div class=\"lc-block border-end border-2\">
            <div editable=\"rich\">
              <p class=\"display-4 text-secondary\">WHY?</p>
            </div>
          </div>
          <!-- /lc-block -->
        </div>
        <!-- /col -->
        <div class=\"col-md-8\">
          <div class=\"lc-block\">
            <div editable=\"rich\">
              <p class=\"display-4\">";
        // line 241
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["label"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 241, $this->source), "html", null, true);
        echo "</p>
            </div>
          </div>
          <!-- /lc-block -->
        </div>
        <!-- /col -->
      </div>
      <div class=\"row contenido-central\">
        <div class=\"col-md-12 p-md-5\">";
        // line 249
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contenidos_landing", [], "any", false, false, true, 249), 249, $this->source), "html", null, true);
        echo "</div>
      </div>
    </div>
  </div>
</article>

";
        // line 256
        echo "
<div class=\"ot-industries\">
  <div class=\"owl-carousel owl-theme industries-inner ot-industries-slider owl-loaded owl-drag\">
    <div class=\"owl-stage-outer\">
      <div class=\"owl-stage\" style=\"transform: translate3d(-2165px, 0px, 0px); transition: all 0.25s ease 0s; width: 5163px; padding-left: 200px; padding-right: 200px;\">
        <div class=\"owl-item\" style=\"width: 433px;\">
          <div class=\"indus-item\">
            <div class=\"item-inner\">
              <div class=\"overlay\"></div>
              <div class=\"i-image\">
                <img src=\"";
        // line 266
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cabecera_landing", [], "any", false, false, true, 266)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 266), "entity", [], "any", false, false, true, 266), "uri", [], "any", false, false, true, 266), "value", [], "any", false, false, true, 266), 266, $this->source)), "html", null, true);
        echo "\" alt=\"// Nuestra Compañía\" width=\"100%\" height=\"100%\" />
              </div>
              <div class=\"iinfo\">
                <h4 style=\"font-size: 20px\">ISO 9001</h4>
                <div class=\"itext\">
                  <p>Certifica el alto nivel de calidad de nuestros productos y servicios con estándares internacionales.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"owl-item\" style=\"width: 433px;\">
          <div class=\"indus-item\">
            <div class=\"item-inner\">
              <div class=\"overlay\"></div>
              <div class=\"i-image\">
                <img src=\"";
        // line 282
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cabecera_landing", [], "any", false, false, true, 282)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 282), "entity", [], "any", false, false, true, 282), "uri", [], "any", false, false, true, 282), "value", [], "any", false, false, true, 282), 282, $this->source)), "html", null, true);
        echo "\" alt=\"// Nuestra Compañía\" width=\"100%\" height=\"100%\" />
              </div>
              <div class=\"iinfo\">
                <h4 style=\"font-size: 20px\">Certificado</h4>
                <div class=\"itext\">
                  <p>Certifica el alto nivel de calidad de nuestros productos y servicios con estándares internacionales.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "field_clase_icono", "content", "label"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/landing_theme/templates/node--landingpage--full.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  351 => 282,  332 => 266,  320 => 256,  311 => 249,  300 => 241,  283 => 226,  277 => 224,  275 => 223,  235 => 185,  207 => 158,  195 => 148,  185 => 140,  46 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/landing_theme/templates/node--landingpage--full.html.twig", "C:\\xampp\\htdocs\\web_bits\\web\\themes\\custom\\landing_theme\\templates\\node--landingpage--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 223);
        static $filters = array("escape" => 1, "clean_class" => 3, "render" => 223);
        static $functions = array("attach_library" => 1, "file_url" => 224);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class', 'render'],
                ['attach_library', 'file_url']
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
