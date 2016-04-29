<?php

/* base.html.twig */
class __TwigTemplate_ba4e4d7d7707930f41164ecc0102292f36dbe6a781a3759dcdd55a8fece14b79 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- MetisMenu CSS -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Timeline CSS -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/dist/css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Morris Charts CSS -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <div id=\"wrapper\">
        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("INITPlatformBundle:Default:navbar", array("max" => 3)));
        echo "
        </nav>

        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo "</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>  
            <!-- /.row -->
            <div class=\"row\">
            ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            </div>
        <!-- /.row -->
        </div>
    <!-- /#page-wrapper -->
    </div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/js/morris-data.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  178 => 74,  173 => 49,  168 => 30,  162 => 5,  156 => 75,  154 => 74,  149 => 72,  143 => 69,  139 => 68,  135 => 67,  129 => 64,  123 => 61,  117 => 58,  107 => 50,  105 => 49,  96 => 43,  87 => 37,  77 => 31,  75 => 30,  64 => 22,  58 => 19,  52 => 16,  46 => 13,  40 => 10,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{ asset('/assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*         <!-- MetisMenu CSS -->*/
/*         <link href="{{ asset('/assets/vendor/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Timeline CSS -->*/
/*         <link href="{{ asset('/assets/vendor/dist/css/timeline.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{ asset('/assets/vendor/dist/css/sb-admin-2.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Morris Charts CSS -->*/
/*         <link href="{{ asset('/assets/vendor/morrisjs/morris.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Custom Fonts -->*/
/*         <link href="{{ asset('/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*     <div id="wrapper">*/
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*             {{ render(controller('INITPlatformBundle:Default:navbar',{ 'max': 3 })) }}*/
/*         </nav>*/
/* */
/*         <div id="page-wrapper">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h1 class="page-header">{{ nom }}</h1>*/
/*                 </div>*/
/*                 <!-- /.col-lg-12 -->*/
/*             </div>  */
/*             <!-- /.row -->*/
/*             <div class="row">*/
/*             {% block body %}{% endblock %}*/
/*             </div>*/
/*         <!-- /.row -->*/
/*         </div>*/
/*     <!-- /#page-wrapper -->*/
/*     </div>*/
/* <!-- /#wrapper -->*/
/* */
/* <!-- jQuery -->*/
/* <script src="{{ asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>*/
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/* */
/* <!-- Metis Menu Plugin JavaScript -->*/
/* <script src="{{ asset('/assets/vendor/metisMenu/dist/metisMenu.min.js') }}"></script>*/
/* */
/* <!-- Morris Charts JavaScript -->*/
/* <script src="{{ asset('/assets/vendor/raphael/raphael-min.js') }}"></script>*/
/* <script src="{{ asset('/assets/vendor/morrisjs/morris.min.js') }}"></script>*/
/* <script src="{{ asset('/assets/vendor/js/morris-data.js') }}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset('/assets/vendor/dist/js/sb-admin-2.js') }}"></script>*/
/* */
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
