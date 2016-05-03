<?php

/* AnnoncesProductBundle:Default:index.html.twig */
class __TwigTemplate_3959a6d2f8d94a1a787879fca6303e34e9151a0118033db90eae2f75035e1595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AnnoncesProductBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8430175133d69c539385be659f674154a73ef91b268bec96f0dd231c0ac1d7 = $this->env->getExtension("native_profiler");
        $__internal_bd8430175133d69c539385be659f674154a73ef91b268bec96f0dd231c0ac1d7->enter($__internal_bd8430175133d69c539385be659f674154a73ef91b268bec96f0dd231c0ac1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnoncesProductBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd8430175133d69c539385be659f674154a73ef91b268bec96f0dd231c0ac1d7->leave($__internal_bd8430175133d69c539385be659f674154a73ef91b268bec96f0dd231c0ac1d7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d90ad63f7f98f0555381b453820aed1597507deec9556affd4ba3f77a5656d74 = $this->env->getExtension("native_profiler");
        $__internal_d90ad63f7f98f0555381b453820aed1597507deec9556affd4ba3f77a5656d74->enter($__internal_d90ad63f7f98f0555381b453820aed1597507deec9556affd4ba3f77a5656d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Annonces:Product";
        
        $__internal_d90ad63f7f98f0555381b453820aed1597507deec9556affd4ba3f77a5656d74->leave($__internal_d90ad63f7f98f0555381b453820aed1597507deec9556affd4ba3f77a5656d74_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_08a437925ae5bfdf86fba16934ced9eebd03724de72a8598799ad2d1a2aa1f49 = $this->env->getExtension("native_profiler");
        $__internal_08a437925ae5bfdf86fba16934ced9eebd03724de72a8598799ad2d1a2aa1f49->enter($__internal_08a437925ae5bfdf86fba16934ced9eebd03724de72a8598799ad2d1a2aa1f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"col-lg-8\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <i class=\"fa fa-bar-chart-o fa-fw\"></i> Bar Chart Example
                <div class=\"pull-right\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            Actions
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                            <li><a href=\"#\">Action</a>
                            </li>
                            <li><a href=\"#\">Another action</a>
                            </li>
                            <li><a href=\"#\">Something else here</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3326</td>
                                        <td>10/21/2013</td>
                                        <td>3:29 PM</td>
                                        <td>\$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>3325</td>
                                        <td>10/21/2013</td>
                                        <td>3:20 PM</td>
                                        <td>\$234.34</td>
                                    </tr>
                                    <tr>
                                        <td>3324</td>
                                        <td>10/21/2013</td>
                                        <td>3:03 PM</td>
                                        <td>\$724.17</td>
                                    </tr>
                                    <tr>
                                        <td>3323</td>
                                        <td>10/21/2013</td>
                                        <td>3:00 PM</td>
                                        <td>\$23.71</td>
                                    </tr>
                                    <tr>
                                        <td>3322</td>
                                        <td>10/21/2013</td>
                                        <td>2:49 PM</td>
                                        <td>\$8345.23</td>
                                    </tr>
                                    <tr>
                                        <td>3321</td>
                                        <td>10/21/2013</td>
                                        <td>2:23 PM</td>
                                        <td>\$245.12</td>
                                    </tr>
                                    <tr>
                                        <td>3320</td>
                                        <td>10/21/2013</td>
                                        <td>2:15 PM</td>
                                        <td>\$5663.54</td>
                                    </tr>
                                    <tr>
                                        <td>3319</td>
                                        <td>10/21/2013</td>
                                        <td>2:13 PM</td>
                                        <td>\$943.45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-4 (nested) -->
                    <div class=\"col-lg-8\">
                        <div id=\"morris-bar-chart\"></div>
                    </div>
                    <!-- /.col-lg-8 (nested) -->
                </div>
                <!-- /.row -->
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
        
        $__internal_08a437925ae5bfdf86fba16934ced9eebd03724de72a8598799ad2d1a2aa1f49->leave($__internal_08a437925ae5bfdf86fba16934ced9eebd03724de72a8598799ad2d1a2aa1f49_prof);

    }

    public function getTemplateName()
    {
        return "AnnoncesProductBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/Annonces/ProductBundle/Resources/views/Default/index.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Annonces:Product{% endblock %}*/
/* {% block body %}*/
/*     <div class="col-lg-8">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example*/
/*                 <div class="pull-right">*/
/*                     <div class="btn-group">*/
/*                         <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">*/
/*                             Actions*/
/*                             <span class="caret"></span>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu pull-right" role="menu">*/
/*                             <li><a href="#">Action</a>*/
/*                             </li>*/
/*                             <li><a href="#">Another action</a>*/
/*                             </li>*/
/*                             <li><a href="#">Something else here</a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="#">Separated link</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.panel-heading -->*/
/*             <div class="panel-body">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-bordered table-hover table-striped">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>#</th>*/
/*                                         <th>Date</th>*/
/*                                         <th>Time</th>*/
/*                                         <th>Amount</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     <tr>*/
/*                                         <td>3326</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>3:29 PM</td>*/
/*                                         <td>$321.33</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3325</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>3:20 PM</td>*/
/*                                         <td>$234.34</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3324</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>3:03 PM</td>*/
/*                                         <td>$724.17</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3323</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>3:00 PM</td>*/
/*                                         <td>$23.71</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3322</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>2:49 PM</td>*/
/*                                         <td>$8345.23</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3321</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>2:23 PM</td>*/
/*                                         <td>$245.12</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3320</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>2:15 PM</td>*/
/*                                         <td>$5663.54</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3319</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>2:13 PM</td>*/
/*                                         <td>$943.45</td>*/
/*                                     </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                         <!-- /.table-responsive -->*/
/*                     </div>*/
/*                     <!-- /.col-lg-4 (nested) -->*/
/*                     <div class="col-lg-8">*/
/*                         <div id="morris-bar-chart"></div>*/
/*                     </div>*/
/*                     <!-- /.col-lg-8 (nested) -->*/
/*                 </div>*/
/*                 <!-- /.row -->*/
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
/* */
