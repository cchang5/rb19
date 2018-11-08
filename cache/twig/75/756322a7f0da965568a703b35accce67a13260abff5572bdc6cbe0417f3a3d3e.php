<?php

/* @Page:/Users/cchang5/Sites/rb19/user/pages/01.home/01._hero */
class __TwigTemplate_be26ea6f9de54942c9dee34595409e2b146dcf11da164703f82ce2f8257d15ea extends Twig_Template
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
        echo "
<section id=\"\" class=\"section modular-hero hero parallax text-dark hero-large \"
                        style=\"background-image: url(/user/pages/01.home/01._hero/header_morning.jpg);\"
            >
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-lg\" style=\"text-align: center\">
        <p>&lt;section id=\"";
        // line 7
        echo ($context["id"] ?? null);
        echo "\" class=\"section modular-hero hero ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_classes", array());
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background", array()), "parallax", array())) ? ("parallax") : (""));
        echo "\"
style=\"background-image: url(";
        // line 8
        echo $this->getAttribute(($context["hero_image_morning"] ?? null), "url", array());
        echo ");\"</p>
<div class=\"image-overlay\"></div>
<pre><code>&lt;section class=\"container ";
        // line 10
        echo ($context["grid_size"] ?? null);
        echo "\" style=\"text-align: ";
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "hero_align", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "hero_align", array()), "center")) : ("center"));
        echo "\"&gt;
    ";
        // line 11
        echo ($context["content"] ?? null);
        echo "
&lt;/section&gt;</code></pre>
<p></section></p>
<h1>RIKEN BERKELEY WORKSHOP</h1>
<h2>QUANTUM COMPUTING</h2>
<h3>January 26 - 30 2019<br>Berkeley, California</h3>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/cchang5/Sites/rb19/user/pages/01.home/01._hero";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  40 => 10,  35 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<section id=\"\" class=\"section modular-hero hero parallax text-dark hero-large \"
                        style=\"background-image: url(/user/pages/01.home/01._hero/header_morning.jpg);\"
            >
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-lg\" style=\"text-align: center\">
        <p>&lt;section id=\"{{ id }}\" class=\"section modular-hero hero {{ page.header.hero_classes }} {{ page.header.background.parallax ? 'parallax' : '' }}\"
style=\"background-image: url({{ hero_image_morning.url }});\"</p>
<div class=\"image-overlay\"></div>
<pre><code>&lt;section class=\"container {{ grid_size }}\" style=\"text-align: {{ page.header.hero_align|default('center') }}\"&gt;
    {{ content|raw }}
&lt;/section&gt;</code></pre>
<p></section></p>
<h1>RIKEN BERKELEY WORKSHOP</h1>
<h2>QUANTUM COMPUTING</h2>
<h3>January 26 - 30 2019<br>Berkeley, California</h3>
    </section>
</section>
", "@Page:/Users/cchang5/Sites/rb19/user/pages/01.home/01._hero", "");
    }
}
