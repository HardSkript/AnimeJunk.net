<?php

/* mod/config-editor.html */
class __TwigTemplate_a2466cbd1bc6a43a0a60783e06ce9d17 extends Twig_Template
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
        echo "<p>
\tAny changes you make here will simply be appended to <code>";
        // line 2
        if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
        echo $_file_;
        echo "</code>. If you wish to make the most of Tinyboard's customizability, you can instead edit the file directly. This page is intended for making quick changes and for those who don't have a basic understanding of PHP code.
</p>
";
        // line 4
        if (isset($context["boards"])) { $_boards_ = $context["boards"]; } else { $_boards_ = null; }
        if (count($_boards_)) {
            // line 5
            echo "\t<ul>
\t\t";
            // line 6
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            if ($_board_) {
                // line 7
                echo "\t\t\t<li><a href=\"?/config\">Edit site-wide config</a></li>
\t\t";
            }
            // line 9
            echo "\t\t";
            if (isset($context["boards"])) { $_boards_ = $context["boards"]; } else { $_boards_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_boards_);
            foreach ($context['_seq'] as $context["_key"] => $context["_board"]) {
                if (isset($context["_board"])) { $__board_ = $context["_board"]; } else { $__board_ = null; }
                if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
                if (($this->getAttribute($__board_, "uri") != $_board_)) {
                    // line 10
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"?/config/";
                    // line 11
                    if (isset($context["_board"])) { $__board_ = $context["_board"]; } else { $__board_ = null; }
                    echo $this->getAttribute($__board_, "uri");
                    echo "\">Edit config for ";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    if (isset($context["_board"])) { $__board_ = $context["_board"]; } else { $__board_ = null; }
                    echo sprintf($this->getAttribute($_config_, "board_abbreviation"), $this->getAttribute($__board_, "uri"));
                    echo "</a>
\t\t\t</li>
\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_board'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t</ul>
";
        }
        // line 16
        echo "<form method=\"post\" action=\"\">
\t<table class=\"mod config-editor\">
\t\t<tr>
\t\t\t<th class=\"minimal\">";
        // line 19
        echo gettext("Name");
        echo "</th>
\t\t\t<th>";
        // line 20
        echo gettext("Value");
        echo "</th>
\t\t\t<th class=\"minimal\">";
        // line 21
        echo gettext("Type");
        echo "</th>
\t\t\t<th>";
        // line 22
        echo gettext("Description");
        echo "</th>
\t\t</tr>
\t\t";
        // line 24
        if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_conf_);
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
            if (($this->getAttribute($_var_, "type") != "array")) {
                // line 25
                echo "\t\t\t";
                if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                if ((count($this->getAttribute($_var_, "name")) == 1)) {
                    // line 26
                    echo "\t\t\t\t";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    $context["name"] = ("cf_" . $this->getAttribute($_var_, "name"));
                    // line 27
                    echo "\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    $context["name"] = ("cf_" . twig_join_filter($this->getAttribute($_var_, "name"), "/"));
                    // line 29
                    echo "\t\t\t";
                }
                // line 30
                echo "\t\t\t
\t\t\t<tr>
\t\t\t\t<th class=\"minimal\">
\t\t\t\t\t";
                // line 33
                if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                if ((count($this->getAttribute($_var_, "name")) == 1)) {
                    // line 34
                    echo "\t\t\t\t\t\t";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    echo $this->getAttribute($_var_, "name");
                    echo "
\t\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t\t";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    echo twig_join_filter($this->getAttribute($_var_, "name"), " &rarr; ");
                    echo "
\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t</th>
\t\t\t\t
\t\t\t\t<td>
\t\t\t\t\t";
                // line 41
                if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                if (($this->getAttribute($_var_, "type") == "string")) {
                    // line 42
                    echo "\t\t\t\t\t\t<input name=\"";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo $_name_;
                    echo "\" type=\"text\" value=\"";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_var_, "value"));
                    echo "\">
\t\t\t\t\t";
                } elseif ($this->getAttribute($_var_, "permissions")) {
                    // line 44
                    echo "\t\t\t\t\t\t<select name=\"";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo $_name_;
                    echo "\">
\t\t\t\t\t\t\t<option value=\"";
                    // line 45
                    echo twig_constant("JANITOR");
                    echo "\"";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    if (($this->getAttribute($_var_, "value") == twig_constant("JANITOR"))) {
                        echo " selected";
                    }
                    echo ">JANITOR</option>
\t\t\t\t\t\t\t<option value=\"";
                    // line 46
                    echo twig_constant("MOD");
                    echo "\"";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    if (($this->getAttribute($_var_, "value") == twig_constant("MOD"))) {
                        echo " selected";
                    }
                    echo ">MOD</option>
\t\t\t\t\t\t\t<option value=\"";
                    // line 47
                    echo twig_constant("ADMIN");
                    echo "\"";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    if (($this->getAttribute($_var_, "value") == twig_constant("ADMIN"))) {
                        echo " selected";
                    }
                    echo ">ADMIN</option>
\t\t\t\t\t\t\t<option value=\"";
                    // line 48
                    echo twig_constant("DISABLED");
                    echo "\"";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    if (($this->getAttribute($_var_, "value") == twig_constant("DISABLED"))) {
                        echo " selected";
                    }
                    echo ">DISABLED</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
                } elseif (($this->getAttribute($_var_, "type") == "integer")) {
                    // line 51
                    echo "\t\t\t\t\t\t<input name=\"";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo $_name_;
                    echo "\" type=\"number\" value=\"";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_var_, "value"));
                    echo "\">
\t\t\t\t\t";
                } elseif (($this->getAttribute($_var_, "type") == "boolean")) {
                    // line 53
                    echo "\t\t\t\t\t\t<input name=\"";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo $_name_;
                    echo "\" type=\"checkbox\" ";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    if ($this->getAttribute($_var_, "value")) {
                        echo "checked";
                    }
                    echo ">
\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t?
\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 58
                if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                if ((($this->getAttribute($_var_, "type") == "integer") || ($this->getAttribute($_var_, "type") == "boolean"))) {
                    // line 59
                    echo "\t\t\t\t\t <small>Default: <code>";
                    if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                    echo $this->getAttribute($_var_, "default");
                    echo "</code></small>
\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t</td>
\t\t\t\t
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t";
                // line 64
                if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_var_, "type"));
                echo "
\t\t\t\t</td>
\t\t\t\t
\t\t\t\t<td style=\"word-wrap:break-word;width:50%\">
\t\t\t\t\t";
                // line 68
                if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
                echo twig_join_filter($this->getAttribute($_var_, "comment"), " ");
                echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t</table>
\t
\t<ul style=\"padding:0;text-align:center;list-style:none\">
\t\t<li><input name=\"save\" type=\"submit\" value=\"";
        // line 75
        echo gettext("Save changes");
        echo "\"></li>
\t</ul>
</form>

";
    }

    public function getTemplateName()
    {
        return "mod/config-editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 75,  267 => 72,  255 => 68,  247 => 64,  242 => 61,  235 => 59,  232 => 58,  229 => 57,  225 => 55,  213 => 53,  203 => 51,  192 => 48,  183 => 47,  174 => 46,  165 => 45,  159 => 44,  149 => 42,  146 => 41,  141 => 38,  134 => 36,  127 => 34,  124 => 33,  119 => 30,  116 => 29,  112 => 28,  109 => 27,  105 => 26,  101 => 25,  94 => 24,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  72 => 16,  68 => 14,  53 => 11,  50 => 10,  41 => 9,  37 => 7,  34 => 6,  31 => 5,  28 => 4,  22 => 2,  19 => 1,);
    }
}
