<?php

/* themes/catalog/catalog.html */
class __TwigTemplate_741c23f633dd267b30662942cc4dd354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_1bb7029ce634ded07e04ed8f3e56c5943139717b' => array($this, 'block___internal_1bb7029ce634ded07e04ed8f3e56c5943139717b'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_1bb7029ce634ded07e04ed8f3e56c5943139717b", $context, $blocks));
    }

    public function block___internal_1bb7029ce634ded07e04ed8f3e56c5943139717b($context, array $blocks = array())
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
        return array (  133 => 33,  128 => 30,  117 => 26,  112 => 25,  99 => 22,  94 => 21,  91 => 20,  86 => 19,  78 => 15,  67 => 14,  61 => 12,  57 => 10,  49 => 9,  42 => 8,  37 => 7,  32 => 6,  26 => 2,  20 => 1,);
    }
}
