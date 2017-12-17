<?php

/* /hello/index.html */
class __TwigTemplate_58053ca7ea11901be72f1cb5ba6271f0c0b7357730913aedf61fac9e2b8f635a extends Twig_Template
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
        echo "<html>
<head>
\t<title>view读取</title>
</head>
<body>
\t<h1>this is a view</h1>

\t<!-- 
\t原生数据的读取
\t<h3><?php echo \$data;?></h3>
\t<h3><?php echo \$music;?></h3> -->

\t<!-- twig模板数据的读取 -->

<!-- \t";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo " -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/hello/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  19 => 1,);
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
<head>
\t<title>view读取</title>
</head>
<body>
\t<h1>this is a view</h1>

\t<!-- 
\t原生数据的读取
\t<h3><?php echo \$data;?></h3>
\t<h3><?php echo \$music;?></h3> -->

\t<!-- twig模板数据的读取 -->

<!-- \t{{data}} -->
</body>
</html>", "/hello/index.html", "G:\\phpStudy\\WWW\\mymvc\\app\\home\\view\\hello\\index.html");
    }
}
