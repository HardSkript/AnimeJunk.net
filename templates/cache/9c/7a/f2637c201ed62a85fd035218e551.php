<?php

/* mod/search_form.html */
class __TwigTemplate_9c7af2637c201ed62a85fd035218e551 extends Twig_Template
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
        echo "<form style=\"display:inline\" action=\"?/search\" method=\"post\">
\t<label style=\"display:inline\" for=\"search\">";
        // line 2
        echo gettext("Phrase:");
        echo "</label> 
\t<input id=\"search\" name=\"query\" type=\"text\" size=\"60\" value=\"";
        // line 3
        if (isset($context["search_query"])) { $_search_query_ = $context["search_query"]; } else { $_search_query_ = null; }
        echo twig_escape_filter($this->env, $_search_query_);
        echo "\">
\t<select name=\"type\">
\t\t<option value=\"posts\"";
        // line 5
        if (isset($context["search_type"])) { $_search_type_ = $context["search_type"]; } else { $_search_type_ = null; }
        if (($_search_type_ == "posts")) {
            echo " selected";
        }
        echo ">";
        echo gettext("Posts");
        echo "</option>
\t\t";
        // line 6
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ((twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "view_notes")) && twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "show_ip")))) {
            // line 7
            echo "\t\t\t<option value=\"IP_notes\"";
            if (isset($context["search_type"])) { $_search_type_ = $context["search_type"]; } else { $_search_type_ = null; }
            if (($_search_type_ == "IP_notes")) {
                echo " selected";
            }
            echo ">";
            echo gettext("IP address notes");
            echo "</option>
\t\t";
        }
        // line 9
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "view_banlist"))) {
            // line 10
            echo "\t\t\t<option value=\"bans\"";
            if (isset($context["search_type"])) { $_search_type_ = $context["search_type"]; } else { $_search_type_ = null; }
            if (($_search_type_ == "bans")) {
                echo " selected";
            }
            echo ">";
            echo gettext("Bans");
            echo "</option>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "modlog"))) {
            // line 13
            echo "\t\t\t<option value=\"log\"";
            if (isset($context["search_type"])) { $_search_type_ = $context["search_type"]; } else { $_search_type_ = null; }
            if (($_search_type_ == "log")) {
                echo " selected";
            }
            echo ">";
            echo gettext("Moderation log");
            echo "</option>
\t\t";
        }
        // line 15
        echo "\t</select>
\t<input type=\"submit\" value=\"";
        // line 16
        echo gettext("Search");
        echo "\">
</form>
<p class=\"unimportant\">";
        // line 18
        echo gettext("(Search is case-insensitive and based on keywords. To match exact phrases, use \"quotes\". Use an asterisk (*) for wildcard.)");
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "mod/search_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  91 => 16,  88 => 15,  72 => 12,  61 => 10,  56 => 9,  45 => 7,  41 => 6,  32 => 5,  26 => 3,  501 => 164,  495 => 161,  491 => 159,  475 => 153,  468 => 148,  465 => 147,  462 => 146,  457 => 143,  451 => 141,  447 => 140,  443 => 139,  439 => 138,  434 => 136,  431 => 135,  428 => 134,  425 => 133,  420 => 130,  407 => 128,  402 => 127,  396 => 124,  393 => 123,  390 => 122,  387 => 121,  381 => 117,  379 => 116,  372 => 112,  369 => 111,  365 => 110,  359 => 106,  353 => 104,  348 => 103,  342 => 101,  337 => 100,  331 => 98,  326 => 97,  320 => 95,  315 => 94,  306 => 92,  300 => 90,  295 => 89,  289 => 87,  284 => 86,  280 => 84,  275 => 83,  267 => 82,  262 => 81,  259 => 80,  255 => 79,  249 => 76,  241 => 70,  228 => 69,  224 => 68,  217 => 65,  211 => 63,  206 => 60,  194 => 56,  190 => 54,  186 => 53,  179 => 51,  176 => 50,  171 => 47,  165 => 45,  158 => 43,  155 => 42,  150 => 41,  147 => 40,  142 => 39,  137 => 37,  134 => 36,  130 => 35,  126 => 34,  121 => 32,  115 => 28,  109 => 26,  105 => 25,  102 => 24,  95 => 22,  86 => 20,  81 => 19,  77 => 13,  70 => 15,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  49 => 9,  36 => 7,  33 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
