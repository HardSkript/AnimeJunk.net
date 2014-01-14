<?php

/* themes/basic/index.html */
class __TwigTemplate_7b2e283a9569a856e0a81bd90e10f6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_d2edd1a05445f2daf8db84f96e4d444019b62c99' => array($this, 'block___internal_d2edd1a05445f2daf8db84f96e4d444019b62c99'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_d2edd1a05445f2daf8db84f96e4d444019b62c99", $context, $blocks));
    }

    public function block___internal_d2edd1a05445f2daf8db84f96e4d444019b62c99($context, array $blocks = array())
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
</head>
<body>
\t";
        // line 10
        if (isset($context["boardlist"])) { $_boardlist_ = $context["boardlist"]; } else { $_boardlist_ = null; }
        echo $this->getAttribute($_boardlist_, "top");
        echo "
\t<header>
\t\t<h1>";
        // line 12
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $this->getAttribute($_settings_, "title");
        echo "</h1>
\t\t<div class=\"subtitle\">";
        // line 13
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $this->getAttribute($_settings_, "subtitle");
        echo "</div>
\t</header>
\t
\t<div class=\"ban\">
\t\t";
        // line 17
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        if ((count($_news_) == 0)) {
            // line 18
            echo "\t\t\t<p style=\"text-align:center\" class=\"unimportant\">(No news to show.)</p>
\t\t";
        } else {
            // line 20
            echo "\t\t\t";
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_news_);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 21
                echo "\t\t\t\t<h2 id=\"";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo $this->getAttribute($_entry_, "id");
                echo "\">
\t\t\t\t\t";
                // line 22
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if ($this->getAttribute($_entry_, "subject")) {
                    // line 23
                    echo "\t\t\t\t\t\t";
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo $this->getAttribute($_entry_, "subject");
                    echo "
\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t<em>no subject</em>
\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t<span class=\"unimportant\"> &mdash; by ";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo $this->getAttribute($_entry_, "name");
                echo " at ";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo twig_date_filter($this->getAttribute($_entry_, "time"), $this->getAttribute($_config_, "post_date"));
                echo "</span>
\t\t\t\t</h2>
\t\t\t\t<p>";
                // line 29
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo $this->getAttribute($_entry_, "body");
                echo "</p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t";
        }
        // line 32
        echo "\t</div>
\t
\t<hr/>
\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">Powered by <a href=\"http://tinyboard.org/\">Tinyboard</a> ";
        // line 35
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "version");
        echo " | <a href=\"http://tinyboard.org/\">Tinyboard</a> Copyright &copy; 2010-2012 Tinyboard Development Group</p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  119 => 32,  116 => 31,  107 => 29,  96 => 27,  92 => 25,  85 => 23,  82 => 22,  76 => 21,  70 => 20,  66 => 18,  63 => 17,  55 => 13,  50 => 12,  44 => 10,  37 => 7,  32 => 6,  26 => 2,  20 => 1,);
    }
}
