<?php

/* mod/inbox.html */
class __TwigTemplate_24f3b135510c524fe1a4853d7e393552 extends Twig_Template
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
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        if ((count($_messages_) == 0)) {
            // line 2
            echo "\t<p style=\"text-align:center\" class=\"unimportant\">(";
            echo gettext("No private messages for you.");
            echo ")</p>
";
        } else {
            // line 4
            echo "\t<table class=\"modlog\">
\t\t<tr>
\t\t\t<th>";
            // line 6
            echo gettext("ID");
            echo "</th>
\t\t\t<th>";
            // line 7
            echo gettext("From");
            echo "</th>
\t\t\t<th>";
            // line 8
            echo gettext("Date");
            echo "</th>
\t\t\t<th>";
            // line 9
            echo gettext("Message snippet");
            echo "</th>
\t\t</tr>
\t\t";
            // line 11
            if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_messages_);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "\t\t\t<tr";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                if ($this->getAttribute($_message_, "unread")) {
                    echo " style=\"font-weight:bold\"";
                }
                echo ">
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t<a href=\"?/PM/";
                // line 14
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "id");
                echo "\">
\t\t\t\t\t\t";
                // line 15
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "id");
                echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t";
                // line 19
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                if ($this->getAttribute($_message_, "username")) {
                    // line 20
                    echo "\t\t\t\t\t\t<a href=\"?/new_PM/";
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_message_, "username"));
                    echo "\">";
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_message_, "username"));
                    echo "</a>
\t\t\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t\t\t\t<em>";
                    echo gettext("deleted?");
                    echo "</em>
\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t</td>
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t";
                // line 26
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo twig_date_filter($this->getAttribute($_message_, "time"), $this->getAttribute($_config_, "post_date"));
                echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"?/PM/";
                // line 29
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "id");
                echo "\">
\t\t\t\t\t\t";
                // line 30
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "snippet");
                echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t</table>
";
        }
    }

    public function getTemplateName()
    {
        return "mod/inbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  112 => 30,  107 => 29,  99 => 26,  95 => 24,  89 => 22,  79 => 20,  76 => 19,  68 => 15,  63 => 14,  54 => 12,  49 => 11,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 4,  22 => 2,  19 => 1,);
    }
}
