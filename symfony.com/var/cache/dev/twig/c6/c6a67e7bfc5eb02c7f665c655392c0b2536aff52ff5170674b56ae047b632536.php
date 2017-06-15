<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5b712adbfe12e7c866a4c67439b6a3980ee5996e786786a1cda6ad79515c8c98 extends Twig_Template
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
        $__internal_22a9ff64d0fb8c0e76276564f050b962c33401c091ba7f7e0cce38e6664a368f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a9ff64d0fb8c0e76276564f050b962c33401c091ba7f7e0cce38e6664a368f->enter($__internal_22a9ff64d0fb8c0e76276564f050b962c33401c091ba7f7e0cce38e6664a368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b0a97c770df1e6d84bd52cdf18b0a3c620263cd3ba94f4aef454dba9aa887395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a97c770df1e6d84bd52cdf18b0a3c620263cd3ba94f4aef454dba9aa887395->enter($__internal_b0a97c770df1e6d84bd52cdf18b0a3c620263cd3ba94f4aef454dba9aa887395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a9ff64d0fb8c0e76276564f050b962c33401c091ba7f7e0cce38e6664a368f->leave($__internal_22a9ff64d0fb8c0e76276564f050b962c33401c091ba7f7e0cce38e6664a368f_prof);

        
        $__internal_b0a97c770df1e6d84bd52cdf18b0a3c620263cd3ba94f4aef454dba9aa887395->leave($__internal_b0a97c770df1e6d84bd52cdf18b0a3c620263cd3ba94f4aef454dba9aa887395_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1016c0cb805502db261e9003b756a4b1ae197285c68afe842bbdd9eaddffb0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1016c0cb805502db261e9003b756a4b1ae197285c68afe842bbdd9eaddffb0e2->enter($__internal_1016c0cb805502db261e9003b756a4b1ae197285c68afe842bbdd9eaddffb0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22c60ba5bec73df98558ac2be78f6b5e41f6a4cbb1d3e10741a2e519fd761724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c60ba5bec73df98558ac2be78f6b5e41f6a4cbb1d3e10741a2e519fd761724->enter($__internal_22c60ba5bec73df98558ac2be78f6b5e41f6a4cbb1d3e10741a2e519fd761724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22c60ba5bec73df98558ac2be78f6b5e41f6a4cbb1d3e10741a2e519fd761724->leave($__internal_22c60ba5bec73df98558ac2be78f6b5e41f6a4cbb1d3e10741a2e519fd761724_prof);

        
        $__internal_1016c0cb805502db261e9003b756a4b1ae197285c68afe842bbdd9eaddffb0e2->leave($__internal_1016c0cb805502db261e9003b756a4b1ae197285c68afe842bbdd9eaddffb0e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_761a613f23207d24e3849d7b611b5a28ab2a167def3e2ef6ebd653c6a32271ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761a613f23207d24e3849d7b611b5a28ab2a167def3e2ef6ebd653c6a32271ea->enter($__internal_761a613f23207d24e3849d7b611b5a28ab2a167def3e2ef6ebd653c6a32271ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d65407fc86b5ea31036eaa19e1269d1d8d09b23b0eebc97e40225f9bcfbc7cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65407fc86b5ea31036eaa19e1269d1d8d09b23b0eebc97e40225f9bcfbc7cbf->enter($__internal_d65407fc86b5ea31036eaa19e1269d1d8d09b23b0eebc97e40225f9bcfbc7cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d65407fc86b5ea31036eaa19e1269d1d8d09b23b0eebc97e40225f9bcfbc7cbf->leave($__internal_d65407fc86b5ea31036eaa19e1269d1d8d09b23b0eebc97e40225f9bcfbc7cbf_prof);

        
        $__internal_761a613f23207d24e3849d7b611b5a28ab2a167def3e2ef6ebd653c6a32271ea->leave($__internal_761a613f23207d24e3849d7b611b5a28ab2a167def3e2ef6ebd653c6a32271ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ec78ee7ef6ef855b48bdf9a5d08fbdf2e14e5eeaa1910daa509a1843ba4a9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec78ee7ef6ef855b48bdf9a5d08fbdf2e14e5eeaa1910daa509a1843ba4a9fe->enter($__internal_3ec78ee7ef6ef855b48bdf9a5d08fbdf2e14e5eeaa1910daa509a1843ba4a9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c18ae4427c3a0b9afc76fe8428eb1ec4d6f33d8bc61edc7b8f471070532f3bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18ae4427c3a0b9afc76fe8428eb1ec4d6f33d8bc61edc7b8f471070532f3bfc->enter($__internal_c18ae4427c3a0b9afc76fe8428eb1ec4d6f33d8bc61edc7b8f471070532f3bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c18ae4427c3a0b9afc76fe8428eb1ec4d6f33d8bc61edc7b8f471070532f3bfc->leave($__internal_c18ae4427c3a0b9afc76fe8428eb1ec4d6f33d8bc61edc7b8f471070532f3bfc_prof);

        
        $__internal_3ec78ee7ef6ef855b48bdf9a5d08fbdf2e14e5eeaa1910daa509a1843ba4a9fe->leave($__internal_3ec78ee7ef6ef855b48bdf9a5d08fbdf2e14e5eeaa1910daa509a1843ba4a9fe_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony.com/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
