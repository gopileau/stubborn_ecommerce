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
class __TwigTemplate_1bad3e77158de6eebd7d369586692f6a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Liste des Produits";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/product.css"), "html", null, true);
        yield "\">
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        if ((array_key_exists("products", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["products"] ?? null)))) {
            // line 19
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
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
        return array (  164 => 49,  159 => 46,  156 => 45,  143 => 38,  139 => 37,  132 => 33,  128 => 32,  121 => 27,  117 => 25,  109 => 23,  107 => 22,  103 => 20,  98 => 19,  96 => 18,  86 => 10,  79 => 9,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "product/index.html.twig", "C:\\Windows\\System32\\stubborn_ecommerce\\templates\\product\\index.html.twig");
    }
}
