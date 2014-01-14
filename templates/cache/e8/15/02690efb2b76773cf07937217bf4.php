<?php

/* page.html */
class __TwigTemplate_e81502690efb2b76773cf07937217bf4 extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t";
        // line 5
        $this->env->loadTemplate("header.html")->display($context);
        // line 6
        echo "\t<title>";
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo $_title_;
        echo "</title>
</head>
<body>
\t";
        // line 9
        if (isset($context["pm"])) { $_pm_ = $context["pm"]; } else { $_pm_ = null; }
        if ($_pm_) {
            echo "<div class=\"top_notice\">You have <a href=\"?/PM/";
            if (isset($context["pm"])) { $_pm_ = $context["pm"]; } else { $_pm_ = null; }
            echo $this->getAttribute($_pm_, "id");
            echo "\">an unread PM</a>";
            if (isset($context["pm"])) { $_pm_ = $context["pm"]; } else { $_pm_ = null; }
            if (($this->getAttribute($_pm_, "waiting") > 0)) {
                echo ", plus ";
                if (isset($context["pm"])) { $_pm_ = $context["pm"]; } else { $_pm_ = null; }
                echo $this->getAttribute($_pm_, "waiting");
                echo " more waiting";
            }
            echo ".</div><hr>";
        }
        // line 10
        echo "\t<header>
\t\t<h1>";
        // line 11
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo $_title_;
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 13
        if (isset($context["subtitle"])) { $_subtitle_ = $context["subtitle"]; } else { $_subtitle_ = null; }
        if ($_subtitle_) {
            // line 14
            echo "\t\t\t\t";
            if (isset($context["subtitle"])) { $_subtitle_ = $context["subtitle"]; } else { $_subtitle_ = null; }
            echo $_subtitle_;
            echo "
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["hide_dashboard_link"])) { $_hide_dashboard_link_ = $context["hide_dashboard_link"]; } else { $_hide_dashboard_link_ = null; }
        if (($_mod_ && (!$_hide_dashboard_link_))) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 17
        echo "\t\t</div>
\t</header>
\t";
        // line 19
        if (isset($context["body"])) { $_body_ = $context["body"]; } else { $_body_ = null; }
        echo $_body_;
        echo "
\t<hr>
\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">Powered by <a href=\"http://tinyboard.org/\">Tinyboard</a> ";
        // line 22
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "version");
        echo " | <a href=\"http://tinyboard.org/\">Tinyboard</a> Copyright &copy; 2010-2013 Tinyboard Development Group</p>
\t</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  83 => 19,  79 => 17,  70 => 16,  63 => 14,  54 => 11,  51 => 10,  25 => 5,  60 => 13,  50 => 15,  48 => 14,  39 => 9,  35 => 9,  33 => 6,  27 => 6,  19 => 1,);
    }
}
