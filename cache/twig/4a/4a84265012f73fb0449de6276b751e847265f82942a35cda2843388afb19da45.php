<?php

/* partials/base.html.twig */
class __TwigTemplate_4770e80a0d516c8eb95d62c527e9bdf4681da7a8c383e2b02a2d8f291a1d6557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header' => array($this, 'block_header'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc(array(0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"));
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production_mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>
<body id=\"top\" class=\"";
        // line 37
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
    ";
        // line 73
        $this->displayBlock('hero', $context, $blocks);
        // line 74
        echo "
        <section id=\"start\">
        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "        </section>

    </div>

";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 120
        echo "
    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 125
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 125)->display(array_merge($context, array("mobile" => true)));
        // line 126
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 128
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 128)->display(array_merge($context, array("tree" => true)));
        // line 129
        echo "            </nav>
        </div>
    </div>

";
        // line 133
        $this->displayBlock('bottom', $context, $blocks);
        // line 136
        echo "
</body>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/RB19-logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))), "method");
        // line 20
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))), "method");
        }
        // line 21
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))), "method");
        }
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/line-awesome.min.css"), "method");
        // line 25
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.treemenu.js", 1 => array("group" => "bottom")), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 32
        echo "    ";
    }

    // line 37
    public function block_body_classes($context, array $blocks = array())
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 41
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 44
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            ";
        // line 49
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "                              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 51
            echo "                              <li><a href=\"";
            echo $this->getAttribute($context["button"], "link", array());
            echo "\" class=\"button special\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </ul>
                        </nav>

                        ";
        // line 56
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 57
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 57)->display($context);
            echo "</span>
                        ";
        }
        // line 59
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 73
    public function block_hero($context, array $blocks = array())
    {
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 78
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 79
        $this->displayBlock('messages', $context, $blocks);
        // line 82
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "                </section>
            </section>
        ";
    }

    // line 79
    public function block_messages($context, array $blocks = array())
    {
        // line 80
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 80)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 81
        echo "                    ";
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        // line 91
        echo "    <section id=\"footer\" class=\"section bg-light-blue\">
        <section class=\"container 7x1\">
            <p>
                <a href=\"http://www.riken.jp/en/\">
                    <img src=\"";
        // line 95
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/riken-logo.svg");
        echo "\" alt=\"RIKEN\" style=\"width:104.852px;height:40.578px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                <a href=\"https://ithems.riken.jp/en\">
                    <img src=\"";
        // line 98
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/ithems-logo.svg");
        echo "\" alt=\"Interdisciplinary Theoretical and Mathematical Sciences\" style=\"width:105.802px;height:60.614px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                <a href=\"http://www.cems.riken.jp/en/\">
                    <img src=\"";
        // line 101
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/cems-logo.png");
        echo "\" alt=\"Center for Emergent Matter Science\" style=\"width:142.046px;height:35.13px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                </a>
                <a href=\"https://www.lbl.gov/\">
                    <img src=\"";
        // line 105
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/lbnl-logo.svg");
        echo "\" alt=\"Lawrence Berkeley National Laboratory\" style=\"width:244.477px;height:36.159px;border:0;\" align=\"middle\" hspace=\"20\">
                </a> 
                <a href=\"https://www.berkeley.edu/\">
                    <img src=\"";
        // line 108
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/ucb-logo.svg");
        echo "\" alt=\"University of California - Berkeley\" style=\"width:128.075px;height:39.416px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                <a href=\"https://berkeleyquantum.org/\">
                    <img src=\"";
        // line 111
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/bq-logo.svg");
        echo "\" alt=\"Berkeley Quantum\" style=\"width:41.44px;height:45.353px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                <a href=\"https://science.energy.gov/\">
                    <img src=\"";
        // line 114
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/doe-logo.svg");
        echo "\" alt=\"Department of Energy - Office of Science\" style=\"width:229.638px;height:34.959px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
            </p>
        </section>
    </section>
";
    }

    // line 133
    public function block_bottom($context, array $blocks = array())
    {
        // line 134
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
        return array (  376 => 134,  373 => 133,  363 => 114,  357 => 111,  351 => 108,  345 => 105,  338 => 101,  332 => 98,  326 => 95,  320 => 91,  317 => 90,  312 => 82,  308 => 81,  300 => 80,  297 => 79,  291 => 83,  288 => 82,  286 => 79,  282 => 78,  279 => 77,  276 => 76,  271 => 73,  255 => 59,  249 => 57,  247 => 56,  242 => 53,  231 => 51,  226 => 50,  224 => 49,  218 => 45,  216 => 44,  210 => 41,  207 => 40,  204 => 39,  198 => 37,  194 => 32,  191 => 31,  188 => 30,  185 => 29,  182 => 28,  178 => 25,  175 => 24,  172 => 23,  169 => 22,  164 => 21,  159 => 20,  156 => 19,  153 => 18,  145 => 33,  143 => 28,  137 => 26,  135 => 18,  130 => 16,  126 => 15,  123 => 14,  121 => 13,  110 => 9,  107 => 8,  104 => 7,  98 => 136,  96 => 133,  90 => 129,  88 => 128,  84 => 126,  82 => 125,  75 => 120,  73 => 90,  67 => 86,  65 => 76,  61 => 74,  59 => 73,  56 => 72,  54 => 39,  49 => 37,  46 => 36,  44 => 7,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production_mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/RB19-logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
    {% endblock %}
    {{ assets.css()|raw }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js()|raw }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            {% include 'partials/navigation.html.twig' %}
                              {% for button in site.buttons %}
                              <li><a href=\"{{ button.link }}\" class=\"button special\">{{ button.text }}</a></li>
                              {% endfor %}
                            </ul>
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

{% block footer %}
    <section id=\"footer\" class=\"section bg-light-blue\">
        <section class=\"container 7x1\">
            <p>
                <a href=\"http://www.riken.jp/en/\">
                    <img src=\"{{ url('theme://images/riken-logo.svg') }}\" alt=\"RIKEN\" style=\"width:104.852px;height:40.578px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                <a href=\"https://ithems.riken.jp/en\">
                    <img src=\"{{ url('theme://images/ithems-logo.svg') }}\" alt=\"Interdisciplinary Theoretical and Mathematical Sciences\" style=\"width:105.802px;height:60.614px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                <a href=\"http://www.cems.riken.jp/en/\">
                    <img src=\"{{ url('theme://images/cems-logo.png') }}\" alt=\"Center for Emergent Matter Science\" style=\"width:142.046px;height:35.13px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                </a>
                <a href=\"https://www.lbl.gov/\">
                    <img src=\"{{ url('theme://images/lbnl-logo.svg') }}\" alt=\"Lawrence Berkeley National Laboratory\" style=\"width:244.477px;height:36.159px;border:0;\" align=\"middle\" hspace=\"20\">
                </a> 
                <a href=\"https://www.berkeley.edu/\">
                    <img src=\"{{ url('theme://images/ucb-logo.svg') }}\" alt=\"University of California - Berkeley\" style=\"width:128.075px;height:39.416px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                <a href=\"https://berkeleyquantum.org/\">
                    <img src=\"{{ url('theme://images/bq-logo.svg') }}\" alt=\"Berkeley Quantum\" style=\"width:41.44px;height:45.353px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
                <a href=\"https://science.energy.gov/\">
                    <img src=\"{{ url('theme://images/doe-logo.svg') }}\" alt=\"Department of Energy - Office of Science\" style=\"width:229.638px;height:34.959px;border:0;\" align=\"middle\" hspace=\"20\">
                </a>
            </p>
        </section>
    </section>
{% endblock %}

    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
", "partials/base.html.twig", "/Users/cchang5/Sites/rb19/user/themes/quark/templates/partials/base.html.twig");
    }
}
