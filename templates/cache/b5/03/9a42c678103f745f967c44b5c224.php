<?php

/* index.html */
class __TwigTemplate_b5039a42c678103f745f967c44b5c224 extends Twig_Template
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
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_board_, "title"));
        echo "</title>
</head>
<body>\t
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
\t
\t";
        // line 26
        $this->env->loadTemplate("post_form.html")->display($context);
        // line 27
        echo "\t
\t";
        // line 28
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "global_message")) {
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "global_message");
            echo "</div>";
        }
        // line 29
        echo "\t<hr />
\t<form name=\"postcontrols\" action=\"";
        // line 30
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "post_url");
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"board\" value=\"";
        // line 31
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo $this->getAttribute($_board_, "uri");
        echo "\" />
\t";
        // line 32
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if ($_mod_) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\" />";
        }
        // line 33
        echo "\t";
        if (isset($context["body"])) { $_body_ = $context["body"]; } else { $_body_ = null; }
        echo $_body_;
        echo "
\t";
        // line 34
        $this->env->loadTemplate("report_delete.html")->display($context);
        // line 35
        echo "\t</form>
\t<div class=\"pages\">";
        // line 36
        if (isset($context["btn"])) { $_btn_ = $context["btn"]; } else { $_btn_ = null; }
        echo $this->getAttribute($_btn_, "prev");
        echo " ";
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_pages_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 37
            echo "\t\t [<a ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "selected")) {
                echo "class=\"selected\"";
            }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ((!$this->getAttribute($_page_, "selected"))) {
                echo "href=\"";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo $this->getAttribute($_page_, "link");
                echo "\"";
            }
            echo ">";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "num");
            echo "</a>]";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                echo " ";
            }
            // line 38
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        if (isset($context["btn"])) { $_btn_ = $context["btn"]; } else { $_btn_ = null; }
        echo $this->getAttribute($_btn_, "next");
        echo "</div>
\t";
        // line 39
        if (isset($context["boardlist"])) { $_boardlist_ = $context["boardlist"]; } else { $_boardlist_ = null; }
        echo $this->getAttribute($_boardlist_, "bottom");
        echo "
\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">Powered by <a href=\"http://tinyboard.org/\">Tinyboard</a> ";
        // line 41
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "version");
        echo " | <a href=\"http://tinyboard.org/\">Tinyboard</a> Copyright &copy; 2010-2013 Tinyboard Development Group</p>
\t\t";
        // line 42
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
        // line 43
        echo "\t</footer>
\t<script type=\"text/javascript\">";
        // line 46
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
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 46,  264 => 43,  251 => 42,  221 => 38,  200 => 37,  179 => 36,  176 => 35,  174 => 34,  158 => 31,  125 => 22,  89 => 12,  59 => 11,  44 => 10,  39 => 8,  26 => 3,  22 => 2,  409 => 132,  404 => 131,  401 => 130,  394 => 127,  390 => 126,  381 => 122,  379 => 121,  369 => 119,  364 => 116,  359 => 114,  355 => 113,  338 => 109,  324 => 106,  312 => 104,  308 => 102,  302 => 99,  286 => 94,  277 => 90,  271 => 87,  260 => 83,  246 => 41,  241 => 73,  239 => 72,  235 => 70,  227 => 66,  222 => 65,  212 => 61,  208 => 59,  198 => 55,  187 => 50,  181 => 46,  164 => 45,  119 => 29,  110 => 25,  98 => 22,  91 => 19,  53 => 7,  48 => 6,  43 => 10,  30 => 3,  112 => 43,  107 => 15,  104 => 16,  101 => 15,  85 => 12,  82 => 15,  76 => 10,  67 => 8,  56 => 8,  37 => 5,  231 => 47,  210 => 42,  204 => 40,  191 => 36,  185 => 35,  180 => 34,  170 => 32,  167 => 31,  157 => 29,  155 => 41,  145 => 26,  140 => 27,  122 => 21,  115 => 19,  108 => 17,  99 => 13,  96 => 12,  66 => 11,  50 => 10,  27 => 6,  25 => 5,  19 => 1,  531 => 116,  519 => 113,  507 => 110,  487 => 106,  478 => 104,  475 => 103,  468 => 101,  460 => 99,  456 => 98,  450 => 97,  434 => 94,  428 => 90,  417 => 87,  407 => 86,  396 => 84,  393 => 83,  384 => 82,  380 => 80,  375 => 79,  372 => 78,  350 => 73,  347 => 112,  342 => 110,  339 => 70,  332 => 68,  329 => 108,  320 => 105,  317 => 65,  311 => 64,  307 => 62,  304 => 61,  292 => 59,  285 => 57,  278 => 55,  268 => 86,  265 => 50,  261 => 49,  254 => 47,  250 => 46,  243 => 44,  240 => 39,  225 => 41,  218 => 39,  215 => 43,  203 => 36,  189 => 51,  178 => 33,  166 => 31,  156 => 29,  143 => 28,  139 => 25,  135 => 23,  133 => 23,  129 => 33,  114 => 19,  111 => 16,  97 => 17,  93 => 16,  84 => 13,  73 => 9,  71 => 12,  68 => 11,  63 => 10,  55 => 6,  45 => 6,  38 => 9,  35 => 1,  709 => 162,  705 => 160,  701 => 158,  696 => 157,  692 => 152,  688 => 151,  685 => 150,  679 => 148,  675 => 147,  671 => 142,  668 => 141,  665 => 140,  662 => 139,  659 => 138,  651 => 136,  647 => 135,  644 => 134,  634 => 131,  618 => 129,  614 => 128,  611 => 127,  604 => 125,  600 => 123,  596 => 122,  590 => 121,  587 => 120,  580 => 118,  576 => 116,  572 => 115,  568 => 114,  565 => 113,  558 => 111,  554 => 109,  550 => 108,  547 => 107,  541 => 105,  538 => 104,  534 => 103,  527 => 101,  523 => 114,  516 => 112,  513 => 97,  506 => 95,  499 => 93,  496 => 107,  484 => 90,  470 => 88,  459 => 87,  452 => 86,  447 => 96,  437 => 83,  431 => 82,  424 => 80,  420 => 79,  416 => 137,  414 => 76,  410 => 75,  395 => 73,  392 => 72,  378 => 71,  374 => 70,  367 => 68,  365 => 76,  361 => 66,  354 => 74,  352 => 63,  349 => 62,  344 => 61,  336 => 60,  325 => 59,  315 => 57,  306 => 101,  297 => 54,  294 => 98,  287 => 51,  279 => 49,  275 => 89,  269 => 47,  266 => 46,  253 => 79,  249 => 77,  238 => 39,  228 => 44,  217 => 36,  214 => 62,  205 => 58,  201 => 32,  196 => 38,  193 => 37,  186 => 28,  175 => 33,  171 => 32,  168 => 33,  163 => 32,  160 => 30,  153 => 30,  150 => 29,  141 => 18,  138 => 26,  132 => 22,  126 => 32,  123 => 13,  109 => 11,  102 => 9,  95 => 7,  92 => 13,  86 => 14,  83 => 3,  80 => 14,  75 => 168,  69 => 167,  54 => 165,  36 => 164,  33 => 5,  23 => 112,  21 => 1,);
    }
}
