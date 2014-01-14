<?php

/* post_thread.html */
class __TwigTemplate_1332aecb8bc14ee70869de9d350ac065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_95e0eda27e96cac380d82832371a6de9c9a657ca' => array($this, 'block___internal_95e0eda27e96cac380d82832371a6de9c9a657ca'),
            '__internal_95e5e33e5e07b71f402ea909a9e6294e393c9ff8' => array($this, 'block___internal_95e5e33e5e07b71f402ea909a9e6294e393c9ff8'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_95e0eda27e96cac380d82832371a6de9c9a657ca", $context, $blocks));
        // line 134
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ($_index_) {
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo truncate($this->getAttribute($_post_, "body"), $this->getAttribute($_post_, "link"));
        } else {
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "body");
        }
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_95e5e33e5e07b71f402ea909a9e6294e393c9ff8", $context, $blocks));
        // line 163
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        $context["hr"] = $this->getAttribute($_post_, "hr");
        // line 164
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_post_, "posts"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 165
            echo "\t";
            $this->env->loadTemplate("post_reply.html")->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "<br class=\"clear\"/>";
        if (isset($context["hr"])) { $_hr_ = $context["hr"]; } else { $_hr_ = null; }
        if ($_hr_) {
            echo "<hr/>";
        }
        // line 168
        echo "</div>
";
    }

    // line 1
    public function block___internal_95e0eda27e96cac380d82832371a6de9c9a657ca($context, array $blocks = array())
    {
        // line 3
        echo "
<div id=\"thread_";
        // line 4
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "\">

";
        // line 6
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_post_, "embed")) {
            // line 7
            echo "\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "embed");
            echo "
";
        } elseif (($this->getAttribute($_post_, "file") == "deleted")) {
            // line 9
            echo "\t<img class=\"post-image deleted\" src=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "image_deleted");
            echo "\" alt=\"\" />
";
        } elseif (($this->getAttribute($_post_, "file") && $this->getAttribute($_post_, "file"))) {
            // line 11
            echo "\t<p class=\"fileinfo\">";
            echo gettext("File:");
            echo " <a href=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "uri_img");
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "file");
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "file");
            echo "</a> <span class=\"unimportant\">
\t(
\t\t";
            // line 13
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_post_, "thumb") == "spoiler")) {
                // line 14
                echo "\t\t\t";
                echo gettext("Spoiler Image");
                echo ", 
\t\t";
            }
            // line 16
            echo "\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo format_bytes($this->getAttribute($_post_, "filesize"));
            echo "
\t\t";
            // line 17
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_post_, "filewidth") && $this->getAttribute($_post_, "fileheight"))) {
                // line 18
                echo "\t\t\t, ";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "filewidth");
                echo "x";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "fileheight");
                echo "
\t\t\t";
                // line 19
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if ($this->getAttribute($_config_, "show_ratio")) {
                    // line 20
                    echo "\t\t\t\t, ";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo $this->getAttribute($_post_, "ratio");
                    echo "
\t\t\t";
                }
                // line 22
                echo "\t\t";
            }
            // line 23
            echo "\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_config_, "show_filename") && $this->getAttribute($_post_, "filename"))) {
                // line 24
                echo "\t\t\t, 
\t\t\t";
                // line 25
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_post_, "filename")) > $this->getAttribute($_config_, "max_filename_display"))) {
                    // line 26
                    echo "\t\t\t\t<span class=\"postfilename\" title=\"";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "filename"));
                    echo "\">";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo bidi_cleanup(twig_truncate_filter($this->getAttribute($_post_, "filename"), $this->getAttribute($_config_, "max_filename_display")));
                    echo "</span>
\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t<span class=\"postfilename\">";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo bidi_cleanup(twig_escape_filter($this->env, $this->getAttribute($_post_, "filename")));
                    echo "</span>
\t\t\t";
                }
                // line 30
                echo "\t\t";
            }
            // line 31
            echo "\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if ((($this->getAttribute($_post_, "thumb") != "file") && $this->getAttribute($_config_, "image_identification"))) {
                // line 32
                echo "\t\t\t, 
\t\t\t<span class='image_id'>
\t\t\t <a href=\"http://imgops.com/";
                // line 34
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "domain");
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "uri_img");
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "file");
                echo "\">io</a>
\t\t\t";
                // line 35
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if ((twig_extension_filter($this->getAttribute($_post_, "file")) == "jpg")) {
                    // line 36
                    echo "\t\t\t\t <a href=\"http://regex.info/exif.cgi?url=";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo $this->getAttribute($_config_, "domain");
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo $this->getAttribute($_config_, "uri_img");
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo $this->getAttribute($_post_, "file");
                    echo "\">e</a>
\t\t\t";
                }
                // line 38
                echo "\t\t\t <a href=\"http://www.google.com/searchbyimage?image_url=";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "domain");
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "uri_img");
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "file");
                echo "\">g</a>
\t\t\t <a href=\"http://www.tineye.com/search?url=";
                // line 39
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "domain");
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "uri_img");
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "file");
                echo "\">t</a>
\t\t\t</span>
\t\t";
            }
            // line 42
            echo "\t)
\t</span></p>
<a href=\"";
            // line 44
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "uri_img");
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "file");
            echo "\" target=\"_blank\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ((($this->getAttribute($_post_, "thumb") == "file") || ($this->getAttribute($this->getAttribute($_post_, "modifiers"), "is_file", array(), "array") == "1"))) {
                echo " class=\"file\"";
            }
            echo ">
<img class=\"post-image\" src=\"
\t";
            // line 46
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_post_, "thumb") == "file")) {
                // line 47
                echo "\t\t";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "root");
                echo "
\t\t";
                // line 48
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if ($this->getAttribute($this->getAttribute($_config_, "file_icons"), twig_extension_filter($this->getAttribute($_post_, "filename")), array(), "array")) {
                    // line 49
                    echo "\t\t\t";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo sprintf($this->getAttribute($_config_, "file_thumb"), $this->getAttribute($this->getAttribute($_config_, "file_icons"), twig_extension_filter($this->getAttribute($_post_, "filename")), array(), "array"));
                    echo "
\t\t";
                } else {
                    // line 51
                    echo "\t\t\t";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo sprintf($this->getAttribute($_config_, "file_thumb"), $this->getAttribute($this->getAttribute($_config_, "file_icons"), "default"));
                    echo "
\t\t";
                }
                // line 53
                echo "\t";
            } elseif (($this->getAttribute($_post_, "thumb") == "spoiler")) {
                // line 54
                echo "\t\t";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "root");
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "spoiler_image");
                echo "
\t";
            } else {
                // line 56
                echo "\t\t";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "uri_thumb");
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "thumb");
                echo "
\t";
            }
            // line 57
            echo "\" style=\"width:";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "thumbwidth");
            echo "px;height:";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "thumbheight");
            echo "px\" alt=\"\" /></a>
";
        }
        // line 59
        echo "<div class=\"post op\"><p class=\"intro\"";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((!$_index_)) {
            echo " id=\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo "\"";
        }
        echo ">
\t<input type=\"checkbox\" class=\"delete\" name=\"delete_";
        // line 60
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "\" id=\"delete_";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "\" />
\t<label for=\"delete_";
        // line 61
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "\">
\t\t";
        // line 62
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_post_, "subject")) > 0)) {
            // line 63
            echo "\t\t\t";
            // line 64
            echo "\t\t\t<span class=\"subject\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo bidi_cleanup($this->getAttribute($_post_, "subject"));
            echo "</span> 
\t\t";
        }
        // line 66
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_post_, "email")) > 0)) {
            // line 67
            echo "\t\t\t";
            // line 68
            echo "\t\t\t<a class=\"email\" href=\"mailto:";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "email");
            echo "\">
\t\t";
        }
        // line 70
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        $context["capcode"] = capcode($this->getAttribute($_post_, "capcode"));
        // line 71
        echo "\t\t<span ";
        if (isset($context["capcode"])) { $_capcode_ = $context["capcode"]; } else { $_capcode_ = null; }
        if ($this->getAttribute($_capcode_, "name")) {
            echo "style=\"";
            if (isset($context["capcode"])) { $_capcode_ = $context["capcode"]; } else { $_capcode_ = null; }
            echo $this->getAttribute($_capcode_, "name");
            echo "\" ";
        }
        echo "class=\"name\">";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo bidi_cleanup($this->getAttribute($_post_, "name"));
        echo "</span>
\t\t";
        // line 72
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_post_, "trip")) > 0)) {
            // line 73
            echo "\t\t\t<span ";
            if (isset($context["capcode"])) { $_capcode_ = $context["capcode"]; } else { $_capcode_ = null; }
            if ($this->getAttribute($_capcode_, "trip")) {
                echo "style=\"";
                if (isset($context["capcode"])) { $_capcode_ = $context["capcode"]; } else { $_capcode_ = null; }
                echo $this->getAttribute($_capcode_, "trip");
                echo "\" ";
            }
            echo "class=\"trip\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "trip");
            echo "</span>
\t\t";
        }
        // line 75
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_post_, "email")) > 0)) {
            // line 76
            echo "\t\t\t";
            // line 77
            echo "\t\t\t</a>
\t\t";
        }
        // line 79
        echo "\t\t";
        if (isset($context["capcode"])) { $_capcode_ = $context["capcode"]; } else { $_capcode_ = null; }
        if ($_capcode_) {
            // line 80
            echo "\t\t\t";
            if (isset($context["capcode"])) { $_capcode_ = $context["capcode"]; } else { $_capcode_ = null; }
            echo $this->getAttribute($_capcode_, "cap");
            echo "
\t\t";
        }
        // line 82
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if (($this->getAttribute($_post_, "mod") && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "show_ip"), $this->getAttribute($_board_, "uri")))) {
            // line 83
            echo "\t\t\t [<a class=\"ip-link\" style=\"margin:0;\" href=\"?/IP/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "ip");
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "ip");
            echo "</a>]
\t\t";
        }
        // line 85
        echo "\t\t";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (($this->getAttribute($_config_, "display_flags") && $this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag"))) {
            // line 86
            echo "\t\t\t <img class=\"flag\" src=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo sprintf($this->getAttribute($_config_, "uri_flags"), $this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag"));
            echo "\"
\t\t\t \tstyle=\"";
            // line 87
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag style", array(), "array")) {
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag style", array(), "array");
            } else {
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "flag_style");
            }
            echo "\"
\t\t\t ";
            // line 88
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag alt", array(), "array")) {
                echo "alt=\"";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag alt", array(), "array"), "html_attr");
                echo "\" title=\"";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag alt", array(), "array"), "html_attr");
                echo "\"";
            }
            echo ">
\t\t";
        }
        // line 90
        echo "\t\t <time datetime=\"";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_date_filter($this->getAttribute($_post_, "time"), "%Y-%m-%dT%H:%M:%S");
        echo twig_timezone_function();
        echo "\">";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_date_filter($this->getAttribute($_post_, "time"), $this->getAttribute($_config_, "post_date"));
        echo "</time>
\t</label>
\t";
        // line 92
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "poster_ids")) {
            // line 93
            echo "\t\t ID: ";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo poster_id($this->getAttribute($_post_, "ip"), $this->getAttribute($_post_, "id"));
            echo "
\t";
        }
        // line 95
        echo "\t <a class=\"post_no\" href=\"";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "link");
        echo "\">No.</a>
\t<a class=\"post_no\"
\t\t";
        // line 97
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((!$_index_)) {
            // line 98
            echo "\t\t\t onclick=\"citeReply(";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo ");\"
\t\t";
        }
        // line 100
        echo "\t\t href=\"";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ($_index_) {
            // line 101
            echo "\t\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "link", array(0 => "q"), "method");
            echo "
\t\t";
        } else {
            // line 103
            echo "\t\t\tjavascript:void(0);
\t\t";
        }
        // line 104
        echo "\">
\t\t";
        // line 105
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "
\t</a>
\t";
        // line 107
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_post_, "sticky")) {
            // line 108
            echo "\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if ($this->getAttribute($_config_, "font_awesome")) {
                // line 109
                echo "\t\t\t<i class=\"icon-pushpin icon\"></i>
\t\t";
            } else {
                // line 111
                echo "\t\t\t<img class=\"icon\" title=\"Sticky\" src=\"";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "image_sticky");
                echo "\" alt=\"Sticky\" />
\t\t";
            }
            // line 113
            echo "\t";
        }
        // line 114
        echo "\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_post_, "locked")) {
            // line 115
            echo "\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if ($this->getAttribute($_config_, "font_awesome")) {
                // line 116
                echo "\t\t\t<i class=\"icon-lock icon\"></i>
\t\t";
            } else {
                // line 118
                echo "\t\t\t<img class=\"icon\" title=\"Locked\" src=\"";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "image_locked");
                echo "\" alt=\"Locked\" />
\t\t";
            }
            // line 120
            echo "\t";
        }
        // line 121
        echo "\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if (($this->getAttribute($_post_, "bumplocked") && (($this->getAttribute($this->getAttribute($_config_, "mod"), "view_bumplock") < 0) || ($this->getAttribute($_post_, "mod") && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "view_bumplock"), $this->getAttribute($_board_, "uri")))))) {
            // line 122
            echo "\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if ($this->getAttribute($_config_, "font_awesome")) {
                // line 123
                echo "\t\t\t<i class=\"icon-anchor icon\"></i>
\t\t";
            } else {
                // line 125
                echo "\t\t\t<img class=\"icon\" title=\"Bumplocked\" src=\"";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "image_bumplocked");
                echo "\" alt=\"Bumplocked\" />
\t\t";
            }
            // line 127
            echo "\t";
        }
        // line 128
        echo "\t";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ($_index_) {
            // line 129
            echo "\t\t<a href=\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "root");
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            echo $this->getAttribute($_board_, "dir");
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($this->getAttribute($_config_, "dir"), "res");
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo sprintf($this->getAttribute($_config_, "file_page"), $this->getAttribute($_post_, "id"));
            echo "\">[";
            echo gettext("Reply");
            echo "]</a>
\t";
        }
        // line 131
        echo "\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "postControls");
        echo "
\t</p>
\t<div class=\"body\">
\t\t";
    }

    // line 134
    public function block___internal_95e5e33e5e07b71f402ea909a9e6294e393c9ff8($context, array $blocks = array())
    {
        // line 135
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_post_, "modifiers"), "ban message", array(), "array")) {
            // line 136
            echo "\t\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo sprintf($this->getAttribute($this->getAttribute($_config_, "mod"), "ban_message"), $this->getAttribute($this->getAttribute($_post_, "modifiers"), "ban message", array(), "array"));
            echo "
\t\t";
        }
        // line 138
        echo "\t</div>
\t";
        // line 139
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (($this->getAttribute($_post_, "omitted") || $this->getAttribute($_post_, "omitted_images"))) {
            // line 140
            echo "\t\t<span class=\"omitted\">
\t\t\t";
            // line 141
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($_post_, "omitted")) {
                // line 142
                echo "\t\t\t\t";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo strtr(ngettext("1 post", "%count% posts", abs($this->getAttribute($_post_, "omitted"))), array("%count%" => abs($this->getAttribute($_post_, "omitted")), ));
                // line 147
                echo "\t\t\t\t";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if ($this->getAttribute($_post_, "omitted_images")) {
                    // line 148
                    echo "\t\t\t\t\t ";
                    echo gettext("and");
                    echo " 
\t\t\t\t";
                }
                // line 150
                echo "\t\t\t";
            }
            // line 151
            echo "\t\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($_post_, "omitted_images")) {
                // line 152
                echo "\t\t\t\t";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo strtr(ngettext("1 image reply", "%count% image replies", abs($this->getAttribute($_post_, "omitted_images"))), array("%count%" => abs($this->getAttribute($_post_, "omitted_images")), ));
                // line 157
                echo "\t\t\t";
            }
            echo " ";
            echo gettext("omitted. Click reply to view.");
            // line 158
            echo "\t\t</span>
\t";
        }
        // line 160
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((!$_index_)) {
        }
        // line 162
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "post_thread.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 162,  705 => 160,  701 => 158,  696 => 157,  692 => 152,  688 => 151,  685 => 150,  679 => 148,  675 => 147,  671 => 142,  668 => 141,  665 => 140,  662 => 139,  659 => 138,  651 => 136,  647 => 135,  644 => 134,  634 => 131,  618 => 129,  614 => 128,  611 => 127,  604 => 125,  600 => 123,  596 => 122,  590 => 121,  587 => 120,  580 => 118,  576 => 116,  572 => 115,  568 => 114,  565 => 113,  558 => 111,  554 => 109,  550 => 108,  547 => 107,  541 => 105,  538 => 104,  534 => 103,  527 => 101,  523 => 100,  516 => 98,  513 => 97,  506 => 95,  499 => 93,  496 => 92,  484 => 90,  470 => 88,  459 => 87,  452 => 86,  447 => 85,  437 => 83,  431 => 82,  424 => 80,  420 => 79,  416 => 77,  414 => 76,  410 => 75,  395 => 73,  392 => 72,  378 => 71,  374 => 70,  367 => 68,  365 => 67,  361 => 66,  354 => 64,  352 => 63,  349 => 62,  344 => 61,  336 => 60,  325 => 59,  315 => 57,  306 => 56,  297 => 54,  294 => 53,  287 => 51,  279 => 49,  275 => 48,  269 => 47,  266 => 46,  253 => 44,  249 => 42,  238 => 39,  228 => 38,  217 => 36,  214 => 35,  205 => 34,  201 => 32,  196 => 31,  193 => 30,  186 => 28,  175 => 26,  171 => 25,  168 => 24,  163 => 23,  160 => 22,  153 => 20,  150 => 19,  141 => 18,  138 => 17,  132 => 16,  126 => 14,  123 => 13,  109 => 11,  102 => 9,  95 => 7,  92 => 6,  86 => 4,  83 => 3,  80 => 1,  75 => 168,  69 => 167,  54 => 165,  36 => 164,  33 => 163,  23 => 134,  21 => 1,);
    }
}
