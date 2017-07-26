<?php

/* AppBundle:default:register.html.twig */
class __TwigTemplate_b7cd3c8ba883c787409bfdbba77973756dcfb54315d30ac31119eb4bf1dc8e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AppBundle:default:register.html.twig", 1);
        $this->blocks = array(
            'innerLayout' => array($this, 'block_innerLayout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88564de1abc14e04a88bb4ecd16a23eea8178df59064aebd24a0e5ef082cdbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88564de1abc14e04a88bb4ecd16a23eea8178df59064aebd24a0e5ef082cdbe1->enter($__internal_88564de1abc14e04a88bb4ecd16a23eea8178df59064aebd24a0e5ef082cdbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88564de1abc14e04a88bb4ecd16a23eea8178df59064aebd24a0e5ef082cdbe1->leave($__internal_88564de1abc14e04a88bb4ecd16a23eea8178df59064aebd24a0e5ef082cdbe1_prof);

    }

    // line 3
    public function block_innerLayout($context, array $blocks = array())
    {
        $__internal_d2dd08684df3f85e0b40ae23e83f12366a429cf98007eb46142be2f9d59848e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dd08684df3f85e0b40ae23e83f12366a429cf98007eb46142be2f9d59848e9->enter($__internal_d2dd08684df3f85e0b40ae23e83f12366a429cf98007eb46142be2f9d59848e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "innerLayout"));

        // line 4
        echo "<div class=\"signup-page\">
<div class=\"signup-box\">
        <div class=\"logo\">
            <a href=\"javascript:void(0);\">Manajemen<b>DILo</b></a>
            <small>Aplikasi Manajemen Terpadu</small>
        </div>
        <div class=\"card\">
            <div class=\"body\">
                <form id=\"sign_up\" method=\"POST\">
                    <div class=\"msg\">Register a new membership</div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Name Surname\" required autofocus>
                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                        <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                        <input type=\"text\" name=\"job_desk\" placeholder=\"Isi Job Desk\" id=\"\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"password\" class=\"form-control\" name=\"password\" minlength=\"6\" placeholder=\"Password\" required>
                        </div>
                    </div>

                    <button class=\"btn btn-block btn-lg bg-pink waves-effect\" type=\"submit\">SIGN UP</button>

                    <div class=\"m-t-25 m-b--5 align-center\">
                        <a href=\"sign-in.html\">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_d2dd08684df3f85e0b40ae23e83f12366a429cf98007eb46142be2f9d59848e9->leave($__internal_d2dd08684df3f85e0b40ae23e83f12366a429cf98007eb46142be2f9d59848e9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block innerLayout %}
<div class=\"signup-page\">
<div class=\"signup-box\">
        <div class=\"logo\">
            <a href=\"javascript:void(0);\">Manajemen<b>DILo</b></a>
            <small>Aplikasi Manajemen Terpadu</small>
        </div>
        <div class=\"card\">
            <div class=\"body\">
                <form id=\"sign_up\" method=\"POST\">
                    <div class=\"msg\">Register a new membership</div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Name Surname\" required autofocus>
                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                        <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                        <input type=\"text\" name=\"job_desk\" placeholder=\"Isi Job Desk\" id=\"\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"password\" class=\"form-control\" name=\"password\" minlength=\"6\" placeholder=\"Password\" required>
                        </div>
                    </div>

                    <button class=\"btn btn-block btn-lg bg-pink waves-effect\" type=\"submit\">SIGN UP</button>

                    <div class=\"m-t-25 m-b--5 align-center\">
                        <a href=\"sign-in.html\">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "AppBundle:default:register.html.twig", "C:\\xampp\\htdocs\\dilo\\src\\AppBundle/Resources/views/default/register.html.twig");
    }
}
