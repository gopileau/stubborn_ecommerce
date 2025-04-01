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

/* cart/index.html.twig */
class __TwigTemplate_46af9f8bcd30e44cadcf01d44078ed96 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        yield "Votre Panier";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        yield "    <div class=\"container\">
        <h1>Votre Panier</h1>
        
        ";
        // line 14
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "            <p>Votre panier est vide. Ajoutez des produits pour commencer vos achats!</p>
        ";
        } else {
            // line 17
            yield "            <div class=\"cart-container\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                yield "                    <div class=\"cart-item\" style=\"display: flex; align-items: flex-start; justify-content: space-between; padding: 10px; border-bottom: 1px solid #ddd; position: relative; padding-bottom: 30px;\">
                        <!-- Image du produit -->
                        <div class=\"cart-image\" style=\"width: 20%;\">
                            ";
                // line 22
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 22), "image", [], "any", true, true, false, 22) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 22), "image", [], "any", false, false, false, 22)))) {
                    // line 23
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 23), "image", [], "any", false, false, false, 23)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
                    yield "\" style=\"max-width: 120px; max-height: 120px;\">
                            ";
                } else {
                    // line 25
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-image.jpg"), "html", null, true);
                    yield "\" alt=\"Image par défaut\" style=\"max-width: 120px; max-height: 120px;\">
                            ";
                }
                // line 27
                yield "                        </div>
                        
                        <!-- Infos produit -->
                        <!-- Nom du produit -->
                        <div style=\"width: 30%;\">";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                yield "</div>

                        <!-- Prix -->
                        <div style=\"width: 20%;\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "price", [], "any", false, false, false, 34), "html", null, true);
                yield " €</div>

                        <!-- Taille -->
                        <div style=\"width: 20%;\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 37), "html", null, true);
                yield "</div>

                        <!-- Bouton Retirer -->
                        <div style=\"position: absolute; bottom: 10px; right: 10px;\">
                            <button onclick=\"event.preventDefault(); document.getElementById('remove-form-";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
                yield "').submit();\" class=\"btn\" 
                                style=\"background-color:rgb(41, 94, 241); color: white; border: none; border-radius: 5px; padding: 8px 12px; cursor: pointer;\">
                                Retirer du panier
                            </button>
                            <form id=\"remove-form-";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_from_cart", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" method=\"post\" style=\"display: none;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("remove_from_cart"), "html", null, true);
                yield "\">
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "            </div>

            <!-- Résumé du panier -->
            <div class=\"cart-summary\" style=\"display: flex; flex-direction: column; align-items: flex-end; margin-top: 20px; padding: 15px; border-top: 1px solid #ddd;\">
                <!-- Ligne \"Total\" + \"Finaliser ma commande\" -->
                <div style=\"display: flex; align-items: center;\">
                    <div style=\"background-color: #ddd; color: black; font-size: 16px; font-weight: bold; padding: 10px 15px; border: none; display: flex; align-items: center; justify-content: center; width: 140px;\">
                        <span style=\"margin-right: 5px;\">Total :</span> <span>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 58, $this->source); })()), "html", null, true);
            yield " €</span>
                    </div>
                    <button id=\"checkout-button\" class=\"checkout-btn\"
                        ";
            // line 61
            if (((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 61, $this->source); })()) < 1)) {
                yield " disabled ";
            }
            // line 62
            yield "                        style=\"background-color: #ff9999; color: black; border: none; border-radius: 10px; padding: 10px 15px; cursor: pointer; margin-left: 10px;\">
                        Finaliser ma commande
                    </button>
                </div>
                <!-- Bouton \"Continuer mes achats\" en dessous -->
                <button onclick=\"location.href='";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_boutique");
            yield "'\" class=\"continue-btn\" 
                    style=\"background-color: #99e699; color: black; border: none; border-radius: 10px; padding: 10px 15px; cursor: pointer; margin-top: 10px;\">
                    Continuer mes achats
                </button>
            </div>
        ";
        }
        // line 73
        yield "    </div>
    ";
        // line 74
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        yield "    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Gestion du bouton \"Finaliser ma commande\"
            document.getElementById(\"checkout-button\")?.addEventListener(\"click\", function () {
                window.location.href = \"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
        yield "\"; // Redirect to the checkout route
            });

            // Gestion des boutons \"Retirer du panier\"
            document.querySelectorAll(\".btn\").forEach(button => {
                button.addEventListener(\"click\", function (event) {
                    event.preventDefault();
                    if (confirm(\"Voulez-vous vraiment retirer cet article du panier ?\")) {
                        this.closest(\"form\").submit();
                    }
                });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cart/index.html.twig";
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
        return array (  261 => 79,  255 => 75,  238 => 74,  235 => 73,  226 => 67,  219 => 62,  215 => 61,  209 => 58,  200 => 51,  189 => 46,  183 => 45,  176 => 41,  169 => 37,  163 => 34,  157 => 31,  151 => 27,  145 => 25,  137 => 23,  135 => 22,  130 => 19,  126 => 18,  123 => 17,  119 => 15,  117 => 14,  112 => 11,  102 => 10,  92 => 7,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre Panier{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/cart.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
{% endblock %}

{% block content %}
    <div class=\"container\">
        <h1>Votre Panier</h1>
        
        {% if cartItems is empty %}
            <p>Votre panier est vide. Ajoutez des produits pour commencer vos achats!</p>
        {% else %}
            <div class=\"cart-container\">
                {% for item in cartItems %}
                    <div class=\"cart-item\" style=\"display: flex; align-items: flex-start; justify-content: space-between; padding: 10px; border-bottom: 1px solid #ddd; position: relative; padding-bottom: 30px;\">
                        <!-- Image du produit -->
                        <div class=\"cart-image\" style=\"width: 20%;\">
                            {% if item.product.image is defined and item.product.image is not empty %}
                                <img src=\"{{ asset(item.product.image) }}\" alt=\"{{ item.product.name }}\" style=\"max-width: 120px; max-height: 120px;\">
                            {% else %}
                                <img src=\"{{ asset('images/default-image.jpg') }}\" alt=\"Image par défaut\" style=\"max-width: 120px; max-height: 120px;\">
                            {% endif %}
                        </div>
                        
                        <!-- Infos produit -->
                        <!-- Nom du produit -->
                        <div style=\"width: 30%;\">{{ item.product.name }}</div>

                        <!-- Prix -->
                        <div style=\"width: 20%;\">{{ item.product.price }} €</div>

                        <!-- Taille -->
                        <div style=\"width: 20%;\">{{ item.size }}</div>

                        <!-- Bouton Retirer -->
                        <div style=\"position: absolute; bottom: 10px; right: 10px;\">
                            <button onclick=\"event.preventDefault(); document.getElementById('remove-form-{{ item.product.id }}').submit();\" class=\"btn\" 
                                style=\"background-color:rgb(41, 94, 241); color: white; border: none; border-radius: 5px; padding: 8px 12px; cursor: pointer;\">
                                Retirer du panier
                            </button>
                            <form id=\"remove-form-{{ item.product.id }}\" action=\"{{ path('app_remove_from_cart', {'id': item.product.id}) }}\" method=\"post\" style=\"display: none;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('remove_from_cart') }}\">
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <!-- Résumé du panier -->
            <div class=\"cart-summary\" style=\"display: flex; flex-direction: column; align-items: flex-end; margin-top: 20px; padding: 15px; border-top: 1px solid #ddd;\">
                <!-- Ligne \"Total\" + \"Finaliser ma commande\" -->
                <div style=\"display: flex; align-items: center;\">
                    <div style=\"background-color: #ddd; color: black; font-size: 16px; font-weight: bold; padding: 10px 15px; border: none; display: flex; align-items: center; justify-content: center; width: 140px;\">
                        <span style=\"margin-right: 5px;\">Total :</span> <span>{{ totalPrice }} €</span>
                    </div>
                    <button id=\"checkout-button\" class=\"checkout-btn\"
                        {% if totalPrice < 1 %} disabled {% endif %}
                        style=\"background-color: #ff9999; color: black; border: none; border-radius: 10px; padding: 10px 15px; cursor: pointer; margin-left: 10px;\">
                        Finaliser ma commande
                    </button>
                </div>
                <!-- Bouton \"Continuer mes achats\" en dessous -->
                <button onclick=\"location.href='{{ path('app_boutique') }}'\" class=\"continue-btn\" 
                    style=\"background-color: #99e699; color: black; border: none; border-radius: 10px; padding: 10px 15px; cursor: pointer; margin-top: 10px;\">
                    Continuer mes achats
                </button>
            </div>
        {% endif %}
    </div>
    {% block javascripts %}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Gestion du bouton \"Finaliser ma commande\"
            document.getElementById(\"checkout-button\")?.addEventListener(\"click\", function () {
                window.location.href = \"{{ path('app_checkout') }}\"; // Redirect to the checkout route
            });

            // Gestion des boutons \"Retirer du panier\"
            document.querySelectorAll(\".btn\").forEach(button => {
                button.addEventListener(\"click\", function (event) {
                    event.preventDefault();
                    if (confirm(\"Voulez-vous vraiment retirer cet article du panier ?\")) {
                        this.closest(\"form\").submit();
                    }
                });
            });
        });
    </script>
{% endblock %}
{% endblock %}
", "cart/index.html.twig", "C:\\Windows\\System32\\stubborn_ecommerce\\templates\\cart\\index.html.twig");
    }
}
