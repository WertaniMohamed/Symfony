<?php

/* INITPlatformBundle:Default:navbar.html.twig */
class __TwigTemplate_902deff35528be49dc22b264b5c68f9c80545ad55bd81dff7c891eccb6779cfd extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("INITPlatformBundle:Default:navbarHeader", array("max" => 3)));
        echo "
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("INITPlatformBundle:Default:navbarDefault", array("max" => 3)));
        echo "

";
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
        return array (  23 => 2,  19 => 1,);
    }
}
/* {{ render(controller('INITPlatformBundle:Default:navbarHeader',{ 'max': 3 })) }}*/
/* {{ render(controller('INITPlatformBundle:Default:navbarDefault',{ 'max': 3 })) }}*/
/* */
/* */
