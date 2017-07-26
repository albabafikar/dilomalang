<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0aea4432085f6baee0f0b396f797fba386c64a21819fc68374e9bcf2a4e4910b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f8331970804a9e39e0e7a01b06f40eb8e6b0545a083ae0f8361fd1a84497dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8331970804a9e39e0e7a01b06f40eb8e6b0545a083ae0f8361fd1a84497dfa->enter($__internal_5f8331970804a9e39e0e7a01b06f40eb8e6b0545a083ae0f8361fd1a84497dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f8331970804a9e39e0e7a01b06f40eb8e6b0545a083ae0f8361fd1a84497dfa->leave($__internal_5f8331970804a9e39e0e7a01b06f40eb8e6b0545a083ae0f8361fd1a84497dfa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b27e2e152246c30a28fbe0234596cd47a9443d13e3f63fe73e91a8603a67b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b27e2e152246c30a28fbe0234596cd47a9443d13e3f63fe73e91a8603a67b1b->enter($__internal_4b27e2e152246c30a28fbe0234596cd47a9443d13e3f63fe73e91a8603a67b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b27e2e152246c30a28fbe0234596cd47a9443d13e3f63fe73e91a8603a67b1b->leave($__internal_4b27e2e152246c30a28fbe0234596cd47a9443d13e3f63fe73e91a8603a67b1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0582233b79ad59418cec739b2b340faa0b3969ff1c6abd9c18e2ca9f0c3bdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0582233b79ad59418cec739b2b340faa0b3969ff1c6abd9c18e2ca9f0c3bdcf->enter($__internal_d0582233b79ad59418cec739b2b340faa0b3969ff1c6abd9c18e2ca9f0c3bdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0582233b79ad59418cec739b2b340faa0b3969ff1c6abd9c18e2ca9f0c3bdcf->leave($__internal_d0582233b79ad59418cec739b2b340faa0b3969ff1c6abd9c18e2ca9f0c3bdcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57c1b77d9d35be3e251e0a4582b6c9dc0e55bc98f678fd108c0bb5009f2ea328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c1b77d9d35be3e251e0a4582b6c9dc0e55bc98f678fd108c0bb5009f2ea328->enter($__internal_57c1b77d9d35be3e251e0a4582b6c9dc0e55bc98f678fd108c0bb5009f2ea328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57c1b77d9d35be3e251e0a4582b6c9dc0e55bc98f678fd108c0bb5009f2ea328->leave($__internal_57c1b77d9d35be3e251e0a4582b6c9dc0e55bc98f678fd108c0bb5009f2ea328_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\dilo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
