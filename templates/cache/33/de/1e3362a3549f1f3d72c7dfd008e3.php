<?php

/* mod/login.html */
class __TwigTemplate_33de1e3362a3549f1f3d72c7dfd008e3 extends Twig_Template
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
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            echo "<h2 style=\"text-align:center\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo $_error_;
            echo "</h2>";
        }
        // line 2
        echo "<form action=\"\" method=\"post\">
<table style=\"margin-top:25px;\">
\t<tr>
\t\t<th>
\t\t\t";
        // line 6
        echo gettext("Username");
        // line 7
        echo "\t\t</th>
\t\t<td>
\t\t\t<input type=\"text\" name=\"username\" size=\"20\" maxlength=\"30\" value=\"";
        // line 9
        if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
        echo twig_escape_filter($this->env, $_username_);
        echo "\">
\t\t</td>
\t</tr>
\t<tr>
\t\t<th>
\t\t\t";
        // line 14
        echo gettext("Password");
        // line 15
        echo "\t\t</th>
\t\t<td>
\t\t\t<input type=\"password\" name=\"password\" size=\"20\" maxlength=\"30\" value=\"\">
\t\t</td>
\t</tr>
\t<tr>
\t\t<td></td>
\t\t<td>
\t\t\t<input type=\"submit\" name=\"login\" value=\"";
        // line 23
        echo gettext("Continue");
        echo "\" />
\t\t</td>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "mod/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  50 => 15,  48 => 14,  39 => 9,  35 => 7,  33 => 6,  27 => 2,  19 => 1,);
    }
}
