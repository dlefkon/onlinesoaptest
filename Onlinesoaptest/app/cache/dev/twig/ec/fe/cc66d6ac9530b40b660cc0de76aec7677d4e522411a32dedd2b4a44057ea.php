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
        return array (  95 => 18,  90 => 19,  82 => 16,  71 => 9,  68 => 8,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  36 => 21,  31 => 15,  24 => 1,  310 => 202,  307 => 201,  302 => 212,  300 => 201,  283 => 189,  216 => 124,  213 => 123,  150 => 49,  147 => 48,  142 => 214,  140 => 123,  128 => 113,  126 => 112,  115 => 103,  113 => 48,  110 => 47,  107 => 46,  97 => 22,  93 => 21,  88 => 18,  85 => 17,  76 => 10,  70 => 37,  62 => 7,  56 => 28,  54 => 12,  37 => 4,  34 => 16,  439 => 320,  432 => 318,  424 => 315,  418 => 314,  415 => 313,  413 => 312,  410 => 311,  406 => 310,  395 => 302,  389 => 299,  383 => 296,  259 => 175,  254 => 173,  250 => 172,  246 => 171,  242 => 170,  238 => 169,  234 => 168,  230 => 167,  226 => 166,  222 => 165,  217 => 163,  210 => 159,  207 => 112,  204 => 157,  176 => 131,  172 => 130,  155 => 116,  151 => 115,  135 => 102,  131 => 101,  29 => 4,);
    }
}
