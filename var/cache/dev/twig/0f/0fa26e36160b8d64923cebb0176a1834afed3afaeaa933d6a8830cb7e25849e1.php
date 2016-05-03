<?php

/* ::base.html.twig */
class __TwigTemplate_819ca377f0bd24df07419a1ae781e59a23ad6e3c073128b1e2a92c942e2e6d76 extends Twig_Template
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
        $__internal_ab7b1fdcdce86ab0a557f7638a8f3c251e34fc9e583d1078fbd32191333e0492 = $this->env->getExtension("native_profiler");
        $__internal_ab7b1fdcdce86ab0a557f7638a8f3c251e34fc9e583d1078fbd32191333e0492->enter($__internal_ab7b1fdcdce86ab0a557f7638a8f3c251e34fc9e583d1078fbd32191333e0492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
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
        
        $__internal_ab7b1fdcdce86ab0a557f7638a8f3c251e34fc9e583d1078fbd32191333e0492->leave($__internal_ab7b1fdcdce86ab0a557f7638a8f3c251e34fc9e583d1078fbd32191333e0492_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1efe03855823095447e1e06990b1ed4a98a6be205550eb9ddd4e293b938e3c16 = $this->env->getExtension("native_profiler");
        $__internal_1efe03855823095447e1e06990b1ed4a98a6be205550eb9ddd4e293b938e3c16->enter($__internal_1efe03855823095447e1e06990b1ed4a98a6be205550eb9ddd4e293b938e3c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1efe03855823095447e1e06990b1ed4a98a6be205550eb9ddd4e293b938e3c16->leave($__internal_1efe03855823095447e1e06990b1ed4a98a6be205550eb9ddd4e293b938e3c16_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dab47ea52dd0ee50605bb0e8f388928d80d6ff77f7803620c62d903d10b733bb = $this->env->getExtension("native_profiler");
        $__internal_dab47ea52dd0ee50605bb0e8f388928d80d6ff77f7803620c62d903d10b733bb->enter($__internal_dab47ea52dd0ee50605bb0e8f388928d80d6ff77f7803620c62d903d10b733bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dab47ea52dd0ee50605bb0e8f388928d80d6ff77f7803620c62d903d10b733bb->leave($__internal_dab47ea52dd0ee50605bb0e8f388928d80d6ff77f7803620c62d903d10b733bb_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a6d18bc6fc04b2d44e85ddfffc3aad752590aa8beab32ed475ba5bbd7a51368 = $this->env->getExtension("native_profiler");
        $__internal_7a6d18bc6fc04b2d44e85ddfffc3aad752590aa8beab32ed475ba5bbd7a51368->enter($__internal_7a6d18bc6fc04b2d44e85ddfffc3aad752590aa8beab32ed475ba5bbd7a51368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7a6d18bc6fc04b2d44e85ddfffc3aad752590aa8beab32ed475ba5bbd7a51368->leave($__internal_7a6d18bc6fc04b2d44e85ddfffc3aad752590aa8beab32ed475ba5bbd7a51368_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d03846b8cad86dee35c7b6784b9c757b3720f4283a04ac7cf0e5f57ed907b59e = $this->env->getExtension("native_profiler");
        $__internal_d03846b8cad86dee35c7b6784b9c757b3720f4283a04ac7cf0e5f57ed907b59e->enter($__internal_d03846b8cad86dee35c7b6784b9c757b3720f4283a04ac7cf0e5f57ed907b59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d03846b8cad86dee35c7b6784b9c757b3720f4283a04ac7cf0e5f57ed907b59e->leave($__internal_d03846b8cad86dee35c7b6784b9c757b3720f4283a04ac7cf0e5f57ed907b59e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 74,  191 => 49,  180 => 30,  168 => 5,  159 => 75,  157 => 74,  152 => 72,  146 => 69,  142 => 68,  138 => 67,  132 => 64,  126 => 61,  120 => 58,  110 => 50,  108 => 49,  99 => 43,  90 => 37,  80 => 31,  78 => 30,  67 => 22,  61 => 19,  55 => 16,  49 => 13,  43 => 10,  37 => 7,  32 => 5,  26 => 1,);
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
