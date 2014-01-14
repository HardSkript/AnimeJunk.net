<?php

/* mod/users.html */
class __TwigTemplate_9b72238ff538ce5779efb0aa5fe0ab6c extends Twig_Template
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
        echo "<table class=\"modlog\" style=\"width:auto\">
\t<tr>
\t\t<th>";
        // line 3
        echo gettext("ID");
        echo "</th>
\t\t<th>";
        // line 4
        echo gettext("Username");
        echo "</th>
\t\t<th>";
        // line 5
        echo gettext("Type");
        echo "</th>
\t\t<th>";
        // line 6
        echo gettext("Boards");
        echo "</th>
\t\t";
        // line 7
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "modlog"))) {
            // line 8
            echo "\t\t\t<th>";
            echo gettext("Last action");
            echo "</th>
\t\t";
        }
        // line 10
        echo "\t\t<th>&hellip;</th>
\t</tr>
\t
\t";
        // line 13
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "\t\t<tr>
\t\t\t<td><small>";
            // line 15
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($_user_, "id");
            echo "</small></td>
\t\t\t<td>";
            // line 16
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"));
            echo "</td>
\t\t\t<td>
\t\t\t\t";
            // line 18
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "type") == twig_constant("JANITOR"))) {
                echo gettext("Janitor");
                // line 19
                echo "\t\t\t\t";
            } elseif (($this->getAttribute($_user_, "type") == twig_constant("MOD"))) {
                echo gettext("Mod");
                // line 20
                echo "\t\t\t\t";
            } elseif (($this->getAttribute($_user_, "type") == twig_constant("ADMIN"))) {
                echo gettext("Admin");
                // line 21
                echo "\t\t\t\t";
            }
            // line 22
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 24
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "boards") == "")) {
                // line 25
                echo "\t\t\t\t\t<em>";
                echo gettext("none");
                echo "</em>
\t\t\t\t";
            } elseif (($this->getAttribute($_user_, "boards") == "*")) {
                // line 27
                echo "\t\t\t\t\t<em>";
                echo gettext("all boards");
                echo "</em>
\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t";
                // line 30
                echo "\t\t\t\t\t";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                $context["boards"] = twig_split_filter($this->getAttribute($_user_, "boards"), ",");
                // line 31
                echo "\t\t\t\t\t";
                $context["_boards"] = array();
                // line 32
                echo "\t\t\t\t\t";
                if (isset($context["boards"])) { $_boards_ = $context["boards"]; } else { $_boards_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_boards_);
                foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
                    // line 33
                    echo "\t\t\t\t\t\t";
                    if (isset($context["_boards"])) { $__boards_ = $context["_boards"]; } else { $__boards_ = null; }
                    if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    $context["_boards"] = twig_push_filter($__boards_, ((($_board_ == "*")) ? ("*") : (sprintf($this->getAttribute($_config_, "board_abbreviation"), $_board_))));
                    // line 34
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "\t\t\t\t\t";
                if (isset($context["_boards"])) { $__boards_ = $context["_boards"]; } else { $__boards_ = null; }
                $context["_boards"] = twig_sort_filter($__boards_);
                // line 36
                echo "\t\t\t\t\t";
                if (isset($context["_boards"])) { $__boards_ = $context["_boards"]; } else { $__boards_ = null; }
                echo twig_join_filter($__boards_, ", ");
                echo "
\t\t\t\t";
            }
            // line 38
            echo "\t\t\t</td>
\t\t\t";
            // line 39
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "modlog"))) {
                // line 40
                echo "\t\t\t\t<td>
\t\t\t\t\t";
                // line 41
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ($this->getAttribute($_user_, "last")) {
                    // line 42
                    echo "\t\t\t\t\t\t<span title=\"";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "action"));
                    echo "\">";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo ago($this->getAttribute($_user_, "last"));
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t<em>";
                    echo gettext("never");
                    echo "</em>
\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t</td>
\t\t\t";
            }
            // line 48
            echo "\t\t\t<td>
\t\t\t\t";
            // line 49
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ((twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "promoteusers")) && ($this->getAttribute($_user_, "type") < twig_constant("ADMIN")))) {
                // line 50
                echo "\t\t\t\t\t<a style=\"float:left;text-decoration:none\" href=\"?/users/";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo $this->getAttribute($_user_, "id");
                echo "/promote\" title=\"";
                echo gettext("Promote");
                echo "\">&#9650;</a> 
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t";
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ((twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "promoteusers")) && ($this->getAttribute($_user_, "type") > twig_constant("JANITOR")))) {
                // line 53
                echo "\t\t\t\t\t<a style=\"float:left;text-decoration:none\" href=\"?/users/";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo $this->getAttribute($_user_, "id");
                echo "/demote\" title=\"";
                echo gettext("Demote");
                echo "\">&#9660;</a> 
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t";
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "modlog"))) {
                // line 56
                echo "\t\t\t\t\t<a class=\"unimportant\" style=\"margin-left:5px;float:right\" href=\"?/log:";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"));
                echo "\">[";
                echo gettext("log");
                echo "]</a> 
\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t";
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ((twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "editusers")) || (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "change_password")) && ($this->getAttribute($_mod_, "id") == $this->getAttribute($_user_, "id"))))) {
                // line 59
                echo "\t\t\t\t\t<a class=\"unimportant\" style=\"margin-left:5px;float:right\" href=\"?/users/";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo $this->getAttribute($_user_, "id");
                echo "\">[";
                echo gettext("edit");
                echo "]</a> 
\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t";
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "create_pm"))) {
                // line 62
                echo "\t\t\t\t\t<a class=\"unimportant\" style=\"margin-left:5px;float:right\" href=\"?/new_PM/";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"));
                echo "\">[";
                echo gettext("PM");
                echo "]</a>
\t\t\t\t";
            }
            // line 64
            echo "\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</table>

";
        // line 69
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "createusers"))) {
            // line 70
            echo "\t<p style=\"text-align:center\">
\t\t<a href=\"?/users/new\">Create a new user</a>
\t</p>
";
        }
        // line 74
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod/users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 74,  269 => 70,  265 => 69,  261 => 67,  253 => 64,  244 => 62,  239 => 61,  230 => 59,  224 => 58,  215 => 56,  210 => 55,  201 => 53,  195 => 52,  186 => 50,  181 => 49,  178 => 48,  174 => 46,  168 => 44,  158 => 42,  155 => 41,  152 => 40,  148 => 39,  145 => 38,  138 => 36,  134 => 35,  128 => 34,  122 => 33,  116 => 32,  113 => 31,  109 => 30,  107 => 29,  101 => 27,  95 => 25,  92 => 24,  88 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  67 => 16,  62 => 15,  59 => 14,  54 => 13,  49 => 10,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
