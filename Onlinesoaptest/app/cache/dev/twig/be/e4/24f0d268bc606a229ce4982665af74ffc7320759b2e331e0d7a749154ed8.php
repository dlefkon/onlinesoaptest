<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bee424f0d268bc606a229ce4982665af74ffc7320759b2e331e0d7a749154ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  40 => 7,  33 => 4,  30 => 3,  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 10,  71 => 9,  62 => 7,  54 => 11,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  31 => 15,  29 => 4,  24 => 1,  407 => 237,  405 => 236,  391 => 224,  388 => 223,  383 => 241,  381 => 223,  366 => 213,  303 => 152,  295 => 145,  292 => 144,  286 => 133,  266 => 89,  260 => 88,  235 => 68,  229 => 67,  215 => 55,  213 => 54,  204 => 47,  201 => 46,  196 => 243,  194 => 144,  182 => 134,  180 => 133,  173 => 128,  163 => 124,  159 => 122,  155 => 121,  152 => 120,  142 => 116,  138 => 114,  134 => 113,  122 => 103,  120 => 46,  115 => 44,  112 => 43,  109 => 42,  103 => 23,  99 => 22,  95 => 18,  91 => 20,  86 => 19,  83 => 18,  74 => 36,  68 => 8,  61 => 29,  55 => 25,  53 => 18,  37 => 4,  50 => 12,  43 => 8,  39 => 7,  36 => 21,  34 => 16,  28 => 3,);
    }
}
