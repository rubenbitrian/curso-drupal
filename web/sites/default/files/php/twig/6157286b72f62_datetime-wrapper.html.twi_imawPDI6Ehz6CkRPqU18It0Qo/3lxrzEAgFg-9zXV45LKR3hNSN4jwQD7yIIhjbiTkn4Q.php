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

/* core/themes/claro/templates/datetime-wrapper.html.twig */
class __TwigTemplate_fe234afe86ff590685dd33086ab95cecbe3a714542ea916f6fe0b763a35b1ccb extends \Twig\Template
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
        // line 12
        $context["title_classes"] = [0 => "form-item__label", 1 => ((        // line 14
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 15
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => ((        // line 16
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 19
        echo "<div class=\"form-item form-datetime-wrapper\">
";
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h4>
";
        }
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 23, $this->source), "html", null, true);
        echo "
";
        // line 24
        if (($context["errors"] ?? null)) {
            // line 25
            echo "  <div class=\"form-item__error-message\">
    ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 26, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 29
        if (($context["description"] ?? null)) {
            // line 30
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", [0 => "form-item__description"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">
    ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 31, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 34,  79 => 31,  74 => 30,  72 => 29,  66 => 26,  63 => 25,  61 => 24,  57 => 23,  49 => 21,  47 => 20,  44 => 19,  42 => 16,  41 => 15,  40 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override of a datetime form wrapper.
 *
 * @todo Refactor when https://www.drupal.org/node/3010558 is fixed.
 *
 * @see template_preprocess_form_element()
 */
#}
{%
  set title_classes = [
    'form-item__label',
    required ? 'js-form-required',
    required ? 'form-required',
    errors ? 'has-error',
  ]
%}
<div class=\"form-item form-datetime-wrapper\">
{% if title %}
  <h4{{ title_attributes.addClass(title_classes) }}>{{ title }}</h4>
{% endif %}
{{ content }}
{% if errors %}
  <div class=\"form-item__error-message\">
    {{ errors }}
  </div>
{% endif %}
{% if description %}
  <div{{ description_attributes.addClass('form-item__description') }}>
    {{ description }}
  </div>
{% endif %}
</div>
", "core/themes/claro/templates/datetime-wrapper.html.twig", "/var/www/html/web/core/themes/claro/templates/datetime-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 20);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
