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
class __TwigTemplate_b7fcd1bae0f120eb800bd87ea0b0c094 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/unproduit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
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
        yield "    <div class=\"container product-frame\">
        <div class=\"product-container\" style=\"display: flex; align-items: flex-start; gap: 20px;\">
            <!-- Image du produit -->
            <div class=\"product-image-container\" style=\"flex: 1;\">
                ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 14)) {
            // line 15
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 15)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "</h1>
                        <p class=\"product-price\"><strong>Prix :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 26), "html", null, true);
        yield " €</p>
                    </div>

                    <!-- Sélecteur de taille -->
                    <div class=\"size-container\" style=\"margin-left: 20px; width: 50%; border: 1px solid #ddd; padding: 10px; background: #f8f8f8;\">
                        <strong style=\"text-align: left;\">Taille :</strong>
                        <hr>
                        ";
        // line 33
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 33))) {
            // line 34
            yield "                            <select name=\"sizeSelect\" required style=\"width: 100%; background-color: white; color: black; border: 1px solid #ccc; padding: 8px; appearance: none;\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 35));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 46)]), "html", null, true);
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
        return array (  166 => 47,  162 => 46,  156 => 42,  152 => 40,  148 => 38,  137 => 36,  133 => 35,  130 => 34,  128 => 33,  118 => 26,  114 => 25,  106 => 19,  102 => 17,  94 => 15,  92 => 14,  86 => 10,  79 => 9,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "product/unproduit.html.twig", "C:\\Windows\\System32\\stubborn_ecommerce\\templates\\product\\unproduit.html.twig");
    }
}
