<?php

/* INITPlatformBundle:Annonces:index.html.twig */
class __TwigTemplate_530ef1e9d8797bbd806ecb85a28109a2ffde0672b252760f1f32fba83333bec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "INITPlatformBundle:Annonces:index.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10b401affea2c41a0cd1af22f3bbefbeab4b581eb6a811e49d9012f5983debea = $this->env->getExtension("native_profiler");
        $__internal_10b401affea2c41a0cd1af22f3bbefbeab4b581eb6a811e49d9012f5983debea->enter($__internal_10b401affea2c41a0cd1af22f3bbefbeab4b581eb6a811e49d9012f5983debea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "INITPlatformBundle:Annonces:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10b401affea2c41a0cd1af22f3bbefbeab4b581eb6a811e49d9012f5983debea->leave($__internal_10b401affea2c41a0cd1af22f3bbefbeab4b581eb6a811e49d9012f5983debea_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6eeef20b6a637d2c37727c83daec32d4519dd86bd5f29e420cf9f38429f9d28a = $this->env->getExtension("native_profiler");
        $__internal_6eeef20b6a637d2c37727c83daec32d4519dd86bd5f29e420cf9f38429f9d28a->enter($__internal_6eeef20b6a637d2c37727c83daec32d4519dd86bd5f29e420cf9f38429f9d28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <!-- DataTables CSS -->
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
     <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/datatables-responsive/css/dataTables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6eeef20b6a637d2c37727c83daec32d4519dd86bd5f29e420cf9f38429f9d28a->leave($__internal_6eeef20b6a637d2c37727c83daec32d4519dd86bd5f29e420cf9f38429f9d28a_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaec1984a15134458b5e5d3f37195228954db08b90a83e15962313cbb4c8ace4 = $this->env->getExtension("native_profiler");
        $__internal_aaec1984a15134458b5e5d3f37195228954db08b90a83e15962313cbb4c8ace4->enter($__internal_aaec1984a15134458b5e5d3f37195228954db08b90a83e15962313cbb4c8ace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        
        $__internal_aaec1984a15134458b5e5d3f37195228954db08b90a83e15962313cbb4c8ace4->leave($__internal_aaec1984a15134458b5e5d3f37195228954db08b90a83e15962313cbb4c8ace4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f16a446e6641cd2d4efea67eb051d980bcc46eb7e3ff7ef539ca07acdc0e8655 = $this->env->getExtension("native_profiler");
        $__internal_f16a446e6641cd2d4efea67eb051d980bcc46eb7e3ff7ef539ca07acdc0e8655->enter($__internal_f16a446e6641cd2d4efea67eb051d980bcc46eb7e3ff7ef539ca07acdc0e8655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"col-lg-8\">

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class=\"panel-body\">
                <div class=\"dataTable_wrapper\">
                    <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=\"odd gradeX\">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td class=\"center\">4</td>
                                <td class=\"center\">X</td>
                            </tr>
                            <tr class=\"even gradeC\">
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td class=\"center\">5</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"odd gradeA\">
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td class=\"center\">5.5</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"even gradeA\">
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                                <td class=\"center\">6</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"odd gradeA\">
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td class=\"center\">7</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"even gradeA\">
                                <td>Trident</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td class=\"center\">6</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class=\"center\">1.7</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class=\"center\">1.8</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class=\"center\">1.8</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"odd gradeA\">
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td class=\"center\">7</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"even gradeA\">
                                <td>Trident</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td class=\"center\">6</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class=\"center\">1.7</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class=\"center\">1.8</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class=\"center\">1.8</td>
                                <td class=\"center\">A</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                <div class=\"well\">
                    <h4>DataTables Usage Information</h4>
                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target=\"_blank\" href=\"https://datatables.net/\">https://datatables.net/</a>.</p>
                    <a class=\"btn btn-default btn-lg btn-block\" target=\"_blank\" href=\"https://datatables.net/\">View DataTables Documentation</a>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-8 -->
    <div class=\"col-lg-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <i class=\"fa fa-bell fa-fw\"></i> Notifications Panel
            </div>
            <!-- /.panel-heading -->
            <div class=\"panel-body\">
                <div class=\"list-group\">
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-comment fa-fw\"></i> New Comment
                        <span class=\"pull-right text-muted small\"><em>4 minutes ago</em>
                        </span>
                    </a>
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                        <span class=\"pull-right text-muted small\"><em>12 minutes ago</em>
                        </span>
                    </a>
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                        <span class=\"pull-right text-muted small\"><em>27 minutes ago</em>
                        </span>
                    </a>
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-tasks fa-fw\"></i> New Task
                        <span class=\"pull-right text-muted small\"><em>43 minutes ago</em>
                        </span>
                    </a>
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                        <span class=\"pull-right text-muted small\"><em>11:32 AM</em>
                        </span>
                    </a>
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-bolt fa-fw\"></i> Server Crashed!
                        <span class=\"pull-right text-muted small\"><em>11:13 AM</em>
                        </span>
                    </a>
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-warning fa-fw\"></i> Server Not Responding
                        <span class=\"pull-right text-muted small\"><em>10:57 AM</em>
                        </span>
                    </a>
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-shopping-cart fa-fw\"></i> New Order Placed
                        <span class=\"pull-right text-muted small\"><em>9:49 AM</em>
                        </span>
                    </a>
                    <a href=\"#\" class=\"list-group-item\">
                        <i class=\"fa fa-money fa-fw\"></i> Payment Received
                        <span class=\"pull-right text-muted small\"><em>Yesterday</em>
                        </span>
                    </a>
                </div>
                <!-- /.list-group -->
                <a href=\"#\" class=\"btn btn-default btn-block\">View All Alerts</a>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <i class=\"fa fa-bar-chart-o fa-fw\"></i> Donut Chart Example
            </div>
            <div class=\"panel-body\">
                <div id=\"morris-donut-chart\"></div>
                <a href=\"#\" class=\"btn btn-default btn-block\">View Details</a>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        <div class=\"chat-panel panel panel-default\">
            <div class=\"panel-heading\">
                <i class=\"fa fa-comments fa-fw\"></i>
                Chat
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-chevron-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu slidedown\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-refresh fa-fw\"></i> Refresh
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-check-circle fa-fw\"></i> Available
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-times fa-fw\"></i> Busy
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-clock-o fa-fw\"></i> Away
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-sign-out fa-fw\"></i> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class=\"panel-body\">
                <ul class=\"chat\">
                    <li class=\"left clearfix\">
                        <span class=\"chat-img pull-left\">
                            <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                        </span>
                        <div class=\"chat-body clearfix\">
                            <div class=\"header\">
                                <strong class=\"primary-font\">Jack Sparrow</strong>
                                <small class=\"pull-right text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i> 12 mins ago
                                </small>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class=\"right clearfix\">
                        <span class=\"chat-img pull-right\">
                            <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                        </span>
                        <div class=\"chat-body clearfix\">
                            <div class=\"header\">
                                <small class=\" text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i> 13 mins ago</small>
                                <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class=\"left clearfix\">
                        <span class=\"chat-img pull-left\">
                            <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                        </span>
                        <div class=\"chat-body clearfix\">
                            <div class=\"header\">
                                <strong class=\"primary-font\">Jack Sparrow</strong>
                                <small class=\"pull-right text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i> 14 mins ago</small>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class=\"right clearfix\">
                        <span class=\"chat-img pull-right\">
                            <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                        </span>
                        <div class=\"chat-body clearfix\">
                            <div class=\"header\">
                                <small class=\" text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i> 15 mins ago</small>
                                <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.panel-body -->
            <div class=\"panel-footer\">
                <div class=\"input-group\">
                    <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                            Send
                        </button>
                    </span>
                </div>
            </div>
            <!-- /.panel-footer -->
        </div>
        <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->
";
        
        $__internal_f16a446e6641cd2d4efea67eb051d980bcc46eb7e3ff7ef539ca07acdc0e8655->leave($__internal_f16a446e6641cd2d4efea67eb051d980bcc46eb7e3ff7ef539ca07acdc0e8655_prof);

    }

    // line 339
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3812dba51d251eecbb9e45273058a894c89c056d7cbb426c7c27cd3ef071765b = $this->env->getExtension("native_profiler");
        $__internal_3812dba51d251eecbb9e45273058a894c89c056d7cbb426c7c27cd3ef071765b->enter($__internal_3812dba51d251eecbb9e45273058a894c89c056d7cbb426c7c27cd3ef071765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 340
        echo "
    <!-- DataTables JavaScript --> 
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/vendor/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3812dba51d251eecbb9e45273058a894c89c056d7cbb426c7c27cd3ef071765b->leave($__internal_3812dba51d251eecbb9e45273058a894c89c056d7cbb426c7c27cd3ef071765b_prof);

    }

    public function getTemplateName()
    {
        return "INITPlatformBundle:Annonces:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 343,  422 => 342,  418 => 340,  412 => 339,  80 => 13,  74 => 12,  62 => 11,  52 => 8,  46 => 5,  43 => 4,  37 => 3,  11 => 2,);
    }
}
/* {# src/INIT/PlatformBundle/Resources/views/Default/index.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*   <!-- DataTables CSS -->*/
/*      <link href="{{ asset('/assets/vendor/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">*/
/* */
/*     <!-- DataTables Responsive CSS -->*/
/*      <link href="{{ asset('/assets/vendor/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">*/
/* */
/* {% endblock %}*/
/* {% block title %}{{ nom }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="col-lg-8">*/
/* */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 DataTables Advanced Tables*/
/*             </div>*/
/*             <!-- /.panel-heading -->*/
/*             <div class="panel-body">*/
/*                 <div class="dataTable_wrapper">*/
/*                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Rendering engine</th>*/
/*                                 <th>Browser</th>*/
/*                                 <th>Platform(s)</th>*/
/*                                 <th>Engine version</th>*/
/*                                 <th>CSS grade</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             <tr class="odd gradeX">*/
/*                                 <td>Trident</td>*/
/*                                 <td>Internet Explorer 4.0</td>*/
/*                                 <td>Win 95+</td>*/
/*                                 <td class="center">4</td>*/
/*                                 <td class="center">X</td>*/
/*                             </tr>*/
/*                             <tr class="even gradeC">*/
/*                                 <td>Trident</td>*/
/*                                 <td>Internet Explorer 5.0</td>*/
/*                                 <td>Win 95+</td>*/
/*                                 <td class="center">5</td>*/
/*                                 <td class="center">C</td>*/
/*                             </tr>*/
/*                             <tr class="odd gradeA">*/
/*                                 <td>Trident</td>*/
/*                                 <td>Internet Explorer 5.5</td>*/
/*                                 <td>Win 95+</td>*/
/*                                 <td class="center">5.5</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="even gradeA">*/
/*                                 <td>Trident</td>*/
/*                                 <td>Internet Explorer 6</td>*/
/*                                 <td>Win 98+</td>*/
/*                                 <td class="center">6</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="odd gradeA">*/
/*                                 <td>Trident</td>*/
/*                                 <td>Internet Explorer 7</td>*/
/*                                 <td>Win XP SP2+</td>*/
/*                                 <td class="center">7</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="even gradeA">*/
/*                                 <td>Trident</td>*/
/*                                 <td>AOL browser (AOL desktop)</td>*/
/*                                 <td>Win XP</td>*/
/*                                 <td class="center">6</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="gradeA">*/
/*                                 <td>Gecko</td>*/
/*                                 <td>Firefox 1.0</td>*/
/*                                 <td>Win 98+ / OSX.2+</td>*/
/*                                 <td class="center">1.7</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="gradeA">*/
/*                                 <td>Gecko</td>*/
/*                                 <td>Firefox 1.5</td>*/
/*                                 <td>Win 98+ / OSX.2+</td>*/
/*                                 <td class="center">1.8</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="gradeA">*/
/*                                 <td>Gecko</td>*/
/*                                 <td>Firefox 2.0</td>*/
/*                                 <td>Win 98+ / OSX.2+</td>*/
/*                                 <td class="center">1.8</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="odd gradeA">*/
/*                                 <td>Trident</td>*/
/*                                 <td>Internet Explorer 7</td>*/
/*                                 <td>Win XP SP2+</td>*/
/*                                 <td class="center">7</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="even gradeA">*/
/*                                 <td>Trident</td>*/
/*                                 <td>AOL browser (AOL desktop)</td>*/
/*                                 <td>Win XP</td>*/
/*                                 <td class="center">6</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="gradeA">*/
/*                                 <td>Gecko</td>*/
/*                                 <td>Firefox 1.0</td>*/
/*                                 <td>Win 98+ / OSX.2+</td>*/
/*                                 <td class="center">1.7</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="gradeA">*/
/*                                 <td>Gecko</td>*/
/*                                 <td>Firefox 1.5</td>*/
/*                                 <td>Win 98+ / OSX.2+</td>*/
/*                                 <td class="center">1.8</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/*                             <tr class="gradeA">*/
/*                                 <td>Gecko</td>*/
/*                                 <td>Firefox 2.0</td>*/
/*                                 <td>Win 98+ / OSX.2+</td>*/
/*                                 <td class="center">1.8</td>*/
/*                                 <td class="center">A</td>*/
/*                             </tr>*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <!-- /.table-responsive -->*/
/*                 <div class="well">*/
/*                     <h4>DataTables Usage Information</h4>*/
/*                     <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>*/
/*                     <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.panel-body -->*/
/*         </div>*/
/*         <!-- /.panel -->*/
/*     </div>*/
/*     <!-- /.col-lg-8 -->*/
/*     <div class="col-lg-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <i class="fa fa-bell fa-fw"></i> Notifications Panel*/
/*             </div>*/
/*             <!-- /.panel-heading -->*/
/*             <div class="panel-body">*/
/*                 <div class="list-group">*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-comment fa-fw"></i> New Comment*/
/*                         <span class="pull-right text-muted small"><em>4 minutes ago</em>*/
/*                         </span>*/
/*                     </a>*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-twitter fa-fw"></i> 3 New Followers*/
/*                         <span class="pull-right text-muted small"><em>12 minutes ago</em>*/
/*                         </span>*/
/*                     </a>*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-envelope fa-fw"></i> Message Sent*/
/*                         <span class="pull-right text-muted small"><em>27 minutes ago</em>*/
/*                         </span>*/
/*                     </a>*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-tasks fa-fw"></i> New Task*/
/*                         <span class="pull-right text-muted small"><em>43 minutes ago</em>*/
/*                         </span>*/
/*                     </a>*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-upload fa-fw"></i> Server Rebooted*/
/*                         <span class="pull-right text-muted small"><em>11:32 AM</em>*/
/*                         </span>*/
/*                     </a>*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-bolt fa-fw"></i> Server Crashed!*/
/*                         <span class="pull-right text-muted small"><em>11:13 AM</em>*/
/*                         </span>*/
/*                     </a>*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-warning fa-fw"></i> Server Not Responding*/
/*                         <span class="pull-right text-muted small"><em>10:57 AM</em>*/
/*                         </span>*/
/*                     </a>*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed*/
/*                         <span class="pull-right text-muted small"><em>9:49 AM</em>*/
/*                         </span>*/
/*                     </a>*/
/*                     <a href="#" class="list-group-item">*/
/*                         <i class="fa fa-money fa-fw"></i> Payment Received*/
/*                         <span class="pull-right text-muted small"><em>Yesterday</em>*/
/*                         </span>*/
/*                     </a>*/
/*                 </div>*/
/*                 <!-- /.list-group -->*/
/*                 <a href="#" class="btn btn-default btn-block">View All Alerts</a>*/
/*             </div>*/
/*             <!-- /.panel-body -->*/
/*         </div>*/
/*         <!-- /.panel -->*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div id="morris-donut-chart"></div>*/
/*                 <a href="#" class="btn btn-default btn-block">View Details</a>*/
/*             </div>*/
/*             <!-- /.panel-body -->*/
/*         </div>*/
/*         <!-- /.panel -->*/
/*         <div class="chat-panel panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <i class="fa fa-comments fa-fw"></i>*/
/*                 Chat*/
/*                 <div class="btn-group pull-right">*/
/*                     <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">*/
/*                         <i class="fa fa-chevron-down"></i>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu slidedown">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-refresh fa-fw"></i> Refresh*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-check-circle fa-fw"></i> Available*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-times fa-fw"></i> Busy*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-clock-o fa-fw"></i> Away*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-sign-out fa-fw"></i> Sign Out*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.panel-heading -->*/
/*             <div class="panel-body">*/
/*                 <ul class="chat">*/
/*                     <li class="left clearfix">*/
/*                         <span class="chat-img pull-left">*/
/*                             <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />*/
/*                         </span>*/
/*                         <div class="chat-body clearfix">*/
/*                             <div class="header">*/
/*                                 <strong class="primary-font">Jack Sparrow</strong>*/
/*                                 <small class="pull-right text-muted">*/
/*                                     <i class="fa fa-clock-o fa-fw"></i> 12 mins ago*/
/*                                 </small>*/
/*                             </div>*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.*/
/*                             </p>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="right clearfix">*/
/*                         <span class="chat-img pull-right">*/
/*                             <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />*/
/*                         </span>*/
/*                         <div class="chat-body clearfix">*/
/*                             <div class="header">*/
/*                                 <small class=" text-muted">*/
/*                                     <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>*/
/*                                 <strong class="pull-right primary-font">Bhaumik Patel</strong>*/
/*                             </div>*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.*/
/*                             </p>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="left clearfix">*/
/*                         <span class="chat-img pull-left">*/
/*                             <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />*/
/*                         </span>*/
/*                         <div class="chat-body clearfix">*/
/*                             <div class="header">*/
/*                                 <strong class="primary-font">Jack Sparrow</strong>*/
/*                                 <small class="pull-right text-muted">*/
/*                                     <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>*/
/*                             </div>*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.*/
/*                             </p>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="right clearfix">*/
/*                         <span class="chat-img pull-right">*/
/*                             <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />*/
/*                         </span>*/
/*                         <div class="chat-body clearfix">*/
/*                             <div class="header">*/
/*                                 <small class=" text-muted">*/
/*                                     <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>*/
/*                                 <strong class="pull-right primary-font">Bhaumik Patel</strong>*/
/*                             </div>*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.*/
/*                             </p>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.panel-body -->*/
/*             <div class="panel-footer">*/
/*                 <div class="input-group">*/
/*                     <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />*/
/*                     <span class="input-group-btn">*/
/*                         <button class="btn btn-warning btn-sm" id="btn-chat">*/
/*                             Send*/
/*                         </button>*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.panel-footer -->*/
/*         </div>*/
/*         <!-- /.panel .chat-panel -->*/
/*     </div>*/
/*     <!-- /.col-lg-4 -->*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/*     <!-- DataTables JavaScript --> */
/*     <script src="{{ asset('/assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>*/
/*     <script src="{{ asset('/assets/vendor/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
