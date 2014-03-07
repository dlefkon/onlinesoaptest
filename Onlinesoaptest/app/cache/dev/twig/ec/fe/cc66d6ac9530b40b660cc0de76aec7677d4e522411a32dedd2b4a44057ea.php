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
        return array (  95 => 18,  90 => 19,  82 => 16,  71 => 9,  68 => 8,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  36 => 21,  31 => 15,  24 => 1,  449 => 341,  446 => 340,  441 => 351,  439 => 340,  422 => 328,  216 => 124,  213 => 123,  207 => 112,  150 => 49,  147 => 48,  142 => 353,  140 => 123,  128 => 113,  126 => 112,  115 => 103,  113 => 48,  110 => 47,  97 => 22,  93 => 21,  88 => 18,  85 => 17,  76 => 10,  70 => 37,  62 => 7,  56 => 28,  54 => 12,  37 => 4,  34 => 16,  390 => 271,  383 => 269,  375 => 266,  369 => 265,  366 => 264,  364 => 263,  361 => 262,  357 => 261,  346 => 253,  340 => 250,  334 => 247,  235 => 151,  230 => 149,  226 => 148,  222 => 147,  218 => 146,  214 => 145,  210 => 144,  206 => 143,  202 => 142,  198 => 141,  193 => 139,  186 => 135,  183 => 134,  180 => 133,  152 => 107,  148 => 106,  131 => 92,  127 => 91,  111 => 78,  107 => 46,  29 => 4,);
    }
}
