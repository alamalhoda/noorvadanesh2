<?php

/* partials/base.html.twig */
class __TwigTemplate_05db9950976212d56aa59fd62d7a69f7272eb1d522982e68681b86dc16afd695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"generator\" content=\"Mobirise v4.6.7, mobirise.com\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
    <link rel=\"shortcut icon\" href=\"assets/images/logo2.png\" type=\"image/x-icon\">
    <meta name=\"description\" content=\"\">
    <title>Home</title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "


</head>
<body>


";
        // line 51
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 51)->display($context);
        // line 52
        echo "






";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "

<section class=\"cid-qQ9ptkU8mu\" id=\"footer2-u\">


    <div class=\"container\">
        <div class=\"media-container-row content mbr-white\">
            <div class=\"col-12 col-md-3 mbr-fonts-style  \">
                <p class=\"mbr-text\">
                    <strong>Address</strong>
                    <br>
                    <br>1234 Street Name
                    <br>City, AA 99999
                    <br>
                    <br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: support@mobirise.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class=\"col-12 col-md-3 mbr-fonts-style  \">
                <p class=\"mbr-text\">
                    <strong>Links</strong>
                    <br>
                    <br><a class=\"text-primary\" href=\"https://mobirise.com/\">Website builder</a>
                    <br><a class=\"text-primary\" href=\"https://mobirise.com/mobirise-free-win.zip\">Download for
                        Windows</a>
                    <br><a class=\"text-primary\" href=\"https: //mobirise.com/mobirise-free-mac.zip\">Download for Mac</a>
                    <br>
                    <br><strong>Feedback</strong>
                    <br>
                    <br>Please send us your ideas, bug reports, suggestions! Any feedback would be appreciated.
                </p>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"google-map\">
                    <iframe frameborder=\"0\" style=\"border:0\"
                            src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw\"
                            allowfullscreen=\"\"></iframe>
                </div>
            </div>
        </div>
        <div class=\"footer-lower\">
            <div class=\"media-container-row\">
                <div class=\"col-sm-12\">
                    <hr>
                </div>
            </div>
            <div class=\"media-container-row mbr-white\">
                <div class=\"col-sm-6 copyright\">
                    <p class=\"mbr-text mbr-fonts-style  \">
                        © Copyright 2017 Mobirise - All Rights Reserved
                    </p>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"social-list align-right\">
                        <div class=\"soc-item\">
                            <a href=\"https://twitter.com/mobirise\" target=\"_blank\">
                                <span class=\"socicon-twitter socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://www.facebook.com/pages/Mobirise/1616226671953247\" target=\"_blank\">
                                <span class=\"socicon-facebook socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://www.youtube.com/c/mobirise\" target=\"_blank\">
                                <span class=\"socicon-youtube socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://instagram.com/mobirise\" target=\"_blank\">
                                <span class=\"socicon-instagram socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://plus.google.com/u/0/+Mobirise\" target=\"_blank\">
                                <span class=\"socicon-googleplus socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://www.behance.net/Mobirise\" target=\"_blank\">
                                <span class=\"socicon-behance socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


";
        // line 160
        $this->displayBlock('bottom', $context, $blocks);
        // line 163
        echo "</body>
</html>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/web/assets/mobirise-icons/mobirise-icons.css"), "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/tether/tether.min.css"), "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/bootstrap/css/bootstrap.min.css"), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/bootstrap/css/bootstrap-grid.min.css"), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/bootstrap/css/bootstrap-reboot.min.css"), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/socicon/css/styles.css"), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/dropdown/css/style.css"), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/theme/css/style.css"), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/mobirise/css/mbr-additional.css"), "method");
        // line 23
        echo "
    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/web/assets/jquery/jquery.min.js", 1 => array("group" => "bottom")), "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/popper/popper.min.js", 1 => array("group" => "bottom")), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/tether/tether.min.js", 1 => array("group" => "bottom")), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/bootstrap/js/bootstrap.min.js", 1 => array("group" => "bottom")), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/smoothscroll/smooth-scroll.js", 1 => array("group" => "bottom")), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/ytplayer/jquery.mb.ytplayer.min.js", 1 => array("group" => "bottom")), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/parallax/jarallax.min.js", 1 => array("group" => "bottom")), "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js", 1 => array("group" => "bottom")), "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/dropdown/js/script.min.js", 1 => array("group" => "bottom")), "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/touchswipe/jquery.touch-swipe.min.js", 1 => array("group" => "bottom")), "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/vimeoplayer/jquery.mb.vimeo_player.js", 1 => array("group" => "bottom")), "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/theme/js/script.js", 1 => array("group" => "bottom")), "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/slidervideo/script.js", 1 => array("group" => "bottom")), "method");
        // line 42
        echo "
    ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "
";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
    }

    // line 160
    public function block_bottom($context, array $blocks = array())
    {
        // line 161
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 161,  281 => 160,  276 => 61,  271 => 62,  269 => 61,  266 => 60,  263 => 59,  258 => 42,  255 => 41,  252 => 40,  249 => 39,  246 => 38,  243 => 37,  240 => 36,  237 => 35,  234 => 34,  231 => 33,  228 => 32,  225 => 31,  222 => 30,  219 => 29,  216 => 28,  213 => 27,  208 => 23,  205 => 22,  202 => 21,  199 => 20,  196 => 19,  193 => 18,  190 => 17,  187 => 16,  184 => 15,  181 => 14,  178 => 13,  172 => 163,  170 => 160,  72 => 64,  70 => 59,  61 => 52,  59 => 51,  48 => 44,  46 => 27,  40 => 25,  38 => 13,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"generator\" content=\"Mobirise v4.6.7, mobirise.com\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
    <link rel=\"shortcut icon\" href=\"assets/images/logo2.png\" type=\"image/x-icon\">
    <meta name=\"description\" content=\"\">
    <title>Home</title>

    {% block stylesheets %}
        {% do assets.addCss('theme://assets/web/assets/mobirise-icons/mobirise-icons.css') %}
        {% do assets.addCss('theme://assets/tether/tether.min.css') %}
        {% do assets.addCss('theme://assets/bootstrap/css/bootstrap.min.css') %}
        {% do assets.addCss('theme://assets/bootstrap/css/bootstrap-grid.min.css') %}
        {% do assets.addCss('theme://assets/bootstrap/css/bootstrap-reboot.min.css') %}
        {% do assets.addCss('theme://assets/socicon/css/styles.css') %}
        {% do assets.addCss('theme://assets/dropdown/css/style.css') %}
        {% do assets.addCss('theme://assets/theme/css/style.css') %}
        {% do assets.addCss('theme://assets/mobirise/css/mbr-additional.css') %}

    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://assets/web/assets/jquery/jquery.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/popper/popper.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/tether/tether.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/bootstrap/js/bootstrap.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/smoothscroll/smooth-scroll.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/ytplayer/jquery.mb.ytplayer.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/parallax/jarallax.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/dropdown/js/script.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/touchswipe/jquery.touch-swipe.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/vimeoplayer/jquery.mb.vimeo_player.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/theme/js/script.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/slidervideo/script.js', {group:'bottom'}) %}

    {% endblock %}
    {{ assets.js() }}


</head>
<body>


{%  include 'partials/navigation.html.twig' %}







{% block body %}

            {% block content %}{% endblock %}

{% endblock %}


<section class=\"cid-qQ9ptkU8mu\" id=\"footer2-u\">


    <div class=\"container\">
        <div class=\"media-container-row content mbr-white\">
            <div class=\"col-12 col-md-3 mbr-fonts-style  \">
                <p class=\"mbr-text\">
                    <strong>Address</strong>
                    <br>
                    <br>1234 Street Name
                    <br>City, AA 99999
                    <br>
                    <br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: support@mobirise.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class=\"col-12 col-md-3 mbr-fonts-style  \">
                <p class=\"mbr-text\">
                    <strong>Links</strong>
                    <br>
                    <br><a class=\"text-primary\" href=\"https://mobirise.com/\">Website builder</a>
                    <br><a class=\"text-primary\" href=\"https://mobirise.com/mobirise-free-win.zip\">Download for
                        Windows</a>
                    <br><a class=\"text-primary\" href=\"https: //mobirise.com/mobirise-free-mac.zip\">Download for Mac</a>
                    <br>
                    <br><strong>Feedback</strong>
                    <br>
                    <br>Please send us your ideas, bug reports, suggestions! Any feedback would be appreciated.
                </p>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"google-map\">
                    <iframe frameborder=\"0\" style=\"border:0\"
                            src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw\"
                            allowfullscreen=\"\"></iframe>
                </div>
            </div>
        </div>
        <div class=\"footer-lower\">
            <div class=\"media-container-row\">
                <div class=\"col-sm-12\">
                    <hr>
                </div>
            </div>
            <div class=\"media-container-row mbr-white\">
                <div class=\"col-sm-6 copyright\">
                    <p class=\"mbr-text mbr-fonts-style  \">
                        © Copyright 2017 Mobirise - All Rights Reserved
                    </p>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"social-list align-right\">
                        <div class=\"soc-item\">
                            <a href=\"https://twitter.com/mobirise\" target=\"_blank\">
                                <span class=\"socicon-twitter socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://www.facebook.com/pages/Mobirise/1616226671953247\" target=\"_blank\">
                                <span class=\"socicon-facebook socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://www.youtube.com/c/mobirise\" target=\"_blank\">
                                <span class=\"socicon-youtube socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://instagram.com/mobirise\" target=\"_blank\">
                                <span class=\"socicon-instagram socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://plus.google.com/u/0/+Mobirise\" target=\"_blank\">
                                <span class=\"socicon-googleplus socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                        <div class=\"soc-item\">
                            <a href=\"https://www.behance.net/Mobirise\" target=\"_blank\">
                                <span class=\"socicon-behance socicon mbr-iconfont mbr-iconfont-social\"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/noorvadanesh2/user/themes/mobirise4/templates/partials/base.html.twig");
    }
}
