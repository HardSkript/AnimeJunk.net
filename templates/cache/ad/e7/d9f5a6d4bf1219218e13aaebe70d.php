<?php

/* mod/confirm.html */
class __TwigTemplate_ade7d9f5a6d4bf1219218e13aaebe70d extends Twig_Template
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
        echo "<p style=\"text-align:center;font-size:1.1em\">
\t";
        // line 2
        echo gettext("Are you sure you want to do that?");
        echo " <a href=\"?/";
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo $_request_;
        echo "/";
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo $_token_;
        echo "\">";
        echo gettext("Click to proceed to");
        echo " ?/";
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo $_request_;
        echo "</a>.
</p>
<p class=\"unimportant\" style=\"text-align:center\">
\t";
        // line 5
        echo gettext("You are probably seeing this message because Javascript being disabled. This is a necessary security measure to prevent CSRF attacks.");
        // line 6
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "mod/confirm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  39 => 5,  22 => 2,  19 => 1,);
    }
}
