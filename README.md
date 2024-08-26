# Infinite Scroll Demo

This project demonstrates an infinite scroll feature using PHP and jQuery. As the user scrolls down, new content is dynamically loaded and appended to the page.

## Features

- **Infinite Scrolling**: Automatically loads more content as the user reaches the bottom of the page.
- **AJAX Integration**: Uses jQuery to fetch content from the server without refreshing the page.
- **Simple Pagination**: The server serves content in pages, making it scalable for large datasets.
- **Graceful Degradation**: If an error occurs while loading content, the user is notified without crashing the page.

## How to Use

1. Clone or download this repository to your local machine.
2. Start a local PHP server:
   ```bash
   php -S localhost:8000
