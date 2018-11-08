<?php

/* modular/hero.html.twig */
class __TwigTemplate_465c05284d9f3fb6bb00bebfeaa5624ef5567ab0c17df6abee3422e0bc4f2722 extends Twig_Template
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
        $context["hero_image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array())) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 3
        $context["hero_image_morning"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image_morning", array())) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image_morning", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 4
        $context["hero_image_afternoon"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image_afternoon", array())) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image_afternoon", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 5
        $context["hero_image_night"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image_night", array())) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image_night", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("partials/hero.html.twig", "modular/hero.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
{% set hero_image = page.header.hero_image ? page.media[page.header.hero_image] : page.media.images|first %}
{% set hero_image_morning = page.header.hero_image_morning ? page.media[page.header.hero_image_morning] : page.media.images|first %}
{% set hero_image_afternoon = page.header.hero_image_afternoon ? page.media[page.header.hero_image_afternoon] : page.media.images|first %}
{% set hero_image_night = page.header.hero_image_night ? page.media[page.header.hero_image_night] : page.media.images|first %}

{% include 'partials/hero.html.twig' %}
", "modular/hero.html.twig", "/Users/cchang5/Sites/rb19/user/themes/quark/templates/modular/hero.html.twig");
    }
}
