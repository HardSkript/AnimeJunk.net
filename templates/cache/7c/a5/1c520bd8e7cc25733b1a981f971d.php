<?php

/* mod/themes.html */
class __TwigTemplate_7ca51c520bd8e7cc25733b1a981f971d extends Twig_Template
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
        if (isset($context["themes"])) { $_themes_ = $context["themes"]; } else { $_themes_ = null; }
        if ((count($_themes_) == 0)) {
            // line 2
            echo "\t<p style=\"text-align:center\" class=\"unimportant\">(";
            echo gettext("There are no themes available.");
            echo ")</p>
";
        } else {
            // line 4
            echo "\t<table class=\"modlog\">
\t\t";
            // line 5
            if (isset($context["themes"])) { $_themes_ = $context["themes"]; } else { $_themes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_themes_);
            foreach ($context['_seq'] as $context["theme_name"] => $context["theme"]) {
                // line 6
                echo "\t\t\t<tr>
\t\t\t\t<th class=\"minimal\">";
                // line 7
                echo gettext("Name");
                echo "</th>
\t\t\t\t\t<td>";
                // line 8
                if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                echo $this->getAttribute($_theme_, "name");
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"minimal\">";
                // line 11
                echo gettext("Version");
                echo "</th>
\t\t\t\t\t<td>";
                // line 12
                if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                echo $this->getAttribute($_theme_, "version");
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"minimal\">";
                // line 15
                echo gettext("Description");
                echo "</th>
\t\t\t\t\t<td>";
                // line 16
                if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                echo $this->getAttribute($_theme_, "description");
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"minimal\">";
                // line 19
                echo gettext("Thumbnail");
                echo "</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"float:none;margin:4px";
                // line 21
                if (isset($context["theme_name"])) { $_theme_name_ = $context["theme_name"]; } else { $_theme_name_ = null; }
                if (isset($context["themes_in_use"])) { $_themes_in_use_ = $context["themes_in_use"]; } else { $_themes_in_use_ = null; }
                if (twig_in_filter($_theme_name_, $_themes_in_use_)) {
                    echo ";border:2px solid red;padding:4px";
                }
                echo "\" src=\"";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($this->getAttribute($_config_, "dir"), "themes_uri");
                echo "/";
                if (isset($context["theme_name"])) { $_theme_name_ = $context["theme_name"]; } else { $_theme_name_ = null; }
                echo $_theme_name_;
                echo "/thumb.png\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"minimal\">";
                // line 25
                echo gettext("Actions");
                echo "</th>
\t\t\t\t\t<td><ul style=\"padding:0 20px\">
\t\t\t\t\t\t<li><a title=\" ";
                // line 27
                echo gettext("Use theme");
                echo "\" href=\"?/themes/";
                if (isset($context["theme_name"])) { $_theme_name_ = $context["theme_name"]; } else { $_theme_name_ = null; }
                echo $_theme_name_;
                echo "\">
\t\t\t\t\t\t\t";
                // line 28
                if (isset($context["theme_name"])) { $_theme_name_ = $context["theme_name"]; } else { $_theme_name_ = null; }
                if (isset($context["themes_in_use"])) { $_themes_in_use_ = $context["themes_in_use"]; } else { $_themes_in_use_ = null; }
                if (twig_in_filter($_theme_name_, $_themes_in_use_)) {
                    echo gettext("Reconfigure");
                } else {
                    echo gettext("Install");
                }
                // line 29
                echo "\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t";
                // line 30
                if (isset($context["theme_name"])) { $_theme_name_ = $context["theme_name"]; } else { $_theme_name_ = null; }
                if (isset($context["themes_in_use"])) { $_themes_in_use_ = $context["themes_in_use"]; } else { $_themes_in_use_ = null; }
                if (twig_in_filter($_theme_name_, $_themes_in_use_)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t<li><a href=\"?/themes/";
                    if (isset($context["theme_name"])) { $_theme_name_ = $context["theme_name"]; } else { $_theme_name_ = null; }
                    echo $_theme_name_;
                    echo "/rebuild\">";
                    echo gettext("Rebuild");
                    echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"?/themes/";
                    // line 32
                    if (isset($context["theme_name"])) { $_theme_name_ = $context["theme_name"]; } else { $_theme_name_ = null; }
                    echo $_theme_name_;
                    echo "/uninstall\" onclick=\"return confirm('Are you sure you want to uninstall this theme?');\">";
                    echo gettext("Uninstall");
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t</ul></td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"height:40px\"><td colspan=\"2\"><hr/></td></tr>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['theme_name'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t</table>
";
        }
    }

    public function getTemplateName()
    {
        return "mod/themes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  137 => 34,  129 => 32,  121 => 31,  117 => 30,  114 => 29,  106 => 28,  99 => 27,  94 => 25,  77 => 21,  72 => 19,  65 => 16,  61 => 15,  54 => 12,  50 => 11,  43 => 8,  39 => 7,  36 => 6,  31 => 5,  28 => 4,  22 => 2,  19 => 1,);
    }
}
