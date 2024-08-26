<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Scroll Demo</title>
    <style>
        /* Simple styling for the content */
        .content {
            margin: 20px;
            padding: 20px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }
        #loader {
            text-align: center;
            padding: 20px;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div id="content-container">
        <!-- Initial content will be loaded here -->
    </div>
    <div id="loader">
        <p>Loading more content...</p>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let page = 1;
        let loading = false;

        function loadContent() {
            if (loading) return;
            loading = true;

            $('#loader').show();

            $.ajax({
                url: 'load-content.php',
                method: 'GET',
                data: { page: page },
                success: function(response) {
                    if ($.trim(response) === '') {
                        $(window).off('scroll');
                        $('#loader').text('No more content to load.');
                    } else {
                        $('#content-container').append(response);
                        page++;
                        $('#loader').hide();
                    }
                    loading = false;
                },
                error: function() {
                    loading = false;
                    $('#loader').hide();
                    alert('Failed to load content.');
                }
            });
        }

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                loadContent();
            }
        });

        loadContent();
    </script>
</body>
</html>
