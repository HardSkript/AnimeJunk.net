<?php

/* themes/catalog/catalog.html */
class __TwigTemplate_314a3cd4e37dbd77eeb87671bff8f01e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_593eb4ec0436a4983e7f6ce3d2c809d3aca2e023' => array($this, 'block___internal_593eb4ec0436a4983e7f6ce3d2c809d3aca2e023'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_593eb4ec0436a4983e7f6ce3d2c809d3aca2e023", $context, $blocks));
    }

    public function block___internal_593eb4ec0436a4983e7f6ce3d2c809d3aca2e023($context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>
<html>
<head>
\t<meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
\t<title>";
        // line 6
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $this->getAttribute($_settings_, "title");
        echo "</title>
\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 7
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "url_stylesheet");
        echo "\"/>
\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 8
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "root");
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $this->getAttribute($_settings_, "css");
        echo "\"/>
\t";
        // line 9
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "url_favicon")) {
            echo "<link rel=\"shortcut icon\" href=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "url_favicon");
            echo "\" />";
        }
        // line 10
        echo "</head>
<body>
\t";
        // line 12
        if (isset($context["boardlist"])) { $_boardlist_ = $context["boardlist"]; } else { $_boardlist_ = null; }
        echo $this->getAttribute($_boardlist_, "top");
        echo "
\t<header>
\t\t<h1>";
        // line 14
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $this->getAttribute($_settings_, "title");
        echo " (<a href=\"";
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        echo $_link_;
        echo "\">/";
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo $_board_;
        echo "/</a>)</h1>
\t\t<div class=\"subtitle\">";
        // line 15
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $this->getAttribute($_settings_, "subtitle");
        echo "</div>
\t</header>
\t
\t<ul>
\t";
        // line 19
        if (isset($context["recent_posts"])) { $_recent_posts_ = $context["recent_posts"]; } else { $_recent_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_recent_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "\t\t<div class=\"thread\">
\t\t\t<a href=\"";
            // line 21
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "link");
            echo "\">
\t\t\t\t<img src=\"";
            // line 22
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "file");
            echo "\" class=\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "board");
            echo "\" title=\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_date_filter($this->getAttribute($_post_, "bump"), "%b %d %H:%M");
            echo "\">
\t\t\t</a>
\t\t\t<span class=\"replies\">
\t\t\t\t<strong>";
            // line 25
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo strtr(ngettext("1 reply", "%count% replies", abs($this->getAttribute($_post_, "reply_count"))), array("%count%" => abs($this->getAttribute($_post_, "reply_count")), ));
            echo "</strong><br/>
\t\t\t\t";
            // line 26
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "body");
            echo "
\t\t\t</span>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</ul>
\t
\t<hr/>
\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">Powered by <a href=\"http://tinyboard.org/\">Tinyboard</a> ";
        // line 33
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "version");
        echo " | <a href=\"http://tinyboard.org/\">Tinyboard</a> Copyright &copy; 2010-2013 Tinyboard Development Group</p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/catalog/catalog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  117 => 26,  94 => 21,  78 => 15,  61 => 12,  57 => 10,  49 => 9,  42 => 8,  32 => 6,  20 => 1,  267 => 46,  264 => 43,  251 => 42,  221 => 38,  200 => 37,  179 => 36,  176 => 35,  174 => 34,  158 => 31,  125 => 22,  89 => 12,  59 => 11,  44 => 10,  39 => 8,  26 => 2,  22 => 2,  409 => 132,  404 => 131,  401 => 130,  394 => 127,  390 => 126,  381 => 122,  379 => 121,  369 => 119,  364 => 116,  359 => 114,  355 => 113,  338 => 109,  324 => 106,  312 => 104,  308 => 102,  302 => 99,  286 => 94,  277 => 90,  271 => 87,  260 => 83,  246 => 41,  241 => 73,  239 => 72,  235 => 70,  227 => 66,  222 => 65,  212 => 61,  208 => 59,  198 => 55,  187 => 50,  181 => 46,  164 => 45,  119 => 29,  110 => 25,  98 => 22,  91 => 20,  53 => 7,  48 => 6,  43 => 10,  30 => 3,  112 => 25,  107 => 15,  104 => 16,  101 => 15,  85 => 12,  82 => 15,  76 => 10,  67 => 14,  56 => 8,  37 => 7,  231 => 47,  210 => 42,  204 => 40,  191 => 36,  185 => 35,  180 => 34,  170 => 32,  167 => 31,  157 => 29,  155 => 41,  145 => 26,  140 => 27,  122 => 21,  115 => 19,  108 => 17,  99 => 22,  96 => 12,  66 => 11,  50 => 10,  27 => 6,  25 => 5,  19 => 1,  531 => 116,  519 => 113,  507 => 110,  487 => 106,  478 => 104,  475 => 103,  468 => 101,  460 => 99,  456 => 98,  450 => 97,  434 => 94,  428 => 90,  417 => 87,  407 => 86,  396 => 84,  393 => 83,  384 => 82,  380 => 80,  375 => 79,  372 => 78,  350 => 73,  347 => 112,  342 => 110,  339 => 70,  332 => 68,  329 => 108,  320 => 105,  317 => 65,  311 => 64,  307 => 62,  304 => 61,  292 => 59,  285 => 57,  278 => 55,  268 => 86,  265 => 50,  261 => 49,  254 => 47,  250 => 46,  243 => 44,  240 => 39,  225 => 41,  218 => 39,  215 => 43,  203 => 36,  189 => 51,  178 => 33,  166 => 31,  156 => 29,  143 => 28,  139 => 25,  135 => 23,  133 => 33,  129 => 33,  114 => 19,  111 => 16,  97 => 17,  93 => 16,  84 => 13,  73 => 9,  71 => 12,  68 => 11,  63 => 10,  55 => 6,  45 => 6,  38 => 9,  35 => 1,  709 => 162,  705 => 160,  701 => 158,  696 => 157,  692 => 152,  688 => 151,  685 => 150,  679 => 148,  675 => 147,  671 => 142,  668 => 141,  665 => 140,  662 => 139,  659 => 138,  651 => 136,  647 => 135,  644 => 134,  634 => 131,  618 => 129,  614 => 128,  611 => 127,  604 => 125,  600 => 123,  596 => 122,  590 => 121,  587 => 120,  580 => 118,  576 => 116,  572 => 115,  568 => 114,  565 => 113,  558 => 111,  554 => 109,  550 => 108,  547 => 107,  541 => 105,  538 => 104,  534 => 103,  527 => 101,  523 => 114,  516 => 112,  513 => 97,  506 => 95,  499 => 93,  496 => 107,  484 => 90,  470 => 88,  459 => 87,  452 => 86,  447 => 96,  437 => 83,  431 => 82,  424 => 80,  420 => 79,  416 => 137,  414 => 76,  410 => 75,  395 => 73,  392 => 72,  378 => 71,  374 => 70,  367 => 68,  365 => 76,  361 => 66,  354 => 74,  352 => 63,  349 => 62,  344 => 61,  336 => 60,  325 => 59,  315 => 57,  306 => 101,  297 => 54,  294 => 98,  287 => 51,  279 => 49,  275 => 89,  269 => 47,  266 => 46,  253 => 79,  249 => 77,  238 => 39,  228 => 44,  217 => 36,  214 => 62,  205 => 58,  201 => 32,  196 => 38,  193 => 37,  186 => 28,  175 => 33,  171 => 32,  168 => 33,  163 => 32,  160 => 30,  153 => 30,  150 => 29,  141 => 18,  138 => 26,  132 => 22,  126 => 32,  123 => 13,  109 => 11,  102 => 9,  95 => 7,  92 => 13,  86 => 19,  83 => 3,  80 => 14,  75 => 168,  69 => 167,  54 => 165,  36 => 164,  33 => 5,  23 => 112,  21 => 1,);
    }
}
