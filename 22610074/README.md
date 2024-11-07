# Scoop-Dreams-Website
Custom-built e-commerce website for Scoop Dreams Ice Cream Shop using PHP, MySQL, JavaScript, HTML, and CSS. Features a dynamic product catalog, search functionality, cart management, and a secure checkout process. Designed for performance and enhanced user experience without the overhead of a CMS.
# Scoop Dreams Ice Cream Shop Website

## Project Overview
The Scoop Dreams website is a custom-built e-commerce platform developed specifically for an ice cream shop. This project uses PHP, MySQL, JavaScript, HTML, and CSS to deliver a high-performance website without relying on a conventional Content Management System (CMS).

### Key Features
- **Dynamic Product Catalogue**: Allows users to browse ice cream flavors categorized by type (Classic, Seasonal, Sorbet, Low Fat).
- **Advanced Search Functionality**: Users can search for flavors based on specific criteria.
- **Cart and Checkout System**: Supports adding items to a cart, adjusting quantities, and a secure checkout process.

## Motivation
The decision to build a custom solution was driven by the need for:
- **Customization**: Tailoring functionality and UX to fit the unique needs of an ice cream shop.
- **Performance**: Operating smoothly without the bloat of general-purpose CMS.
- **Learning and Control**: Enhancing skills in web development and maintaining control over the system architecture.

## Challenges and Solutions
- **Database Integration**: Used prepared statements in PHP to enhance security and performance.
- **Search Functionality**: Improved SQL queries and PHP filtering to refine search accuracy and speed.
- **Responsive Design**: Adopted a mobile-first approach using CSS Flexbox and Grid to ensure the site is user-friendly on all devices.

## Setup and Running the Project

### Environment Setup
1. Ensure PHP and MySQL are installed — XAMPP/WAMP/MAMP recommended.
2. Start Apache and MySQL services via your server control panel.

### Database Configuration
1. Open phpMyAdmin or similar MySQL management tool.
2. Create a new database named `scoop_dreams`.
3. Import the SQL file provided in the repository to set up tables and initial data.

### Project Files
1. Clone this repository and place the project files in your server's document root (e.g., `htdocs` in XAMPP).
2. Edit the `db.php` file to match your database credentials.

### Running the Project
- Navigate to `http://localhost/scoop_dreams/` in your web browser to start exploring the Scoop Dreams website.

## Contributing
Feel free to fork this project and contribute by submitting a pull request. We welcome enhancements and bug fixes.

## License
This project is open-sourced under the MIT license.
