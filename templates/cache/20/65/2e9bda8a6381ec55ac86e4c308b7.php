<?php

/* header.html */
class __TwigTemplate_20652e9bda8a6381ec55ac86e4c308b7 extends Twig_Template
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
        echo "\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "url_stylesheet");
        echo "\">
\t\t";
        // line 2
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "url_favicon")) {
            echo "<link rel=\"shortcut icon\" href=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "url_favicon");
            echo "\">";
        }
        // line 3
        echo "\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
\t\t";
        // line 5
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "meta_keywords")) {
            echo "<meta name=\"keywords\" content=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "meta_keywords");
            echo "\">";
        }
        // line 6
        echo "\t\t";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (($this->getAttribute($this->getAttribute($_config_, "default_stylesheet"), 1) != "")) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" id=\"stylesheet\" href=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "uri_stylesheets");
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($this->getAttribute($_config_, "default_stylesheet"), 1);
            echo "\">";
        }
        // line 7
        echo "\t\t";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "font_awesome")) {
            echo "<link rel=\"stylesheet\" media=\"screen\" href=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "root");
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "font_awesome_css");
            echo "\">";
        }
        // line 8
        echo "\t\t<script type=\"text/javascript\">var configRoot=\"";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "root");
        echo "\";</script>
\t\t";
        // line 9
        if (isset($context["nojavascript"])) { $_nojavascript_ = $context["nojavascript"]; } else { $_nojavascript_ = null; }
        if ((!$_nojavascript_)) {
            // line 10
            echo "\t\t\t<script type=\"text/javascript\" src=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "url_javascript");
            echo "\"></script>
\t\t\t";
            // line 11
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if ((!$this->getAttribute($_config_, "additional_javascript_compile"))) {
                // line 12
                echo "\t\t\t";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_config_, "additional_javascript"));
                foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                    echo "<script type=\"text/javascript\" src=\"";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo $this->getAttribute($_config_, "additional_javascript_url");
                    if (isset($context["javascript"])) { $_javascript_ = $context["javascript"]; } else { $_javascript_ = null; }
                    echo $_javascript_;
                    echo "\"></script>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "\t\t\t";
            }
            // line 14
            echo "\t\t";
        }
        // line 15
        echo "\t\t";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "recaptcha")) {
            echo "<style type=\"text/css\">";
            // line 43
            echo "
\t\t\t#recaptcha_area {
\t\t\t\tfloat: none !important;
\t\t\t\tpadding: 0 !important;
\t\t\t}
\t\t\t#recaptcha_logo, #recaptcha_privacy {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t#recaptcha_table {
\t\t\t\tborder: none !important;
\t\t\t}
\t\t\t#recaptcha_table tr:first-child {
\t\t\t\theight: auto;
\t\t\t}
\t\t\t.recaptchatable img {
\t\t\t\tfloat: none !important;
\t\t\t}
\t\t\t#recaptcha_response_field {
\t\t\t\tfont-size: 10pt !important;
\t\t\t\tborder: 1px solid #a9a9a9 !important;
\t\t\t\tpadding: 1px !important;
\t\t\t}
\t\t\ttd.recaptcha_image_cell {
\t\t\t\tbackground: transparent !important;
\t\t\t}
\t\t\t.recaptchatable, #recaptcha_area tr, #recaptcha_area td, #recaptcha_area th {
\t\t\t\tpadding: 0 !important;
\t\t\t}
\t\t";
            echo "</Tinyboard-master/style>";
        }
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 43,  107 => 15,  104 => 14,  101 => 13,  85 => 12,  82 => 11,  76 => 10,  67 => 8,  56 => 7,  37 => 5,  231 => 47,  210 => 42,  204 => 40,  191 => 36,  185 => 35,  180 => 34,  170 => 32,  167 => 31,  157 => 29,  155 => 28,  145 => 26,  140 => 23,  122 => 19,  115 => 17,  108 => 15,  99 => 13,  96 => 12,  66 => 11,  50 => 10,  27 => 6,  25 => 2,  19 => 1,  531 => 116,  519 => 113,  507 => 110,  487 => 106,  478 => 104,  475 => 103,  468 => 101,  460 => 99,  456 => 98,  450 => 97,  434 => 94,  428 => 90,  417 => 87,  407 => 86,  396 => 84,  393 => 83,  384 => 82,  380 => 80,  375 => 79,  372 => 78,  350 => 73,  347 => 72,  342 => 71,  339 => 70,  332 => 68,  329 => 67,  320 => 66,  317 => 65,  311 => 64,  307 => 62,  304 => 61,  292 => 59,  285 => 57,  278 => 55,  268 => 51,  265 => 50,  261 => 49,  254 => 47,  250 => 46,  243 => 44,  240 => 43,  225 => 41,  218 => 39,  215 => 43,  203 => 36,  189 => 34,  178 => 33,  166 => 31,  156 => 29,  143 => 26,  139 => 25,  135 => 23,  133 => 22,  129 => 21,  114 => 19,  111 => 16,  97 => 17,  93 => 16,  84 => 13,  73 => 9,  71 => 9,  68 => 8,  63 => 7,  55 => 6,  45 => 6,  38 => 3,  35 => 1,  709 => 162,  705 => 160,  701 => 158,  696 => 157,  692 => 152,  688 => 151,  685 => 150,  679 => 148,  675 => 147,  671 => 142,  668 => 141,  665 => 140,  662 => 139,  659 => 138,  651 => 136,  647 => 135,  644 => 134,  634 => 131,  618 => 129,  614 => 128,  611 => 127,  604 => 125,  600 => 123,  596 => 122,  590 => 121,  587 => 120,  580 => 118,  576 => 116,  572 => 115,  568 => 114,  565 => 113,  558 => 111,  554 => 109,  550 => 108,  547 => 107,  541 => 105,  538 => 104,  534 => 103,  527 => 101,  523 => 114,  516 => 112,  513 => 97,  506 => 95,  499 => 93,  496 => 107,  484 => 90,  470 => 88,  459 => 87,  452 => 86,  447 => 96,  437 => 83,  431 => 82,  424 => 80,  420 => 79,  416 => 77,  414 => 76,  410 => 75,  395 => 73,  392 => 72,  378 => 71,  374 => 70,  367 => 68,  365 => 76,  361 => 66,  354 => 74,  352 => 63,  349 => 62,  344 => 61,  336 => 60,  325 => 59,  315 => 57,  306 => 56,  297 => 54,  294 => 53,  287 => 51,  279 => 49,  275 => 54,  269 => 47,  266 => 46,  253 => 44,  249 => 42,  238 => 39,  228 => 44,  217 => 36,  214 => 35,  205 => 34,  201 => 32,  196 => 38,  193 => 37,  186 => 28,  175 => 33,  171 => 32,  168 => 24,  163 => 23,  160 => 30,  153 => 20,  150 => 28,  141 => 18,  138 => 17,  132 => 22,  126 => 14,  123 => 13,  109 => 11,  102 => 9,  95 => 7,  92 => 6,  86 => 14,  83 => 3,  80 => 12,  75 => 168,  69 => 167,  54 => 165,  36 => 164,  33 => 3,  23 => 112,  21 => 1,);
    }
}
