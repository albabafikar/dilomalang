<?php

/* AppBundle:default:login.html.twig */
class __TwigTemplate_b0c09e11f6866e934cf2d5d9080de312565482cd9c3b2609f3d636e57ad3ce72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AppBundle:default:login.html.twig", 1);
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
        $__internal_6bc0df5bdbd125162b156e67083597dca2f867a36eb074d4f676214c7bfd95d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc0df5bdbd125162b156e67083597dca2f867a36eb074d4f676214c7bfd95d5->enter($__internal_6bc0df5bdbd125162b156e67083597dca2f867a36eb074d4f676214c7bfd95d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc0df5bdbd125162b156e67083597dca2f867a36eb074d4f676214c7bfd95d5->leave($__internal_6bc0df5bdbd125162b156e67083597dca2f867a36eb074d4f676214c7bfd95d5_prof);

    }

    // line 3
    public function block_innerLayout($context, array $blocks = array())
    {
        $__internal_5f5b7ffcef9284ce6f1b333b8e029633923a37769ec9da8c98ceded9846663ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5b7ffcef9284ce6f1b333b8e029633923a37769ec9da8c98ceded9846663ab->enter($__internal_5f5b7ffcef9284ce6f1b333b8e029633923a37769ec9da8c98ceded9846663ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "innerLayout"));

        // line 4
        echo "<div class=\"login-page\">
 <div class=\"login-box\">
        <div class=\"logo\">
            <a href=\"javascript:void(0);\">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class=\"card\">
            <div class=\"body\">
                <form id=\"sign_in\" method=\"POST\">
                    <div class=\"msg\">Sign in to start your session</div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\" required autofocus>
                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" required>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-8 p-t-5\">
                            <input type=\"checkbox\" name=\"rememberme\" id=\"rememberme\" class=\"filled-in chk-col-pink\">
                            <label for=\"rememberme\">Remember Me</label>
                        </div>
                        <div class=\"col-xs-4\">
                            <button class=\"btn btn-block bg-pink waves-effect\" type=\"submit\">SIGN IN</button>
                        </div>
                    </div>
                    <div class=\"row m-t-15 m-b--20\">
                        <div class=\"col-xs-6\">
                            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_register");
        echo "\">Register Now!</a>
                        </div>
                        <div class=\"col-xs-6 align-right\">
                            <a href=\"forgot-password.html\">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_5f5b7ffcef9284ce6f1b333b8e029633923a37769ec9da8c98ceded9846663ab->leave($__internal_5f5b7ffcef9284ce6f1b333b8e029633923a37769ec9da8c98ceded9846663ab_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 41,  40 => 4,  34 => 3,  11 => 1,);
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
<div class=\"login-page\">
 <div class=\"login-box\">
        <div class=\"logo\">
            <a href=\"javascript:void(0);\">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class=\"card\">
            <div class=\"body\">
                <form id=\"sign_in\" method=\"POST\">
                    <div class=\"msg\">Sign in to start your session</div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\" required autofocus>
                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" required>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-8 p-t-5\">
                            <input type=\"checkbox\" name=\"rememberme\" id=\"rememberme\" class=\"filled-in chk-col-pink\">
                            <label for=\"rememberme\">Remember Me</label>
                        </div>
                        <div class=\"col-xs-4\">
                            <button class=\"btn btn-block bg-pink waves-effect\" type=\"submit\">SIGN IN</button>
                        </div>
                    </div>
                    <div class=\"row m-t-15 m-b--20\">
                        <div class=\"col-xs-6\">
                            <a href=\"{{ path('app_register') }}\">Register Now!</a>
                        </div>
                        <div class=\"col-xs-6 align-right\">
                            <a href=\"forgot-password.html\">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{%  endblock %}
", "AppBundle:default:login.html.twig", "C:\\xampp\\htdocs\\dilo\\src\\AppBundle/Resources/views/default/login.html.twig");
    }
}
