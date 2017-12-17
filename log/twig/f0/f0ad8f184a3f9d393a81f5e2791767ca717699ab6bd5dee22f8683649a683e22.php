<?php

/* layout.html */
class __TwigTemplate_60a4fabf60b5dc02454905516b712f1c34a4957786b4330e2c58e7f767cd599e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
 <meta charset=\"utf-8\">
<head>
\t<title>layout</title>
</head>
<body>

<nav>nav</nav>

<section>

 ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "
</section>
\t

 <footer>footer</footer>

</body>
</html>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "            
 ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  35 => 15,  33 => 12,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
 <meta charset=\"utf-8\">
<head>
\t<title>layout</title>
</head>
<body>

<nav>nav</nav>

<section>

 {% block content %}
            
 {% endblock %}

</section>
\t

 <footer>footer</footer>

</body>
</html>", "layout.html", "G:\\phpStudy\\WWW\\mymvc\\app\\home\\view\\hello\\layout.html");
    }
}
