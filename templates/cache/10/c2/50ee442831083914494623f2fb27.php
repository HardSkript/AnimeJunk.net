<?php

/* mod/theme_config.html */
class __TwigTemplate_10c250ee442831083914494623f2fb27 extends Twig_Template
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
        echo "<form action=\"\" method=\"post\">
\t";
        // line 2
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ((!$_config_)) {
            // line 3
            echo "\t\t<p style=\"text-align:center\" class=\"unimportant\">(No configuration required.)</p>
\t";
        } else {
            // line 5
            echo "\t\t<table>
\t\t\t";
            // line 6
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_theme_, "config"));
            foreach ($context['_seq'] as $context["_key"] => $context["conf"]) {
                // line 7
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 8
                if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                echo $this->getAttribute($_conf_, "title");
                echo "</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 10
                if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                if (($this->getAttribute($_conf_, "type") == "checkbox")) {
                    // line 11
                    echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                    if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                    echo $this->getAttribute($_conf_, "name");
                    echo "\"
\t\t\t\t\t\t\t";
                    // line 12
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                    if (($this->getAttribute($_settings_, $this->getAttribute($_conf_, "name"), array(), "array") || ((!$this->getAttribute($_settings_, $this->getAttribute($_conf_, "name"), array(), "array", true, true)) && $this->getAttribute($_conf_, "default")))) {
                        // line 13
                        echo "\t\t\t\t\t\t\t\tchecked
\t\t\t\t\t\t\t";
                    }
                    // line 14
                    echo ">
\t\t\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"";
                    if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                    echo $this->getAttribute($_conf_, "name");
                    echo "\" 
\t\t\t\t\t\t\t";
                    // line 17
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                    if ($this->getAttribute($_settings_, $this->getAttribute($_conf_, "name"), array(), "array")) {
                        // line 18
                        echo "\t\t\t\t\t\t\t\tvalue=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                        echo $this->getAttribute($_settings_, $this->getAttribute($_conf_, "name"), array(), "array");
                        echo "\"
\t\t\t\t\t\t\t";
                    } else {
                        // line 20
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                        if ($this->getAttribute($_conf_, "default")) {
                            echo "value=\"";
                            if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                            echo $this->getAttribute($_conf_, "default");
                            echo "\"";
                        }
                    }
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                    if ($this->getAttribute($_conf_, "size")) {
                        // line 22
                        echo "\t\t\t\t\t\t\t\tsize=\"";
                        if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                        echo $this->getAttribute($_conf_, "size");
                        echo "\"
\t\t\t\t\t\t\t";
                    }
                    // line 23
                    echo ">
\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t";
                if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                if ($this->getAttribute($_conf_, "comment")) {
                    // line 26
                    echo "\t\t\t\t\t\t <span class=\"unimportant\">";
                    if (isset($context["conf"])) { $_conf_ = $context["conf"]; } else { $_conf_ = null; }
                    echo $this->getAttribute($_conf_, "comment");
                    echo "</span>
\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t</table>
\t";
        }
        // line 33
        echo "\t<p style=\"text-align:center\">
\t\t<input name=\"install\" type=\"submit\" value=\"";
        // line 34
        echo gettext("Install theme");
        echo "\" />
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "mod/theme_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  133 => 33,  129 => 31,  121 => 28,  114 => 26,  110 => 25,  106 => 23,  99 => 22,  95 => 21,  85 => 20,  77 => 18,  73 => 17,  67 => 16,  63 => 14,  59 => 13,  55 => 12,  49 => 11,  46 => 10,  40 => 8,  37 => 7,  32 => 6,  29 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
