<?php

/* base.html.twig */
class __TwigTemplate_ecfecc66d6ac9530b40b660cc0de76aec7677d4e522411a32dedd2b4a44057ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    <body>
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 10,  71 => 9,  62 => 7,  54 => 12,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  31 => 15,  29 => 4,  24 => 1,  407 => 237,  405 => 236,  391 => 224,  388 => 223,  383 => 241,  381 => 223,  366 => 213,  303 => 152,  295 => 145,  292 => 144,  286 => 133,  266 => 89,  260 => 88,  235 => 68,  229 => 67,  215 => 55,  213 => 54,  204 => 47,  201 => 46,  196 => 243,  194 => 144,  182 => 134,  180 => 133,  173 => 128,  163 => 124,  159 => 122,  155 => 121,  152 => 120,  142 => 116,  138 => 114,  134 => 113,  122 => 103,  120 => 46,  115 => 44,  112 => 43,  109 => 42,  103 => 23,  99 => 22,  95 => 18,  91 => 20,  86 => 19,  83 => 18,  74 => 36,  68 => 8,  61 => 29,  55 => 25,  53 => 18,  37 => 4,  50 => 12,  43 => 8,  39 => 7,  36 => 21,  34 => 16,  28 => 3,);
    }
}
