<?php

/* AcmeHelloBundle:Default:index.html.twig */
class __TwigTemplate_48c4fe631cac18f1585cda5fbaf64d4f extends Twig_Template
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
        echo "Hello ";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  21 => 1,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 27,  66 => 18,  60 => 15,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 33,  95 => 29,  82 => 25,  73 => 20,  67 => 11,  52 => 11,  27 => 5,  43 => 7,  25 => 3,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  113 => 34,  83 => 25,  64 => 16,  39 => 8,  102 => 19,  89 => 16,  78 => 26,  63 => 14,  61 => 15,  56 => 12,  50 => 6,  47 => 5,  32 => 11,  117 => 36,  112 => 20,  109 => 20,  104 => 34,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 7,  26 => 3,  55 => 9,  48 => 10,  45 => 12,  36 => 5,  22 => 4,  23 => 3,  34 => 6,  30 => 3,  20 => 2,  17 => 1,  92 => 28,  86 => 28,  79 => 40,  57 => 6,  46 => 7,  37 => 7,  33 => 7,  29 => 4,  24 => 6,  19 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 10,  58 => 8,  54 => 13,  51 => 5,  42 => 11,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
