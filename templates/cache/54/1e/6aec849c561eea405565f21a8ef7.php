<?php

/* installer/check-requirements.html */
class __TwigTemplate_541e6aec849c561eea405565f21a8ef7 extends Twig_Template
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
        echo "<div style=\"max-width:700px;margin:auto\">
\t<h2 style=\"text-align:center\">Pre-installation tests</h2>
\t<table class=\"modlog\" style=\"margin-top:10px;max-width:600px\">
\t\t<tr>
\t\t\t<th>Category</th>
\t\t\t<th>Test</th>
\t\t\t<th>Result</th>
\t\t</tr>
\t\t";
        // line 9
        $context["errors"] = 0;
        // line 10
        echo "\t\t";
        $context["warnings"] = 0;
        // line 11
        echo "\t\t";
        if (isset($context["tests"])) { $_tests_ = $context["tests"]; } else { $_tests_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tests_);
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 12
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"minimal\"><strong>";
            // line 13
            if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
            echo $this->getAttribute($_test_, "category");
            echo "</strong></td>
\t\t\t\t<td>";
            // line 14
            if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
            echo $this->getAttribute($_test_, "name");
            echo "</td>
\t\t\t\t<td class=\"minimal\" style=\"text-align:center\">
\t\t\t\t\t";
            // line 16
            if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
            if ($this->getAttribute($_test_, "result")) {
                // line 17
                echo "\t\t\t\t\t\t<i style=\"font-size:11pt;color:#090\" class=\"icon-check-sign\"></i>
\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t";
                if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
                if ($this->getAttribute($_test_, "required")) {
                    // line 20
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
                    $context["errors"] = ($_errors_ + 1);
                    // line 21
                    echo "\t\t\t\t\t\t\t<i style=\"font-size:11pt;color:#d00\" class=\"icon-exclamation-sign\"></i>
\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["warnings"])) { $_warnings_ = $context["warnings"]; } else { $_warnings_ = null; }
                    $context["warnings"] = ($_warnings_ + 1);
                    // line 24
                    echo "\t\t\t\t\t\t\t<i style=\"font-size:11pt;color:#f80\" class=\"icon-warning-sign\"></i>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</table>
\t";
        // line 31
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if (isset($context["warnings"])) { $_warnings_ = $context["warnings"]; } else { $_warnings_ = null; }
        if (($_errors_ || $_warnings_)) {
            // line 32
            echo "\t\t<p><strong>There were ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo $_errors_;
            echo " error(s) and ";
            if (isset($context["warnings"])) { $_warnings_ = $context["warnings"]; } else { $_warnings_ = null; }
            echo $_warnings_;
            echo " warning(s).</strong></p>
\t\t<ul>
\t\t\t";
            // line 34
            if (isset($context["tests"])) { $_tests_ = $context["tests"]; } else { $_tests_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tests_);
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
                if ((!$this->getAttribute($_test_, "result"))) {
                    // line 35
                    echo "\t\t\t\t<li style=\"margin-bottom:5px\">
\t\t\t\t\t";
                    // line 36
                    if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
                    if ($this->getAttribute($_test_, "required")) {
                        // line 37
                        echo "\t\t\t\t\t\t<i style=\"font-size:11pt;color:#d00\" class=\"icon-exclamation-sign\"></i> <strong>Error:</strong> 
\t\t\t\t\t";
                    } else {
                        // line 39
                        echo "\t\t\t\t\t\t<i style=\"font-size:11pt;color:#f80\" class=\"icon-warning-sign\"></i> <strong>Warning:</strong> 
\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t";
                    if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
                    echo $this->getAttribute($_test_, "message");
                    echo "
\t\t\t\t</li>
\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t</ul>
\t\t";
            // line 45
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ($_errors_) {
                // line 46
                echo "\t\t\t<p style=\"text-align:center\"><a href=\"?step=2\">Clik here to ignore errors and attempt installing anyway (not recommended).</a></p>
\t\t";
            } else {
                // line 48
                echo "\t\t\t<p style=\"text-align:center\"><a href=\"?step=2\">Clik here to proceed with installation.</a></p>
\t\t";
            }
            // line 50
            echo "\t";
        } else {
            // line 51
            echo "\t\t<p>There were no errors or warnings. Good!</p>
\t\t<p style=\"text-align:center\"><a href=\"?step=2\">Clik here to proceed with installation.</a></p>
\t";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "installer/check-requirements.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 54,  159 => 51,  156 => 50,  152 => 48,  148 => 46,  145 => 45,  142 => 44,  130 => 41,  126 => 39,  122 => 37,  119 => 36,  116 => 35,  109 => 34,  99 => 32,  95 => 31,  92 => 30,  84 => 27,  81 => 26,  77 => 24,  73 => 23,  69 => 21,  65 => 20,  61 => 19,  57 => 17,  54 => 16,  48 => 14,  43 => 13,  40 => 12,  34 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }
}
