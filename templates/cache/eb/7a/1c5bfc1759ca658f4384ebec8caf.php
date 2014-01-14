<?php

/* error.html */
class __TwigTemplate_eb7a1c5bfc1759ca658f4384ebec8caf extends Twig_Template
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
        echo "<div style=\"text-align:center\">
\t<h2 style=\"margin:20px 0\">";
        // line 2
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo $_message_;
        echo "</h2>
\t";
        // line 3
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if ($_board_) {
            // line 4
            echo "\t\t<p>
\t\t\t<a href=\"";
            // line 5
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "root");
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if ($_mod_) {
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "file_mod");
                echo "?/";
            }
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo $this->getAttribute($_board_, "dir");
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "file_index");
            echo "\">
\t\t\t\t";
            // line 6
            echo gettext("Go back");
            // line 7
            echo "\t\t\t</a>
\t\t</p>
\t";
        }
        // line 10
        echo "</div>
";
        // line 11
        if (isset($context["debug"])) { $_debug_ = $context["debug"]; } else { $_debug_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (($_debug_ && $this->getAttribute($_config_, "debug"))) {
            // line 12
            echo "\t<hr>
\t<h3>";
            // line 13
            echo gettext("Error information");
            echo "</h3>
\t<pre style=\"white-space:pre-wrap;font-size: 10px;\">
\t\t";
            // line 15
            if (isset($context["debug"])) { $_debug_ = $context["debug"]; } else { $_debug_ = null; }
            echo $_debug_;
            echo "
\t</pre>
\t<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  65 => 13,  62 => 12,  58 => 11,  55 => 10,  50 => 7,  48 => 6,  33 => 5,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
