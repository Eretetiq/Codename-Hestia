# Codename-Hestia
This helps us search through a ton of different HVAC products from different brands. This is really helpful because it can be overwhelming to sift through all those products manually. Instead, we can use this function to filter the products by different types (like furnaces, air conditioners, heat pumps, and splits) and other options like materials (metal or PVC) and gas vs. electric.

The function also sorts the products by price, which is great because it makes it easier to find products that fit within a certain budget. This is really helpful when you consider that there are thousands of different products out there, each with their own set of options and prices.

Now, let's talk about the math. If we have four different types of products (furnaces, air conditioners, heat pumps, and splits) with two variables each (metal or PVC), and an additional two options (gas or electric), and each of these products have six different prices, that's a lot of possibilities to consider! Here's how we can break it down:

There are 4 types of products, which means we have 4 different arrays to work with.
Each array has 2 variables (metal or PVC), so we can use a boolean value (true or false) to represent each option. This means that we have 2^2 (or 4) possible combinations for each array.
Additionally, we have 2 other options (gas or electric), which means we can add another dimension to each array. This gives us a total of 2^3 (or 8) possible combinations for each array.
Finally, we have 6 different prices for each product, so we can assign each product a price value.
When you put it all together, we end up with a lot of different possibilities to consider! However, by using the display_products() function, we can easily filter and sort through all those possibilities to find the product that meets our specific needs.



This is a WordPress shortcode function written in PHP that displays furnace products based on some filters specified in the shortcode attributes.
The display_products() function is written in PHP and is used to generate and display HVAC (Heating, Ventilation, and Air Conditioning) products.

The function accepts an array of shortcode attributes as a parameter, which determines what type of products to display. These attributes can be overridden by URL parameters, if present.

The function then constructs a WordPress query to retrieve up to four posts of the "hvac-product" custom post type that match the query criteria. It sorts the retrieved posts by price, generates HTML output for each post (including the product title, price, excerpt, and thumbnail), and concatenates the generated HTML output into a single string, which is returned as the final output.

The shortcode attributes that can be used with this function are:

Featured: A boolean value (either "yes" or "no") indicating whether to display only featured products. If not specified, the default value is "yes".
Type: The product type to display (e.g., "furnace", "air-conditioner", etc.). If not specified, all types of products are displayed.
Brand: The product manufacturer to display (e.g., "trane", "carrier", etc.). If not specified, the default value is "trane".
Rating: The minimum product rating to display (e.g., "4.5", "5", etc.). If not specified, all products are displayed.
Tier: The price tier to use for products that have tiered pricing (e.g., "1", "2", etc.). If not specified, the default value is an empty string.
Source: The packaged unit type to display (e.g., "gas", "electric", etc.). If not specified, all products are displayed.
Split: The type of split system to display (e.g., "single-stage", "dual-stage", etc.). If not specified, all products are displayed.
The display_products() function is typically used in WordPress environments to display HVAC products on a website.

This is a JavaScript function named updateProductTitle(title, price) that is called when a user clicks on a radio button to select a product. The function takes two arguments: title and price, which represent the title and price of the selected product. The function logs a message to the console indicating that it has been called and the values of its arguments.

The function then selects the elements on the page that have the CSS classes "product_title" and "product_price" using the querySelector() method. If these elements are found, the function sets their values to the title and price arguments. If these elements are not found, an error message is logged to the console.

There is also another function named updateSelectedClass(event) that is called when a user clicks on a radio button to select a product. This function removes the "selected" class from all product columns on the page, and then adds the "selected" class to the product column that contains the selected radio button. This allows the selected product to be visually highlighted on the page.

Finally, there is a listener attached to each radio button on the page that listens for a "click" event, and when triggered, calls the updateSelectedClass(event) function to update the visual display of the selected product.
