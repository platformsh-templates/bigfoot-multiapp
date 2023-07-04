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

/* main/sighting_show.html.twig */
class __TwigTemplate_819b2f7a026ac6c6ac5bbcc42a5a66bd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/sighting_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/sighting_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/sighting_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sighting"]) || array_key_exists("sighting", $context) ? $context["sighting"] : (function () { throw new RuntimeError('Variable "sighting" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " | Bigfoot";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col\">
    <div class=\"sighting-log-container mb-5 pb-5\">
        <h2 style=\"font-size: 1.5rem;\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sighting"]) || array_key_exists("sighting", $context) ? $context["sighting"] : (function () { throw new RuntimeError('Variable "sighting" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
        <p><span class=\"pr-2\"><i class=\"fa fa-clock\"></i> <time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sighting"]) || array_key_exists("sighting", $context) ? $context["sighting"] : (function () { throw new RuntimeError('Variable "sighting" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "Y-m-d H:i"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sighting"]) || array_key_exists("sighting", $context) ? $context["sighting"] : (function () { throw new RuntimeError('Variable "sighting" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9)), "html", null, true);
        echo "</time></span>
            |
            <span class=\"pl-2\">Big Foot Believability Score: <span class=\"badge badge-info\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sighting"]) || array_key_exists("sighting", $context) ? $context["sighting"] : (function () { throw new RuntimeError('Variable "sighting" does not exist.', 11, $this->source); })()), "score", [], "any", false, false, false, 11), "html", null, true);
        echo "</span> </span>
        </p>
        <div>
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sighting"]) || array_key_exists("sighting", $context) ? $context["sighting"] : (function () { throw new RuntimeError('Variable "sighting" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "
        </div>
    </div>

    <h3>Littlefoot (i.e. Human) Reactions</h3>
    
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sighting"]) || array_key_exists("sighting", $context) ? $context["sighting"] : (function () { throw new RuntimeError('Variable "sighting" does not exist.', 20, $this->source); })()), "comments", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "        <div class=\"comment-container mb-3\">
            <div class=\"row\">
                <div class=\"col-1\">        
                    <img class=\"px-1 py-1\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "owner", [], "any", false, false, false, 24), "avatarUrl", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"Avatar for ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "owner", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                </div>
                <div class=\"col\">
                    <strong>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "owner", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
            echo "</strong>
                    <span>(";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getUserActivityText(twig_get_attribute($this->env, $this->source, $context["comment"], "owner", [], "any", false, false, false, 28)), "html", null, true);
            echo ")</span>
                    <span class=\"px-2\">|</span>
                    <small><i class=\"fa fa-clock pr-2\"></i><time datetime=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 30), "Y-m-d H:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 30)), "html", null, true);
            echo "</time></small>
                    <div class=\"pt-2\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 32), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/sighting_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 38,  152 => 32,  145 => 30,  140 => 28,  136 => 27,  128 => 24,  123 => 21,  119 => 20,  110 => 14,  104 => 11,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ sighting.title }} | Bigfoot{% endblock %}

{% block body %}
<div class=\"col\">
    <div class=\"sighting-log-container mb-5 pb-5\">
        <h2 style=\"font-size: 1.5rem;\">{{ sighting.title }}</h2>
        <p><span class=\"pr-2\"><i class=\"fa fa-clock\"></i> <time datetime=\"{{ sighting.createdAt|date('Y-m-d H:i') }}\">{{ sighting.createdAt|time_diff }}</time></span>
            |
            <span class=\"pl-2\">Big Foot Believability Score: <span class=\"badge badge-info\">{{ sighting.score }}</span> </span>
        </p>
        <div>
            {{ sighting.description }}
        </div>
    </div>

    <h3>Littlefoot (i.e. Human) Reactions</h3>
    
    {% for comment in sighting.comments %}
        <div class=\"comment-container mb-3\">
            <div class=\"row\">
                <div class=\"col-1\">        
                    <img class=\"px-1 py-1\" src=\"{{ comment.owner.avatarUrl }}\" alt=\"Avatar for {{ comment.owner.username }}\">
                </div>
                <div class=\"col\">
                    <strong>{{ comment.owner.username }}</strong>
                    <span>({{ comment.owner|user_activity_text }})</span>
                    <span class=\"px-2\">|</span>
                    <small><i class=\"fa fa-clock pr-2\"></i><time datetime=\"{{ comment.createdAt|date('Y-m-d H:i') }}\">{{ comment.createdAt|time_diff }}</time></small>
                    <div class=\"pt-2\">
                        {{ comment.content }}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    
</div>
{% endblock %}

", "main/sighting_show.html.twig", "/Users/flovntp/Sites/Customers/PlatformSH/APIPlatform/test-api-platf-3-3/api/templates/main/sighting_show.html.twig");
    }
}
