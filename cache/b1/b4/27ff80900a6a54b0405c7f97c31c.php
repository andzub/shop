<?php

/* index.html */
class __TwigTemplate_b1b427ff80900a6a54b0405c7f97c31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\" />
    <link rel=\"stylesheet\" href=\"theme/assets/css/normalize.css\">
    <link rel=\"stylesheet\" href=\"theme/assets/css/style.css\">
    <link rel=\"stylesheet\" href=\"theme/assets/font-awesome-4.7.0/css/font-awesome.min.css\">
</head>

<body>

    <header class=\"header\">
        <div class=\"headerContainer\">

            <div class=\"headerTop\">
                <h1 class=\"headerContainer__logoName\">
                    <a href=\"\">Exmobuy</a>
                </h1>
                <form id=\"headerContainer__search\" name=\"search\" method=\"post\" action=\"Search.php\">
                    <input type=\"search\" name=\"query\" placeholder=\"Поиск\">
                    <button type=\"submit\">Найти</button>
                </form>
                <div class=\"headerContainer__loginAuth-box\">
                    <p class=\"headerContainer__login-btn\">Вход</p>
                    <p class=\"headerContainer__auth-btn\">Регистация</p>
                </div>
                <form id=\"headerContainer__login-form\" action=\"login/run\" method=\"post\">
                    <label>Login</label>
                    <input type=\"text\" name=\"login\">
                    <br>
                    <label>Password</label>
                    <input type=\"text\" name=\"password\">
                    <br>
                    <label></label>
                    <input type=\"submit\">
                </form>
            </div>

            <div class=\"headerBottom\">
                <nav class=\"headerBottom__menu\">
                    <ul>
                        <li>
                            <a href=\"\">О магазине</a>
                        </li>
                        <li>
                            <a href=\"\">Продукция</a>
                        </li>
                        <li>
                            <a href=\"\">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </header>
    <div id=\"content\">
        ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "    </div>

    <footer class=\"footer\">
        <div class=\"footerContainer\"></div>
    </footer>

</body>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  104 => 60,  99 => 5,  87 => 61,  85 => 60,  27 => 5,  21 => 1,);
    }
}
