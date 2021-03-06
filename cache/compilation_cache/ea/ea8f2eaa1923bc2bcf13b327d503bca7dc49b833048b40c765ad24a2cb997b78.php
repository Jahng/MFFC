<?php

/* index.html */
class __TwigTemplate_dbc9247c92d021e7253bcc7935179d59300020af8f6142b5fe893d76d404c0ae extends Twig_Template
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
        $this->loadTemplate("header.html", "index.html", 1)->display($context);
        // line 2
        echo "

\t<header id=\"gtco-header\" class=\"gtco-cover\" role=\"banner\" style=\"background-image:url(./statics/images/img_bg_1.jpg);\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t\t\t<h1 class=\"animate-box\" data-animate-effect=\"fadeInUp\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_article"]) ? $context["header_article"] : null), "title", array(), "array"), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t";
        // line 12
        echo $this->getAttribute((isset($context["header_article"]) ? $context["header_article"] : null), "description", array(), "array");
        echo "
\t\t\t\t\t\t\t<p class=\"animate-box\" data-animate-effect=\"fadeInUp\"><a href=\"#\" class=\"btn btn-white btn-lg btn-outline\">Get In Touch</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<div id=\"gtco-features-3\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"gtco-flex\">
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 25
            echo "\t\t\t\t<div class=\"feature feature-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t<div class=\"feature-inner\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "image", array(), "array"), "html", null, true);
            echo "\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h3>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "title", array(), "array"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "description", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-white btn-outline\">Learn More</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div id=\"gtco-features\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading animate-box\">
\t\t\t\t\t<h2>Aesthetic Features</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"feature-center animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"ti-vector\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h3>Pixel Perfect</h3>
\t\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"feature-center animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"ti-tablet\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h3>Fully Responsive</h3>
\t\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"feature-center animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h3>Web Development</h3>
\t\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"feature-center animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"ti-ruler-pencil\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h3>Web Design</h3>
\t\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"gtco-portfolio\" class=\"gtco-section\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading animate-box\">
\t\t\t\t\t<h2>Our Latest Works</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<ul id=\"gtco-portfolio-list\">
\t\t\t\t\t\t<li class=\"two-third animate-box\" data-animate-effect=\"fadeIn\" style=\"background-image: url(./statics/images/img_1.jpg); \"> 
\t\t\t\t\t\t\t<a href=\"#\" class=\"color-1\">
\t\t\t\t\t\t\t\t<div class=\"case-studies-summary\">
\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t<h2>View the Earth from the Outer Space</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"one-third animate-box\" data-animate-effect=\"fadeIn\" style=\"background-image: url(./statics/images/img_2.jpg); \">
\t\t\t\t\t\t\t<a href=\"#\" class=\"color-2\">
\t\t\t\t\t\t\t\t<div class=\"case-studies-summary\">
\t\t\t\t\t\t\t\t\t<span>Illustration</span>
\t\t\t\t\t\t\t\t\t<h2>Sleeping in the Cold Blue Water</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li class=\"one-half animate-box\" data-animate-effect=\"fadeIn\" style=\"background-image: url(./statics/images/img_3.jpg); \">
\t\t\t\t\t\t\t<a href=\"#\" class=\"color-3\">
\t\t\t\t\t\t\t\t<div class=\"case-studies-summary\">
\t\t\t\t\t\t\t\t\t<span>Illustration</span>
\t\t\t\t\t\t\t\t\t<h2>Building Builded by Man</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"one-half animate-box\" data-animate-effect=\"fadeIn\" style=\"background-image: url(./statics/images/img_4.jpg); \">
\t\t\t\t\t\t\t<a href=\"#\" class=\"color-4\">
\t\t\t\t\t\t\t\t<div class=\"case-studies-summary\">
\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t<h2>The Peaceful Place On Earth</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"one-third animate-box\" data-animate-effect=\"fadeIn\" style=\"background-image: url(./statics/images/img_5.jpg); \"> 
\t\t\t\t\t\t\t<a href=\"#\" class=\"color-5\">
\t\t\t\t\t\t\t\t<div class=\"case-studies-summary\">
\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t<h2>I'm Getting Married</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"two-third animate-box\" data-animate-effect=\"fadeIn\" style=\"background-image: url(./statics/images/img_6.jpg); \">
\t\t\t\t\t\t\t<a href=\"#\" class=\"color-6\">
\t\t\t\t\t\t\t\t<div class=\"case-studies-summary\">
\t\t\t\t\t\t\t\t\t<span>Illustration</span>
\t\t\t\t\t\t\t\t\t<h2>Beautiful Flowers In The Air</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4 text-center animate-box\">
\t\t\t\t\t<a href=\"#\" class=\"btn btn-white btn-outline btn-lg btn-block\">See All Our Works</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t</div>
\t</div>

\t<div id=\"gtco-counter\" class=\"gtco-section\">
\t\t<div class=\"gtco-container\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading animate-box\">
\t\t\t\t\t<h2>Fun Facts</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-3 col-sm-6 animate-box\" data-animate-effect=\"fadeInLeft\">
\t\t\t\t\t<div class=\"feature-center\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"counter js-counter\" data-from=\"0\" data-to=\"22070\" data-speed=\"5000\" data-refresh-interval=\"50\">1</span>
\t\t\t\t\t\t<span class=\"counter-label\">Creativity Fuel</span>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 animate-box\" data-animate-effect=\"fadeInLeft\">
\t\t\t\t\t<div class=\"feature-center\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"ti-face-smile\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"counter js-counter\" data-from=\"0\" data-to=\"97\" data-speed=\"5000\" data-refresh-interval=\"50\">1</span>
\t\t\t\t\t\t<span class=\"counter-label\">Happy Clients</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 animate-box\" data-animate-effect=\"fadeInLeft\">
\t\t\t\t\t<div class=\"feature-center\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"ti-briefcase\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"counter js-counter\" data-from=\"0\" data-to=\"402\" data-speed=\"5000\" data-refresh-interval=\"50\">1</span>
\t\t\t\t\t\t<span class=\"counter-label\">Projects Done</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 animate-box\" data-animate-effect=\"fadeInLeft\">
\t\t\t\t\t<div class=\"feature-center\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i class=\"ti-time\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"counter js-counter\" data-from=\"0\" data-to=\"212023\" data-speed=\"5000\" data-refresh-interval=\"50\">1</span>
\t\t\t\t\t\t<span class=\"counter-label\">Hours Spent</span>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"gtco-products\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading animate-box\">
\t\t\t\t\t<h2>Products</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"owl-carousel owl-carousel-carousel\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"./statics/images/img_1.jpg\" alt=\"Free HTML5 Bootstrap Template by GetTemplates.co\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"./statics/images/img_2.jpg\" alt=\"Free HTML5 Bootstrap Template by GetTemplates.co\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"./statics/images/img_3.jpg\" alt=\"Free HTML5 Bootstrap Template by GetTemplates.co\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"./statics/images/img_4.jpg\" alt=\"Free HTML5 Bootstrap Template by GetTemplates.co\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    
    <div class=\"copyrights\">Collect from <a href=\"http://www.cssmoban.com/\" >企业网站模板</a></div><strong></strong>

\t

\t<div id=\"gtco-subscribe\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading\">
\t\t\t\t\t<h2>Subscribe</h2>
\t\t\t\t\t<p>Be the first to know about the new templates.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"sr-only\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"name\" class=\"sr-only\">Name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-block\">Subscribe</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        // line 283
        $this->loadTemplate("footer.html", "index.html", 283)->display($context);
        // line 284
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 284,  352 => 283,  103 => 36,  84 => 31,  80 => 30,  75 => 28,  68 => 25,  51 => 24,  36 => 12,  32 => 11,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "D:\\wnmp\\nginx\\nginx-1.10.2\\html\\MFFC\\app\\Views\\index.html");
    }
}
