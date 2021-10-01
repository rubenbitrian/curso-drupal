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

/* themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_0a8a7ef58c085048b4072bac8e8ed49f5d439c456575cc638a553a5d649ef98e extends \Twig\Template
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
        // line 47
        echo "
";
        // line 49
        $context["label_attributes"] = ((($context["label_attributes"] ?? null)) ? (($context["label_attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        echo "
";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 53
            echo "  ";
            $context["wrapperclass"] = "form-check";
            // line 54
            echo "  ";
            $context["labelclass"] = "form-check-label";
            // line 55
            echo "  ";
            $context["inputclass"] = "form-check-input";
        }
        // line 57
        echo "
";
        // line 58
        if ((($context["type"] ?? null) == "radio")) {
            // line 59
            echo "  ";
            $context["wrapperclass"] = "form-check";
            // line 60
            echo "  ";
            $context["labelclass"] = "form-check-label";
            // line 61
            echo "  ";
            $context["inputclass"] = "form-check-input";
        }
        // line 63
        echo "
";
        // line 65
        $context["classes"] = [0 => "js-form-item", 1 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 67
($context["type"] ?? null), 67, $this->source))), 2 => ((twig_in_filter(        // line 68
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 68, $this->source))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 68, $this->source))))), 3 => ((twig_in_filter(        // line 69
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 70
($context["name"] ?? null), 70, $this->source))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 71
($context["name"] ?? null), 71, $this->source))), 6 => ((!twig_in_filter(        // line 72
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 73
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), 8 => ((        // line 74
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 78
        $context["description_classes"] = [0 => "description", 1 => "text-muted", 2 => (((        // line 81
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 84
        if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) {
            // line 85
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
            echo ">
    ";
            // line 86
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 87
                echo "      <span class=\"field-prefix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 87, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 89
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 89))) {
                // line 90
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo ">
        ";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 94
            echo "    ";
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 95
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 95), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 95)], "method", false, false, true, 95), 95, $this->source), "html", null, true);
                echo ">
        ";
                // line 96
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 96, $this->source));
                echo "
      </label>
    ";
            }
            // line 99
            echo "    <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => ($context["inputclass"] ?? null)], "method", false, false, true, 99), 99, $this->source), "html", null, true);
            echo ">
    ";
            // line 100
            if ((($context["label_display"] ?? null) == "after")) {
                // line 101
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 101), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 101)], "method", false, false, true, 101), 101, $this->source), "html", null, true);
                echo ">
        ";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 102, $this->source));
                echo "
      </label>
    ";
            }
            // line 105
            echo "    ";
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 106
                echo "      <span class=\"field-suffix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 106, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 108
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 109
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 110
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 110, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 113
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 113))) {
                // line 114
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 114), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 114), 114, $this->source), "html", null, true);
                echo ">
        ";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 118
            echo "  </div>
";
        } else {
            // line 120
            echo "  <fieldset";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "mb-3"], "method", false, false, true, 120), 120, $this->source), "html", null, true);
            echo ">
    ";
            // line 121
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 122
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 122, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 124
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 125
                echo "      <div class=\"input-group\">
    ";
            }
            // line 127
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 128
                echo "      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">";
                // line 129
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 129, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 132
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 132))) {
                // line 133
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                echo ">
        ";
                // line 134
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 137
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 137, $this->source), "html", null, true);
            echo "
    ";
            // line 138
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 139
                echo "      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 140, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 143
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 144
                echo "      </div>
    ";
            }
            // line 146
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 147
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 147, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 149
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 150
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 151
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 151, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 154
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 154))) {
                // line 155
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 155), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 155), 155, $this->source), "html", null, true);
                echo ">
        ";
                // line 156
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 159
            echo "  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 159,  288 => 156,  283 => 155,  280 => 154,  274 => 151,  271 => 150,  268 => 149,  262 => 147,  259 => 146,  255 => 144,  252 => 143,  246 => 140,  243 => 139,  241 => 138,  236 => 137,  230 => 134,  225 => 133,  222 => 132,  216 => 129,  213 => 128,  210 => 127,  206 => 125,  203 => 124,  197 => 122,  195 => 121,  190 => 120,  186 => 118,  180 => 115,  175 => 114,  172 => 113,  166 => 110,  163 => 109,  160 => 108,  154 => 106,  151 => 105,  145 => 102,  140 => 101,  138 => 100,  133 => 99,  127 => 96,  122 => 95,  119 => 94,  113 => 91,  108 => 90,  105 => 89,  99 => 87,  97 => 86,  92 => 85,  90 => 84,  88 => 81,  87 => 78,  85 => 74,  84 => 73,  83 => 72,  82 => 71,  81 => 70,  80 => 69,  79 => 68,  78 => 67,  77 => 65,  74 => 63,  70 => 61,  67 => 60,  64 => 59,  62 => 58,  59 => 57,  55 => 55,  52 => 54,  49 => 53,  47 => 52,  44 => 51,  42 => 49,  39 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any errors for this form element, may not be set.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 */
#}

{%
  set label_attributes = label_attributes ? label_attributes : create_attribute()
%}

{% if type == 'checkbox' %}
  {% set wrapperclass = \"form-check\" %}
  {% set labelclass = \"form-check-label\" %}
  {% set inputclass = \"form-check-input\" %}
{% endif %}

{% if type == 'radio' %}
  {% set wrapperclass = \"form-check\" %}
  {% set labelclass = \"form-check-label\" %}
  {% set inputclass = \"form-check-input\" %}
{% endif %}

{%
  set classes = [
    'js-form-item',
    'js-form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? type|clean_class : 'form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? wrapperclass,
    'js-form-item-' ~ name|clean_class,
    'form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'disabled',
    errors ? 'has-error',
  ]
%}
{%
  set description_classes = [
    'description',
\t  'text-muted',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}
{% if type in ['checkbox', 'radio'] %}
  <div{{ attributes.addClass(classes) }}>
    {% if prefix is not empty %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {% if label_display in ['before', 'invisible'] %}
      <label {{ label_attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    <input{{ input_attributes.addClass(inputclass) }}>
    {% if label_display == 'after' %}
      <label {{ label_attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    {% if suffix is not empty %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </div>
{% else %}
  <fieldset{{ attributes.addClass(classes, 'mb-3') }}>
    {% if label_display in ['before', 'invisible'] %}
      {{ label }}
    {% endif %}
    {% if (prefix is not empty) or (suffix is not empty) %}
      <div class=\"input-group\">
    {% endif %}
    {% if prefix is not empty %}
      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">{{ prefix }}</span>
      </div>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {{ children }}
    {% if suffix is not empty %}
      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">{{ suffix }}</span>
      </div>
    {% endif %}
    {% if (prefix is not empty) or (suffix is not empty) %}
      </div>
    {% endif %}
    {% if label_display == 'after' %}
      {{ label }}
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </fieldset>
{% endif %}
", "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig", "/var/www/html/web/themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 52);
        static $filters = array("clean_class" => 67, "escape" => 85, "raw" => 96);
        static $functions = array("create_attribute" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
                ['create_attribute']
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
