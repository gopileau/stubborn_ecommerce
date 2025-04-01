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

/* product/index.html.twig */
class __TwigTemplate_2afd3df8fe284ac60785081c10701158 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        yield "Liste des Produits";
        
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
        yield "        <div class=\"sidebar\" style=\"width: 200px; border: 1px solid #ddd; padding: 10px; background: #f8f8f8; margin-bottom: 20px;\">
            <strong>Fourchette de prix :</strong>
            <hr>
            <div class=\"price-range-item\" style=\"padding: 5px; cursor: pointer;\" onmouseover=\"this.style.backgroundColor='rgb(80, 176, 211)';\" onmouseout=\"this.style.backgroundColor='';\">10 à 29€</div>
            <div class=\"price-range-item\" style=\"padding: 5px; cursor: pointer;\" onmouseover=\"this.style.backgroundColor='rgb(80, 176, 211)';\" onmouseout=\"this.style.backgroundColor='';\">30 à 35€</div>
            <div class=\"price-range-item\" style=\"padding: 5px; cursor: pointer;\" onmouseover=\"this.style.backgroundColor='rgb(80, 176, 211)';\" onmouseout=\"this.style.backgroundColor='';\">35 à 50€</div>
        </div>
    <div class=\"product-grid\">
    ";
        // line 18
        if ((array_key_exists("products", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 18, $this->source); })())))) {
            // line 19
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                yield "            <div class=\"product-container\">
                <div class=\"product-image-container\">
                    ";
                // line 22
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 23)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23), "html", null, true);
                    yield "\" class=\"product-image\" style=\"width: 100%;\">
                    ";
                } else {
                    // line 25
                    yield "                        <p>Aucune image disponible</p>
                    ";
                }
                // line 27
                yield "                </div>

                <div class=\"product-details\" style=\"display: flex; flex-direction: column; align-items: center; width: 100%;\">
                    <div style=\"display: flex; justify-content: space-between; width: 100%;\">
                        <div>
                            <h1 class=\"product-name\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32), "html", null, true);
                yield "</h1>
                            <p class=\"product-price\" style=\"margin-top: 5px;\"><strong>Prix :</strong> ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33), "html", null, true);
                yield " €</p>
                        </p>
                        </div>
                    <div class=\"add-to-cart-wrapper\" style=\"margin-left: auto; margin-top: 10px;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add_to_cart"), "html", null, true);
                yield "\">
                        <button onclick=\"window.location.href='";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                yield "'\" class=\"btn\" style=\"margin-left: auto;\">Voir</button>
                        <p class=\"success-message\" style=\"display:none;\">Produit ajouté au panier avec succès!</p>
                    </div>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "    ";
        } else {
            // line 46
            yield "        <h1>Aucun produit disponible</h1>
        <p>Nous n'avons actuellement aucun produit en stock. Veuillez revenir plus tard.</p>
    ";
        }
        // line 49
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/index.html.twig";
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
        return array (  185 => 49,  180 => 46,  177 => 45,  164 => 38,  160 => 37,  153 => 33,  149 => 32,  142 => 27,  138 => 25,  130 => 23,  128 => 22,  124 => 20,  119 => 19,  117 => 18,  107 => 10,  97 => 9,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Produits{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/product.css') }}\">
{% endblock %}

{% block content %}
        <div class=\"sidebar\" style=\"width: 200px; border: 1px solid #ddd; padding: 10px; background: #f8f8f8; margin-bottom: 20px;\">
            <strong>Fourchette de prix :</strong>
            <hr>
            <div class=\"price-range-item\" style=\"padding: 5px; cursor: pointer;\" onmouseover=\"this.style.backgroundColor='rgb(80, 176, 211)';\" onmouseout=\"this.style.backgroundColor='';\">10 à 29€</div>
            <div class=\"price-range-item\" style=\"padding: 5px; cursor: pointer;\" onmouseover=\"this.style.backgroundColor='rgb(80, 176, 211)';\" onmouseout=\"this.style.backgroundColor='';\">30 à 35€</div>
            <div class=\"price-range-item\" style=\"padding: 5px; cursor: pointer;\" onmouseover=\"this.style.backgroundColor='rgb(80, 176, 211)';\" onmouseout=\"this.style.backgroundColor='';\">35 à 50€</div>
        </div>
    <div class=\"product-grid\">
    {% if products is defined and products is not empty %}
        {% for product in products %}
            <div class=\"product-container\">
                <div class=\"product-image-container\">
                    {% if product.image %}
                        <img src=\"{{ asset(product.image) }}\" alt=\"{{ product.name }}\" class=\"product-image\" style=\"width: 100%;\">
                    {% else %}
                        <p>Aucune image disponible</p>
                    {% endif %}
                </div>

                <div class=\"product-details\" style=\"display: flex; flex-direction: column; align-items: center; width: 100%;\">
                    <div style=\"display: flex; justify-content: space-between; width: 100%;\">
                        <div>
                            <h1 class=\"product-name\">{{ product.name }}</h1>
                            <p class=\"product-price\" style=\"margin-top: 5px;\"><strong>Prix :</strong> {{ product.price }} €</p>
                        </p>
                        </div>
                    <div class=\"add-to-cart-wrapper\" style=\"margin-left: auto; margin-top: 10px;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('add_to_cart') }}\">
                        <button onclick=\"window.location.href='{{ path('app_product_show', { 'id': product.id }) }}'\" class=\"btn\" style=\"margin-left: auto;\">Voir</button>
                        <p class=\"success-message\" style=\"display:none;\">Produit ajouté au panier avec succès!</p>
                    </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    {% else %}
        <h1>Aucun produit disponible</h1>
        <p>Nous n'avons actuellement aucun produit en stock. Veuillez revenir plus tard.</p>
    {% endif %}
    </div>
{% endblock %}
", "product/index.html.twig", "C:\\Windows\\System32\\stubborn_ecommerce\\templates\\product\\index.html.twig");
    }
}
