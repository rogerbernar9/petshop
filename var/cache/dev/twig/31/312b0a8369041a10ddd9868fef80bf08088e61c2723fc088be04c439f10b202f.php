<?php

/* animais/view.html.twig */
class __TwigTemplate_125d69406522f59d66355fdd195b6f7ac307386bff9881da896c573bcaf70d72 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "animais/view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "animais/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "animais/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new Twig_Error_Runtime('Variable "animal" does not exist.', 5, $this->source); })()), "nome", array()), "html", null, true);
        echo " - Visualizar animal - ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1>Visualizando animal - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new Twig_Error_Runtime('Variable "animal" does not exist.', 8, $this->source); })()), "nome", array()), "html", null, true);
        echo "</h1>
<table class=\"table table-striped\">

    <tr>
        <th>Cod</th>
        <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new Twig_Error_Runtime('Variable "animal" does not exist.', 13, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Nome</th>
        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new Twig_Error_Runtime('Variable "animal" does not exist.', 17, $this->source); })()), "nome", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Data nasc.</th>
        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new Twig_Error_Runtime('Variable "animal" does not exist.', 21, $this->source); })()), "dataNascimento", array()), "d/m/Y"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th colspan=\"2\">Proprietários</th>
    </tr>
    <tr>
        <th></th>
        <td>
            <ul>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new Twig_Error_Runtime('Variable "animal" does not exist.', 30, $this->source); })()), "cliente", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 31
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visualizar_cliente", array("id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nome", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                    <li>Esse animal não tem nenhum proprietário</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </ul>
        </td>

    </tr>


</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "animais/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  124 => 33,  114 => 31,  109 => 30,  97 => 21,  90 => 17,  83 => 13,  74 => 8,  65 => 7,  54 => 5,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block title %}
{{ animal.nome }} - Visualizar animal - {% endblock %}

{% block body %}
<h1>Visualizando animal - {{animal.nome}}</h1>
<table class=\"table table-striped\">

    <tr>
        <th>Cod</th>
        <td>{{animal.id}}</td>
    </tr>
    <tr>
        <th>Nome</th>
        <td>{{animal.nome}}</td>
    </tr>
    <tr>
        <th>Data nasc.</th>
        <td>{{animal.dataNascimento|date(\"d/m/Y\")}}</td>
    </tr>
    <tr>
        <th colspan=\"2\">Proprietários</th>
    </tr>
    <tr>
        <th></th>
        <td>
            <ul>
                {% for cliente in animal.cliente %}
                    <li><a href=\"{{ path('visualizar_cliente', {'id':cliente.id}) }}\">{{cliente.nome}}</a></li>
                {% else %}
                    <li>Esse animal não tem nenhum proprietário</li>
                {% endfor %}
            </ul>
        </td>

    </tr>


</table>

{% endblock %}

", "animais/view.html.twig", "/var/www/templates/animais/view.html.twig");
    }
}
