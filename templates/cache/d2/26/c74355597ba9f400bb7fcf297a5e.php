<?php

/* mod/news.html */
class __TwigTemplate_d226c74355597ba9f400bb7fcf297a5e extends Twig_Template
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
        if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "news"))) {
            // line 2
            echo "\t<fieldset>
\t\t<legend>";
            // line 3
            echo gettext("New post");
            echo "</legend>
\t\t<form style=\"margin:0\" action=\"\" method=\"post\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<th>
\t\t\t\t\t\t";
            // line 8
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "news_custom"))) {
                // line 9
                echo "\t\t\t\t\t\t\t<label for=\"name\">";
                echo gettext("Name");
                echo "</label>
\t\t\t\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t\t\t\t";
                echo gettext("Name");
                // line 12
                echo "\t\t\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t\t</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 15
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "news_custom"))) {
                // line 16
                echo "\t\t\t\t\t\t\t<input type=\"text\" size=\"55\" name=\"name\" id=\"name\" value=\"";
                if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_mod_, "username"));
                echo "\">
\t\t\t\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t\t\t\t";
                if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_mod_, "username"));
                echo "
\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><label for=\"subject\">";
            // line 23
            echo gettext("Subject");
            echo "</label></th>
\t\t\t\t\t<td><input type=\"text\" size=\"55\" name=\"subject\" id=\"subject\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><label for=\"body\">";
            // line 27
            echo gettext("Body");
            echo "</label></th>
\t\t\t\t\t<td><textarea name=\"body\" id=\"body\" style=\"width:100%;height:100px\"></textarea></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<p style=\"text-align:center\">
\t\t\t\t<input type=\"submit\" value=\"";
            // line 32
            echo gettext("Post news entry");
            echo "\">
\t\t\t</p>
\t\t</form>
\t</fieldset>
";
        }
        // line 37
        echo "
";
        // line 38
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_news_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 39
            echo "\t<div class=\"ban\">
\t\t";
            // line 40
            if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (twig_hasPermission_filter($_mod_, $this->getAttribute($this->getAttribute($_config_, "mod"), "news_delete"))) {
                // line 41
                echo "\t\t\t<span style=\"float:right;padding:2px\">
\t\t\t\t<a class=\"unimportant\" href=\"?/news/delete/";
                // line 42
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "id");
                echo "\">[";
                echo gettext("delete");
                echo "]</a>
\t\t\t</span>
\t\t";
            }
            // line 45
            echo "\t\t<h2 id=\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo "\">
\t\t\t<small class=\"unimportant\">
\t\t\t\t<a href=\"#";
            // line 47
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo "\">#</a>
\t\t\t</small> 
\t\t\t";
            // line 49
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($_post_, "subject")) {
                // line 50
                echo "\t\t\t\t";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_post_, "subject"));
                echo "
\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t<em>";
                echo gettext("no subject");
                echo "</em>
\t\t\t";
            }
            // line 53
            echo " 
\t\t\t<small class=\"unimportant\">
\t\t\t\t&mdash; ";
            // line 55
            echo gettext("by");
            echo " ";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "name");
            echo " ";
            echo gettext("at");
            echo " ";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_date_filter($this->getAttribute($_post_, "time"), $this->getAttribute($_config_, "post_date"));
            echo " 
\t\t\t</small>
\t\t</h2>
\t\t<p>
\t\t\t";
            // line 59
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
        // line 63
        echo "
";
        // line 64
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        if (($_count_ > count($_news_))) {
            // line 65
            echo "\t<p class=\"unimportant\" style=\"text-align:center;word-wrap:break-word\">
\t\t";
            // line 66
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($_count_ - 1) / $this->getAttribute($this->getAttribute($_config_, "mod"), "news_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 67
                echo "\t\t\t<a href=\"?/news/";
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
            // line 69
            echo "\t</p>
";
        }
    }

    public function getTemplateName()
    {
        return "mod/news.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 69,  203 => 67,  197 => 66,  194 => 65,  190 => 64,  187 => 63,  176 => 59,  160 => 55,  156 => 53,  150 => 52,  143 => 50,  140 => 49,  134 => 47,  127 => 45,  118 => 42,  115 => 41,  111 => 40,  108 => 39,  103 => 38,  100 => 37,  92 => 32,  84 => 27,  77 => 23,  72 => 20,  65 => 18,  58 => 16,  54 => 15,  50 => 13,  47 => 12,  44 => 11,  38 => 9,  34 => 8,  26 => 3,  23 => 2,  19 => 1,);
    }
}
