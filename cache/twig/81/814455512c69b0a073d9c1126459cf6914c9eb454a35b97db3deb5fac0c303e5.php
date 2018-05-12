<?php

/* blog.html.twig */
class __TwigTemplate_a1eb716b1a49539766dc1a1634391ef38717d61280c3f8572d9eeea8169883a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["show_breadcrumbs"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar", "/blog"), true);
        // line 5
        $context["show_sidebar"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar"), true);
        // line 6
        $context["show_pagination"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "

    <section class=\"padding90 \" style=\"background-image: url(";
        // line 14
        echo ($context["theme_url"] ?? null);
        echo "/assets/images/backgrounds/bg5.jpg)\">
        ";
        // line 16
        echo "        ";
        // line 17
        echo "
        <div class=\"container\">
            <div class=\"media-container-row\" style=\"-webkit-flex-wrap: wrap;-ms-flex-wrap: wrap;flex-wrap:wrap;\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                    <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                        <div class=\"card-wrapper\">
                            <div class=\"card-img\" style=\"background: linear-gradient(0deg, #e8e8e8, #a8a8a8);background-image:url('";
            // line 23
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", array()), "images", array())), "url", array());
            echo "');background-size: 100% 100%;height:230px; \">
                                <img src=\"\" style=\"\">
                            </div>
                            <div class=\"card-box\">
                                <h4 class=\"card-title mbr-fonts-style\">
                                    <a href=\"";
            // line 28
            echo $this->getAttribute($context["item"], "url", array());
            echo "\"> ";
            echo $this->getAttribute($context["item"], "title", array());
            echo " </a>
                                </h4>
                                <div class=\"mbr-text \">
                                    ";
            // line 31
            echo $this->getAttribute($context["item"], "summary", array());
            echo "
                                </div>
                            </div>
                            <div class=\"mbr-section-btn text-center\">

                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </div>
    </section>



";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  81 => 31,  73 => 28,  65 => 23,  61 => 21,  57 => 20,  52 => 17,  50 => 16,  46 => 14,  42 => 12,  39 => 11,  35 => 1,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set show_breadcrumbs = header_var('show_sidebar', '/blog')|default(true) %}
{% set show_sidebar = header_var('show_sidebar')|default(true) %}
{% set show_pagination = header_var('show_sidebar')|default(true) %}




{% block body %}


    <section class=\"padding90 \" style=\"background-image: url({{  theme_url  }}/assets/images/backgrounds/bg5.jpg)\">
        {#<div class=\"mbr-overlay\" style=\"opacity: 0.6;background-color: rgb(79,79,79);z-index: 1;border-radius: 20px;\">#}
        {#</div>#}

        <div class=\"container\">
            <div class=\"media-container-row\" style=\"-webkit-flex-wrap: wrap;-ms-flex-wrap: wrap;flex-wrap:wrap;\">
                {% for item in collection %}
                    <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                        <div class=\"card-wrapper\">
                            <div class=\"card-img\" style=\"background: linear-gradient(0deg, #e8e8e8, #a8a8a8);background-image:url('{{ item.media.images|first.url }}');background-size: 100% 100%;height:230px; \">
                                <img src=\"\" style=\"\">
                            </div>
                            <div class=\"card-box\">
                                <h4 class=\"card-title mbr-fonts-style\">
                                    <a href=\"{{ item.url }}\"> {{ item.title }} </a>
                                </h4>
                                <div class=\"mbr-text \">
                                    {{ item.summary }}
                                </div>
                            </div>
                            <div class=\"mbr-section-btn text-center\">

                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>



{% endblock %}
", "blog.html.twig", "/Applications/MAMP/htdocs/noorvadanesh2/user/themes/mobirise4/templates/blog.html.twig");
    }
}
