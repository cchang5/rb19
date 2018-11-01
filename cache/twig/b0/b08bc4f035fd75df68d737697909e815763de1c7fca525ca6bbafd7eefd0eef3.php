<?php

/* macros/macros.html.twig */
class __TwigTemplate_928e35b5cd998c625f4ab21103e18084161387b6915b1403136f4efcbbb36e6c extends Twig_Template
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
            echo "  ";
            $context["macros"] = $this;
            // line 3
            echo "    <ul>
      <li class=\"current\"><a href=\"";
            // line 4
            echo ($context["base_url_absolute"] ?? null);
            echo "\">Welcome</a></li>
      <li class=\"submenu\">
        <a href=\"\">Layouts</a>
        <ul>
          ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                echo "          ";
                if ($this->getAttribute($context["page"], "visible", array())) {
                    // line 10
                    echo "          ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                    // line 11
                    echo "          <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
            <a href=\"";
                    // line 12
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">
              ";
                    // line 13
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
            </a>
          </li>
          ";
                }
                // line 17
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 19
                echo "          <li>
            <a href=\"";
                // line 20
                echo $this->getAttribute($context["mitem"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["mitem"], "text", array());
                echo "</a>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "          <li class=\"submenu\">
            <a href=\"\">Submenu</a>
            <ul>
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "submenu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                // line 27
                echo "              <li><a href=\"";
                echo $this->getAttribute($context["submenu"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["submenu"], "text", array());
                echo "</a></li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </ul>
          </li>
        </ul>
      </li>
";
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
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  106 => 27,  102 => 26,  97 => 23,  86 => 20,  83 => 19,  78 => 18,  72 => 17,  65 => 13,  61 => 12,  56 => 11,  53 => 10,  50 => 9,  46 => 8,  39 => 4,  36 => 3,  33 => 2,  21 => 1,);
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
  {% import _self as macros %}
    <ul>
      <li class=\"current\"><a href=\"{{ base_url_absolute }}\">Welcome</a></li>
      <li class=\"submenu\">
        <a href=\"\">Layouts</a>
        <ul>
          {% for page in pages.children %}
          {% if page.visible %}
          {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
          <li class=\"{{ current_page }}\">
            <a href=\"{{ page.url }}\">
              {{ page.menu }}
            </a>
          </li>
          {% endif %}
          {% endfor %}
          {% for mitem in site.menu %}
          <li>
            <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
          </li>
          {% endfor %}
          <li class=\"submenu\">
            <a href=\"\">Submenu</a>
            <ul>
              {% for submenu in site.submenu %}
              <li><a href=\"{{ submenu.link }}\">{{ submenu.text }}</a></li>
              {% endfor %}
            </ul>
          </li>
        </ul>
      </li>
{% endmacro %}
", "macros/macros.html.twig", "/Users/cchang5/Sites/rb19/user/themes/quark/templates/macros/macros.html.twig");
    }
}
