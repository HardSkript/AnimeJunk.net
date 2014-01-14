<?php

/* report_delete.html */
class __TwigTemplate_656199f3ab946b5044d5513930e10534 extends Twig_Template
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
        echo "<div class=\"delete\">
\t";
        // line 2
        echo gettext("Delete Post");
        echo " [<input title=\"Delete file only\" type=\"checkbox\" name=\"file\" id=\"delete_file\" />
\t <label for=\"delete_file\">";
        // line 3
        echo gettext("File");
        echo "</label>] <label for=\"password\">";
        echo gettext("Password");
        echo "</label> 
\t\t<input id=\"password\" type=\"password\" name=\"password\" size=\"12\" maxlength=\"18\" />
\t\t<input type=\"submit\" name=\"delete\" value=\"";
        // line 5
        echo gettext("Delete");
        echo "\" />
</div>
<div class=\"delete\" style=\"clear:both\">
\t<label for=\"reason\">";
        // line 8
        echo gettext("Reason");
        echo "</label> 
\t\t<input id=\"reason\" type=\"text\" name=\"reason\" size=\"20\" maxlength=\"30\" />
\t\t<input type=\"submit\" name=\"report\" value=\"";
        // line 10
        echo gettext("Report");
        echo "\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "report_delete.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  39 => 8,  33 => 5,  26 => 3,  22 => 2,  416 => 137,  409 => 132,  404 => 131,  401 => 130,  394 => 127,  390 => 126,  381 => 122,  379 => 121,  369 => 119,  364 => 116,  359 => 114,  355 => 113,  347 => 112,  342 => 110,  338 => 109,  329 => 108,  324 => 106,  320 => 105,  312 => 104,  308 => 102,  306 => 101,  302 => 99,  294 => 98,  286 => 94,  277 => 90,  275 => 89,  271 => 87,  260 => 83,  253 => 79,  249 => 77,  246 => 76,  239 => 72,  235 => 70,  227 => 66,  214 => 62,  212 => 61,  208 => 59,  205 => 58,  198 => 55,  189 => 51,  187 => 50,  181 => 46,  155 => 41,  153 => 40,  150 => 39,  129 => 33,  126 => 32,  119 => 29,  110 => 25,  98 => 22,  91 => 19,  82 => 15,  80 => 14,  71 => 12,  68 => 11,  63 => 10,  56 => 8,  53 => 7,  48 => 6,  30 => 3,  268 => 86,  265 => 43,  252 => 42,  247 => 41,  241 => 73,  222 => 65,  201 => 37,  180 => 36,  177 => 35,  175 => 34,  169 => 33,  164 => 45,  159 => 31,  154 => 30,  151 => 29,  143 => 28,  140 => 35,  138 => 34,  133 => 23,  125 => 22,  122 => 21,  115 => 19,  108 => 24,  104 => 16,  101 => 15,  92 => 13,  89 => 12,  59 => 11,  43 => 5,  38 => 4,  27 => 6,  25 => 2,  19 => 1,);
    }
}
