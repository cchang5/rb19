<?php

/* modular/text.html.twig */
class __TwigTemplate_167ac4b786d1dfbfc66632d5dac82286aa36974aed4b1cbd45da254c49f407b0 extends Twig_Template
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
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 3
        echo "
<section class=\"section modular-text ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo " bg-gray\">
    <section class=\"container ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns ";
        // line 6
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "image_align", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "image_align", array()), "align-right")) : ("align-right"));
        echo "\">
            <div class=\"column col-6 col-md-12\">
                ";
        // line 8
        echo ($context["content"] ?? null);
        echo "
            </div>
            <div class=\"column col-6 col-md-12\">
                ";
        // line 11
        if (($context["image"] ?? null)) {
            // line 12
            echo "                    ";
            echo $this->getAttribute(($context["image"] ?? null), "html", array());
            echo "
                ";
        }
        // line 14
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  47 => 12,  45 => 11,  39 => 8,  34 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set grid_size = theme_var('grid-size') %}
{% set image = page.media.images|first %}

<section class=\"section modular-text {{ page.header.class}} bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns {{ page.header.image_align|default('align-right') }}\">
            <div class=\"column col-6 col-md-12\">
                {{ content|raw }}
            </div>
            <div class=\"column col-6 col-md-12\">
                {% if image %}
                    {{ image.html|raw }}
                {% endif %}
            </div>
        </div>
    </section>
</section>
", "modular/text.html.twig", "/Users/cchang5/Sites/rb19/user/themes/quark/templates/modular/text.html.twig");
    }
}
