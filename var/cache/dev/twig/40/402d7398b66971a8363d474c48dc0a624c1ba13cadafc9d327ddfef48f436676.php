<?php

/* clientes/view.html.twig */
class __TwigTemplate_9fdac94b5ebb8a8d8f37fb58843c97c640d7e68db6918542d97b7284367c7567 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clientes/view.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/view.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 5, $this->source); })()), "nome", array()), "html", null, true);
        echo " - Visualizar Cliente - ";
        
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
        echo "<h1>Visualizando Cliente - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 8, $this->source); })()), "nome", array()), "html", null, true);
        echo "</h1>
<table class=\"table table-striped\">

    <tr>
        <th>Cod</th>
        <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 13, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Nome</th>
        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 17, $this->source); })()), "nome", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Telefone</th>
        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 21, $this->source); })()), "telefone", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>E-mail</th>
        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 25, $this->source); })()), "email", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th colspan=\"2\">Endereço do cliente:</th>
    </tr>
    <tr>
            <th>Rua</th>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 32, $this->source); })()), "endereco", array()), "rua", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 32, $this->source); })()), "endereco", array()), "numero", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
            <th>Bairro</th>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 36, $this->source); })()), "endereco", array()), "bairro", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>

        <th colspan=\"2\">Animais</th>
    </tr>
    <tr>
        <th></th>
        <td>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 45, $this->source); })()), "animal", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 46
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visualizar_animal", array("id" => twig_get_attribute($this->env, $this->source, $context["animal"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "nome", array()), "html", null, true);
            echo "</a></li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                <li>Nenhum animal para esse cliente</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </td>
    </tr>

</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clientes/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 50,  150 => 48,  140 => 46,  135 => 45,  123 => 36,  114 => 32,  104 => 25,  97 => 21,  90 => 17,  83 => 13,  74 => 8,  65 => 7,  54 => 5,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block title %}
{{ cliente.nome }} - Visualizar Cliente - {% endblock %}

{% block body %}
<h1>Visualizando Cliente - {{cliente.nome}}</h1>
<table class=\"table table-striped\">

    <tr>
        <th>Cod</th>
        <td>{{cliente.id}}</td>
    </tr>
    <tr>
        <th>Nome</th>
        <td>{{cliente.nome}}</td>
    </tr>
    <tr>
        <th>Telefone</th>
        <td>{{cliente.telefone}}</td>
    </tr>
    <tr>
        <th>E-mail</th>
        <td>{{cliente.email}}</td>
    </tr>
    <tr>
        <th colspan=\"2\">Endereço do cliente:</th>
    </tr>
    <tr>
            <th>Rua</th>
            <td>{{cliente.endereco.rua}}, {{cliente.endereco.numero}}</td>
    </tr>
    <tr>
            <th>Bairro</th>
            <td>{{cliente.endereco.bairro}}</td>
    </tr>
    <tr>

        <th colspan=\"2\">Animais</th>
    </tr>
    <tr>
        <th></th>
        <td>
            {% for animal in cliente.animal %}
                <li><a href=\"{{ path('visualizar_animal', {'id': animal.id}) }}\">{{ animal.nome }}</a></li>
            {% else %}
                <li>Nenhum animal para esse cliente</li>
            {% endfor %}
        </td>
    </tr>

</table>

{% endblock %}

", "clientes/view.html.twig", "/var/www/templates/clientes/view.html.twig");
    }
}
