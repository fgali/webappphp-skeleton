<?php

/* index.twig */
class __TwigTemplate_162b98bcfca668a185c851b605e10937ca35e5dbf24e058f94f7addff0cb86b1 extends Twig_Template
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

  <title>RIC | Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

  <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../public/dist/img/icon.png\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"plugins/Bootstrap-3.3.6/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"dist/css/AdminLTE.css\">
  <link rel=\"stylesheet\" href=\"dist/css/css.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"dist/css/skins/_all-skins.min.css\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"plugins/iCheck/flat/blue.css\">
  <!-- Morris chart -->
  <link rel=\"stylesheet\" href=\"plugins/morris/morris.css\">
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"plugins/jvectormap/jquery-jvectormap-1.2.2.css\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"plugins/datepicker/datepicker3.css\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker.css\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"./\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\">
      <img src=\"dist/img/logoHome50X50.png\" style=\"width: 44px;\">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\">
        <img src=\"dist/img/logoHome200X70.png\" style=\"width: 120px;\">
      </span>
    </a>
    <nav class=\"navbar navbar-static-top\">

      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
      </a>   
      ";
        // line 65
        $this->loadTemplate("/Views/Shared/_navbar.twig", "index.twig", 65)->display($context);
        // line 67
        echo "    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <!-- Sidebar toggle button-->
    
    ";
        // line 75
        $this->loadTemplate("/Views/Shared/_mainSidebar.twig", "index.twig", 75)->display($context);
        // line 77
        echo "    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    
    ";
        // line 83
        if (array_key_exists("viewName", $context)) {
            // line 84
            echo "      ";
            // line 85
            echo "      ";
            // line 86
            echo "      
    ";
        }
        // line 88
        echo "
    
    ";
        // line 90
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "viewName", array(), "any", true, true)) {
            // line 91
            echo "      ";
            $this->loadTemplate($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "viewName", array()), "index.twig", 91)->display($context);
            echo "      
    ";
        }
        // line 93
        echo "
    
    
    
  </div>
  <!-- /.content-wrapper -->
  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2016 <a href=\"\">GLOSS</a>.</strong> All rights

  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
      <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
      <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
        <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-user bg-yellow\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Custom Template Design
                <span class=\"label label-danger pull-right\">70%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Update Resume
                <span class=\"label label-success pull-right\">95%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Laravel Integration
                <span class=\"label label-warning pull-right\">50%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Back End Framework
                <span class=\"label label-primary pull-right\">68%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
        <form method=\"post\">
          <h3 class=\"control-sidebar-heading\">General Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Report panel usage
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Allow mail redirect
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Expose author name in posts
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Show me as online
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Turn off notifications
              <input type=\"checkbox\" class=\"pull-right\">
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Delete chat history
              <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=\"plugins/Bootstrap-3.3.6/js/bootstrap.min.js\"></script>
<!-- Morris.js charts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"plugins/morris/morris.min.js\"></script>
<!-- Sparkline -->
<script src=\"plugins/sparkline/jquery.sparkline.min.js\"></script>
<!-- jvectormap -->
<script src=\"plugins/jvectormap/jquery-jvectormap-1.2.2.min.js\"></script>
<script src=\"plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
<!-- jQuery Knob Chart -->
<script src=\"plugins/knob/jquery.knob.js\"></script>
<!-- daterangepicker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"plugins/daterangepicker/daterangepicker.js\"></script>
<!-- datepicker -->
<script src=\"plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>
<!-- Slimscroll -->
<script src=\"plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- FastClick -->
<script src=\"plugins/fastclick/fastclick.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/app.min.js\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"dist/js/pages/dashboard.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"dist/js/demo.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 93,  121 => 91,  119 => 90,  115 => 88,  111 => 86,  109 => 85,  107 => 84,  105 => 83,  97 => 77,  95 => 75,  86 => 67,  84 => 65,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

  <title>RIC | Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

  <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../public/dist/img/icon.png\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"plugins/Bootstrap-3.3.6/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"dist/css/AdminLTE.css\">
  <link rel=\"stylesheet\" href=\"dist/css/css.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"dist/css/skins/_all-skins.min.css\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"plugins/iCheck/flat/blue.css\">
  <!-- Morris chart -->
  <link rel=\"stylesheet\" href=\"plugins/morris/morris.css\">
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"plugins/jvectormap/jquery-jvectormap-1.2.2.css\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"plugins/datepicker/datepicker3.css\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker.css\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"./\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\">
      <img src=\"dist/img/logoHome50X50.png\" style=\"width: 44px;\">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\">
        <img src=\"dist/img/logoHome200X70.png\" style=\"width: 120px;\">
      </span>
    </a>
    <nav class=\"navbar navbar-static-top\">

      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
      </a>   
      {%
        include '/Views/Shared/_navbar.twig'
      %}
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <!-- Sidebar toggle button-->
    
    {%
      include '/Views/Shared/_mainSidebar.twig'
    %}
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    
    {% if viewName is defined %}
      {# viewName #}
      {# include '/Views/Home/dashboard.twig'#}
      
    {% endif %}

    
    {% if session.viewName is defined %}
      {% include session.viewName %}      
    {% endif %}

    
    
    
  </div>
  <!-- /.content-wrapper -->
  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2016 <a href=\"\">GLOSS</a>.</strong> All rights

  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
      <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
      <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
        <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-user bg-yellow\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Custom Template Design
                <span class=\"label label-danger pull-right\">70%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Update Resume
                <span class=\"label label-success pull-right\">95%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Laravel Integration
                <span class=\"label label-warning pull-right\">50%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Back End Framework
                <span class=\"label label-primary pull-right\">68%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
        <form method=\"post\">
          <h3 class=\"control-sidebar-heading\">General Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Report panel usage
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Allow mail redirect
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Expose author name in posts
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Show me as online
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Turn off notifications
              <input type=\"checkbox\" class=\"pull-right\">
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Delete chat history
              <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=\"plugins/Bootstrap-3.3.6/js/bootstrap.min.js\"></script>
<!-- Morris.js charts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"plugins/morris/morris.min.js\"></script>
<!-- Sparkline -->
<script src=\"plugins/sparkline/jquery.sparkline.min.js\"></script>
<!-- jvectormap -->
<script src=\"plugins/jvectormap/jquery-jvectormap-1.2.2.min.js\"></script>
<script src=\"plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
<!-- jQuery Knob Chart -->
<script src=\"plugins/knob/jquery.knob.js\"></script>
<!-- daterangepicker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"plugins/daterangepicker/daterangepicker.js\"></script>
<!-- datepicker -->
<script src=\"plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>
<!-- Slimscroll -->
<script src=\"plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- FastClick -->
<script src=\"plugins/fastclick/fastclick.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/app.min.js\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"dist/js/pages/dashboard.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"dist/js/demo.js\"></script>
</body>
</html>
";
    }
}
