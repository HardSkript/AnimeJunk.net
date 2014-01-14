<?php

/* mod/noticeboard.html */
class __TwigTemplate_dc4cd7314e7ed86b4c9bf07eaf9f5656 extends Twig_Template
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
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "noticeboard_post"))) {
            // line 2
            echo "\t<fieldset>
\t\t<legend>";
            // line 3
            echo gettext("New post");
            echo "</legend>
\t\t<form style=\"margin:0\" action=\"\" method=\"post\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 7
            echo gettext("Name");
            echo "</th>
\t\t\t\t\t<td>";
            // line 8
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mod_, "username"));
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><label for=\"subject\">";
            // line 11
            echo gettext("Subject");
            echo "</label></th>
\t\t\t\t\t<td><input type=\"text\" size=\"55\" name=\"subject\" id=\"subject\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 15
            echo gettext("Body");
            echo "</th>
\t\t\t\t\t<td><textarea name=\"body\" style=\"width:100%;height:100px\"></textarea></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<p style=\"text-align:center\">
\t\t\t\t<input type=\"submit\" value=\"";
            // line 20
            echo gettext("Post to noticeboard");
            echo "\" />
\t\t\t</p>
\t\t</form>
\t</fieldset>
";
        }
        // line 25
        echo "
";
        // line 26
        if (isset($context["noticeboard"])) { $_noticeboard_ = $context["noticeboard"]; } else { $_noticeboard_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_noticeboard_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "\t<div class=\"ban\">
\t\t";
            // line 28
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "noticeboard_delete"))) {
                // line 29
                echo "\t\t\t<span style=\"float:right;padding:2px\">
\t\t\t\t<a class=\"unimportant\" href=\"?/noticeboard/delete/";
                // line 30
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "id");
                echo "\">[";
                echo gettext("delete");
                echo "]</a>
\t\t\t</span>
\t\t";
            }
            // line 33
            echo "\t\t<h2 id=\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo "\">
\t\t\t<small class=\"unimportant\">
\t\t\t\t<a href=\"#";
            // line 35
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo "\">#</a>
\t\t\t</small> 
\t\t\t";
            // line 37
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($_post_, "subject")) {
                // line 38
                echo "\t\t\t\t";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_post_, "subject"));
                echo "
\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t<em>";
                echo gettext("no subject");
                echo "</em>
\t\t\t";
            }
            // line 41
            echo " 
\t\t\t<small class=\"unimportant\">
\t\t\t\t&mdash; ";
            // line 43
            echo gettext("by");
            echo " 
\t\t\t\t";
            // line 44
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($_post_, "username")) {
                // line 45
                echo "\t\t\t\t\t";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_post_, "username"));
                echo "
\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t<em>";
                echo gettext("deleted?");
                echo "</em>
\t\t\t\t";
            }
            // line 48
            echo " 
\t\t\t\t";
            // line 49
            echo gettext("at");
            echo " 
\t\t\t\t";
            // line 50
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_date_filter($this->getAttribute($_post_, "time"), $this->getAttribute($_config_, "post_date"));
            echo " 
\t\t\t</small>
\t\t</h2>
\t\t<p>
\t\t\t";
            // line 54
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "body");
            echo "
\t\t</p>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
";
        // line 59
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        if (isset($context["noticeboard"])) { $_noticeboard_ = $context["noticeboard"]; } else { $_noticeboard_ = null; }
        if (($_count_ > count($_noticeboard_))) {
            // line 60
            echo "\t<p class=\"unimportant\" style=\"text-align:center;word-wrap:break-word\">
\t\t";
            // line 61
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($_count_ - 1) / $this->getAttribute($this->getAttribute($_config_, "mod"), "noticeboard_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 62
                echo "\t\t\t<a href=\"?/noticeboard/";
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
            // line 64
            echo "\t</p>
";
        }
    }

    public function getTemplateName()
    {
        return "mod/noticeboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 64,  190 => 62,  184 => 61,  181 => 60,  177 => 59,  174 => 58,  163 => 54,  154 => 50,  150 => 49,  147 => 48,  141 => 47,  134 => 45,  131 => 44,  127 => 43,  123 => 41,  117 => 40,  110 => 38,  107 => 37,  101 => 35,  94 => 33,  85 => 30,  82 => 29,  78 => 28,  75 => 27,  70 => 26,  67 => 25,  59 => 20,  51 => 15,  44 => 11,  37 => 8,  33 => 7,  26 => 3,  23 => 2,  19 => 1,);
    }
}
