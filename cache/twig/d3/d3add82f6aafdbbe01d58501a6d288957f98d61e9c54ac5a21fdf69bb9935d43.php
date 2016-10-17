<?php

/* /Views/Shared/_navbar.twig */
class __TwigTemplate_05a43b32dfb09c1090fe9b621f051afa565a44ae9315526dde995fdf5b2c4f11 extends Twig_Template
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
        echo "<div class=\"navbar-custom-menu\">
  <ul class=\"nav navbar-nav\">
       
    <!-- User Account: style can be found in dropdown.less -->
    <li class=\"dropdown user user-menu\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <img src=\"dist/img/PersonaIcono-02.png\" class=\"user-image\" alt=\"User Image\">
        <span class=\"hidden-xs\">
          ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "usuario", array()), "usu_nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "usuario", array()), "usu_apellidoPaterno", array()), "html", null, true);
        echo "
        </span>
      </a>
      <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
          <img src=\"dist/img/PersonaIcono-02.png\" class=\"img-circle\" alt=\"User Image\">

          <p>
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "usuario", array()), "usu_nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "usuario", array()), "usu_apellidoPaterno", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "usuario", array()), "usu_usuario", array()), "html", null, true);
        echo "</br> Web Developer
            <small>Miembro desde ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "usuario", array()), "usu_fechaAlta", array()), "html", null, true);
        echo "</small>
          </p>
        </li>
        <!-- Menu Body -->
        
        <!-- Menu Footer-->
        <li class=\"user-footer\">
          <!--
          <div class=\"pull-left\">
            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
          </div>
          -->
          <div class=\"pull-right\">
            <a href=\"./signOut\" class=\"btn btn-default btn-flat\">Salir</a>
          </div>
        </li>
      </ul>
    </li>
    <!-- Control Sidebar Toggle Button -->
    <li>
      <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
    </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Views/Shared/_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  43 => 18,  29 => 9,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"navbar-custom-menu\">
  <ul class=\"nav navbar-nav\">
       
    <!-- User Account: style can be found in dropdown.less -->
    <li class=\"dropdown user user-menu\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <img src=\"dist/img/PersonaIcono-02.png\" class=\"user-image\" alt=\"User Image\">
        <span class=\"hidden-xs\">
          {{ session.usuario.usu_nombre }} {{ session.usuario.usu_apellidoPaterno }}
        </span>
      </a>
      <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
          <img src=\"dist/img/PersonaIcono-02.png\" class=\"img-circle\" alt=\"User Image\">

          <p>
            {{ session.usuario.usu_nombre }} {{ session.usuario.usu_apellidoPaterno }}-{{ session.usuario.usu_usuario }}</br> Web Developer
            <small>Miembro desde {{ session.usuario.usu_fechaAlta }}</small>
          </p>
        </li>
        <!-- Menu Body -->
        
        <!-- Menu Footer-->
        <li class=\"user-footer\">
          <!--
          <div class=\"pull-left\">
            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
          </div>
          -->
          <div class=\"pull-right\">
            <a href=\"./signOut\" class=\"btn btn-default btn-flat\">Salir</a>
          </div>
        </li>
      </ul>
    </li>
    <!-- Control Sidebar Toggle Button -->
    <li>
      <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
    </li>
  </ul>
</div>
";
    }
}
