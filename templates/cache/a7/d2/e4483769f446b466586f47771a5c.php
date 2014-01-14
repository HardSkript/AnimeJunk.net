<?php

/* mod/theme_rebuilt.html */
class __TwigTemplate_a7d2e4483769f446b466586f47771a5c extends Twig_Template
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
        echo "<p style=\"text-align:center\">";
        if (isset($context["theme_name"])) { $_theme_name_ = $context["theme_name"]; } else { $_theme_name_ = null; }
        echo sprintf(gettext("Successfully rebuilt the <strong>%s</strong> theme."), $_theme_name_);
        echo "</p>
<p style=\"text-align:center\"><a href=\"?/themes\">";
        // line 2
        echo gettext("Go back to themes");
        echo "</a>.</p>
";
    }

    public function getTemplateName()
    {
        return "mod/theme_rebuilt.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  19 => 1,);
    }
}
