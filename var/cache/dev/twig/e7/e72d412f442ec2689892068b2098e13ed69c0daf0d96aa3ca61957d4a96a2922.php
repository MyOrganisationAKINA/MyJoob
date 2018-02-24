<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_231b3417c52ce81a851fc8d30c7bb086073645c7240000c8c5810f624871236f extends Twig_Template
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
        $__internal_5807c304d4fbbe942ae3cfd8f485baeed0518a737d5d9034c19f4c035e41ad5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5807c304d4fbbe942ae3cfd8f485baeed0518a737d5d9034c19f4c035e41ad5b->enter($__internal_5807c304d4fbbe942ae3cfd8f485baeed0518a737d5d9034c19f4c035e41ad5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_89d846dfa255b89c9b834e4cd70908c1edf21611239ba6baecb97df2a0f0e1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d846dfa255b89c9b834e4cd70908c1edf21611239ba6baecb97df2a0f0e1bb->enter($__internal_89d846dfa255b89c9b834e4cd70908c1edf21611239ba6baecb97df2a0f0e1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5807c304d4fbbe942ae3cfd8f485baeed0518a737d5d9034c19f4c035e41ad5b->leave($__internal_5807c304d4fbbe942ae3cfd8f485baeed0518a737d5d9034c19f4c035e41ad5b_prof);

        
        $__internal_89d846dfa255b89c9b834e4cd70908c1edf21611239ba6baecb97df2a0f0e1bb->leave($__internal_89d846dfa255b89c9b834e4cd70908c1edf21611239ba6baecb97df2a0f0e1bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
