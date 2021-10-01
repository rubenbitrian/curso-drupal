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

/* core/themes/claro/templates/node-add-list.html.twig */
class __TwigTemplate_88716ff535cedad815a03a320e9f33cbfa2118e3485165d02fcf4c22772c67d6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "@claro/entity-add-list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["create_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("node.type_add");
        // line 24
        $context["add_bundle_message"] = t("You have not created any content types yet. Go to the <a href=\"@create-content\">content type creation page</a> to add a new content type.", ["@create-content" => ($context["create_content"] ?? null)]);
        // line 20
        $this->parent = $this->loadTemplate("@claro/entity-add-list.html.twig", "core/themes/claro/templates/node-add-list.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  45 => 24,  43 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Claro's theme implementation to list node types available for adding content.
 *
 * Available variables:
 * - bundles: A list of content types, each with the following properties:
 *   - label: Content type label.
 *   - add_link: \\Drupal\\Core\\Link link instance to create an entity of this
 *     content type. This is a GeneratedLink originally and is switched by
 *     claro_preprocess_node_add_list().
 *   - description: Description of this type of content.
 *
 * @todo Revisit after https://www.drupal.org/node/3026221 has been solved.
 *
 * @see template_preprocess_node_add_list()
 * @see claro_preprocess_node_add_list()
 */
#}
{% extends '@claro/entity-add-list.html.twig' %}

{% set create_content = path('node.type_add') %}
{%
  set add_bundle_message = 'You have not created any content types yet. Go to the <a href=\"@create-content\">content type creation page</a> to add a new content type.'|t({ '@create-content': create_content })
%}
", "core/themes/claro/templates/node-add-list.html.twig", "/var/www/html/web/core/themes/claro/templates/node-add-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22);
        static $filters = array("t" => 24);
        static $functions = array("path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['t'],
                ['path']
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
