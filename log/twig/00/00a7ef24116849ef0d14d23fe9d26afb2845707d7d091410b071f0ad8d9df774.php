<?php

/* /img/add.html */
class __TwigTemplate_27f7b651202c1a4b18e5f2cac745a46369fecafdcfaec4de8446ffec7da597a2 extends Twig_Template
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
\t<meta charset=\"UTF-8\">
\t<title>image</title>
</head>
<body>
\t<form action=\"/home/img/add\" method=\"POST\" enctype=\"multipart/form-data\">
\t    <div class=\"form-group\">
\t        <label>title</label>
\t        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"请输入title\">
\t    </div>
\t    <div class=\"form-group\">
\t        <label>logo</label>
\t        <input type=\"file\" name=\"logo\">
\t    </div>
\t    <div class=\"form-group\">
\t        <label>相册</label><br/>
\t        <input type=\"file\" name=\"pic[]\"><br/>
\t        <input type=\"file\" name=\"pic[]\"><br/>
\t        <input type=\"file\" name=\"pic[]\"><br/>
\t        <input type=\"file\" name=\"pic[]\"><br/>
\t    </div>
\t   
\t    <button type=\"submit\" class=\"btn btn-default\">提交</button>
\t</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/img/add.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
\t<meta charset=\"UTF-8\">
\t<title>image</title>
</head>
<body>
\t<form action=\"/home/img/add\" method=\"POST\" enctype=\"multipart/form-data\">
\t    <div class=\"form-group\">
\t        <label>title</label>
\t        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"请输入title\">
\t    </div>
\t    <div class=\"form-group\">
\t        <label>logo</label>
\t        <input type=\"file\" name=\"logo\">
\t    </div>
\t    <div class=\"form-group\">
\t        <label>相册</label><br/>
\t        <input type=\"file\" name=\"pic[]\"><br/>
\t        <input type=\"file\" name=\"pic[]\"><br/>
\t        <input type=\"file\" name=\"pic[]\"><br/>
\t        <input type=\"file\" name=\"pic[]\"><br/>
\t    </div>
\t   
\t    <button type=\"submit\" class=\"btn btn-default\">提交</button>
\t</form>
</body>
</html>", "/img/add.html", "D:\\phpStudy\\WWW\\wangk\\app\\home\\view\\img\\add.html");
    }
}
