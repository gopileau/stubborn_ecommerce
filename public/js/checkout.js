document.addEventListener("DOMContentLoaded", function () {
    // Gestion du bouton "Finaliser ma commande"
    document.getElementById("checkout-button")?.addEventListener("click", function () {
        fetch("{{ path('stripe_checkout') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-Requested-With": "XMLHttpRequest",
            },
            body: JSON.stringify({
                cart: cart // Include the cart data here

                // Include any necessary data here, e.g., cart items
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.clientSecret) {
                // Use Stripe.js to handle the payment
                const stripe = Stripe("{{ getenv('STRIPE_PUBLIC_KEY') }}");
                stripe.redirectToCheckout({ sessionId: data.clientSecret });
            } else {
                alert("Erreur lors de la création du paiement. Veuillez réessayer.");
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Une erreur s'est produite. Veuillez réessayer.");
        });
    });
});
