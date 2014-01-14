<?php

/* mod/log.html */
class __TwigTemplate_b108e6a7b458e6b2525992b94c8bae24 extends Twig_Template
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
        echo "<table class=\"modlog\">
\t<tr>
\t\t<th>";
        // line 3
        echo gettext("Staff");
        echo "</th>
\t\t<th>";
        // line 4
        echo gettext("IP address");
        echo "</th>
\t\t<th>";
        // line 5
        echo gettext("Time");
        echo "</th>
\t\t<th>";
        // line 6
        echo gettext("Board");
        echo "</th>
\t\t<th>";
        // line 7
        echo gettext("Action");
        echo "</th>
\t</tr>
\t";
        // line 9
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 10
            echo "\t\t<tr>
\t\t\t<td class=\"minimal\">
\t\t\t\t";
            // line 12
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if ($this->getAttribute($_log_, "username")) {
                // line 13
                echo "\t\t\t\t\t<a href=\"?/log:";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "username"));
                echo "\">";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "username"));
                echo "</a>
\t\t\t\t";
            } elseif (($this->getAttribute($_log_, "mod") == (-1))) {
                // line 15
                echo "\t\t\t\t\t<em>system</em>
\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t<em>";
                echo gettext("deleted?");
                echo "</em>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t</td>
\t\t\t<td class=\"minimal\">
\t\t\t\t";
            // line 21
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "show_ip_modlog"))) {
                // line 22
                echo "\t\t\t\t\t<a href=\"?/IP/";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "ip");
                echo "\">";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "ip");
                echo "</a>
\t\t\t\t";
            } else {
                // line 24
                echo "\t\t\t\t\t<em>hidden</em>
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t</td>
\t\t\t<td class=\"minimal\">
\t\t\t\t<span title=\"";
            // line 28
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_date_filter($this->getAttribute($_log_, "time"), $this->getAttribute($_config_, "post_date"));
            echo "\">";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo ago($this->getAttribute($_log_, "time"));
            echo "</span>
\t\t\t</td>
\t\t\t<td class=\"minimal\">
\t\t\t\t";
            // line 31
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if ($this->getAttribute($_log_, "board")) {
                // line 32
                echo "\t\t\t\t\t<a href=\"?/";
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
\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t-
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 38
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo $this->getAttribute($_log_, "text");
            echo "
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</table>

";
        // line 44
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        if (($_count_ > count($_logs_))) {
            // line 45
            echo "\t<p class=\"unimportant\" style=\"text-align:center;word-wrap:break-word\">
\t\t";
            // line 46
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($_count_ - 1) / $this->getAttribute($this->getAttribute($_config_, "mod"), "modlog_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 47
                echo "\t\t\t<a href=\"?/log";
                if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
                if ($_username_) {
                    echo ":";
                    if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
                    echo $_username_;
                }
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo ($_i_ + 1);
                echo "\">[";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo ($_i_ + 1);
                echo "]</a> 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t</p>
";
        }
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod/log.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 51,  186 => 49,  166 => 47,  160 => 46,  157 => 45,  153 => 44,  149 => 42,  138 => 38,  134 => 36,  130 => 34,  116 => 32,  113 => 31,  102 => 28,  98 => 26,  94 => 24,  84 => 22,  80 => 21,  76 => 19,  70 => 17,  66 => 15,  56 => 13,  53 => 12,  49 => 10,  44 => 9,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
