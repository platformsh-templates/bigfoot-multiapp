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

/* main/homepage.html.twig */
class __TwigTemplate_f5d54653aeb1939effaabcbe9574f3d6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-8\">
        <h3>Recently Reported Sightings</h3>
        <small>Submit yours to help us narrow down this search</small>
        <div class=\"divTable table table-striped table-dark table-borderless table-hover\">
            <div class=\"divTableHeading\">
                <div class=\"divTableRow bg-info\">
                    <div class=\"divTableHead\">Sighting Details</div>
                    <div class=\"divTableHead\">Posted</div>
                    <div class=\"divTableHead\">Comments</div>
                </div>
            </div>
            <div class=\"divTableBody js-sightings-list\" data-url=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sightings_partial_list");
        echo "\">
                ";
        // line 16
        echo twig_include($this->env, $context, "main/_sightings.html.twig");
        echo "
            </div>
        </div>
    </div>
    <div class=\"col-4\">
        <div class=\"js-github-organization\" data-url=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_github_organization_info");
        echo "\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"col-8\">
        <h3>Recently Reported Sightings</h3>
        <small>Submit yours to help us narrow down this search</small>
        <div class=\"divTable table table-striped table-dark table-borderless table-hover\">
            <div class=\"divTableHeading\">
                <div class=\"divTableRow bg-info\">
                    <div class=\"divTableHead\">Sighting Details</div>
                    <div class=\"divTableHead\">Posted</div>
                    <div class=\"divTableHead\">Comments</div>
                </div>
            </div>
            <div class=\"divTableBody js-sightings-list\" data-url=\"{{ path('app_sightings_partial_list') }}\">
                {{ include('main/_sightings.html.twig') }}
            </div>
        </div>
    </div>
    <div class=\"col-4\">
        <div class=\"js-github-organization\" data-url=\"{{ path('app_github_organization_info') }}\"></div>
    </div>
{% endblock %}", "main/homepage.html.twig", "/Users/flovntp/Sites/Customers/PlatformSH/APIPlatform/test-api-platf-3-3/api/templates/main/homepage.html.twig");
    }
}
