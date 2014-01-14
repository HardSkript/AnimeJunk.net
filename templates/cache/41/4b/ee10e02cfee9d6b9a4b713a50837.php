<?php

/* mod/theme_installed.html */
class __TwigTemplate_414bee10e02cfee9d6b9a4b713a50837 extends Twig_Template
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
        return array (  44 => 9,  41 => 8,  35 => 6,  29 => 4,  22 => 2,  19 => 1,  133 => 33,  128 => 30,  117 => 26,  112 => 25,  99 => 22,  94 => 21,  91 => 20,  86 => 19,  78 => 15,  67 => 14,  61 => 12,  57 => 10,  49 => 9,  42 => 8,  37 => 7,  32 => 5,  26 => 2,  20 => 1,);
    }
}
