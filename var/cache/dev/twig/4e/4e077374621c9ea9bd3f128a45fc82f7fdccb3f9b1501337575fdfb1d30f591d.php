<?php

/* INITPlatformBundle:Default:navbar.html.twig */
class __TwigTemplate_6bdb3d8d7f577306e5139f34926a07dee4f6f0726140374fc3743f21501e19b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b162761cfbb1414f9bb265db07a93e4c02d1074df04fe7fd4ee49bb52986c4a = $this->env->getExtension("native_profiler");
        $__internal_6b162761cfbb1414f9bb265db07a93e4c02d1074df04fe7fd4ee49bb52986c4a->enter($__internal_6b162761cfbb1414f9bb265db07a93e4c02d1074df04fe7fd4ee49bb52986c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "INITPlatformBundle:Default:navbar.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("INITPlatformBundle:Default:navbarHeader", array("max" => 3)));
        echo "
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("INITPlatformBundle:Default:navbarDefault", array("max" => 3)));
        echo "

";
        
        $__internal_6b162761cfbb1414f9bb265db07a93e4c02d1074df04fe7fd4ee49bb52986c4a->leave($__internal_6b162761cfbb1414f9bb265db07a93e4c02d1074df04fe7fd4ee49bb52986c4a_prof);

    }

    public function getTemplateName()
    {
        return "INITPlatformBundle:Default:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {{ render(controller('INITPlatformBundle:Default:navbarHeader',{ 'max': 3 })) }}*/
/* {{ render(controller('INITPlatformBundle:Default:navbarDefault',{ 'max': 3 })) }}*/
/* */
/* */
