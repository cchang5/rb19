<?php

/* partials/hero.html.twig */
class __TwigTemplate_e9dbb37e064b5aca665b24e29e654d8dd2ec93db2fc32051553652e3c7549dd9 extends Twig_Template
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
        echo "<section id=\"";
        echo ($context["id"] ?? null);
        echo "\" class=\"section modular-hero hero ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_classes", array());
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background", array()), "parallax", array())) ? ("parallax") : (""));
        echo "\"
    ";
        // line 2
        if ((7 <= 8)) {
            // line 3
            echo "        ";
            if (($context["hero_image_morning"] ?? null)) {
                // line 4
                echo "            style=\"background-image: url(";
                echo $this->getAttribute(($context["hero_image_morning"] ?? null), "url", array());
                echo ");\"
        ";
            }
            // line 6
            echo "    ";
        } elseif (((16 <= twig_date_format_filter($this->env, "now", "G", "America/Los_Angeles")) && (twig_date_format_filter($this->env, "now", "G", "America/Los_Angeles") <= 19))) {
            // line 7
            echo "        ";
            if (($context["hero_image_afternoon"] ?? null)) {
                // line 8
                echo "            style=\"background-image: url(";
                echo $this->getAttribute(($context["hero_image_afternoon"] ?? null), "url", array());
                echo ");\"
        ";
            }
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            if (($context["hero_image_night"] ?? null)) {
                // line 12
                echo "            style=\"background-image: url(";
                echo $this->getAttribute(($context["hero_image_night"] ?? null), "url", array());
                echo ");\"
        ";
            }
            // line 14
            echo "    ";
        }
        echo ">
    <div class=\"image-overlay\"></div>
    <section class=\"container ";
        // line 16
        echo ($context["grid_size"] ?? null);
        echo "\" style=\"text-align: ";
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "hero_align", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "hero_align", array()), "center")) : ("center"));
        echo "\">
        ";
        // line 17
        echo ($context["content"] ?? null);
        echo "
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  69 => 16,  63 => 14,  57 => 12,  54 => 11,  51 => 10,  45 => 8,  42 => 7,  39 => 6,  33 => 4,  30 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"{{ id }}\" class=\"section modular-hero hero {{ page.header.hero_classes }} {{ page.header.background.parallax ? 'parallax' : '' }}\"
    {% if 7 <= 8 %}
        {% if hero_image_morning %}
            style=\"background-image: url({{ hero_image_morning.url }});\"
        {% endif %}
    {% elseif 16 <= \"now\"|date(\"G\", \"America/Los_Angeles\") and \"now\"|date(\"G\", \"America/Los_Angeles\") <= 19 %}
        {% if hero_image_afternoon %}
            style=\"background-image: url({{ hero_image_afternoon.url }});\"
        {% endif %}
    {% else %}
        {% if hero_image_night %}
            style=\"background-image: url({{ hero_image_night.url }});\"
        {% endif %}
    {% endif %}>
    <div class=\"image-overlay\"></div>
    <section class=\"container {{ grid_size }}\" style=\"text-align: {{ page.header.hero_align|default('center') }}\">
        {{ content|raw }}
    </section>
</section>
", "partials/hero.html.twig", "/Users/cchang5/Sites/rb19/user/themes/quark/templates/partials/hero.html.twig");
    }
}
