<?php

/* thread.html */
class __TwigTemplate_1d7b2fbc0f13ae5b40efde58b695e70b extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t";
        // line 5
        $this->env->loadTemplate("header.html")->display($context);
        // line 6
        echo "\t<title>";
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo $this->getAttribute($_board_, "url");
        echo " - ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
        if (($this->getAttribute($_config_, "thread_subject_in_title") && $this->getAttribute($_thread_, "subject"))) {
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo $this->getAttribute($_thread_, "subject");
        } else {
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_board_, "title"));
        }
        echo "</title>
</head>
<body>
\t";
        // line 9
        if (isset($context["boardlist"])) { $_boardlist_ = $context["boardlist"]; } else { $_boardlist_ = null; }
        echo $this->getAttribute($_boardlist_, "top");
        echo "
\t";
        // line 10
        if (isset($context["pm"])) { $_pm_ = $context["pm"]; } else { $_pm_ = null; }
        if ($_pm_) {
            echo "<div class=\"top_notice\">You have <a href=\"?/PM/";
            if (isset($context["pm"])) { $_pm_ = $context["pm"]; } else { $_pm_ = null; }
            echo $this->getAttribute($_pm_, "id");
            echo "\">an unread PM</a>";
            if (isset($context["pm"])) { $_pm_ = $context["pm"]; } else { $_pm_ = null; }
            if (($this->getAttribute($_pm_, "waiting") > 0)) {
                echo ", plus ";
                if (isset($context["pm"])) { $_pm_ = $context["pm"]; } else { $_pm_ = null; }
                echo $this->getAttribute($_pm_, "waiting");
                echo " more waiting";
            }
            echo ".</div><hr />";
        }
        // line 11
        echo "\t";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "url_banner")) {
            echo "<img class=\"banner\" src=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "url_banner");
            echo "\" ";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (($this->getAttribute($_config_, "banner_width") || $this->getAttribute($_config_, "banner_height"))) {
                echo "style=\"";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if ($this->getAttribute($_config_, "banner_width")) {
                    echo "width:";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo $this->getAttribute($_config_, "banner_width");
                    echo "px";
                }
                echo ";";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if ($this->getAttribute($_config_, "banner_width")) {
                    echo "height:";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo $this->getAttribute($_config_, "banner_height");
                    echo "px";
                }
                echo "\" ";
            }
            echo "alt=\"\" />";
        }
        // line 12
        echo "\t<header>
\t\t<h1>";
        // line 13
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo $this->getAttribute($_board_, "url");
        echo " - ";
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_board_, "title"));
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 15
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if ($this->getAttribute($_board_, "subtitle")) {
            // line 16
            echo "\t\t\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if ($this->getAttribute($_config_, "allow_subtitle_html")) {
                // line 17
                echo "\t\t\t\t\t";
                if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
                echo $this->getAttribute($_board_, "subtitle");
                echo "
\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t";
                if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_board_, "subtitle"));
                echo "
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t";
        }
        // line 22
        echo "\t\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if ($_mod_) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 23
        echo "\t\t</div>
\t</header>

\t<div class=\"banner\">";
        // line 26
        echo gettext("Posting mode: Reply");
        echo " <a class=\"unimportant\" href=\"";
        if (isset($context["return"])) { $_return_ = $context["return"]; } else { $_return_ = null; }
        echo $_return_;
        echo "\">[";
        echo gettext("Return");
        echo "]</a></div>

\t";
        // line 28
        $this->env->loadTemplate("post_form.html")->display($context);
        // line 29
        echo "
\t";
        // line 30
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "global_message")) {
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "global_message");
            echo "</div>";
        }
        // line 31
        echo "\t<hr />
\t<form name=\"postcontrols\" action=\"";
        // line 32
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "post_url");
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"board\" value=\"";
        // line 33
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo $this->getAttribute($_board_, "uri");
        echo "\" />
\t";
        // line 34
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if ($_mod_) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\" />";
        }
        // line 35
        echo "\t";
        if (isset($context["body"])) { $_body_ = $context["body"]; } else { $_body_ = null; }
        echo $_body_;
        echo "
\t";
        // line 36
        $this->env->loadTemplate("report_delete.html")->display($context);
        // line 37
        echo "\t</form>
\t<a href=\"";
        // line 38
        if (isset($context["return"])) { $_return_ = $context["return"]; } else { $_return_ = null; }
        echo $_return_;
        echo "\">[";
        echo gettext("Return");
        echo "]</a>

\t";
        // line 40
        if (isset($context["boardlist"])) { $_boardlist_ = $context["boardlist"]; } else { $_boardlist_ = null; }
        echo $this->getAttribute($_boardlist_, "bottom");
        echo "
\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">Powered by <a href=\"http://tinyboard.org/\">Tinyboard</a> ";
        // line 42
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "version");
        echo " | <a href=\"http://tinyboard.org/\">Tinyboard</a> Copyright &copy; 2010-2013 Tinyboard Development Group</p>
\t\t";
        // line 43
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_config_, "footer"));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            echo "<p class=\"unimportant\" style=\"text-align:center;\">";
            if (isset($context["footer"])) { $_footer_ = $context["footer"]; } else { $_footer_ = null; }
            echo $_footer_;
            echo "</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t</footer>
\t<script type=\"text/javascript\">";
        // line 47
        echo "
\t\tready();
\t";
        echo "</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "thread.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 47,  210 => 42,  204 => 40,  191 => 36,  185 => 35,  180 => 34,  170 => 32,  167 => 31,  157 => 29,  155 => 28,  145 => 26,  140 => 23,  122 => 19,  115 => 17,  108 => 15,  99 => 13,  96 => 12,  66 => 11,  50 => 10,  27 => 6,  25 => 5,  19 => 1,  531 => 116,  519 => 113,  507 => 110,  487 => 106,  478 => 104,  475 => 103,  468 => 101,  460 => 99,  456 => 98,  450 => 97,  434 => 94,  428 => 90,  417 => 87,  407 => 86,  396 => 84,  393 => 83,  384 => 82,  380 => 80,  375 => 79,  372 => 78,  350 => 73,  347 => 72,  342 => 71,  339 => 70,  332 => 68,  329 => 67,  320 => 66,  317 => 65,  311 => 64,  307 => 62,  304 => 61,  292 => 59,  285 => 57,  278 => 55,  268 => 51,  265 => 50,  261 => 49,  254 => 47,  250 => 46,  243 => 44,  240 => 43,  225 => 41,  218 => 39,  215 => 43,  203 => 36,  189 => 34,  178 => 33,  166 => 31,  156 => 29,  143 => 26,  139 => 25,  135 => 23,  133 => 22,  129 => 21,  114 => 19,  111 => 16,  97 => 17,  93 => 16,  84 => 13,  73 => 10,  71 => 9,  68 => 8,  63 => 7,  55 => 6,  45 => 9,  38 => 3,  35 => 1,  709 => 162,  705 => 160,  701 => 158,  696 => 157,  692 => 152,  688 => 151,  685 => 150,  679 => 148,  675 => 147,  671 => 142,  668 => 141,  665 => 140,  662 => 139,  659 => 138,  651 => 136,  647 => 135,  644 => 134,  634 => 131,  618 => 129,  614 => 128,  611 => 127,  604 => 125,  600 => 123,  596 => 122,  590 => 121,  587 => 120,  580 => 118,  576 => 116,  572 => 115,  568 => 114,  565 => 113,  558 => 111,  554 => 109,  550 => 108,  547 => 107,  541 => 105,  538 => 104,  534 => 103,  527 => 101,  523 => 114,  516 => 112,  513 => 97,  506 => 95,  499 => 93,  496 => 107,  484 => 90,  470 => 88,  459 => 87,  452 => 86,  447 => 96,  437 => 83,  431 => 82,  424 => 80,  420 => 79,  416 => 77,  414 => 76,  410 => 75,  395 => 73,  392 => 72,  378 => 71,  374 => 70,  367 => 68,  365 => 76,  361 => 66,  354 => 74,  352 => 63,  349 => 62,  344 => 61,  336 => 60,  325 => 59,  315 => 57,  306 => 56,  297 => 54,  294 => 53,  287 => 51,  279 => 49,  275 => 54,  269 => 47,  266 => 46,  253 => 44,  249 => 42,  238 => 39,  228 => 44,  217 => 36,  214 => 35,  205 => 34,  201 => 32,  196 => 38,  193 => 37,  186 => 28,  175 => 33,  171 => 32,  168 => 24,  163 => 23,  160 => 30,  153 => 20,  150 => 28,  141 => 18,  138 => 17,  132 => 22,  126 => 14,  123 => 13,  109 => 11,  102 => 9,  95 => 7,  92 => 6,  86 => 14,  83 => 3,  80 => 12,  75 => 168,  69 => 167,  54 => 165,  36 => 164,  33 => 163,  23 => 112,  21 => 1,);
    }
}
