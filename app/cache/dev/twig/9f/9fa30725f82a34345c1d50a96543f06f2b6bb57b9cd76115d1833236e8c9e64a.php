<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_69d1fcbc13b651ed6c89d997efd3570e53dd0449dcab096da88739abf52b6d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ae92c20f3448a1f3ac6d9b0e35181e03b4bc078138529dae9a8a08876dac656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae92c20f3448a1f3ac6d9b0e35181e03b4bc078138529dae9a8a08876dac656->enter($__internal_9ae92c20f3448a1f3ac6d9b0e35181e03b4bc078138529dae9a8a08876dac656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ae92c20f3448a1f3ac6d9b0e35181e03b4bc078138529dae9a8a08876dac656->leave($__internal_9ae92c20f3448a1f3ac6d9b0e35181e03b4bc078138529dae9a8a08876dac656_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64bb1f66af1f797e06a14e1f09731e082f1db32a51acc3300a392614bdff74a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bb1f66af1f797e06a14e1f09731e082f1db32a51acc3300a392614bdff74a0->enter($__internal_64bb1f66af1f797e06a14e1f09731e082f1db32a51acc3300a392614bdff74a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_64bb1f66af1f797e06a14e1f09731e082f1db32a51acc3300a392614bdff74a0->leave($__internal_64bb1f66af1f797e06a14e1f09731e082f1db32a51acc3300a392614bdff74a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_09f9d1f9a8cff095660e070ad38d827c3b1b7f738b29d874e1ea9622ea20d18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f9d1f9a8cff095660e070ad38d827c3b1b7f738b29d874e1ea9622ea20d18f->enter($__internal_09f9d1f9a8cff095660e070ad38d827c3b1b7f738b29d874e1ea9622ea20d18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_09f9d1f9a8cff095660e070ad38d827c3b1b7f738b29d874e1ea9622ea20d18f->leave($__internal_09f9d1f9a8cff095660e070ad38d827c3b1b7f738b29d874e1ea9622ea20d18f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26c6d2253b9542e42e77d110e94fb00bea5380e062aa349e482c57f9a39e635d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c6d2253b9542e42e77d110e94fb00bea5380e062aa349e482c57f9a39e635d->enter($__internal_26c6d2253b9542e42e77d110e94fb00bea5380e062aa349e482c57f9a39e635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_26c6d2253b9542e42e77d110e94fb00bea5380e062aa349e482c57f9a39e635d->leave($__internal_26c6d2253b9542e42e77d110e94fb00bea5380e062aa349e482c57f9a39e635d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\dilo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
