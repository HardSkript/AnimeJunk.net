<?php

/* mod/theme_installed.html */
class __TwigTemplate_272ca4aa99b03ef9f2fb66457d36c43e extends Twig_Template
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
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if ($_message_) {
            // line 2
            echo "\t<div style=\"border:1px dashed maroon;padding:20px;margin:auto;max-width:800px\">";
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo $_message_;
            echo "</div>
";
        }
        // line 4
        echo "
";
        // line 5
        if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
        if ($_result_) {
            // line 6
            echo "\t<p style=\"text-align:center\">";
            echo gettext("Successfully installed and built theme.");
            echo "</p>
";
        }
        // line 8
        echo "
<p style=\"text-align:center\"><a href=\"?/themes\">";
        // line 9
        echo gettext("Go back to themes");
        echo "</a>.</p>
";
    }

    public function getTemplateName()
    {
        return "mod/theme_installed.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }
}
