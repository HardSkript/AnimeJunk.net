<?php

/* mod/dashboard.html */
class __TwigTemplate_cd8a639a561f614668fb6930ba0da238 extends Twig_Template
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
        echo "<fieldset>
\t<legend>";
        // line 2
        echo gettext("Boards");
        echo "</legend>
\t
\t<ul>
\t\t";
        // line 5
        if (isset($context["boards"])) { $_boards_ = $context["boards"]; } else { $_boards_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_boards_);
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 6
            echo "\t\t\t<li>
\t\t\t\t<a href=\"?/";
            // line 7
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo sprintf($this->getAttribute($_config_, "board_path"), $this->getAttribute($_board_, "uri"));
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "file_index");
            echo "\">";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo sprintf($this->getAttribute($_config_, "board_abbreviation"), $this->getAttribute($_board_, "uri"));
            echo "</a>
\t\t\t\t\t - 
\t\t\t\t";
            // line 9
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_board_, "title"));
            echo "
\t\t\t\t";
            // line 10
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            if ($this->getAttribute($_board_, "subtitle")) {
                // line 11
                echo "\t\t\t\t\t<small>&mdash; 
\t\t\t\t\t\t";
                // line 12
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if ($this->getAttribute($_config_, "allow_subtitle_html")) {
                    // line 13
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
                    echo $this->getAttribute($_board_, "subtitle");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_board_, "subtitle"));
                    echo "
\t\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t</small>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t";
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "manageboards"))) {
                // line 20
                echo "\t\t\t\t\t <a href=\"?/edit/";
                if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
                echo $this->getAttribute($_board_, "uri");
                echo "\"><small>[";
                echo gettext("edit");
                echo "]</small></a>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t
\t\t";
        // line 25
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "newboard"))) {
            // line 26
            echo "\t\t\t<li style=\"margin-top:15px\"><a href=\"?/new-board\"><strong>";
            echo gettext("Create new board");
            echo "</strong></a></li>
\t\t";
        }
        // line 28
        echo "\t</ul>
</fieldset>

<fieldset>
\t<legend>";
        // line 32
        echo gettext("Messages");
        echo "</legend>
\t<ul>
\t\t";
        // line 34
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "noticeboard"))) {
            // line 35
            echo "\t\t\t";
            if (isset($context["noticeboard"])) { $_noticeboard_ = $context["noticeboard"]; } else { $_noticeboard_ = null; }
            if ((count($_noticeboard_) > 0)) {
                // line 36
                echo "\t\t\t\t<li>
\t\t\t\t\t";
                // line 37
                echo gettext("Noticeboard");
                echo ":
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 39
                if (isset($context["noticeboard"])) { $_noticeboard_ = $context["noticeboard"]; } else { $_noticeboard_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_noticeboard_);
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 40
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"?/noticeboard#";
                    // line 41
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo $this->getAttribute($_post_, "id");
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 42
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    if ($this->getAttribute($_post_, "subject")) {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "subject"));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t\t<em>";
                        echo gettext("no subject");
                        echo "</em>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 47
                    echo "\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t<small class=\"unimportant\">
\t\t\t\t\t\t\t\t\t&mdash; by 
\t\t\t\t\t\t\t\t\t";
                    // line 50
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    if ($this->getAttribute($_post_, "username")) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "username"));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t\t\t<em>deleted?</em>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo " 
\t\t\t\t\t\t\t\t\tat 
\t\t\t\t\t\t\t\t\t";
                    // line 56
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo twig_date_filter($this->getAttribute($_post_, "time"), $this->getAttribute($_config_, "post_date"));
                    echo " 
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t";
            }
            // line 63
            echo "\t\t\t<li><a href=\"?/noticeboard\">";
            echo gettext("View all noticeboard entries");
            echo "</a></li>
\t\t";
        }
        // line 65
        echo "\t\t<li><a href=\"?/news\">";
        echo gettext("News");
        echo "</a></li>
\t\t<li>
\t\t\t<a href=\"?/inbox\">
\t\t\t\t";
        // line 68
        echo gettext("PM inbox");
        echo " 
\t\t\t\t";
        // line 69
        if (isset($context["unread_pms"])) { $_unread_pms_ = $context["unread_pms"]; } else { $_unread_pms_ = null; }
        if (($_unread_pms_ > 0)) {
            echo "<strong>";
        }
        echo "(";
        if (isset($context["unread_pms"])) { $_unread_pms_ = $context["unread_pms"]; } else { $_unread_pms_ = null; }
        echo $_unread_pms_;
        echo " unread)";
        if (isset($context["unread_pms"])) { $_unread_pms_ = $context["unread_pms"]; } else { $_unread_pms_ = null; }
        if (($_unread_pms_ > 0)) {
            echo "</strong>";
        }
        // line 70
        echo "\t\t\t</a>
\t\t</li>
\t</ul>
</fieldset>

<fieldset>
\t<legend>";
        // line 76
        echo gettext("Administration");
        echo "</legend>
\t
\t<ul>
\t\t";
        // line 79
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "reports"))) {
            // line 80
            echo "\t\t\t<li>
\t\t\t\t";
            // line 81
            if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
            if (($_reports_ > 0)) {
                echo "<strong>";
            }
            // line 82
            echo "\t\t\t\t\t<a href=\"?/reports\">";
            echo gettext("Report queue");
            echo " (";
            if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
            echo $_reports_;
            echo ")</a>
\t\t\t\t";
            // line 83
            if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
            if (($_reports_ > 0)) {
                echo "</strong>";
            }
            // line 84
            echo "\t\t\t</li>
\t\t";
        }
        // line 86
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "view_banlist"))) {
            // line 87
            echo "\t\t\t<li><a href=\"?/bans\">";
            echo gettext("Ban list");
            echo "</a></li>
\t\t";
        }
        // line 89
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "manageusers"))) {
            // line 90
            echo "\t\t\t<li><a href=\"?/users\">";
            echo gettext("Manage users");
            echo "</a></li>
\t\t";
        } elseif (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "change_password"))) {
            // line 92
            echo "\t\t\t<li><a href=\"?/users/";
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            echo $this->getAttribute($_mod_, "id");
            echo "\">";
            echo gettext("Change password");
            echo "</a></li>
\t\t";
        }
        // line 94
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "themes"))) {
            // line 95
            echo "\t\t\t<li><a href=\"?/themes\">";
            echo gettext("Manage themes");
            echo "</a></li>
\t\t";
        }
        // line 97
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "modlog"))) {
            // line 98
            echo "\t\t\t<li><a href=\"?/log\">";
            echo gettext("Moderation log");
            echo "</a></li>
\t\t";
        }
        // line 100
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "rebuild"))) {
            // line 101
            echo "\t\t\t<li><a href=\"?/rebuild\">";
            echo gettext("Rebuild");
            echo "</a></li>
\t\t";
        }
        // line 103
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "edit_config"))) {
            // line 104
            echo "\t\t\t<li><a href=\"?/config\">";
            echo gettext("Configuration");
            echo "</a></li>
\t\t";
        }
        // line 106
        echo "\t\t
\t</ul>
</fieldset>

";
        // line 110
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "search"))) {
            // line 111
            echo "\t<fieldset>
\t\t<legend>";
            // line 112
            echo gettext("Search");
            echo "</legend>
\t\t
\t\t<ul>
\t\t\t<li>
\t\t\t\t";
            // line 116
            $this->env->loadTemplate("mod/search_form.html")->display($context);
            // line 117
            echo "\t\t\t</li>
\t\t</ul>
\t</fieldset>
";
        }
        // line 121
        echo "
";
        // line 122
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (count($this->getAttribute($this->getAttribute($_config_, "mod"), "dashboard_links"))) {
            // line 123
            echo "\t<fieldset>
\t\t<legend>";
            // line 124
            echo gettext("Other");
            echo "</legend>
\t
\t\t<ul>
\t\t\t";
            // line 127
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_config_, "mod"), "dashboard_links"));
            foreach ($context['_seq'] as $context["label"] => $context["link"]) {
                // line 128
                echo "\t\t\t\t<li><a href=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $_link_;
                echo "\">";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo $_label_;
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t</ul>
\t</fieldset>
";
        }
        // line 133
        echo "
";
        // line 134
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "debug")) {
            // line 135
            echo "\t<fieldset>
\t\t<legend>";
            // line 136
            echo gettext("Debug");
            echo "</legend>
\t\t<ul>
\t\t\t<li><a href=\"?/debug/antispam\">";
            // line 138
            echo gettext("Anti-spam");
            echo "</a></li>
\t\t\t<li><a href=\"?/debug/recent\">";
            // line 139
            echo gettext("Recent posts");
            echo "</a></li>
\t\t\t";
            // line 140
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "debug_sql"))) {
                // line 141
                echo "\t\t\t\t<li><a href=\"?/debug/sql\">";
                echo gettext("SQL");
                echo "</a></li>
\t\t\t";
            }
            // line 143
            echo "\t\t</ul>
\t</fieldset>
";
        }
        // line 146
        echo "
";
        // line 147
        if (isset($context["newer_release"])) { $_newer_release_ = $context["newer_release"]; } else { $_newer_release_ = null; }
        if ($_newer_release_) {
            // line 148
            echo "\t<fieldset>
\t\t<legend>Update</legend>
\t\t<ul>
\t\t\t<li>
\t\t\t\tA newer version of Tinyboard 
\t\t\t\t(<strong>v";
            // line 153
            if (isset($context["newer_release"])) { $_newer_release_ = $context["newer_release"]; } else { $_newer_release_ = null; }
            echo $this->getAttribute($_newer_release_, "massive");
            echo ".";
            if (isset($context["newer_release"])) { $_newer_release_ = $context["newer_release"]; } else { $_newer_release_ = null; }
            echo $this->getAttribute($_newer_release_, "major");
            echo ".";
            if (isset($context["newer_release"])) { $_newer_release_ = $context["newer_release"]; } else { $_newer_release_ = null; }
            echo $this->getAttribute($_newer_release_, "minor");
            echo "</strong>) is available! 
\t\t\t\tSee <a href=\"http://tinyboard.org\">http://tinyboard.org/</a> for upgrade instructions.
\t\t\t</li>
\t\t</ul>
\t</fieldset>
";
        }
        // line 159
        echo "
<fieldset>
\t<legend>";
        // line 161
        echo gettext("User account");
        echo "</legend>
\t
\t<ul>
\t\t<li><a href=\"?/logout\">";
        // line 164
        echo gettext("Logout");
        echo "</a></li>
\t</ul>
</fieldset>

";
    }

    public function getTemplateName()
    {
        return "mod/dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 164,  495 => 161,  491 => 159,  475 => 153,  468 => 148,  465 => 147,  462 => 146,  457 => 143,  451 => 141,  447 => 140,  443 => 139,  439 => 138,  434 => 136,  431 => 135,  428 => 134,  425 => 133,  420 => 130,  407 => 128,  402 => 127,  396 => 124,  393 => 123,  390 => 122,  387 => 121,  381 => 117,  379 => 116,  372 => 112,  369 => 111,  365 => 110,  359 => 106,  353 => 104,  348 => 103,  342 => 101,  337 => 100,  331 => 98,  326 => 97,  320 => 95,  315 => 94,  306 => 92,  300 => 90,  295 => 89,  289 => 87,  284 => 86,  280 => 84,  275 => 83,  267 => 82,  262 => 81,  259 => 80,  255 => 79,  249 => 76,  241 => 70,  228 => 69,  224 => 68,  217 => 65,  211 => 63,  206 => 60,  194 => 56,  190 => 54,  186 => 53,  179 => 51,  176 => 50,  171 => 47,  165 => 45,  158 => 43,  155 => 42,  150 => 41,  147 => 40,  142 => 39,  137 => 37,  134 => 36,  130 => 35,  126 => 34,  121 => 32,  115 => 28,  109 => 26,  105 => 25,  102 => 24,  95 => 22,  86 => 20,  81 => 19,  77 => 17,  70 => 15,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  49 => 9,  36 => 7,  33 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
