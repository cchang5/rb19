<?php

/* @Page:/Users/cchang5/Sites/rb19/user/pages/01.home/01._hero */
class __TwigTemplate_d9263730dd9eae812a1a9c588a83eecda5fb8cf283932bffd15cec018c119d7c extends Twig_Template
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

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
        <h1>RIKEN BERKELEY WORKSHOP</h1>
<h2>QUANTUM COMPUTING</h2>
<h3>January 26 - 30 2019<br>Berkeley, California</h3>
    </section>
</section>
", "@Page:/Users/cchang5/Sites/rb19/user/pages/01.home/01._hero", "");
    }
}
