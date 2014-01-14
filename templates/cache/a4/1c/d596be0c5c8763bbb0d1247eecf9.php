<?php

/* post_reply.html */
class __TwigTemplate_a41cd596be0c5c8763bbb0d1247eecf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_31dfad0b08919c344624485b40f53a668f8443c5' => array($this, 'block___internal_31dfad0b08919c344624485b40f53a668f8443c5'),
            '__internal_ceca14986f4bcd5078832643564ef781674cbbc1' => array($this, 'block___internal_ceca14986f4bcd5078832643564ef781674cbbc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_31dfad0b08919c344624485b40f53a668f8443c5", $context, $blocks));
        // line 112
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ($_index_) {
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo truncate($this->getAttribute($_post_, "body"), $this->getAttribute($_post_, "link"));
        } else {
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "body");
        }
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_ceca14986f4bcd5078832643564ef781674cbbc1", $context, $blocks));
    }

    // line 1
    public function block___internal_31dfad0b08919c344624485b40f53a668f8443c5($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post reply\" id=\"reply_";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "\">

<p class=\"intro\"";
        // line 5
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((!$_index_)) {
            echo " id=\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo "\"";
        }
        echo ">
\t<input type=\"checkbox\" class=\"delete\" name=\"delete_";
        // line 6
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "\" id=\"delete_";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "\" />
\t<label for=\"delete_";
        // line 7
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "\">
\t\t";
        // line 8
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_post_, "subject")) > 0)) {
            // line 9
            echo "\t\t\t";
            // line 10
            echo "\t\t\t<span class=\"subject\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo bidi_cleanup($this->getAttribute($_post_, "subject"));
            echo "</span> 
\t\t";
        }
        // line 12
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_post_, "email")) > 0)) {
            // line 13
            echo "\t\t\t";
            // line 14
            echo "\t\t\t<a class=\"email\" href=\"mailto:";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "email");
            echo "\">
\t\t";
        }
        // line 16
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        $context["capcode"] = capcode($this->getAttribute($_post_, "capcode"));
        // line 17
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
        // line 18
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_post_, "trip")) > 0)) {
            // line 19
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
        // line 21
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_post_, "email")) > 0)) {
            // line 22
            echo "\t\t\t";
            // line 23
            echo "\t\t\t</a>
\t\t";
        }
        // line 25
        echo "\t\t";
        if (isset($context["capcode"])) { $_capcode_ = $context["capcode"]; } else { $_capcode_ = null; }
        if ($_capcode_) {
            // line 26
            echo "\t\t\t";
            if (isset($context["capcode"])) { $_capcode_ = $context["capcode"]; } else { $_capcode_ = null; }
            echo $this->getAttribute($_capcode_, "cap");
            echo "
\t\t";
        }
        // line 28
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if (($this->getAttribute($_post_, "mod") && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "show_ip"), $this->getAttribute($_board_, "uri")))) {
            // line 29
            echo "\t\t\t [<a class=\"ip-link\" style=\"margin:0;\" href=\"?/IP/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "ip");
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "ip");
            echo "</a>]
\t\t";
        }
        // line 31
        echo "\t\t";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (($this->getAttribute($_config_, "display_flags") && $this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag"))) {
            // line 32
            echo "\t\t\t <img class=\"flag\" src=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo sprintf($this->getAttribute($_config_, "uri_flags"), $this->getAttribute($this->getAttribute($_post_, "modifiers"), "flag"));
            echo "\"
\t\t\t \tstyle=\"";
            // line 33
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
            // line 34
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
        // line 36
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
        // line 38
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "poster_ids")) {
            // line 39
            echo "\t\t ID: ";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo poster_id($this->getAttribute($_post_, "ip"), $this->getAttribute($_post_, "thread"));
            echo "
\t";
        }
        // line 41
        echo "\t <a class=\"post_no\" ";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((!$_index_)) {
            echo "onclick=\"highlightReply(";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo ")\" ";
        }
        echo "href=\"";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "link");
        echo "\">No.</a>
\t<a class=\"post_no\"
\t\t";
        // line 43
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((!$_index_)) {
            // line 44
            echo "\t\t\t onclick=\"citeReply(";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "id");
            echo ");\"
\t\t";
        }
        // line 46
        echo "\t\t href=\"";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ($_index_) {
            // line 47
            echo "\t\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "link", array(0 => "q"), "method");
            echo "
\t\t";
        } else {
            // line 49
            echo "\t\t\tjavascript:void(0);
\t\t";
        }
        // line 50
        echo "\">
\t\t";
        // line 51
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "id");
        echo "
\t</a>
\t</p>
\t";
        // line 54
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_post_, "embed")) {
            // line 55
            echo "\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "embed");
            echo "
\t";
        } elseif (($this->getAttribute($_post_, "file") == "deleted")) {
            // line 57
            echo "\t\t<img class=\"post-image deleted\" src=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "image_deleted");
            echo "\" alt=\"\" />
\t";
        } elseif (($this->getAttribute($_post_, "file") && $this->getAttribute($_post_, "file"))) {
            // line 59
            echo "\t\t<p class=\"fileinfo\">File: <a href=\"";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "uri_img");
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "file");
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "file");
            echo "</a> <span class=\"unimportant\">
\t\t(
\t\t\t";
            // line 61
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_post_, "thumb") == "spoiler")) {
                // line 62
                echo "\t\t\t\tSpoiler Image, 
\t\t\t";
            }
            // line 64
            echo "\t\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo format_bytes($this->getAttribute($_post_, "filesize"));
            echo "
\t\t\t";
            // line 65
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_post_, "filewidth") && $this->getAttribute($_post_, "fileheight"))) {
                // line 66
                echo "\t\t\t\t, ";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "filewidth");
                echo "x";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "fileheight");
                echo "
\t\t\t\t";
                // line 67
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if ($this->getAttribute($_config_, "show_ratio")) {
                    // line 68
                    echo "\t\t\t\t\t, ";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo $this->getAttribute($_post_, "ratio");
                    echo "
\t\t\t\t";
                }
                // line 70
                echo "\t\t\t";
            }
            // line 71
            echo "\t\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_config_, "show_filename") && $this->getAttribute($_post_, "filename"))) {
                // line 72
                echo "\t\t\t\t, 
\t\t\t\t";
                // line 73
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_post_, "filename")) > $this->getAttribute($_config_, "max_filename_display"))) {
                    // line 74
                    echo "\t\t\t\t\t<span class=\"postfilename\" title=\"";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "filename"));
                    echo "\">";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo bidi_cleanup(twig_truncate_filter($this->getAttribute($_post_, "filename"), $this->getAttribute($_config_, "max_filename_display")));
                    echo "</span>
\t\t\t\t";
                } else {
                    // line 76
                    echo "\t\t\t\t\t<span class=\"postfilename\">";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo bidi_cleanup(twig_escape_filter($this->env, $this->getAttribute($_post_, "filename")));
                    echo "</span>
\t\t\t\t";
                }
                // line 78
                echo "\t\t\t";
            }
            // line 79
            echo "\t\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if ((($this->getAttribute($_post_, "thumb") != "file") && $this->getAttribute($_config_, "image_identification"))) {
                // line 80
                echo "\t\t\t\t,
\t\t\t\t<span class='image_id'>
\t\t\t\t <a href=\"http://imgops.com/";
                // line 82
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "domain");
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "uri_img");
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "file");
                echo "\">io</a>
\t\t\t\t";
                // line 83
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if ((twig_extension_filter($this->getAttribute($_post_, "file")) == "jpg")) {
                    // line 84
                    echo "\t\t\t\t\t <a href=\"http://regex.info/exif.cgi?url=";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo $this->getAttribute($_config_, "domain");
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo $this->getAttribute($_config_, "uri_img");
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo $this->getAttribute($_post_, "file");
                    echo "\">e</a>
\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t <a href=\"http://www.google.com/searchbyimage?image_url=";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "domain");
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "uri_img");
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "file");
                echo "\">g</a>
\t\t\t\t <a href=\"http://www.tineye.com/search?url=";
                // line 87
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "domain");
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "uri_img");
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "file");
                echo "\">t</a>
\t\t\t\t</span>
\t\t\t";
            }
            // line 90
            echo "
\t\t)
\t\t</span>
</p>
\t<a href=\"";
            // line 94
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
\t<img class=\"post-image\" src=\"
\t\t";
            // line 96
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_post_, "thumb") == "file")) {
                // line 97
                echo "\t\t\t";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "root");
                echo "
\t\t\t";
                // line 98
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if ($this->getAttribute($this->getAttribute($_config_, "file_icons"), twig_extension_filter($this->getAttribute($_post_, "filename")), array(), "array")) {
                    // line 99
                    echo "\t\t\t\t";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo sprintf($this->getAttribute($_config_, "file_thumb"), $this->getAttribute($this->getAttribute($_config_, "file_icons"), twig_extension_filter($this->getAttribute($_post_, "filename")), array(), "array"));
                    echo "
\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t";
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    echo sprintf($this->getAttribute($_config_, "file_thumb"), $this->getAttribute($this->getAttribute($_config_, "file_icons"), "default"));
                    echo "
\t\t\t";
                }
                // line 103
                echo "\t\t";
            } elseif (($this->getAttribute($_post_, "thumb") == "spoiler")) {
                // line 104
                echo "\t\t\t";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "root");
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "spoiler_image");
                echo "
\t\t";
            } else {
                // line 106
                echo "\t\t\t";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                echo $this->getAttribute($_config_, "uri_thumb");
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "thumb");
                echo "
\t\t";
            }
            // line 107
            echo "\" style=\"width:";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "thumbwidth");
            echo "px;height:";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "thumbheight");
            echo "px\" alt=\"\" />
\t</a>
\t";
        }
        // line 110
        echo "\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "postControls");
        echo "
\t<div class=\"body\">
\t\t";
    }

    // line 112
    public function block___internal_ceca14986f4bcd5078832643564ef781674cbbc1($context, array $blocks = array())
    {
        // line 113
        echo "\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_post_, "modifiers"), "ban message", array(), "array")) {
            // line 114
            echo "\t\t\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo sprintf($this->getAttribute($this->getAttribute($_config_, "mod"), "ban_message"), $this->getAttribute($this->getAttribute($_post_, "modifiers"), "ban message", array(), "array"));
            echo "
\t\t";
        }
        // line 116
        echo "\t</div>
</div>
<br/>
";
    }

    public function getTemplateName()
    {
        return "post_reply.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 116,  519 => 113,  507 => 110,  487 => 106,  478 => 104,  475 => 103,  468 => 101,  460 => 99,  456 => 98,  450 => 97,  434 => 94,  428 => 90,  417 => 87,  407 => 86,  396 => 84,  393 => 83,  384 => 82,  380 => 80,  375 => 79,  372 => 78,  350 => 73,  347 => 72,  342 => 71,  339 => 70,  332 => 68,  329 => 67,  320 => 66,  317 => 65,  311 => 64,  307 => 62,  304 => 61,  292 => 59,  285 => 57,  278 => 55,  268 => 51,  265 => 50,  261 => 49,  254 => 47,  250 => 46,  243 => 44,  240 => 43,  225 => 41,  218 => 39,  215 => 38,  203 => 36,  189 => 34,  178 => 33,  166 => 31,  156 => 29,  143 => 26,  139 => 25,  135 => 23,  133 => 22,  129 => 21,  114 => 19,  111 => 18,  97 => 17,  93 => 16,  84 => 13,  73 => 10,  71 => 9,  68 => 8,  63 => 7,  55 => 6,  45 => 5,  38 => 3,  35 => 1,  709 => 162,  705 => 160,  701 => 158,  696 => 157,  692 => 152,  688 => 151,  685 => 150,  679 => 148,  675 => 147,  671 => 142,  668 => 141,  665 => 140,  662 => 139,  659 => 138,  651 => 136,  647 => 135,  644 => 134,  634 => 131,  618 => 129,  614 => 128,  611 => 127,  604 => 125,  600 => 123,  596 => 122,  590 => 121,  587 => 120,  580 => 118,  576 => 116,  572 => 115,  568 => 114,  565 => 113,  558 => 111,  554 => 109,  550 => 108,  547 => 107,  541 => 105,  538 => 104,  534 => 103,  527 => 101,  523 => 114,  516 => 112,  513 => 97,  506 => 95,  499 => 93,  496 => 107,  484 => 90,  470 => 88,  459 => 87,  452 => 86,  447 => 96,  437 => 83,  431 => 82,  424 => 80,  420 => 79,  416 => 77,  414 => 76,  410 => 75,  395 => 73,  392 => 72,  378 => 71,  374 => 70,  367 => 68,  365 => 76,  361 => 66,  354 => 74,  352 => 63,  349 => 62,  344 => 61,  336 => 60,  325 => 59,  315 => 57,  306 => 56,  297 => 54,  294 => 53,  287 => 51,  279 => 49,  275 => 54,  269 => 47,  266 => 46,  253 => 44,  249 => 42,  238 => 39,  228 => 38,  217 => 36,  214 => 35,  205 => 34,  201 => 32,  196 => 31,  193 => 30,  186 => 28,  175 => 26,  171 => 32,  168 => 24,  163 => 23,  160 => 22,  153 => 20,  150 => 28,  141 => 18,  138 => 17,  132 => 16,  126 => 14,  123 => 13,  109 => 11,  102 => 9,  95 => 7,  92 => 6,  86 => 14,  83 => 3,  80 => 12,  75 => 168,  69 => 167,  54 => 165,  36 => 164,  33 => 163,  23 => 112,  21 => 1,);
    }
}
