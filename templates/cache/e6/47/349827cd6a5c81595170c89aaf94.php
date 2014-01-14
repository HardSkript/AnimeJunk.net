<?php

/* mod/user.html */
class __TwigTemplate_e647349827cd6a5c81595170c89aaf94 extends Twig_Template
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
            $context["action"] = "?/users/new";
        } else {
            // line 4
            echo "\t";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            $context["action"] = ("?/users/" . $this->getAttribute($_user_, "id"));
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
        echo gettext("Username");
        echo "</th>
\t\t\t<td>
\t\t\t\t";
        // line 12
        if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (($_new_ || twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "editusers")))) {
            // line 13
            echo "\t\t\t\t\t<input size=\"20\" maxlength=\"30\" type=\"text\" name=\"username\" value=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"));
            echo "\" autocomplete=\"off\">
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"));
            echo "
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 20
        echo gettext("Password");
        if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
        if ((!$_new_)) {
            echo " <small style=\"font-weight:normal\">(";
            echo gettext("new; optional");
            echo ")</small>";
        }
        echo "</th>
\t\t\t<td>
\t\t\t\t";
        // line 22
        if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($_new_ || (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "editusers")) || (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "change_password")) && ($this->getAttribute($_user_, "id") == $this->getAttribute($_mod_, "id")))))) {
            // line 23
            echo "\t\t\t\t\t<input size=\"20\" maxlength=\"30\" type=\"password\" name=\"password\" value=\"\" autocomplete=\"off\">
\t\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t\t-
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t</td>
\t\t</tr>
\t\t";
        // line 29
        if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
        if ($_new_) {
            // line 30
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 31
            echo gettext("Class");
            echo "</th>
\t\t\t\t<td>
\t\t\t\t\t<ul style=\"padding:5px 8px;list-style:none\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" id=\"janitor\" value=\"";
            // line 35
            echo twig_constant("JANITOR");
            echo "\"> 
\t\t\t\t\t\t\t<label for=\"janitor\">";
            // line 36
            echo gettext("Janitor");
            echo "</label>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" id=\"mod\" value=\"";
            // line 39
            echo twig_constant("MOD");
            echo "\" checked> 
\t\t\t\t\t\t\t<label for=\"mod\">";
            // line 40
            echo gettext("Mod");
            echo "</label>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" id=\"admin\" value=\"";
            // line 43
            echo twig_constant("Admin");
            echo "\"> 
\t\t\t\t\t\t\t<label for=\"admin\">";
            // line 44
            echo gettext("Admin");
            echo "</label>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 50
        echo "\t\t<tr>
\t\t\t<th>";
        // line 51
        echo gettext("Boards");
        echo "</th>
\t\t\t<td>
\t\t\t\t<ul style=\"padding:0 5px;list-style:none\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"allboards\" name=\"allboards\"
\t\t\t\t\t\t";
        // line 56
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (twig_in_filter("*", $this->getAttribute($_user_, "boards"))) {
            echo " checked";
        }
        // line 57
        echo "\t\t\t\t\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ((!twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "editusers")))) {
            // line 58
            echo "\t\t\t\t\t\t disabled
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t> 
\t\t\t\t\t\t<label for=\"allboards\">\"*\" - ";
        // line 61
        echo gettext("All boards");
        echo "</label>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 63
        if (isset($context["boards"])) { $_boards_ = $context["boards"]; } else { $_boards_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_boards_);
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 64
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"board_";
            // line 65
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo $this->getAttribute($_board_, "uri");
            echo "\" name=\"board_";
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo $this->getAttribute($_board_, "uri");
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 66
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (twig_in_filter($this->getAttribute($_board_, "uri"), $this->getAttribute($_user_, "boards"))) {
                echo " checked";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t";
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if ((!twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "editusers")))) {
                // line 68
                echo "\t\t\t\t\t\t\t\t disabled
\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t\t\t> 
\t\t\t\t\t\t\t<label for=\"board_";
            // line 71
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo $this->getAttribute($_board_, "uri");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 72
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo sprintf($this->getAttribute($_config_, "board_abbreviation"), $this->getAttribute($_board_, "uri"));
            echo "
\t\t\t\t\t\t\t\t - 
\t\t\t\t\t\t\t\t";
            // line 74
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_board_, "title"));
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t<ul style=\"padding:0;text-align:center;list-style:none\">
\t\t";
        // line 84
        if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
        if ($_new_) {
            // line 85
            echo "\t\t\t<li><input type=\"submit\" value=\"";
            echo gettext("Create user");
            echo "\"></li>
\t\t";
        } else {
            // line 87
            echo "\t\t\t<li><input type=\"submit\" value=\"";
            echo gettext("Save changes");
            echo "\"></li>
\t\t\t";
            // line 88
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "deleteusers"))) {
                // line 89
                echo "\t\t\t\t<li><input name=\"delete\" onclick=\"return confirm('Are you sure you want to permanently delete this user?');\" type=\"submit\" value=\"";
                echo gettext("Delete user");
                echo "\"></li>
\t\t\t";
            }
            // line 91
            echo "\t\t";
        }
        // line 92
        echo "\t</ul>
</form>

";
        // line 95
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        if ((count($_logs_) > 0)) {
            // line 96
            echo "\t<table class=\"modlog\" style=\"width:600px\">
\t\t<tr>
\t\t\t<th>";
            // line 98
            echo gettext("IP address");
            echo "</th>\t\t\t
\t\t\t<th>";
            // line 99
            echo gettext("Time");
            echo "</th>
\t\t\t<th>";
            // line 100
            echo gettext("Board");
            echo "</th>
\t\t\t<th>";
            // line 101
            echo gettext("Action");
            echo "</th>
\t\t</tr>
\t\t";
            // line 103
            if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_logs_);
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 104
                echo "\t\t\t<tr>
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t<a href=\"?/IP/";
                // line 106
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "ip");
                echo "\">";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "ip");
                echo "</a>
\t\t\t\t</td>
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t<span title=\"";
                // line 109
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo twig_date_filter($this->getAttribute($_log_, "time"), $this->getAttribute($_config_, "post_date"));
                echo "\">";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo ago($this->getAttribute($_log_, "time"));
                echo "</span>
\t\t\t\t</td>
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t";
                // line 112
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_log_, "board")) {
                    // line 113
                    echo "\t\t\t\t\t\t<a href=\"?/";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo sprintf($this->getAttribute($_config_, "board_path"), $this->getAttribute($_log_, "board"));
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo $this->getAttribute($_config_, "file_index");
                    echo "\">";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo sprintf($this->getAttribute($_config_, "board_abbreviation"), $this->getAttribute($_log_, "board"));
                    echo "</a>
\t\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t-
\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 119
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "text");
                echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t</table>
\t<p style=\"text-align:center\" class=\"unimportant\">
\t\t<a href=\"?/log:";
            // line 125
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"));
            echo "\">";
            echo gettext("View more logs for this user.");
            echo "</a>
\t</p>
";
        }
        // line 128
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod/user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 128,  369 => 125,  365 => 123,  354 => 119,  350 => 117,  346 => 115,  332 => 113,  329 => 112,  318 => 109,  308 => 106,  304 => 104,  299 => 103,  294 => 101,  290 => 100,  286 => 99,  282 => 98,  278 => 96,  275 => 95,  270 => 92,  267 => 91,  261 => 89,  257 => 88,  252 => 87,  246 => 85,  243 => 84,  235 => 78,  224 => 74,  217 => 72,  212 => 71,  209 => 70,  205 => 68,  200 => 67,  194 => 66,  186 => 65,  183 => 64,  178 => 63,  173 => 61,  170 => 60,  166 => 58,  161 => 57,  156 => 56,  148 => 51,  145 => 50,  136 => 44,  132 => 43,  126 => 40,  122 => 39,  116 => 36,  112 => 35,  105 => 31,  102 => 30,  99 => 29,  95 => 27,  91 => 25,  87 => 23,  81 => 22,  70 => 20,  65 => 17,  58 => 15,  51 => 13,  46 => 12,  41 => 10,  34 => 7,  31 => 6,  26 => 4,  22 => 2,  19 => 1,);
    }
}
