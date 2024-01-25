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
    ";
        // line 6
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cabecera_landing", [], "any", false, false, true, 6)))) {
            // line 7
            echo "      <div class=\"d-flex container-fluid\" lc-helper=\"background\" style=\"height:50vh;background:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cabecera_landing", [], "any", false, false, true, 7)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "uri", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source)), "html", null, true);
            echo ")  center / cover no-repeat;\"></div>
    ";
        }
        // line 9
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
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["label"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 24, $this->source), "html", null, true);
        echo "</p>
            </div>
          </div>
          <!-- /lc-block -->
        </div>
        <!-- /col -->
      </div>
      <div class=\"row contenido-central\">
        <div class=\"col-md-12 p-md-5\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contenidos_landing", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</div>
      </div>
    </div>
  </div>
</article>

";
        // line 39
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
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cabecera_landing", [], "any", false, false, true, 49)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 49), "entity", [], "any", false, false, true, 49), "uri", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49), 49, $this->source)), "html", null, true);
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
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cabecera_landing", [], "any", false, false, true, 65)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 65), "entity", [], "any", false, false, true, 65), "uri", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65), 65, $this->source)), "html", null, true);
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
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content", "label"]);    }

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
        return array (  128 => 65,  109 => 49,  97 => 39,  88 => 32,  77 => 24,  60 => 9,  54 => 7,  52 => 6,  46 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/landing_theme/templates/node--landingpage--full.html.twig", "C:\\xampp\\htdocs\\web_bits\\web\\themes\\custom\\landing_theme\\templates\\node--landingpage--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 6);
        static $filters = array("escape" => 1, "clean_class" => 3, "render" => 6);
        static $functions = array("attach_library" => 1, "file_url" => 7);

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
