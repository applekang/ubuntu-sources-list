<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_55d93e2896641743c6c407412a740b5f126ff4e55691abf303423d7b4ab4c278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3a2c14b115e0bd0bb7d111cd4e908efc7432673ec24ffcbc9d2916182f869266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2c14b115e0bd0bb7d111cd4e908efc7432673ec24ffcbc9d2916182f869266->enter($__internal_3a2c14b115e0bd0bb7d111cd4e908efc7432673ec24ffcbc9d2916182f869266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9b7376d9bfcf790807b95451ddb5d9f778ea806469e84d9645c212670d4aaec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7376d9bfcf790807b95451ddb5d9f778ea806469e84d9645c212670d4aaec4->enter($__internal_9b7376d9bfcf790807b95451ddb5d9f778ea806469e84d9645c212670d4aaec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2c14b115e0bd0bb7d111cd4e908efc7432673ec24ffcbc9d2916182f869266->leave($__internal_3a2c14b115e0bd0bb7d111cd4e908efc7432673ec24ffcbc9d2916182f869266_prof);

        
        $__internal_9b7376d9bfcf790807b95451ddb5d9f778ea806469e84d9645c212670d4aaec4->leave($__internal_9b7376d9bfcf790807b95451ddb5d9f778ea806469e84d9645c212670d4aaec4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ae41d87a3a4eaa84c25713439547fc0e87e99f983c1a97ba4182002afb1499c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae41d87a3a4eaa84c25713439547fc0e87e99f983c1a97ba4182002afb1499c->enter($__internal_4ae41d87a3a4eaa84c25713439547fc0e87e99f983c1a97ba4182002afb1499c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42f3a57a9c6b6647c8fbf7ef406a52bb5b113a07a268993cd723527fb41b70fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f3a57a9c6b6647c8fbf7ef406a52bb5b113a07a268993cd723527fb41b70fd->enter($__internal_42f3a57a9c6b6647c8fbf7ef406a52bb5b113a07a268993cd723527fb41b70fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_42f3a57a9c6b6647c8fbf7ef406a52bb5b113a07a268993cd723527fb41b70fd->leave($__internal_42f3a57a9c6b6647c8fbf7ef406a52bb5b113a07a268993cd723527fb41b70fd_prof);

        
        $__internal_4ae41d87a3a4eaa84c25713439547fc0e87e99f983c1a97ba4182002afb1499c->leave($__internal_4ae41d87a3a4eaa84c25713439547fc0e87e99f983c1a97ba4182002afb1499c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1895e0e9cd76b598928af44b183b3970a878241450df4af3e3652fb78bf8394d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1895e0e9cd76b598928af44b183b3970a878241450df4af3e3652fb78bf8394d->enter($__internal_1895e0e9cd76b598928af44b183b3970a878241450df4af3e3652fb78bf8394d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3488e2b567fe402345ea9c8c72aaaeb65b22a4c838b42a0d00ce187d8fd57a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3488e2b567fe402345ea9c8c72aaaeb65b22a4c838b42a0d00ce187d8fd57a2f->enter($__internal_3488e2b567fe402345ea9c8c72aaaeb65b22a4c838b42a0d00ce187d8fd57a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3488e2b567fe402345ea9c8c72aaaeb65b22a4c838b42a0d00ce187d8fd57a2f->leave($__internal_3488e2b567fe402345ea9c8c72aaaeb65b22a4c838b42a0d00ce187d8fd57a2f_prof);

        
        $__internal_1895e0e9cd76b598928af44b183b3970a878241450df4af3e3652fb78bf8394d->leave($__internal_1895e0e9cd76b598928af44b183b3970a878241450df4af3e3652fb78bf8394d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cec7544527e5781994f4b1680c657de5eebd5db876746e1c12cad120f5b4be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cec7544527e5781994f4b1680c657de5eebd5db876746e1c12cad120f5b4be2->enter($__internal_3cec7544527e5781994f4b1680c657de5eebd5db876746e1c12cad120f5b4be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_934dbf991e184c0c8744d7e3fb3caf654bca8728526b991c8f2c219b5472f6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934dbf991e184c0c8744d7e3fb3caf654bca8728526b991c8f2c219b5472f6d1->enter($__internal_934dbf991e184c0c8744d7e3fb3caf654bca8728526b991c8f2c219b5472f6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_934dbf991e184c0c8744d7e3fb3caf654bca8728526b991c8f2c219b5472f6d1->leave($__internal_934dbf991e184c0c8744d7e3fb3caf654bca8728526b991c8f2c219b5472f6d1_prof);

        
        $__internal_3cec7544527e5781994f4b1680c657de5eebd5db876746e1c12cad120f5b4be2->leave($__internal_3cec7544527e5781994f4b1680c657de5eebd5db876746e1c12cad120f5b4be2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/symfony.com/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
