<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_37ba22121516f9108ef2db1554132311 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (twig_in_filter($this->getAttribute($_log_, "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  25 => 3,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 83,  219 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 54,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 44,  127 => 43,  113 => 34,  83 => 27,  64 => 23,  39 => 15,  102 => 19,  89 => 16,  78 => 26,  63 => 14,  61 => 22,  56 => 12,  50 => 11,  47 => 10,  32 => 11,  117 => 36,  112 => 20,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  68 => 24,  44 => 9,  26 => 4,  55 => 9,  48 => 19,  45 => 6,  36 => 5,  22 => 4,  23 => 3,  34 => 6,  30 => 4,  20 => 2,  17 => 1,  92 => 39,  86 => 28,  79 => 40,  57 => 22,  46 => 7,  37 => 7,  33 => 4,  29 => 6,  24 => 6,  19 => 1,  144 => 46,  138 => 45,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 38,  108 => 31,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 7,  35 => 5,  31 => 4,  28 => 3,);
    }
}
