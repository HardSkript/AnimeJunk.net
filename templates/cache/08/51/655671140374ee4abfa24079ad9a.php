<?php

/* posts.sql */
class __TwigTemplate_0851655671140374ee4abfa24079ad9a extends Twig_Template
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
        echo "CREATE TABLE IF NOT EXISTS ``posts_";
        if (isset($context["board"])) { $_board_ = $context["board"]; } else { $_board_ = null; }
        echo $_board_;
        echo "`` (
   `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
   `thread` int(11) DEFAULT NULL,
   `subject` varchar(100) DEFAULT NULL,
   `email` varchar(30) DEFAULT NULL,
   `name` varchar(35) DEFAULT NULL,
   `trip` varchar(15) DEFAULT NULL,
   `capcode` varchar(50) DEFAULT NULL,
   `body` text NOT NULL,
   `body_nomarkup` text,
   `time` int(11) NOT NULL,
   `bump` int(11) DEFAULT NULL,
   `thumb` varchar(255) DEFAULT NULL,
   `thumbwidth` int(11) DEFAULT NULL,
   `thumbheight` int(11) DEFAULT NULL,
   `file` varchar(255) DEFAULT NULL,
   `filewidth` int(11) DEFAULT NULL,
   `fileheight` int(11) DEFAULT NULL,
   `filesize` int(11) DEFAULT NULL,
   `filename` text,
   `filehash` text CHARACTER SET ascii,
   `password` varchar(20) DEFAULT NULL,
   `ip` varchar(39) CHARACTER SET ascii NOT NULL,
   `sticky` int(1) NOT NULL,
   `locked` int(1) NOT NULL,
   `sage` int(1) NOT NULL,
   `embed` text,
   UNIQUE KEY `id` (`id`),
   KEY `thread_id` (`thread`,`id`),
   KEY `filehash` (`filehash`(40)),
   KEY `time` (`time`),
   KEY `ip` (`ip`),
   KEY `list_threads` (`thread`, `sticky`, `bump`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;
 ";
    }

    public function getTemplateName()
    {
        return "posts.sql";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 274,  372 => 273,  326 => 271,  316 => 229,  310 => 223,  244 => 221,  189 => 159,  175 => 106,  173 => 97,  150 => 95,  136 => 76,  134 => 75,  131 => 74,  100 => 73,  98 => 46,  94 => 44,  86 => 43,  83 => 38,  74 => 37,  67 => 32,  56 => 31,  50 => 30,  19 => 1,);
    }
}
