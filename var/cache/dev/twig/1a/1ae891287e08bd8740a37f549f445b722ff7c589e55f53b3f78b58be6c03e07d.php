<?php

/* ::base.html.twig */
class __TwigTemplate_a0a2553cbe6e4958ce97ed28e37dee2509c2bc76db728242758e583560e2098c extends Twig_Template
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
        $__internal_3baca54ba8cfa547ce26665052dd824d5912f64f6d21fee96ec18d673a3cf781 = $this->env->getExtension("native_profiler");
        $__internal_3baca54ba8cfa547ce26665052dd824d5912f64f6d21fee96ec18d673a3cf781->enter($__internal_3baca54ba8cfa547ce26665052dd824d5912f64f6d21fee96ec18d673a3cf781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3baca54ba8cfa547ce26665052dd824d5912f64f6d21fee96ec18d673a3cf781->leave($__internal_3baca54ba8cfa547ce26665052dd824d5912f64f6d21fee96ec18d673a3cf781_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3347317add784b0e457e6b14852338c4cb990d6d01856b2fd03dacaf9435b7e2 = $this->env->getExtension("native_profiler");
        $__internal_3347317add784b0e457e6b14852338c4cb990d6d01856b2fd03dacaf9435b7e2->enter($__internal_3347317add784b0e457e6b14852338c4cb990d6d01856b2fd03dacaf9435b7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3347317add784b0e457e6b14852338c4cb990d6d01856b2fd03dacaf9435b7e2->leave($__internal_3347317add784b0e457e6b14852338c4cb990d6d01856b2fd03dacaf9435b7e2_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_487f98c5d1a63dd4eabcc467e2e4cce212cfd7edde26b8f355dc987c8f30fe41 = $this->env->getExtension("native_profiler");
        $__internal_487f98c5d1a63dd4eabcc467e2e4cce212cfd7edde26b8f355dc987c8f30fe41->enter($__internal_487f98c5d1a63dd4eabcc467e2e4cce212cfd7edde26b8f355dc987c8f30fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_487f98c5d1a63dd4eabcc467e2e4cce212cfd7edde26b8f355dc987c8f30fe41->leave($__internal_487f98c5d1a63dd4eabcc467e2e4cce212cfd7edde26b8f355dc987c8f30fe41_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_14bfcc4c0716f132d586fdb427141f071d9c2823dce3eb20607d8964fd07414c = $this->env->getExtension("native_profiler");
        $__internal_14bfcc4c0716f132d586fdb427141f071d9c2823dce3eb20607d8964fd07414c->enter($__internal_14bfcc4c0716f132d586fdb427141f071d9c2823dce3eb20607d8964fd07414c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14bfcc4c0716f132d586fdb427141f071d9c2823dce3eb20607d8964fd07414c->leave($__internal_14bfcc4c0716f132d586fdb427141f071d9c2823dce3eb20607d8964fd07414c_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a5e6425d88daf8abf150fbed31a3ac6fd4f6ce58aa332c0e4e3ac5376033975 = $this->env->getExtension("native_profiler");
        $__internal_3a5e6425d88daf8abf150fbed31a3ac6fd4f6ce58aa332c0e4e3ac5376033975->enter($__internal_3a5e6425d88daf8abf150fbed31a3ac6fd4f6ce58aa332c0e4e3ac5376033975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a5e6425d88daf8abf150fbed31a3ac6fd4f6ce58aa332c0e4e3ac5376033975->leave($__internal_3a5e6425d88daf8abf150fbed31a3ac6fd4f6ce58aa332c0e4e3ac5376033975_prof);

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
