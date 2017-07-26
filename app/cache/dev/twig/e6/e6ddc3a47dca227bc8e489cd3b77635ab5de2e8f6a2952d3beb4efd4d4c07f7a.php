<?php

/* base.html.twig */
class __TwigTemplate_d9e270342a2e0f3618c2de67cc041ea0419933c0f597f4b4f9c533e377bdeb90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea17da950da43f414ee2225063e1383503f037c95a4ad8c41ae69bb90b80a031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea17da950da43f414ee2225063e1383503f037c95a4ad8c41ae69bb90b80a031->enter($__internal_ea17da950da43f414ee2225063e1383503f037c95a4ad8c41ae69bb90b80a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ea17da950da43f414ee2225063e1383503f037c95a4ad8c41ae69bb90b80a031->leave($__internal_ea17da950da43f414ee2225063e1383503f037c95a4ad8c41ae69bb90b80a031_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47a3b4db70f50d85c3f85ce3bc6e7e1d0174e0c7cb7322fd5364c69cc9d3d2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a3b4db70f50d85c3f85ce3bc6e7e1d0174e0c7cb7322fd5364c69cc9d3d2d3->enter($__internal_47a3b4db70f50d85c3f85ce3bc6e7e1d0174e0c7cb7322fd5364c69cc9d3d2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47a3b4db70f50d85c3f85ce3bc6e7e1d0174e0c7cb7322fd5364c69cc9d3d2d3->leave($__internal_47a3b4db70f50d85c3f85ce3bc6e7e1d0174e0c7cb7322fd5364c69cc9d3d2d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cea1b576ba9319b5e09944a6717b613bf39840ad0a3ea3338f2adb780ae83901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea1b576ba9319b5e09944a6717b613bf39840ad0a3ea3338f2adb780ae83901->enter($__internal_cea1b576ba9319b5e09944a6717b613bf39840ad0a3ea3338f2adb780ae83901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cea1b576ba9319b5e09944a6717b613bf39840ad0a3ea3338f2adb780ae83901->leave($__internal_cea1b576ba9319b5e09944a6717b613bf39840ad0a3ea3338f2adb780ae83901_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d994e4094bd6628285553f4beee284093df70c3942e17c21003278193d78b870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d994e4094bd6628285553f4beee284093df70c3942e17c21003278193d78b870->enter($__internal_d994e4094bd6628285553f4beee284093df70c3942e17c21003278193d78b870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d994e4094bd6628285553f4beee284093df70c3942e17c21003278193d78b870->leave($__internal_d994e4094bd6628285553f4beee284093df70c3942e17c21003278193d78b870_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_258ecd8e2313ddbcd64455a4f27ffa0c872b934ac608401d49723eb612f21512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258ecd8e2313ddbcd64455a4f27ffa0c872b934ac608401d49723eb612f21512->enter($__internal_258ecd8e2313ddbcd64455a4f27ffa0c872b934ac608401d49723eb612f21512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_258ecd8e2313ddbcd64455a4f27ffa0c872b934ac608401d49723eb612f21512->leave($__internal_258ecd8e2313ddbcd64455a4f27ffa0c872b934ac608401d49723eb612f21512_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\dilo\\app\\Resources\\views\\base.html.twig");
    }
}
