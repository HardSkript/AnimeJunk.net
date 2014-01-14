<?php

/* header.html */
class __TwigTemplate_6741329c3d82bbe49669b300028cd10e extends Twig_Template
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
        return array (  112 => 43,  107 => 15,  104 => 14,  101 => 13,  85 => 12,  82 => 11,  76 => 10,  67 => 8,  56 => 7,  45 => 6,  37 => 5,  33 => 3,  90 => 22,  83 => 19,  79 => 17,  70 => 16,  63 => 14,  60 => 13,  51 => 10,  35 => 9,  27 => 6,  25 => 2,  164 => 54,  159 => 51,  156 => 50,  152 => 48,  148 => 46,  145 => 45,  142 => 44,  130 => 41,  126 => 39,  122 => 37,  119 => 36,  116 => 35,  109 => 34,  99 => 32,  95 => 31,  92 => 30,  84 => 27,  81 => 26,  77 => 24,  73 => 9,  69 => 21,  65 => 20,  61 => 19,  57 => 17,  54 => 11,  48 => 14,  43 => 13,  40 => 12,  34 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }
}
