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
        return array (  95 => 18,  88 => 18,  85 => 17,  82 => 16,  68 => 8,  54 => 12,  44 => 5,  41 => 4,  36 => 21,  31 => 15,  29 => 4,  24 => 1,  418 => 242,  416 => 241,  402 => 229,  399 => 228,  394 => 246,  392 => 228,  377 => 218,  347 => 190,  345 => 189,  308 => 154,  300 => 147,  297 => 146,  291 => 135,  271 => 91,  265 => 90,  240 => 70,  234 => 69,  214 => 51,  211 => 50,  206 => 248,  204 => 146,  192 => 136,  190 => 135,  183 => 130,  173 => 126,  169 => 124,  165 => 123,  162 => 122,  152 => 118,  148 => 116,  144 => 115,  132 => 105,  130 => 50,  125 => 48,  122 => 47,  119 => 46,  113 => 27,  109 => 26,  105 => 25,  96 => 23,  93 => 22,  84 => 40,  78 => 37,  71 => 9,  65 => 29,  63 => 22,  53 => 15,  49 => 14,  37 => 4,  34 => 16,  101 => 24,  94 => 35,  90 => 19,  87 => 33,  80 => 29,  76 => 10,  73 => 27,  66 => 23,  62 => 7,  59 => 21,  52 => 8,  48 => 7,  45 => 15,  43 => 14,  28 => 3,);
    }
}
