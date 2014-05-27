<?php

/* GuyCnetBundle:Default:index.html.twig */
class __TwigTemplate_fa7b8d0b582c0aacda9f1818b7bc3fbd7af638f2c1251bbd2da144d8232674f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " My First Site! ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <!-- Fixed navbar -->
\t<meta name=\"viewport\" content=\"width=device-width, height=device-height\">
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">My Website</a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#about\">About Me</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li class=\"divider\"></li>
                            <li class=\"dropdown-header\">Nav header</li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"../navbar/\">Default</a></li>
                    <li><a href=\"../navbar-static-top/\">Static top</a></li>
                    <li class=\"active\"><a href=\"./\">Fixed top</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div id=\"my-pages\" >

    <div class =\"row\" >

     <div class =\"col-md-9 site-container title-margin\">


    <div class =\"row\">
        <!-- Main component for a primary marketing message or call to action -->
        <div class=\"col-md-3  header\">
            <h1><span class = \"headerTitle\"> About Me</span></h1>

         </div>
    </div>

    <div class=\"row\">

    <div class=\" col-md-3 my-images\">
    <img class=\"img-responsive\" src=\"/Symfony2/web/bundles/images/profile.jpg\" alt=\"profile picture\">
    </div>

    <div class =\"col-md-4\">
        <h2>...an Accomplished <span class=\"my-label\">Web Developer</span> and Manager</h2>

        <p> I am currently a Senior at the University of Louisville majoring in Computer Information Systems, with a concentration in Web-Development</p>
    </div>

     <div class =\"col-md-4\">


         <ul class=\"ul-left\">
             <li ><span class =\"title\"> Name</span> <span class=\"value\"> Guy J. Stitt</span></li>
             <li ><span class =\"title\"> Age</span> <span class=\"value\"> 21</span></li>
             <li ><span class =\"title\"> Hometown</span> <span class=\"value\"> Denver</span></li>
             <li ><span class =\"title\"> city</span> <span class=\"value\"> Louisville</span></li>
             <li ><span class =\"title\"> Phone</span> <span class=\"value\"> 502-333-4283</span></li>
         </ul>

       


     </div>

    </div>

    </div>



    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "GuyCnetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  44 => 10,  38 => 6,  33 => 4,  30 => 3,);
    }
}
