<?php

/* miBundle:Default:Login.html.twig */
class __TwigTemplate_993baa4d66bf83dbb1e14de0d6463b9c extends Twig_Template
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
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Public/css/estilos.css"), "html", null, true);
        echo "\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    </head>
    <body  BGCOLOR=\"#FEF9E7\">
        <nav>
    <div class=\"nav-wrapper #1a237e indigo darken-4\">
      <a href=\"#\" class=\"brand-logo\">IECA</a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
        <li><a href=\"sass.html\">Inicio</a></li>
        <li><a href=\"badges.html\">Cursos</a></li>
     
      </ul>
    </div>
  </nav>
 <div id=\"login\">

    <div class=\"row\">
    <form class=\"col s12\" align=\"center\">
      <div class=\"row\">
        <div class=\"input-field col s15\">
          <i class=\"material-icons prefix\">account_circle</i>
          <input id=\"email\" type=\"text\" class=\"validate\">
          <label for=\"email\">Correo</label>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"input-field col s15\">
          <i class=\"material-icons prefix\">phone</i>
          <input id=\"icon_telephone\" type=\"tel\" class=\"validate\">
          <label for=\"icon_telephone\">Contraseña</label>
        </div>
      </div>
        
    </form>
  </div>
        

      </div>

    </form>
  </div>
        
   
 </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "miBundle:Default:Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
