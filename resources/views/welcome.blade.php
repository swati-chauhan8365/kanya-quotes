<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanye Quotes</title>
</head>
<body>
    <div id="app">
        <h1>Kanye Quotes</h1>
        <div id="quotes">
            <ul>
                {{-- @foreach ($quotes as $quote) --}}
                    {{-- <li>{{ $quote }}</li> --}}<div class="card-body">
                        <div class="card-body">hello this for quote pages </div>
                    </div>
                {{-- @endforeach --}}
            </ul>
        </div>
        <button onclick="refreshQuotes()">Refresh Quotes</button>
    </div>

    {{-- <script>
        function refreshQuotes() {
            fetchQuotes();
        }

        async function fetchQuotes() {
            try {
                const response = await fetch('/api/quotes');
                const data = await response.json();
                const quotes = data.map(quote => quote.quote);
                document.getElementById('quotes').innerHTML = `
                    <ul>
                        ${quotes.map(quote => `<li>${quote}</li>`).join('')}
                    </ul>
                `;
            } catch (error) {
                console.error('Error fetching quotes:', error);
            }
        }

        // Initial fetch of quotes
        fetchQuotes();
    </script> --}}
</body>
</html>
