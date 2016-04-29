<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_244e9354b27215d7729f105be6dabc95d322144a5679636d759d095f08b42eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98fedfbe3e345569ad0eb6fc8497d94603c3a3d4020dfd53ce918e2b86d93d2a = $this->env->getExtension("native_profiler");
        $__internal_98fedfbe3e345569ad0eb6fc8497d94603c3a3d4020dfd53ce918e2b86d93d2a->enter($__internal_98fedfbe3e345569ad0eb6fc8497d94603c3a3d4020dfd53ce918e2b86d93d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98fedfbe3e345569ad0eb6fc8497d94603c3a3d4020dfd53ce918e2b86d93d2a->leave($__internal_98fedfbe3e345569ad0eb6fc8497d94603c3a3d4020dfd53ce918e2b86d93d2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b40f46b7d139f6a8d53d23343561d552cf4509a41ef67836ebe7aa961db56b9d = $this->env->getExtension("native_profiler");
        $__internal_b40f46b7d139f6a8d53d23343561d552cf4509a41ef67836ebe7aa961db56b9d->enter($__internal_b40f46b7d139f6a8d53d23343561d552cf4509a41ef67836ebe7aa961db56b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b40f46b7d139f6a8d53d23343561d552cf4509a41ef67836ebe7aa961db56b9d->leave($__internal_b40f46b7d139f6a8d53d23343561d552cf4509a41ef67836ebe7aa961db56b9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cfe09315157b0c94c695161a0f9a6c29331609cbdaf3d59bfc4917446ee2629 = $this->env->getExtension("native_profiler");
        $__internal_5cfe09315157b0c94c695161a0f9a6c29331609cbdaf3d59bfc4917446ee2629->enter($__internal_5cfe09315157b0c94c695161a0f9a6c29331609cbdaf3d59bfc4917446ee2629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5cfe09315157b0c94c695161a0f9a6c29331609cbdaf3d59bfc4917446ee2629->leave($__internal_5cfe09315157b0c94c695161a0f9a6c29331609cbdaf3d59bfc4917446ee2629_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6011dada8d7de25bb53903af07b5be891c12ca372ff6aed15ef7191283e2806 = $this->env->getExtension("native_profiler");
        $__internal_e6011dada8d7de25bb53903af07b5be891c12ca372ff6aed15ef7191283e2806->enter($__internal_e6011dada8d7de25bb53903af07b5be891c12ca372ff6aed15ef7191283e2806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6011dada8d7de25bb53903af07b5be891c12ca372ff6aed15ef7191283e2806->leave($__internal_e6011dada8d7de25bb53903af07b5be891c12ca372ff6aed15ef7191283e2806_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
