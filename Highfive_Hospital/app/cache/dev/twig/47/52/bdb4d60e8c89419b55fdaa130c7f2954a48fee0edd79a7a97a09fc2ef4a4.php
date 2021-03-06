<?php

/* High5HospitalPatientBundle:Default:base.html.twig */
class __TwigTemplate_4752bdb4d60e8c89419b55fdaa130c7f2954a48fee0edd79a7a97a09fc2ef4a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Patient</title>
        <link rel='stylesheet' href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/high5hospitalpatient/css/jquery-ui.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/high5hospitalpatient/css/style.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/high5hospitalpatient/javascript/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/high5hospitaldoctor/bootstrap-3.3.2-dist/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/high5hospitalpatient/bootstrap-3.3.2-dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/high5hospitalpatient/eternicode-bootstrap-datepicker-809a5c2/css/datepicker3.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/high5hospitalpatient/eternicode-bootstrap-datepicker-809a5c2/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        <!-- <div id=\"error\"><img src=\"https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png\" /> Your caps-lock is on.</div> -->
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/high5hospitalpatient/javascript/jquery_and_jqueryui.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "High5HospitalPatientBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  63 => 18,  60 => 17,  58 => 16,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  35 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }
}
