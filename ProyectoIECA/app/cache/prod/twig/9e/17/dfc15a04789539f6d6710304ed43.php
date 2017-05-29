<?php

/* miBundle:Default:index.html.twig */
class __TwigTemplate_9e17dfc15a04789539f6d6710304ed43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
    </head>
    <body>
        <!-- Dropdown Structure -->
<ul id=\"dropdown1\" class=\"dropdown-content\">
  <li><a href=\"#!\">one</a></li>
  <li><a href=\"#!\">two</a></li>
  <li class=\"divider\"></li>
  <li><a href=\"#!\">three</a></li>
</ul>
<nav>
  <div class=\"nav-wrapper\">
    <a href=\"#!\" class=\"brand-logo\">Logo</a>
    <ul class=\"right hide-on-med-and-down\">
      <li><a href=\"sass.html\">Sass</a></li>
      <li><a href=\"badges.html\">Components</a></li>
      <!-- Dropdown Trigger -->
      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Dropdown<i class=\"material-icons right\">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "miBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
