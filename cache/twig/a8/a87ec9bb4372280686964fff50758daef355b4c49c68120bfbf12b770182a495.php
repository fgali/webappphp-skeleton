<?php

/* login.twig */
class __TwigTemplate_c231870fb3459fb5a91c2d0705772d448df1a6f555370c74976a005ef51acb38 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>RIC | Log in</title>
  
\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"dist/img/icon.png\">

    <link rel=\"stylesheet\" href=\"plugins/Bootstrap-3.3.6/css/bootstrap.min.css\">
    
    <script src=\"plugins/jQuery/jquery-2.2.3.min.js\"></script>
\t
    <script src=\"plugins/Bootstrap-3.3.6/js/bootstrap.min.js\"></script>\t

\t<link href=\"https://fonts.googleapis.com/css?family=Oxygen\" rel=\"stylesheet\">

    <link href=\"dist/css/login.css\" rel=\"stylesheet\" />


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->

    <script>
\t\t\$(document).ready(function () {

\t\t});
    </script>

</head>
<body class=\"hold-transition login-page\">
\t
    <div class=\"login-box\">
            <image src=\"../public/dist/img/logo.png\" style=\"width:570px;\">\t
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Entrar al sistema</p>
            
            <form id=\"Login\" method=\"post\" action=\"./login\" role=\"form\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <span class=\"input-group-addon\" id=\"basic-addon1\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-user\"></span>
\t\t\t\t\t  </span>
\t\t\t\t\t  <input type=\"text\" id=\"usuario\" name=\"usuario\" class=\"form-control\" placeholder=\"Usuario\" aria-describedby=\"basic-addon1\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : null), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <span class=\"input-group-addon\" id=\"basic-addon2\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-lock\"></span>
\t\t\t\t\t  </span>
\t\t\t\t\t  <input type=\"password\" id=\"contrasena\" name=\"contrasena\" class=\"form-control\" placeholder=\"Contraseña\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t</div>
\t\t\t\t</div>

                <!--<div class=\"form-group has-feedback\">
                    <input type=\"text\" id=\"usuario\" name=\"usuario\" class=\"form-control\" placeholder=\"Usuario\">
                    <span class=\"glyphicon glyphicon-user form-control-feedback \"></span>
                </div>
                <div class=\"form-group has-feedback\">
\t\t\t\t\t<input type=\"password\" id=\"contrasena\" name=\"contrasena\" class=\"form-control\" placeholder=\"Contraseña\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>-->
                <div class=\"row\">
                    
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" style=\"    background-color: #95C11F; border-color: #95C11F;\">Login</button>
                    </div>
                </div>
\t\t\t\t<div class=\"row\">
                    
                    <div class=\"col-xs-12\">
                        <div class=\"\" style=\"text-align: center;height: 50px; padding: 8px; color: red;\">
                            ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["errorLogIn"]) ? $context["errorLogIn"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                    </div>
                </div>
                
            </form>
            
            <p><span style=\"font-size:18px;\">¿Olvidaste tu contraseña?</span></br>
\t\t\tClick <a href=\"#\" style=\"font-weight:bold;\">aqui</a> para recuperarla.</p>
            
        </div>
    </div>
    <footer style=\"margin-top: 20px; font-size: 20px;\">
\t\tGLOSS 2016. Todos los derechos reservados.
\t</footer>

   

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 80,  70 => 50,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>RIC | Log in</title>
  
\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"dist/img/icon.png\">

    <link rel=\"stylesheet\" href=\"plugins/Bootstrap-3.3.6/css/bootstrap.min.css\">
    
    <script src=\"plugins/jQuery/jquery-2.2.3.min.js\"></script>
\t
    <script src=\"plugins/Bootstrap-3.3.6/js/bootstrap.min.js\"></script>\t

\t<link href=\"https://fonts.googleapis.com/css?family=Oxygen\" rel=\"stylesheet\">

    <link href=\"dist/css/login.css\" rel=\"stylesheet\" />


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->

    <script>
\t\t\$(document).ready(function () {

\t\t});
    </script>

</head>
<body class=\"hold-transition login-page\">
\t
    <div class=\"login-box\">
            <image src=\"../public/dist/img/logo.png\" style=\"width:570px;\">\t
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Entrar al sistema</p>
            
            <form id=\"Login\" method=\"post\" action=\"./login\" role=\"form\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <span class=\"input-group-addon\" id=\"basic-addon1\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-user\"></span>
\t\t\t\t\t  </span>
\t\t\t\t\t  <input type=\"text\" id=\"usuario\" name=\"usuario\" class=\"form-control\" placeholder=\"Usuario\" aria-describedby=\"basic-addon1\" value=\"{{ usuario }}\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <span class=\"input-group-addon\" id=\"basic-addon2\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-lock\"></span>
\t\t\t\t\t  </span>
\t\t\t\t\t  <input type=\"password\" id=\"contrasena\" name=\"contrasena\" class=\"form-control\" placeholder=\"Contraseña\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t</div>
\t\t\t\t</div>

                <!--<div class=\"form-group has-feedback\">
                    <input type=\"text\" id=\"usuario\" name=\"usuario\" class=\"form-control\" placeholder=\"Usuario\">
                    <span class=\"glyphicon glyphicon-user form-control-feedback \"></span>
                </div>
                <div class=\"form-group has-feedback\">
\t\t\t\t\t<input type=\"password\" id=\"contrasena\" name=\"contrasena\" class=\"form-control\" placeholder=\"Contraseña\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>-->
                <div class=\"row\">
                    
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" style=\"    background-color: #95C11F; border-color: #95C11F;\">Login</button>
                    </div>
                </div>
\t\t\t\t<div class=\"row\">
                    
                    <div class=\"col-xs-12\">
                        <div class=\"\" style=\"text-align: center;height: 50px; padding: 8px; color: red;\">
                            {{ errorLogIn }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                    </div>
                </div>
                
            </form>
            
            <p><span style=\"font-size:18px;\">¿Olvidaste tu contraseña?</span></br>
\t\t\tClick <a href=\"#\" style=\"font-weight:bold;\">aqui</a> para recuperarla.</p>
            
        </div>
    </div>
    <footer style=\"margin-top: 20px; font-size: 20px;\">
\t\tGLOSS 2016. Todos los derechos reservados.
\t</footer>

   

</body>
</html>";
    }
}
