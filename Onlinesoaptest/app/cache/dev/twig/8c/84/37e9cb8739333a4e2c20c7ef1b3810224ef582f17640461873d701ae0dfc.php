<?php

/* OnlinesoaptestBundle:Default:about.html.twig */
class __TwigTemplate_8c8437e9cb8739333a4e2c20c7ef1b3810224ef582f17640461873d701ae0dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlinesoaptestBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlinesoaptestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t\t\t
\tI was searching the web one fine day as you are doing today, <br>
\tand was not able to find an online resource to test some SOAP functionlity <br>
\tI was building into a PHP application.  <br>
\tI was unable to find a useable one that didn't have to be downloaded.  <br>
\tSoo .. I decided to make one.<br>
\t<br>
\tThis is kinda still in a beta stage and I would welcome any feedback you have.<br>
\t<br>
\tThanks,
\t<br>
\tDavid
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,);
    }
}
