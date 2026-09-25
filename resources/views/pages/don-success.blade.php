<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Merci pour votre don !</title>
</head>
<body>

    <div id="success" class="hidden">
        <h2>Merci pour votre don ! ❤️</h2>
        <p>Un email de confirmation sera envoyé à <span id="customer-email"></span>.</p>
    </div>

    <script>
    async function initialize() {
        const urlParams = new URLSearchParams(window.location.search);
        const sessionId = urlParams.get('session_id');

        const response = await fetch('/don/status', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ session_id: sessionId })
        });

        const session = await response.json();

        if (session.status === 'complete') {
            document.getElementById('success').style.display = 'block';
            document.getElementById('customer-email').textContent = session.customer_email;
        } else {
            window.location.replace('/don');
        }
    }

    initialize();
    </script>

</body>
</html>
