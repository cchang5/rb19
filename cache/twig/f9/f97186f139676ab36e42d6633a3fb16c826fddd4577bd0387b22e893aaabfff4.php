<?php

/* partials/navigation.html.twig */
class __TwigTemplate_2e7fc383ff5ad0da86aa8ce9ba01272b4d2c8eed176dccc708285418cc9d9833 extends Twig_Template
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
        echo "<ul>
<li class=\"submenu\">
  <a href=\"\"> <font color=\"black\"><b>About</b></font></a>
  <ul>
    <li class=\"";
        // line 5
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/committees\">
        <b>Committees</b>
      </a>
    </li>
    <li class=\"";
        // line 10
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/dates\">
      <b>Important Dates</b>
      </a>
    </li>
    <li class=\"";
        // line 15
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/supporters\">
      <b>Supporters</b>
      </a>
    </li>
    <li class=\"";
        // line 20
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/ithems\">
      <b>iTHEMS @ Berkeley</b>
      </a>
    </li>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 26
            echo "    <li>
      <a href=\"";
            // line 27
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
        // line 30
        echo "  </ul>
</li>
<li class=\"submenu\">
  <a href=\"\"> <font color=\"black\"><b>Registration</b></font></a>
  <ul>
    <li class=\"";
        // line 35
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/registration\">
        <b>Registration</b>
      </a>
    </li>
    <li class=\"";
        // line 40
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/abstract-submission\">
        <b>Abstract Submission</b>
      </a>
    </li>
    <li class=\"";
        // line 45
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/accomodations\">
        <b>Accomodations</b>
      </a>
    </li>
    <li class=\"";
        // line 50
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/participants\">
        <b>Participants</b>
      </a>
    </li>
    <li class=\"";
        // line 55
        echo ($context["current_page"] ?? null);
        echo "\">
      <a href=\"/financial-support\">
        <b>Financial Support</b>
      </a>
    </li>
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 61
            echo "    <li>
      <a href=\"";
            // line 62
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
        // line 65
        echo "  </ul>
</li>
<li class=\"submenu\">
<a href=\"\"> <font color=\"black\"><b>Program</b></font></a>
<ul>
  <li class=\"";
        // line 70
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"/schedule\">
      <b>Schedule</b>
    </a>
  </li>
  <li class=\"";
        // line 75
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"/schedule\">
      <b>Indico</b>
    </a>
  </li>
  <li class=\"";
        // line 80
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"/public-talk\">
      <b>Public Talk</b>
    </a>
  </li>
  <li class=\"";
        // line 85
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"/social-events\">
      <b>Social Events</b>
    </a>
  </li>
 ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 91
            echo "  <li>
    <a href=\"";
            // line 92
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
        // line 95
        echo "</ul>
</li>
<li class=\"submenu\">
<a href=\"\"> <font color=\"black\"><b>Local Guide</b></font></a>
<ul>
  <li class=\"";
        // line 100
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"http://www2.lbl.gov/Workplace/Transportation.html\">
      <b>Directions</b>
    </a>
  </li>
  <li class=\"";
        // line 105
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"http://www.lbl.gov/Workplace/Facilities/Support/Busses/\">
      <b>Local Shuttle</b>
    </a>
  </li>
  <li class=\"";
        // line 110
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"/venues\">
      <b>Venues</b>
    </a>
  </li>
  <li class=\"";
        // line 115
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"/resturants\">
      <b>Resturants</b>
    </a>
  </li>
  <li class=\"";
        // line 120
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"/attractions\">
      <b>Attractions</b>
    </a>
  </li>
 ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 126
            echo "  <li>
    <a href=\"";
            // line 127
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
        // line 130
        echo "</ul>
</li>

<li class=\"submenu\">
<a href=\"\"> <font color=\"black\"><b>Media</b></font></a>
<ul>
  <li class=\"";
        // line 136
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"posters\">
      <b>Posters</b>
    </a>
  </li>
  <li class=\"";
        // line 141
        echo ($context["current_page"] ?? null);
        echo "\">
    <a href=\"photos\">
      <b>Photos</b>
    </a>
  </li>
 ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 147
            echo "  <li>
    <a href=\"";
            // line 148
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
        // line 151
        echo "</ul>
</li>
";
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
        return array (  304 => 151,  293 => 148,  290 => 147,  286 => 146,  278 => 141,  270 => 136,  262 => 130,  251 => 127,  248 => 126,  244 => 125,  236 => 120,  228 => 115,  220 => 110,  212 => 105,  204 => 100,  197 => 95,  186 => 92,  183 => 91,  179 => 90,  171 => 85,  163 => 80,  155 => 75,  147 => 70,  140 => 65,  129 => 62,  126 => 61,  122 => 60,  114 => 55,  106 => 50,  98 => 45,  90 => 40,  82 => 35,  75 => 30,  64 => 27,  61 => 26,  57 => 25,  49 => 20,  41 => 15,  33 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
<li class=\"submenu\">
  <a href=\"\"> <font color=\"black\"><b>About</b></font></a>
  <ul>
    <li class=\"{{ current_page }}\">
      <a href=\"/committees\">
        <b>Committees</b>
      </a>
    </li>
    <li class=\"{{ current_page }}\">
      <a href=\"/dates\">
      <b>Important Dates</b>
      </a>
    </li>
    <li class=\"{{ current_page }}\">
      <a href=\"/supporters\">
      <b>Supporters</b>
      </a>
    </li>
    <li class=\"{{ current_page }}\">
      <a href=\"/ithems\">
      <b>iTHEMS @ Berkeley</b>
      </a>
    </li>
    {% for mitem in site.menu %}
    <li>
      <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
    </li>
    {% endfor %}
  </ul>
</li>
<li class=\"submenu\">
  <a href=\"\"> <font color=\"black\"><b>Registration</b></font></a>
  <ul>
    <li class=\"{{ current_page }}\">
      <a href=\"/registration\">
        <b>Registration</b>
      </a>
    </li>
    <li class=\"{{ current_page }}\">
      <a href=\"/abstract-submission\">
        <b>Abstract Submission</b>
      </a>
    </li>
    <li class=\"{{ current_page }}\">
      <a href=\"/accomodations\">
        <b>Accomodations</b>
      </a>
    </li>
    <li class=\"{{ current_page }}\">
      <a href=\"/participants\">
        <b>Participants</b>
      </a>
    </li>
    <li class=\"{{ current_page }}\">
      <a href=\"/financial-support\">
        <b>Financial Support</b>
      </a>
    </li>
    {% for mitem in site.menu %}
    <li>
      <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
    </li>
    {% endfor %}
  </ul>
</li>
<li class=\"submenu\">
<a href=\"\"> <font color=\"black\"><b>Program</b></font></a>
<ul>
  <li class=\"{{ current_page }}\">
    <a href=\"/schedule\">
      <b>Schedule</b>
    </a>
  </li>
  <li class=\"{{ current_page }}\">
    <a href=\"/schedule\">
      <b>Indico</b>
    </a>
  </li>
  <li class=\"{{ current_page }}\">
    <a href=\"/public-talk\">
      <b>Public Talk</b>
    </a>
  </li>
  <li class=\"{{ current_page }}\">
    <a href=\"/social-events\">
      <b>Social Events</b>
    </a>
  </li>
 {% for mitem in site.menu %}
  <li>
    <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
  </li>
  {% endfor %}
</ul>
</li>
<li class=\"submenu\">
<a href=\"\"> <font color=\"black\"><b>Local Guide</b></font></a>
<ul>
  <li class=\"{{ current_page }}\">
    <a href=\"http://www2.lbl.gov/Workplace/Transportation.html\">
      <b>Directions</b>
    </a>
  </li>
  <li class=\"{{ current_page }}\">
    <a href=\"http://www.lbl.gov/Workplace/Facilities/Support/Busses/\">
      <b>Local Shuttle</b>
    </a>
  </li>
  <li class=\"{{ current_page }}\">
    <a href=\"/venues\">
      <b>Venues</b>
    </a>
  </li>
  <li class=\"{{ current_page }}\">
    <a href=\"/resturants\">
      <b>Resturants</b>
    </a>
  </li>
  <li class=\"{{ current_page }}\">
    <a href=\"/attractions\">
      <b>Attractions</b>
    </a>
  </li>
 {% for mitem in site.menu %}
  <li>
    <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
  </li>
  {% endfor %}
</ul>
</li>

<li class=\"submenu\">
<a href=\"\"> <font color=\"black\"><b>Media</b></font></a>
<ul>
  <li class=\"{{ current_page }}\">
    <a href=\"posters\">
      <b>Posters</b>
    </a>
  </li>
  <li class=\"{{ current_page }}\">
    <a href=\"photos\">
      <b>Photos</b>
    </a>
  </li>
 {% for mitem in site.menu %}
  <li>
    <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
  </li>
  {% endfor %}
</ul>
</li>
", "partials/navigation.html.twig", "/Users/cchang5/Sites/rb19/user/themes/quark/templates/partials/navigation.html.twig");
    }
}
