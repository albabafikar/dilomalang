<?php

/* layout.html.twig */
class __TwigTemplate_d72a383204aa46f3725d56827933c7894b412cdc0b6b886ee4ed5a4c8784cb5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'innerLayout' => array($this, 'block_innerLayout'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d044693ed81be79ce2fab79392366f1f1db6b344c2a447c8a00bd6c01f5e7ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d044693ed81be79ce2fab79392366f1f1db6b344c2a447c8a00bd6c01f5e7ac2->enter($__internal_d044693ed81be79ce2fab79392366f1f1db6b344c2a447c8a00bd6c01f5e7ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Aplikasi Manajemen DILo Malang</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/node-waves/waves.css\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/animate-css/animate.css\" rel=\"stylesheet\" />

    <!-- Morris Chart Css-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/morrisjs/morris.css\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css"), "html", null, true);
        echo "/style.css\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css"), "html", null, true);
        echo "/themes/all-themes.css\" rel=\"stylesheet\" />
</head>

<body class=\"theme-red\">
    
    ";
        // line 37
        $this->displayBlock('innerLayout', $context, $blocks);
        // line 38
        echo "
    <!-- Jquery Core Js -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/bootstrap/js/bootstrap.js\"></script>

    <!-- Select Plugin Js -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/bootstrap-select/js/bootstrap-select.js\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/jquery-slimscroll/jquery.slimscroll.js\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/node-waves/waves.js\"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/jquery-countto/jquery.countTo.js\"></script>

    <!-- Morris Plugin Js -->
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/raphael/raphael.min.js\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/morrisjs/morris.js\"></script>

    <!-- ChartJs -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/chartjs/Chart.bundle.js\"></script>

    <!-- Flot Charts Plugin Js -->
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/flot-charts/jquery.flot.js\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/flot-charts/jquery.flot.resize.js\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/flot-charts/jquery.flot.pie.js\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/flot-charts/jquery.flot.categories.js\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/flot-charts/jquery.flot.time.js\"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins"), "html", null, true);
        echo "/jquery-sparkline/jquery.sparkline.js\"></script>

    <!-- Custom Js -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js"), "html", null, true);
        echo "/admin.js\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js"), "html", null, true);
        echo "/pages/index.js\"></script>

    <!-- Demo Js -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js"), "html", null, true);
        echo "/demo.js\"></script>
</body>

</html>";
        
        $__internal_d044693ed81be79ce2fab79392366f1f1db6b344c2a447c8a00bd6c01f5e7ac2->leave($__internal_d044693ed81be79ce2fab79392366f1f1db6b344c2a447c8a00bd6c01f5e7ac2_prof);

    }

    // line 37
    public function block_innerLayout($context, array $blocks = array())
    {
        $__internal_106b1c042c5112441f392b56a6b5ecd95683bed50c8babe95c0490a3799a824c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106b1c042c5112441f392b56a6b5ecd95683bed50c8babe95c0490a3799a824c->enter($__internal_106b1c042c5112441f392b56a6b5ecd95683bed50c8babe95c0490a3799a824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "innerLayout"));

        
        $__internal_106b1c042c5112441f392b56a6b5ecd95683bed50c8babe95c0490a3799a824c->leave($__internal_106b1c042c5112441f392b56a6b5ecd95683bed50c8babe95c0490a3799a824c_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 37,  175 => 79,  169 => 76,  165 => 75,  159 => 72,  153 => 69,  149 => 68,  145 => 67,  141 => 66,  137 => 65,  131 => 62,  125 => 59,  121 => 58,  115 => 55,  109 => 52,  103 => 49,  97 => 46,  91 => 43,  85 => 40,  81 => 38,  79 => 37,  71 => 32,  65 => 29,  59 => 26,  53 => 23,  47 => 20,  41 => 17,  23 => 1,);
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
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Aplikasi Manajemen DILo Malang</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"{{ asset('plugins') }}/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"{{ asset('plugins') }}/node-waves/waves.css\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"{{ asset('plugins') }}/animate-css/animate.css\" rel=\"stylesheet\" />

    <!-- Morris Chart Css-->
    <link href=\"{{ asset('plugins') }}/morrisjs/morris.css\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"{{ asset('css') }}/style.css\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"{{ asset('css') }}/themes/all-themes.css\" rel=\"stylesheet\" />
</head>

<body class=\"theme-red\">
    
    {% block innerLayout %}{% endblock %}

    <!-- Jquery Core Js -->
    <script src=\"{{ asset('plugins') }}/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"{{ asset('plugins') }}/bootstrap/js/bootstrap.js\"></script>

    <!-- Select Plugin Js -->
    <script src=\"{{ asset('plugins') }}/bootstrap-select/js/bootstrap-select.js\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"{{ asset('plugins') }}/jquery-slimscroll/jquery.slimscroll.js\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"{{ asset('plugins') }}/node-waves/waves.js\"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src=\"{{ asset('plugins') }}/jquery-countto/jquery.countTo.js\"></script>

    <!-- Morris Plugin Js -->
    <script src=\"{{ asset('plugins') }}/raphael/raphael.min.js\"></script>
    <script src=\"{{ asset('plugins') }}/morrisjs/morris.js\"></script>

    <!-- ChartJs -->
    <script src=\"{{ asset('plugins') }}/chartjs/Chart.bundle.js\"></script>

    <!-- Flot Charts Plugin Js -->
    <script src=\"{{ asset('plugins') }}/flot-charts/jquery.flot.js\"></script>
    <script src=\"{{ asset('plugins') }}/flot-charts/jquery.flot.resize.js\"></script>
    <script src=\"{{ asset('plugins') }}/flot-charts/jquery.flot.pie.js\"></script>
    <script src=\"{{ asset('plugins') }}/flot-charts/jquery.flot.categories.js\"></script>
    <script src=\"{{ asset('plugins') }}/flot-charts/jquery.flot.time.js\"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src=\"{{ asset('plugins') }}/jquery-sparkline/jquery.sparkline.js\"></script>

    <!-- Custom Js -->
    <script src=\"{{ asset('js') }}/admin.js\"></script>
    <script src=\"{{ asset('js') }}/pages/index.js\"></script>

    <!-- Demo Js -->
    <script src=\"{{ asset('js') }}/demo.js\"></script>
</body>

</html>", "layout.html.twig", "C:\\xampp\\htdocs\\dilo\\app\\Resources\\views\\layout.html.twig");
    }
}
