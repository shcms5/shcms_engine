<?php

/* twig/upper/navigation.twig */
class __TwigTemplate_b76fd3550021588619962c14a2ad274d1879b926203d5e4938895f745fbc9cbd extends Twig_Template
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
        echo "<div class=\"navbar-header\">";
        // line 3
        echo "<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Навигация</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>";
        // line 10
        echo "<a href=\"/\" style=\"margin-top:10px;\" class=\"navbar-brand\">SHCMS Engine</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "twig/upper/navigation.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  21 => 3,  19 => 1,);
    }
}
