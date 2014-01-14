<?php

/* post_form.html */
class __TwigTemplate_74a7daf7796b9889f7dfc27940a6a35f extends Twig_Template
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
        echo "<form name=\"post\" onsubmit=\"return dopost(this);\" enctype=\"multipart/form-data\" action=\"";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo $this->getAttribute($_config_, "post_url");
        echo "\" method=\"post\">
";
        // line 2
        if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
        echo $this->getAttribute($_antibot_, "html", array(), "method");
        echo "
";
        // line 3
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if ($_id_) {
            echo "<input type=\"hidden\" name=\"thread\" value=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "\">";
        }
        // line 4
        if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
        echo $this->getAttribute($_antibot_, "html", array(), "method");
        echo "
<input type=\"hidden\" name=\"board\" value=\"";
        // line 5
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo $this->getAttribute($_board_, "uri");
        echo "\">
";
        // line 6
        if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
        echo $this->getAttribute($_antibot_, "html", array(), "method");
        echo "
";
        // line 7
        if (isset($context["current_page"])) { $_current_page_ = $context["current_page"]; } else { $_current_page_ = null; }
        if ($_current_page_) {
            // line 8
            echo "\t<input type=\"hidden\" name=\"page\" value=\"";
            if (isset($context["current_page"])) { $_current_page_ = $context["current_page"]; } else { $_current_page_ = null; }
            echo $_current_page_;
            echo "\">
";
        }
        // line 10
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if ($_mod_) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\">";
        }
        // line 11
        echo "\t<table>
\t\t";
        // line 12
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if (((!$this->getAttribute($_config_, "field_disable_name")) || ($_mod_ && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "bypass_field_disable"), $this->getAttribute($_board_, "uri"))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 14
            echo gettext("Name");
            // line 15
            echo "\t\t\t\t";
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"name\" size=\"25\" maxlength=\"35\" autocomplete=\"off\">
\t\t\t\t";
            // line 19
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 22
        echo "\t\t";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if (((!$this->getAttribute($_config_, "field_disable_email")) || ($_mod_ && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "bypass_field_disable"), $this->getAttribute($_board_, "uri"))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 24
            echo gettext("Email");
            // line 25
            echo "\t\t\t\t";
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"email\" size=\"25\" maxlength=\"40\" autocomplete=\"off\">
\t\t\t\t";
            // line 29
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 32
        echo "\t\t<tr>
\t\t\t";
        // line 33
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if (((!($this->getAttribute($_config_, "field_disable_subject") || ($_id_ && $this->getAttribute($_config_, "field_disable_reply_subject")))) || ($_mod_ && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "bypass_field_disable"), $this->getAttribute($_board_, "uri"))))) {
            echo "<th>
\t\t\t\t";
            // line 34
            echo gettext("Subject");
            // line 35
            echo "\t\t\t\t";
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input style=\"float:left;\" type=\"text\" name=\"subject\" size=\"25\" maxlength=\"100\" autocomplete=\"off\">
\t\t\t";
        } else {
            // line 39
            echo "<th>
\t\t\t\t";
            // line 40
            echo gettext("Submit");
            // line 41
            echo "\t\t\t\t";
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t";
        }
        // line 45
        echo "\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if ($_id_) {
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "button_reply");
        } else {
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "button_newtopic");
        }
        echo "\" />";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "spoiler_images")) {
            echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
            echo gettext("Spoiler Image");
            echo "</label>";
        }
        // line 46
        echo "\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>
\t\t\t\t";
        // line 50
        echo gettext("Comment");
        // line 51
        echo "\t\t\t\t";
        if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
        echo $this->getAttribute($_antibot_, "html", array(), "method");
        echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<textarea name=\"body\" id=\"body\" rows=\"5\" cols=\"35\"></textarea>
\t\t\t\t";
        // line 55
        if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
        echo $this->getAttribute($_antibot_, "html", array(), "method");
        echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 58
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "recaptcha")) {
            // line 59
            echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 61
            echo gettext("Verification");
            // line 62
            echo "\t\t\t\t";
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<script type=\"text/javascript\" src=\"//www.google.com/recaptcha/api/challenge?k=";
            // line 65
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $this->getAttribute($_config_, "recaptcha_public");
            echo "\"></script>
\t\t\t\t";
            // line 66
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 70
        echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
        // line 72
        echo gettext("File");
        // line 73
        echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"file\" name=\"file\">
\t\t\t\t";
        // line 76
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "allow_upload_by_url")) {
            // line 77
            echo "\t\t\t\t\t<br>
\t\t\t\t\t<div style=\"float:none;text-align:left\">
\t\t\t\t\t\t<label for=\"file_url\">";
            // line 79
            echo gettext("Or URL");
            echo "</label>: 
\t\t\t\t\t\t<input style=\"display:inline\" type=\"text\" id=\"file_url\" name=\"file_url\" size=\"35\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t";
        if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
        echo $this->getAttribute($_antibot_, "html", array(), "method");
        echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 86
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "enable_embedding")) {
            // line 87
            echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 89
            echo gettext("Embed");
            // line 90
            echo "\t\t\t\t";
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"embed\" size=\"30\" maxlength=\"120\" autocomplete=\"off\">
\t\t\t\t";
            // line 94
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 98
        echo "\t\t";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if (($_mod_ && ((((!$_id_) && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "sticky"), $this->getAttribute($_board_, "uri"))) || ((!$_id_) && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "lock"), $this->getAttribute($_board_, "uri")))) || twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "rawhtml"), $this->getAttribute($_board_, "uri"))))) {
            // line 99
            echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 101
            echo gettext("Flags");
            // line 102
            echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
            // line 104
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            if (((!$_id_) && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "sticky"), $this->getAttribute($_board_, "uri")))) {
                echo "<div>
\t\t\t\t\t<label for=\"sticky\">";
                // line 105
                echo gettext("Sticky");
                echo "</label>
\t\t\t\t\t<input title=\"";
                // line 106
                echo gettext("Sticky");
                echo "\" type=\"checkbox\" name=\"sticky\" id=\"sticky\"><br>
\t\t\t\t</div>";
            }
            // line 108
            echo "\t\t\t\t";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            if (((!$_id_) && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "lock"), $this->getAttribute($_board_, "uri")))) {
                echo "<div>
\t\t\t\t\t<label for=\"lock\">";
                // line 109
                echo gettext("Lock");
                echo "</label><br>
\t\t\t\t\t<input title=\"";
                // line 110
                echo gettext("Lock");
                echo "\" type=\"checkbox\" name=\"lock\" id=\"lock\">
\t\t\t\t</div>";
            }
            // line 112
            echo "\t\t\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
            if (twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "rawhtml"), $this->getAttribute($_board_, "uri"))) {
                echo "<div>
\t\t\t\t\t<label for=\"raw\">";
                // line 113
                echo gettext("Raw HTML");
                echo "</label><br>
\t\t\t\t\t<input title=\"";
                // line 114
                echo gettext("Raw HTML");
                echo "\" type=\"checkbox\" name=\"raw\" id=\"raw\">
\t\t\t\t</div>";
            }
            // line 116
            echo "\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 119
        echo "\t\t";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        if (((!$this->getAttribute($_config_, "field_disable_password")) || ($_mod_ && twig_hasPermission_filter($this->getAttribute($_post_, "mod"), $this->getAttribute($this->getAttribute($_config_, "mod"), "bypass_field_disable"), $this->getAttribute($_board_, "uri"))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 121
            echo gettext("Password");
            // line 122
            echo "\t\t\t\t";
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"password\" name=\"password\" size=\"12\" maxlength=\"18\" autocomplete=\"off\"> 
\t\t\t\t<span class=\"unimportant\">";
            // line 126
            echo gettext("(For file deletion.)");
            echo "</span>
\t\t\t\t";
            // line 127
            if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
            echo $this->getAttribute($_antibot_, "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 130
        echo "\t</table>
";
        // line 131
        if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
        echo $this->getAttribute($_antibot_, "html", array(0 => true), "method");
        echo "
<input type=\"hidden\" name=\"hash\" value=\"";
        // line 132
        if (isset($context["antibot"])) { $_antibot_ = $context["antibot"]; } else { $_antibot_ = null; }
        echo $this->getAttribute($_antibot_, "hash", array(), "method");
        echo "\">
</form>

<script type=\"text/javascript\">";
        // line 137
        echo "
\trememberStuff();
";
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "post_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 132,  404 => 131,  401 => 130,  394 => 127,  390 => 126,  381 => 122,  379 => 121,  369 => 119,  364 => 116,  359 => 114,  355 => 113,  347 => 112,  342 => 110,  338 => 109,  329 => 108,  324 => 106,  320 => 105,  312 => 104,  308 => 102,  302 => 99,  286 => 94,  277 => 90,  271 => 87,  260 => 83,  246 => 76,  239 => 72,  235 => 70,  227 => 66,  212 => 61,  208 => 59,  198 => 55,  189 => 51,  187 => 50,  181 => 46,  155 => 41,  129 => 33,  119 => 29,  110 => 25,  98 => 22,  91 => 19,  82 => 15,  71 => 12,  68 => 11,  63 => 10,  56 => 8,  53 => 7,  48 => 6,  30 => 3,  268 => 86,  265 => 43,  252 => 42,  247 => 41,  241 => 73,  222 => 65,  180 => 36,  177 => 35,  169 => 33,  164 => 45,  159 => 31,  154 => 30,  151 => 29,  143 => 28,  140 => 35,  133 => 23,  125 => 22,  122 => 21,  115 => 19,  108 => 24,  104 => 16,  101 => 15,  89 => 12,  59 => 11,  43 => 5,  38 => 4,  27 => 6,  25 => 2,  19 => 1,  709 => 162,  705 => 160,  701 => 158,  696 => 157,  692 => 152,  688 => 151,  685 => 150,  679 => 148,  675 => 147,  671 => 142,  668 => 141,  665 => 140,  662 => 139,  659 => 138,  651 => 136,  647 => 135,  644 => 134,  634 => 131,  618 => 129,  614 => 128,  611 => 127,  604 => 125,  600 => 123,  596 => 122,  590 => 121,  587 => 120,  580 => 118,  576 => 116,  572 => 115,  568 => 114,  565 => 113,  558 => 111,  554 => 109,  550 => 108,  547 => 107,  541 => 105,  538 => 104,  534 => 103,  527 => 101,  523 => 100,  516 => 98,  513 => 97,  506 => 95,  499 => 93,  496 => 92,  484 => 90,  470 => 88,  459 => 87,  452 => 86,  447 => 85,  437 => 83,  431 => 82,  424 => 80,  420 => 79,  416 => 137,  414 => 76,  410 => 75,  395 => 73,  392 => 72,  378 => 71,  374 => 70,  367 => 68,  365 => 67,  361 => 66,  354 => 64,  352 => 63,  349 => 62,  344 => 61,  336 => 60,  325 => 59,  315 => 57,  306 => 101,  297 => 54,  294 => 98,  287 => 51,  279 => 49,  275 => 89,  269 => 47,  266 => 46,  253 => 79,  249 => 77,  238 => 39,  228 => 38,  217 => 36,  214 => 62,  205 => 58,  201 => 37,  196 => 31,  193 => 30,  186 => 28,  175 => 34,  171 => 25,  168 => 24,  163 => 23,  160 => 22,  153 => 40,  150 => 39,  141 => 18,  138 => 34,  132 => 16,  126 => 32,  123 => 13,  109 => 11,  102 => 9,  95 => 7,  92 => 13,  86 => 4,  83 => 3,  80 => 14,  75 => 168,  69 => 167,  54 => 165,  36 => 164,  33 => 163,  23 => 134,  21 => 1,);
    }
}
