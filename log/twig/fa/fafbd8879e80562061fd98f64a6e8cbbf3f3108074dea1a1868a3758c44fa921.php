<?php

/* /hello/add.html */
class __TwigTemplate_94187fef398f22cff2f3a7f8343e1fbf5f51e729c5d8faa985963bf14f7562c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html", "/hello/add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<?php echo 1111;?>
\t<form action=\"/home/hello/save\" method=\"POST\">
\t    <div class=\"form-group\">
\t        <label>标题</label>
\t        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"请输入title\">
\t    </div>
\t    <div class=\"form-group\">
\t        <label>内容</label>
\t        <textarea class=\"form-control\" name=\"content\" placeholder=\"请输入内容\"></textarea>
\t    </div>
\t   
\t    <button type=\"submit\" class=\"btn btn-default\">提交</button>
\t</form>
\t
";
    }

    public function getTemplateName()
    {
        return "/hello/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/layout.html\" %}


{% block content %}
\t<?php echo 1111;?>
\t<form action=\"/home/hello/save\" method=\"POST\">
\t    <div class=\"form-group\">
\t        <label>标题</label>
\t        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"请输入title\">
\t    </div>
\t    <div class=\"form-group\">
\t        <label>内容</label>
\t        <textarea class=\"form-control\" name=\"content\" placeholder=\"请输入内容\"></textarea>
\t    </div>
\t   
\t    <button type=\"submit\" class=\"btn btn-default\">提交</button>
\t</form>
\t
{% endblock %}", "/hello/add.html", "G:\\phpStudy\\WWW\\mymvc\\app\\home\\view\\hello\\add.html");
    }
}
