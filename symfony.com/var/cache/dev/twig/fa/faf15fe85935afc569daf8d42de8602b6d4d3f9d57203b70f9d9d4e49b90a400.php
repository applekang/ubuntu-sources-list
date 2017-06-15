<?php

/* base.html.twig */
class __TwigTemplate_800f016a509a651c87e7a376a40b2261c57ba78cdaf77ab1a4537ad4f7850fe4 extends Twig_Template
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
        $__internal_714132ee27f27f9b441cbd30efbffed06bea04f28c64921704c12aa559c50e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714132ee27f27f9b441cbd30efbffed06bea04f28c64921704c12aa559c50e35->enter($__internal_714132ee27f27f9b441cbd30efbffed06bea04f28c64921704c12aa559c50e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_17c7c8f7370d483c863cc82404632424a44d9603a2bdbd1cf98d773e047ac6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c7c8f7370d483c863cc82404632424a44d9603a2bdbd1cf98d773e047ac6e9->enter($__internal_17c7c8f7370d483c863cc82404632424a44d9603a2bdbd1cf98d773e047ac6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_714132ee27f27f9b441cbd30efbffed06bea04f28c64921704c12aa559c50e35->leave($__internal_714132ee27f27f9b441cbd30efbffed06bea04f28c64921704c12aa559c50e35_prof);

        
        $__internal_17c7c8f7370d483c863cc82404632424a44d9603a2bdbd1cf98d773e047ac6e9->leave($__internal_17c7c8f7370d483c863cc82404632424a44d9603a2bdbd1cf98d773e047ac6e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_132af02c29f659497720a3beb2e81f9fcdc294e377cafc8e55aa606175cc5ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132af02c29f659497720a3beb2e81f9fcdc294e377cafc8e55aa606175cc5ac3->enter($__internal_132af02c29f659497720a3beb2e81f9fcdc294e377cafc8e55aa606175cc5ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7097c32910be49f5a2dcd8852e3e42488f1d087a958690029265d258c7f2411c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7097c32910be49f5a2dcd8852e3e42488f1d087a958690029265d258c7f2411c->enter($__internal_7097c32910be49f5a2dcd8852e3e42488f1d087a958690029265d258c7f2411c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7097c32910be49f5a2dcd8852e3e42488f1d087a958690029265d258c7f2411c->leave($__internal_7097c32910be49f5a2dcd8852e3e42488f1d087a958690029265d258c7f2411c_prof);

        
        $__internal_132af02c29f659497720a3beb2e81f9fcdc294e377cafc8e55aa606175cc5ac3->leave($__internal_132af02c29f659497720a3beb2e81f9fcdc294e377cafc8e55aa606175cc5ac3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f817dd07215643c04d57ea8066004936b3c05fd923f941f79edbd9e385f34f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f817dd07215643c04d57ea8066004936b3c05fd923f941f79edbd9e385f34f83->enter($__internal_f817dd07215643c04d57ea8066004936b3c05fd923f941f79edbd9e385f34f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7312c50fa806e3497d66826d16c30545a35e2501c62fe3a6d60e69e8f3639301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7312c50fa806e3497d66826d16c30545a35e2501c62fe3a6d60e69e8f3639301->enter($__internal_7312c50fa806e3497d66826d16c30545a35e2501c62fe3a6d60e69e8f3639301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7312c50fa806e3497d66826d16c30545a35e2501c62fe3a6d60e69e8f3639301->leave($__internal_7312c50fa806e3497d66826d16c30545a35e2501c62fe3a6d60e69e8f3639301_prof);

        
        $__internal_f817dd07215643c04d57ea8066004936b3c05fd923f941f79edbd9e385f34f83->leave($__internal_f817dd07215643c04d57ea8066004936b3c05fd923f941f79edbd9e385f34f83_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e2ef0d59bc3d3fc4b76f36bd81199ebfa06a71ce7b4af59d8e91601d483b11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2ef0d59bc3d3fc4b76f36bd81199ebfa06a71ce7b4af59d8e91601d483b11d->enter($__internal_1e2ef0d59bc3d3fc4b76f36bd81199ebfa06a71ce7b4af59d8e91601d483b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceac8fa20d601b5d954eef95b5a14442e02a39709c177981767ee760ddc72e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceac8fa20d601b5d954eef95b5a14442e02a39709c177981767ee760ddc72e34->enter($__internal_ceac8fa20d601b5d954eef95b5a14442e02a39709c177981767ee760ddc72e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ceac8fa20d601b5d954eef95b5a14442e02a39709c177981767ee760ddc72e34->leave($__internal_ceac8fa20d601b5d954eef95b5a14442e02a39709c177981767ee760ddc72e34_prof);

        
        $__internal_1e2ef0d59bc3d3fc4b76f36bd81199ebfa06a71ce7b4af59d8e91601d483b11d->leave($__internal_1e2ef0d59bc3d3fc4b76f36bd81199ebfa06a71ce7b4af59d8e91601d483b11d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f8f861a29d55b76360f217db80065989da3957ae88ac809aa1c0f0c4b61829b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8f861a29d55b76360f217db80065989da3957ae88ac809aa1c0f0c4b61829b->enter($__internal_0f8f861a29d55b76360f217db80065989da3957ae88ac809aa1c0f0c4b61829b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cef277ac7e4c6d414ffdcdca09200d9e4ace03acb75232bb36755a75b47fa2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef277ac7e4c6d414ffdcdca09200d9e4ace03acb75232bb36755a75b47fa2e9->enter($__internal_cef277ac7e4c6d414ffdcdca09200d9e4ace03acb75232bb36755a75b47fa2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cef277ac7e4c6d414ffdcdca09200d9e4ace03acb75232bb36755a75b47fa2e9->leave($__internal_cef277ac7e4c6d414ffdcdca09200d9e4ace03acb75232bb36755a75b47fa2e9_prof);

        
        $__internal_0f8f861a29d55b76360f217db80065989da3957ae88ac809aa1c0f0c4b61829b->leave($__internal_0f8f861a29d55b76360f217db80065989da3957ae88ac809aa1c0f0c4b61829b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony.com/app/Resources/views/base.html.twig");
    }
}
