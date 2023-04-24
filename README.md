# Changes Made in this Release
One of the most significant changes is the addition of the Split Products feature to the shortcode portion of the plugin. This new feature allows for more flexibility in displaying product information on your site.

We have also made significant improvements to our video functionality, resulting in faster load times and a smoother user experience. In addition, we have added a callout feature that allows you to change the content of the callout from a dashboard, eliminating the need to change content on multiple pages.

To further streamline the plugin, we have created a new dashboard that allows you to easily change basic options like default brand and callout message. We are also working on adding additional functionality for color options, customer information for branding and phone numbers, tracking information for the form, error pages and 404 import/export settings, pages, updates, and zip codes.

As part of this update, we have also added a manual zip code validation feature that is currently being streamlined to reduce clunkiness and eliminate the need for manual coding. Additionally, we have cleaned up the CSS for our conditional product pull and 404 pages, improving their overall appearance and functionality.

We hope that these updates will enhance your experience with our plugin and make it even easier for you to manage your site. If you have any questions or feedback, please do not hesitate to contact our support team.

# Changes Made in the Past Release
This update expands upon the functionality of the previous release by adding support for more types of HVAC products and more options for filtering and sorting. The display_products() function is written in PHP and is used to generate and display HVAC products. The function accepts an array of shortcode attributes as a parameter, which determines what type of products to display. These attributes can be overridden by URL parameters, if present.

In addition to displaying HVAC products, this release also includes a JavaScript function named updateProductTitle(title, price) that is called when a user clicks on a radio button to select a product. The function takes two arguments: title and price, which represent the title and price of the selected product. The function logs a message to the console indicating that it has been called and the values of its arguments. The function then selects the elements on the page that have the CSS classes "product_title" and "product_price" using the querySelector() method. If these elements are found, the function sets their values to the title and price arguments. If these elements are not found, an error message is logged to the console.

Another function named updateSelectedClass(event) is called when a user clicks on a radio button to select a product. This function removes the "selected" class from all product columns on the page, and then adds the "selected" class to the product column that contains the selected radio button. This allows the selected product to be visually highlighted on the page.

# Release
This release provides a WordPress shortcode function written in PHP that displays HVAC (Heating, Ventilation, and Air Conditioning) products based on specified filters. The function can display various types of HVAC products such as furnaces, air conditioners, heat pumps, and splits, and can filter products based on attributes like brand, rating, and tier. The function also sorts the products by price and can be used to display only featured products.

# Technical Details
The shortcode function is written in PHP and displays HVAC products based on specified filters. The shortcode can be added to a page or post and it will display a list of HVAC products. The function takes several attributes as inputs such as "type", "brand", "rating", and "tier". These attributes are used to filter the products that will be displayed.

The function first sets default values for the shortcode attributes using the shortcode_atts() function. Then, it sets up the query arguments to retrieve products of the specified type and brand, and with a specified rating and tier (if specified). The products are also filtered based on whether they are marked as "featured". The results of the query are stored in a WP_Query object.

The function then loops through the query results and extracts the product information (title, excerpt, price, and thumbnail) into an array. The products are sorted based on price and displayed in a list with a radio button next to each product. The radio button allows the user to select a product.

If no products are found, a message is displayed saying "These are not the products you are looking for." and a logo.

The code uses the querySelector method to select the elements on the page that have the CSS classes "product_title" and "product_price". The function then checks if the selected elements exist and sets their values to the arguments passed to the function. If the elements are not found, an error message is logged to the console.

The updateProductTitle() function is called when a user clicks on a radio button to select a product. The function takes two arguments: title and price, which represent the title and price of the selected product. The function logs a message to the console indicating that it has been called and the values of its arguments. The function then selects the elements on the page that have the CSS classes "product_title" and "product_price" using the querySelector() method. If these elements are found, the function sets their values to the title and price arguments. If these elements are not found, an error message is logged to the console.

The updateSelectedClass() function is also called when a user clicks on a radio button to select a product. This function removes the "selected" class from all product columns on the page, and then adds the "selected" class to the product column that contains the selected radio button. This allows the selected product to be visually highlighted on the page.

This release also fixes some issues that were present in the previous release, such as broken CSS and broken price pass-through. The variable equations have been re-established, and the buttons have begun to be used.

Overall, this release provides an improved and more flexible solution for displaying HVAC products on a website, with support for various types of products and advanced filtering and sorting options.

