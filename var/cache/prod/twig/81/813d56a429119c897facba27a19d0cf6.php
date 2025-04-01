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

/* product/show.html.twig */
class __TwigTemplate_767de053d927bc09cb0ba0045655a607 extends Template
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
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield ((($context["product"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true)) : ("Produit"));
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
    <p>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 7), "html", null, true);
        yield "</p>
    <p>Prix: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 8), "html", null, true);
        yield " €</p>

    <!-- Add a hidden field to store the selected size -->
    <input type=\"hidden\" id=\"selectedSize\" name=\"selectedSize\" value=\"\">

    <div class=\"size-container\" style=\"margin-left: 20px; width: 200px; border: 1px solid #ddd; padding: 10px; background: #f8f8f8;\">
        <strong>Choisir la taille :</strong>
        <hr>
        <div class=\"size-range-item\" onclick=\"selectSize('XS')\">XS</div>
        <div class=\"size-range-item\" onclick=\"selectSize('S')\">S</div>
        <div class=\"size-range-item\" onclick=\"selectSize('M')\">M</div>
        <div class=\"size-range-item\" onclick=\"selectSize('L')\">L</div>
    </div>

    <button onclick=\"addToCart(";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
        yield ")\">Ajouter au panier</button>

    <script>
        function selectSize(size) {
            document.getElementById(\"selectedSize\").value = size;

            document.querySelectorAll('.size-range-item').forEach(item => {
                item.classList.remove('selected');
            });

            event.target.classList.add('selected');
        }

        function addToCart(productId) {
            const token = document.querySelector('input[name=\"_token\"]').value;
            const size = document.getElementById(\"selectedSize\").value;

            if (!size) {
                alert('Veuillez sélectionner une taille.');
                return;
            }

            fetch(`/cart/add/\${productId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `_token=\${token}&selectedSize=\${size}`
            })
            .then(response => response.ok ? alert('Produit ajouté au panier !') : alert('Échec de l\\'ajout au panier.'))
            .catch(error => console.error('Erreur:', error));
        }
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/show.html.twig";
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
        return array (  96 => 22,  79 => 8,  75 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "product/show.html.twig", "C:\\Windows\\System32\\stubborn_ecommerce\\templates\\product\\show.html.twig");
    }
}
