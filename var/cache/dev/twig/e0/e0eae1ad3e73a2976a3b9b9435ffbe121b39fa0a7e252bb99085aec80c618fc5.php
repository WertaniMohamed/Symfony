<?php

/* INITPlatformBundle:Default:navbar.html.twig */
class __TwigTemplate_0b250ddab32d912ba88d7e70f452cadeed847ae825b2162be8f6e5b47827a842 extends Twig_Template
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
        $__internal_2a75ae8ae07fbfac4d494e75f5f64f836fc918fe759093277cb987f3797fee96 = $this->env->getExtension("native_profiler");
        $__internal_2a75ae8ae07fbfac4d494e75f5f64f836fc918fe759093277cb987f3797fee96->enter($__internal_2a75ae8ae07fbfac4d494e75f5f64f836fc918fe759093277cb987f3797fee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "INITPlatformBundle:Default:navbar.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("INITPlatformBundle:Default:navbarHeader", array("max" => 3)));
        echo "
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("INITPlatformBundle:Default:navbarDefault", array("max" => 3)));
        echo "

";
        
        $__internal_2a75ae8ae07fbfac4d494e75f5f64f836fc918fe759093277cb987f3797fee96->leave($__internal_2a75ae8ae07fbfac4d494e75f5f64f836fc918fe759093277cb987f3797fee96_prof);

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
