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

/* main/_sightings.html.twig */
class __TwigTemplate_0e974c22c601fe48bd4eb90efca5c591 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/_sightings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/_sightings.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sightings"]) || array_key_exists("sightings", $context) ? $context["sightings"] : (function () { throw new RuntimeError('Variable "sightings" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sighting"]) {
            // line 2
            echo "    <div class=\"divTableRow sightingLink\">
        <div class=\"divTableCell\"><a class=\"text-white\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sighting_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sighting"], "id", [], "any", false, false, false, 3)]), "html", null, true);
            echo "\">
                ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sighting"], "title", [], "any", false, false, false, 4), "html", null, true);
            echo "
            </a>
        </div>
        <div class=\"divTableCell\">
            <time class=\"table-content\" datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sighting"], "createdAt", [], "any", false, false, false, 8), "Y-m-d H:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["sighting"], "createdAt", [], "any", false, false, false, 8)), "html", null, true);
            echo "</time>
        </div>
        <div class=\"divTableCell\">
            <a class=\"text-white table-content text-center\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sighting_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sighting"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sighting"], "comments", [], "any", false, false, false, 11)), "html", null, true);
            echo "</a>
        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sighting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/_sightings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  61 => 8,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for sighting in sightings %}
    <div class=\"divTableRow sightingLink\">
        <div class=\"divTableCell\"><a class=\"text-white\" href=\"{{ path('app_sighting_show', {id: sighting.id}) }}\">
                {{ sighting.title }}
            </a>
        </div>
        <div class=\"divTableCell\">
            <time class=\"table-content\" datetime=\"{{ sighting.createdAt|date('Y-m-d H:i') }}\">{{ sighting.createdAt|time_diff }}</time>
        </div>
        <div class=\"divTableCell\">
            <a class=\"text-white table-content text-center\" href=\"{{ path('app_sighting_show', {id: sighting.id}) }}\">{{ sighting.comments|length }}</a>
        </div>
    </div>

{% endfor %}
", "main/_sightings.html.twig", "/Users/flovntp/Sites/Customers/PlatformSH/APIPlatform/test-api-platf-3-3/api/templates/main/_sightings.html.twig");
    }
}
