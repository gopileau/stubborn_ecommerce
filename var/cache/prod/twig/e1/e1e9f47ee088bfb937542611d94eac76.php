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
class __TwigTemplate_d75f727285814113a2c54e385afd7baa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Votre Panier";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    <div class=\"container\">
        <h1>Votre Panier</h1>
        
        ";
        // line 14
        if (Twig\Extension\CoreExtension::testEmpty(($context["cartItems"] ?? null))) {
            // line 15
            yield "            <p>Votre panier est vide. Ajoutez des produits pour commencer vos achats!</p>
        ";
        } else {
            // line 17
            yield "            <div class=\"cart-container\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["cartItems"] ?? null));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPrice"] ?? null), "html", null, true);
            yield " €</span>
                    </div>
                    <button id=\"checkout-button\" class=\"checkout-btn\"
                        ";
            // line 61
            if ((($context["totalPrice"] ?? null) < 1)) {
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
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  234 => 79,  228 => 75,  217 => 74,  214 => 73,  205 => 67,  198 => 62,  194 => 61,  188 => 58,  179 => 51,  168 => 46,  162 => 45,  155 => 41,  148 => 37,  142 => 34,  136 => 31,  130 => 27,  124 => 25,  116 => 23,  114 => 22,  109 => 19,  105 => 18,  102 => 17,  98 => 15,  96 => 14,  91 => 11,  84 => 10,  77 => 7,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "cart/index.html.twig", "C:\\Windows\\System32\\stubborn_ecommerce\\templates\\cart\\index.html.twig");
    }
}
