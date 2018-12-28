<?php

/* default/index.html.twig */
class __TwigTemplate_fe8b9454d66be5d658c51feabb46177a861034150283c06a0272096a8189a82a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"starter-template\">
    <h1 class=\"display-2\">PetShop</h1>
    <p class=\"lead\">Avançando com Symfony4 com Doctrine</p>
</div>
<div class=\"row\">
    <div class=\"col-md-6\">
            <table class=\"table table-striped\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["qts_animais"]) || array_key_exists("qts_animais", $context) ? $context["qts_animais"] : (function () { throw new Twig_Error_Runtime('Variable "qts_animais" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["qts"]) {
            // line 14
            echo "                    <tr>
                        <th>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["qts"], "nome", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["qts"], "qtde", array()), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </table>
    </div>
    <div class=\"col-md-6\">
            <table class=\"table table-striped\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["qtde_por_raca"]) || array_key_exists("qtde_por_raca", $context) ? $context["qtde_por_raca"] : (function () { throw new Twig_Error_Runtime('Variable "qtde_por_raca" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["qts"]) {
            // line 24
            echo "                    <tr>
                        <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["qts"], "nome", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["qts"], "qtde", array()), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </table>
    </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  100 => 26,  96 => 25,  93 => 24,  89 => 23,  83 => 19,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"starter-template\">
    <h1 class=\"display-2\">PetShop</h1>
    <p class=\"lead\">Avançando com Symfony4 com Doctrine</p>
</div>
<div class=\"row\">
    <div class=\"col-md-6\">
            <table class=\"table table-striped\">
                    {% for qts in qts_animais %}
                    <tr>
                        <th>{{ qts.nome }}</th>
                        <td>{{ qts.qtde }}</td>
                    </tr>
                    {% endfor %}
                </table>
    </div>
    <div class=\"col-md-6\">
            <table class=\"table table-striped\">
                    {% for qts in qtde_por_raca %}
                    <tr>
                        <th>{{ qts.nome }}</th>
                        <td>{{ qts.qtde }}</td>
                    </tr>
                    {% endfor %}
                </table>
    </div>
</div>



{% endblock %}
", "default/index.html.twig", "/var/www/templates/default/index.html.twig");
    }
}
