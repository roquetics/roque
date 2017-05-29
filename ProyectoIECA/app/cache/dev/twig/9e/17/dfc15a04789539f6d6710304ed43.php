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
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/css/materialize.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/css/materialize.min.css"), "html", null, true);
        echo "\">
    </head>
    <body  BGCOLOR=\"#FEF9E7\">
       <nav>
    <div class=\"nav-wrapper #1a237e indigo darken-4\">
      <a href=\"#\" class=\"brand-logo\">IECA</a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
        <li><a href=\"sass.html\">Inicio</a></li>
        <li><a href=\"badges.html\">Cursos</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("mi_Login");
        echo "\">Iniciar Sesion</a></li>
      </ul>
    </div>
  </nav>
    <div class=\"carousel\">
    <a class=\"carousel-item\" href=\"#one!\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/images/belleza.jpg"), "html", null, true);
        echo "\"></a>
    <a class=\"carousel-item\" href=\"#two!\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/images/comida.jpg"), "html", null, true);
        echo "\"></a>
    <a class=\"carousel-item\" href=\"#three!\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/images/computacion.png"), "html", null, true);
        echo "\"></a>
    <a class=\"carousel-item\" href=\"#four!\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/images/mecanica.jpg"), "html", null, true);
        echo "\"></a>
    <a class=\"carousel-item\" href=\"#five!\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/images/postre.jpg"), "html", null, true);
        echo "\"></a>
  </div>
      
 </body>
</html>
<script type=\"application/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"application/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/js/materialize.js"), "html", null, true);
        echo "\"></script>
<script type=\"application/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
     
<script>
\$(document).ready(function(){
      \$('.carousel').carousel();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "miBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  71 => 27,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  39 => 13,  27 => 4,  23 => 3,  19 => 1,);
    }
}
