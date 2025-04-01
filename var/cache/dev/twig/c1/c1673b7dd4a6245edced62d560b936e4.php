<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* product/unproduit.html.twig */
class __TwigTemplate_44cb29b2a1b71479ec58658579141976 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/unproduit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/unproduit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/product.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        yield "    <div class=\"container product-frame\">
        <div class=\"product-container\" style=\"display: flex; align-items: flex-start; gap: 20px;\">
            <!-- Image du produit -->
            <div class=\"product-image-container\" style=\"flex: 1;\">
                ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14)) {
            // line 15
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            yield "\" class=\"product-image\">
                ";
        } else {
            // line 17
            yield "                    <p>Aucune image disponible</p>
                ";
        }
        // line 19
        yield "            </div>

            <!-- Informations du produit -->
            <div class=\"product-info\" style=\"flex: 1; display: flex; flex-direction: column; align-items: flex-start;\">
                <div class=\"product-details\" style=\"display: flex; justify-content: space-between; width: 100%;\">
                    <div style=\"flex: 1;\">
                        <h1 class=\"product-name\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "</h1>
                        <p class=\"product-price\"><strong>Prix :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26), "html", null, true);
        yield " €</p>
                    </div>

                    <!-- Sélecteur de taille -->
                    <div class=\"size-container\" style=\"margin-left: 20px; width: 50%; border: 1px solid #ddd; padding: 10px; background: #f8f8f8;\">
                        <strong style=\"text-align: left;\">Taille :</strong>
                        <hr>
                        ";
        // line 33
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "sizes", [], "any", false, false, false, 33))) {
            // line 34
            yield "                            <select name=\"sizeSelect\" required style=\"width: 100%; background-color: white; color: black; border: 1px solid #ccc; padding: 8px; appearance: none;\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "sizes", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                // line 36
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["size"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["size"], "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['size'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                            </select>
                        ";
        } else {
            // line 40
            yield "                            <p>Aucune taille disponible</p>
                        ";
        }
        // line 42
        yield "                    </div>
                </div>

                <!-- Formulaire pour ajouter au panier -->
                <form action=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\" method=\"post\" style=\"width: 100%; display: flex; justify-content: center; border: none; background: transparent;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add_to_cart"), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"selectedSize\" id=\"selectedSize\" value=\"\">
                    <script>
                        document.querySelector('select[name=\"sizeSelect\"]').addEventListener('change', function() {
                            document.getElementById('selectedSize').value = this.value;
                        });
                    </script>

                    <button type=\"submit\" class=\"add-to-cart\">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/unproduit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  187 => 47,  183 => 46,  177 => 42,  173 => 40,  169 => 38,  158 => 36,  154 => 35,  151 => 34,  149 => 33,  139 => 26,  135 => 25,  127 => 19,  123 => 17,  115 => 15,  113 => 14,  107 => 10,  97 => 9,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/product.css') }}\">
{% endblock %}

{% block content %}
    <div class=\"container product-frame\">
        <div class=\"product-container\" style=\"display: flex; align-items: flex-start; gap: 20px;\">
            <!-- Image du produit -->
            <div class=\"product-image-container\" style=\"flex: 1;\">
                {% if product.image %}
                    <img src=\"{{ asset(product.image) }}\" alt=\"{{ product.name }}\" class=\"product-image\">
                {% else %}
                    <p>Aucune image disponible</p>
                {% endif %}
            </div>

            <!-- Informations du produit -->
            <div class=\"product-info\" style=\"flex: 1; display: flex; flex-direction: column; align-items: flex-start;\">
                <div class=\"product-details\" style=\"display: flex; justify-content: space-between; width: 100%;\">
                    <div style=\"flex: 1;\">
                        <h1 class=\"product-name\">{{ product.name }}</h1>
                        <p class=\"product-price\"><strong>Prix :</strong> {{ product.price }} €</p>
                    </div>

                    <!-- Sélecteur de taille -->
                    <div class=\"size-container\" style=\"margin-left: 20px; width: 50%; border: 1px solid #ddd; padding: 10px; background: #f8f8f8;\">
                        <strong style=\"text-align: left;\">Taille :</strong>
                        <hr>
                        {% if product.sizes is not empty %}
                            <select name=\"sizeSelect\" required style=\"width: 100%; background-color: white; color: black; border: 1px solid #ccc; padding: 8px; appearance: none;\">
                                {% for size in product.sizes %}
                                    <option value=\"{{ size }}\">{{ size }}</option>
                                {% endfor %}
                            </select>
                        {% else %}
                            <p>Aucune taille disponible</p>
                        {% endif %}
                    </div>
                </div>

                <!-- Formulaire pour ajouter au panier -->
                <form action=\"{{ path('app_cart_add', {'id': product.id}) }}\" method=\"post\" style=\"width: 100%; display: flex; justify-content: center; border: none; background: transparent;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('add_to_cart') }}\">
                    <input type=\"hidden\" name=\"selectedSize\" id=\"selectedSize\" value=\"\">
                    <script>
                        document.querySelector('select[name=\"sizeSelect\"]').addEventListener('change', function() {
                            document.getElementById('selectedSize').value = this.value;
                        });
                    </script>

                    <button type=\"submit\" class=\"add-to-cart\">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "product/unproduit.html.twig", "C:\\Windows\\System32\\stubborn_ecommerce\\templates\\product\\unproduit.html.twig");
    }
}
