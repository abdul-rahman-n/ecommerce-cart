# E-Commerce Cart System

A simple Laravel-based e-commerce cart system that allows users to browse products, add them to the cart, update the cart, and proceed to checkout. The cart is managed using PHP sessions, and Bootstrap is used for UI styling.

## Features

- **Product Listing**: Displays a list of products with Name, Price, and Image.
- **Add to Cart**: Allows users to add products to the cart.
- **View Cart**: Displays all products in the cart, including Name, Quantity, and Total Price.
- **Update Cart**: Users can update the quantity of items or remove items from the cart.
- **Checkout**: Provides a form for user details (Name, Email, Address) and displays the final total before proceeding.
- **Bootstrap UI**: Enhances the user interface with a responsive design.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP >= 7.4
- Composer
- Laravel 8 or higher
- MySQL or any other database system supported by Laravel

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/abdul-rahman-n/ecommerce-cart
   ```
2. **Navigate into the Project Directory**
   ```bash
   cd ecommerce-cart-system
   ```
3. **Install Dependencies**
   ```bash
   composer install
   ```
4. **Set Up Environment Variables**
   ```bash
   cp .env.example .env
   ```
   Configure the database settings and other environment variables in the `.env` file.
5. **Run Migrations to create the necessary database tables**
   ```bash
   php artisan migrate
   ```
6. **Run the Seeder**
   ```bash
   php artisan db:seed --class=ProductSeeder
   ```

## Usage

1. **Run the Laravel Development Server**
   ```bash
   php artisan serve
   ```
   This will start the application at `http://127.0.0.1:8000`.

2. **Access the E-Commerce Cart System**:
   - Navigate to `http://127.0.0.1:8000` to browse available products.
   - Click on "Add to Cart" to add products.
   - Go to `http://127.0.0.1:8000/cart` to view your cart.
   - Adjust quantities or remove items from the cart.
   - Proceed to checkout by filling in the required details.

## Notes

- Images should be stored in the `public/images/` directory.
- Bootstrap is used for styling to ensure a responsive and user-friendly design.