<?php

/* GuyCnetBundle:Default:index2.html.twig */
class __TwigTemplate_324720a4c183a2918ef36225a1055beae3c2152ba0e2957ad16612d1b3d0cb62 extends Twig_Template
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
        echo "    <div class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Project name</a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#about\">About</a></li>
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
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div id=\"my-pages\" >

    <div class =\"row\" >

     <div class =\"col-md-9 site-container title-margin\">


    <div class =\"row\">
        <!-- Main component for a primary marketing message or call to action -->
        <div class=\"col-md-3  header\">
            <h1>About Me</h1>

         </div>
    </div>

    <div class=\"row\">

    <div class=\" col-md-3 my-images\">
    <img class=\"img-responsive\" src=\"/Symfony2/web/bundles/images/profile.jpg\" alt=\"profile picture\">
    </div>

    <div class =\"col-md-4\">
        <h2>...an Accomplished <span class=\"my-label\">Web Developer</span> and Manager</h2>

        <p> I am currently a Junior at the University of Louisville majoring in Computer Information Systems, with a concentration in Web-Development</p>
    </div>

     <div class =\"col-md-4\">


         <ul class=\"ul-left\">
             <li ><span class =\"title\"> Name</span> <span class=\"value\"> Guy J. Stitt</span></li>
             <li ><span class =\"title\"> Age</span> <span class=\"value\"> 21</span></li>
             <li ><span class =\"title\"> Hometown</span> <span class=\"value\"> Sherdian</span></li>
             <li ><span class =\"title\"> city</span> <span class=\"value\"> Denver</span></li>
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
        return "GuyCnetBundle:Default:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 8,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  93 => 28,  88 => 6,  78 => 21,  87 => 25,  46 => 20,  44 => 10,  25 => 3,  94 => 21,  89 => 20,  85 => 25,  75 => 17,  68 => 11,  56 => 9,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 20,  62 => 23,  49 => 24,  21 => 2,  28 => 3,  24 => 4,  31 => 7,  26 => 6,  19 => 1,  79 => 18,  72 => 12,  69 => 25,  47 => 11,  40 => 8,  37 => 16,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 22,  66 => 20,  55 => 7,  52 => 15,  50 => 14,  43 => 9,  41 => 8,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 22,  95 => 28,  92 => 29,  86 => 19,  82 => 22,  80 => 14,  73 => 19,  64 => 9,  60 => 18,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
