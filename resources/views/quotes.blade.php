<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanye Quotes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Kanye Quotes</h1>
                <div id="quotes" class="mt-3">
                    <ul class="list-group">
                        <!-- Quotes will be displayed here -->
                    </ul>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary" onclick="refreshQuotes()">Refresh Quotes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function refreshQuotes() {
            fetchQuotes();
        }

        async function fetchQuotes() {
            try {
                const token = 'swati@123'; // Set your custom token here
                let quotes = [];

                for (let i = 0; i < 5; i++) {
                    const response = await fetch('/api/quotes', {
                        headers: {
                            'Authorization': token
                        }
                    });
                    if (!response.ok) {
                        throw new Error('Unauthorized');
                    }
                    const data = await response.json();
                    console.log('API Response:', data); // Log the API response to the console

                    if (data.hasOwnProperty('quote')) {
                        quotes.push(data.quote);
                    }
                }

                document.getElementById('quotes').innerHTML = `
                <ul class="list-group">
                ${quotes.map(quote => `<li class="list-group-item">${quote}</li>`).join('')}
                </ul>
                `;
            } catch (error) {
                console.error('Error fetching quotes:', error);
            }
        }

        // Initial fetch of quotes
        fetchQuotes();
    </script>
</body>
</html>