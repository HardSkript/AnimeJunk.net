<?php

/* mod/board.html */
class __TwigTemplate_c8b4e9ccb3fd4aa5835d853eb4575ab0 extends Twig_Template
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
        if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
        if ($_new_) {
            // line 2
            echo "\t";
            $context["action"] = "?/new-board";
        } else {
            // line 4
            echo "\t";
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            $context["action"] = ("?/edit/" . $this->getAttribute($_board_, "uri"));
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo $_action_;
        echo "\" method=\"post\">
\t<table>
\t\t<tr>
\t\t\t<th>";
        // line 10
        echo gettext("URI");
        echo "</th>
\t\t\t<td>
\t\t\t\t";
        // line 12
        if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
        if ((!$_new_)) {
            // line 13
            echo "\t\t\t\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo sprintf($this->getAttribute($_config_, "board_abbreviation"), $this->getAttribute($_board_, "uri"));
            echo "
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t/<input size=\"10\" maxlength=\"255\" type=\"text\" name=\"uri\" autocomplete=\"off\">/
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 20
        echo gettext("Title");
        echo "</th>
\t\t\t<td>
\t\t\t\t<input size=\"25\" type=\"text\" name=\"title\" value=\"";
        // line 22
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_board_, "title"));
        echo "\" autocomplete=\"off\">
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 26
        echo gettext("Subtitle");
        echo "</th>
\t\t\t<td>
\t\t\t\t<input size=\"25\" type=\"text\" name=\"subtitle\" value=\"";
        // line 28
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_board_, "subtitle"));
        echo "\" autocomplete=\"off\">
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t<ul style=\"padding:0;text-align:center;list-style:none\">
\t\t";
        // line 34
        if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
        if ($_new_) {
            // line 35
            echo "\t\t\t<li><input type=\"submit\" value=\"";
            echo gettext("Create board");
            echo "\"></li>
\t\t";
        } else {
            // line 37
            echo "\t\t\t<li><input type=\"submit\" value=\"";
            echo gettext("Save changes");
            echo "\"></li>
\t\t\t";
            // line 38
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "deleteboard"))) {
                // line 39
                echo "\t\t\t\t<li><input name=\"delete\" onclick=\"return confirm('Are you sure you want to permanently delete this board?');\" type=\"submit\" value=\"";
                echo gettext("Delete board");
                echo "\"></li>
\t\t\t";
            }
            // line 41
            echo "\t\t";
        }
        // line 42
        echo "\t</ul>
</form>

";
    }

    public function getTemplateName()
    {
        return "mod/board.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  118 => 41,  112 => 39,  108 => 38,  103 => 37,  97 => 35,  94 => 34,  84 => 28,  79 => 26,  71 => 22,  66 => 20,  61 => 17,  57 => 15,  49 => 13,  46 => 12,  41 => 10,  34 => 7,  31 => 6,  26 => 4,  22 => 2,  19 => 1,);
    }
}
