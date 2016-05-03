<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a8bd7d039e9b8e869c6b2ab13dabf09ba86339854e8fd10f1ccbf1a6b663e11a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0224f117e1b672c0c2c7d6c933627c7dca8c790b765b45965dc1f01e3b33e6de = $this->env->getExtension("native_profiler");
        $__internal_0224f117e1b672c0c2c7d6c933627c7dca8c790b765b45965dc1f01e3b33e6de->enter($__internal_0224f117e1b672c0c2c7d6c933627c7dca8c790b765b45965dc1f01e3b33e6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0224f117e1b672c0c2c7d6c933627c7dca8c790b765b45965dc1f01e3b33e6de->leave($__internal_0224f117e1b672c0c2c7d6c933627c7dca8c790b765b45965dc1f01e3b33e6de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83bcd4d4685dc803e3619796b8be6f22ca4c78b0c60f38eea0aed22ad73856b4 = $this->env->getExtension("native_profiler");
        $__internal_83bcd4d4685dc803e3619796b8be6f22ca4c78b0c60f38eea0aed22ad73856b4->enter($__internal_83bcd4d4685dc803e3619796b8be6f22ca4c78b0c60f38eea0aed22ad73856b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83bcd4d4685dc803e3619796b8be6f22ca4c78b0c60f38eea0aed22ad73856b4->leave($__internal_83bcd4d4685dc803e3619796b8be6f22ca4c78b0c60f38eea0aed22ad73856b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33dd7eb798d8df5e725c757ced7e2a536c38604f9ee8cab509b673e5c12fe67c = $this->env->getExtension("native_profiler");
        $__internal_33dd7eb798d8df5e725c757ced7e2a536c38604f9ee8cab509b673e5c12fe67c->enter($__internal_33dd7eb798d8df5e725c757ced7e2a536c38604f9ee8cab509b673e5c12fe67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33dd7eb798d8df5e725c757ced7e2a536c38604f9ee8cab509b673e5c12fe67c->leave($__internal_33dd7eb798d8df5e725c757ced7e2a536c38604f9ee8cab509b673e5c12fe67c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_151de35470132a7f81f94a8cdd2663efa5f6d5c5956e10da8cbfe2d2d6ad6717 = $this->env->getExtension("native_profiler");
        $__internal_151de35470132a7f81f94a8cdd2663efa5f6d5c5956e10da8cbfe2d2d6ad6717->enter($__internal_151de35470132a7f81f94a8cdd2663efa5f6d5c5956e10da8cbfe2d2d6ad6717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_151de35470132a7f81f94a8cdd2663efa5f6d5c5956e10da8cbfe2d2d6ad6717->leave($__internal_151de35470132a7f81f94a8cdd2663efa5f6d5c5956e10da8cbfe2d2d6ad6717_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
