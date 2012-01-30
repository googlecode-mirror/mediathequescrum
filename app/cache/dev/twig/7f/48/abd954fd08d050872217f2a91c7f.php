<?php

/* mediaBundle:Default:index.html.twig */
class __TwigTemplate_7f48abd954fd08d050872217f2a91c7f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "mediaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
