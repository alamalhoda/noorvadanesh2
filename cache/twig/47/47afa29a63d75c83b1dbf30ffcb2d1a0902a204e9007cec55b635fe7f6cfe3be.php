<?php

/* partials/navigation.html.twig */
class __TwigTemplate_ba37a56f84a911afa0c99e78a1d7b10f7d8fc28561184ed35c33d933f29b07e7 extends Twig_Template
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
        // line 22
        echo "
<section class=\"menu cid-qPoLlaMKCe\" once=\"menu\" id=\"menu1-1\">
    <nav class=\"navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent\">


        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <div class=\"hamburger\">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class=\"menu-logo\">
            <div class=\"navbar-brand\">
                <span class=\"navbar-logo\">
                    <a href=\"https://mobirise.com\">
                         <img src='";
        // line 41
        echo ($context["theme_url"] ?? null);
        echo "/assets/images/logo.jpg' alt=\"نور و دانش\" style=\"height: 3.8rem;\">

                    </a>
                </span>
                <span class=\"navbar-caption-wrap\">
                    <a class=\"navbar-caption text-white display-4\" href=\"http://www.noorvadanesh.com\">
                        نور و دانش
                    </a>
                </span>
            </div>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav nav-dropdown\" data-app-modern-menu=\"true\">

                ";
        // line 55
        echo $this->getAttribute($this, "nav_loop", array(0 => ($context["pages"] ?? null)), "method");
        echo "
            </ul>

        </div>
    </nav>
</section>
";
    }

    // line 1
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            <li class=\"nav-item dropdown\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"nav-link link dropdown-toggle\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                <ul>
                    ";
                    // line 10
                    echo $this->getAttribute($this, "nav_loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 14
                    echo "            <li class=\"nav-item\">
                <a href=\"";
                    // line 15
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"nav-link link\">
                    ";
                    // line 16
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 20,  118 => 16,  114 => 15,  111 => 14,  104 => 10,  98 => 7,  94 => 6,  91 => 5,  88 => 4,  85 => 3,  80 => 2,  68 => 1,  57 => 55,  40 => 41,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro nav_loop(page) %}
    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"nav-item dropdown\">
                <a href=\"{{ p.url }}\" class=\"nav-link link dropdown-toggle\">
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li class=\"nav-item\">
                <a href=\"{{ p.url }}\" class=\"nav-link link\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<section class=\"menu cid-qPoLlaMKCe\" once=\"menu\" id=\"menu1-1\">
    <nav class=\"navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent\">


        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <div class=\"hamburger\">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class=\"menu-logo\">
            <div class=\"navbar-brand\">
                <span class=\"navbar-logo\">
                    <a href=\"https://mobirise.com\">
                         <img src='{{  theme_url  }}/assets/images/logo.jpg' alt=\"نور و دانش\" style=\"height: 3.8rem;\">

                    </a>
                </span>
                <span class=\"navbar-caption-wrap\">
                    <a class=\"navbar-caption text-white display-4\" href=\"http://www.noorvadanesh.com\">
                        نور و دانش
                    </a>
                </span>
            </div>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav nav-dropdown\" data-app-modern-menu=\"true\">

                {{ _self.nav_loop(pages) }}
            </ul>

        </div>
    </nav>
</section>
", "partials/navigation.html.twig", "/Applications/MAMP/htdocs/noorvadanesh2/user/themes/mobirise4/templates/partials/navigation.html.twig");
    }
}
