## v25.2.1 - Acheron
### Added
Created Dashboard Message CSS
### Changed
Moved Dashboard modules into its own folder to future proof
Moved Brand Module to Make it Future Proof
Tweaked the CSS for Zips A Little
Location of sac to dashboard modules
### Fixed

### Bugs

### Removed

## v25.1.11 - Acheron
### Added
Proper README Documentation
$GET Variables Documentation
HVAC Product Selector Documentation
Comma has been added to pricing

### Changed
404 Function
Hold File to Long Form
Comments on all files
Product Selection Verbiage
The use of the 404 Function lives on the main function (includes/display-products) and not in the codicil folder
Fixed Zip Verbiage [You're to You are, apostrophe was causing a bug, will fix.]
Fixed Placeholder Text in CSS
Hi-jacked the form button to push us forward. that way when the correct zip is selected the form can move forward.
Pricing has been changed to reflect more real world numbers.

### Fixed
404 Message Not Displaying from a Function after Modulization
404 Message not showing up properly when certain fields were not filled out

### Bugs
Products Read More
404 Custom Messages
Text Above Conditional
404 CSS on H1

### Removed
404 CSS
404 HTML
Products Read More
Split System Verbiage from Products
Zip Verbiage, Replaced it with a form forward movement action or a kick based on if its available or not.

## v25.1.10 - Acheron
### Added
Added new code to dynamically append product information to the product title based on customer input
Added modularity to the main plugin function to make it future-proof and easy to maintain
Updated variable names in the main function to improve readability
### Changed
The way the main function is called. It is now modulized.
The Git Branch and Pulled to Main
Naming Conventions
Variables
Array Pulls
### Fixed
Simplicity and CSS
Backend Organization of the Site
### Bugs
404 Page no Longer Shows
CSS - On Hover it overlaps with uper content
404 Custom Message needs to be Acheived
### Removed
Unnecessary files and old functions
### Note
The new code dynamically appends product information to the product title based on customer input. Depending on both the Type of Equipment and the Heating source, it will append that information to the title of the product. This improves the accuracy and relevance of the product titles for customers. Additionally, the modularity of the main plugin function makes it easier to maintain and update the plugin in the future.

## v21.0.1 - War

One of the most significant changes is the addition of the Split Products feature to the shortcode portion of the plugin. This new feature allows for more flexibility in displaying product information on your site.
We have also made significant improvements to our video functionality, resulting in faster load times and a smoother user experience. In addition, we have added a callout feature that allows you to change the content of the callout from a dashboard, eliminating the need to change content on multiple pages.
To further streamline the plugin, we have created a new dashboard that allows you to easily change basic options like default brand and callout message. We are also working on adding additional functionality for color options, customer information for branding and phone numbers, tracking information for the form, error pages and 404 import/export settings, pages, updates, and zip codes.
As part of this update, we have also added a manual zip code validation feature that is currently being streamlined to reduce clunkiness and eliminate the need for manual coding. Additionally, we have cleaned up the CSS for our conditional product pull and 404 pages, improving their overall appearance and functionality.
We hope that these updates will enhance your experience with our plugin and make it even easier for you to manage your site. If you have any questions or feedback, please do not hesitate to contact our support team.

## v19.5.2 - Famine

The shortcode function is written in PHP and displays HVAC products based on specified filters. The shortcode can be added to a page or post and it will display a list of HVAC products. The function takes several attributes as inputs such as "type", "brand", "rating", and "tier". These attributes are used to filter the products that will be displayed.

The function first sets default values for the shortcode attributes using the shortcode_atts() function. Then, it sets up the query arguments to retrieve products of the specified type and brand, and with a specified rating and tier (if specified). The products are also filtered based on whether they are marked as "featured". The results of the query are stored in a WP_Query object.

The function then loops through the query results and extracts the product information (title, excerpt, price, and thumbnail) into an array. The products are sorted based on price and displayed in a list with a radio button next to each product. The radio button allows the user to select a product.

If no products are found, a message is displayed saying "These are not the products you are looking for." and a logo.

The code uses the querySelector method to select the elements on the page that have the CSS classes "product_title" and "product_price". The function then checks if the selected elements exist and sets their values to the arguments passed to the function. If the elements are not found, an error message is logged to the console.

The updateProductTitle() function is called when a user clicks on a radio button to select a product. The function takes two arguments: title and price, which represent the title and price of the selected product. The function logs a message to the console indicating that it has been called and the values of its arguments. The function then selects the elements on the page that have the CSS classes "product_title" and "product_price" using the querySelector() method. If these elements are found, the function sets their values to the title and price arguments. If these elements are not found, an error message is logged to the console.

The updateSelectedClass() function is also called when a user clicks on a radio button to select a product. This function removes the "selected" class from all product columns on the page, and then adds the "selected" class to the product column that contains the selected radio button. This allows the selected product to be visually highlighted on the page.

This release also fixes some issues that were present in the previous release, such as broken CSS and broken price pass-through. The variable equations have been re-established, and the buttons have begun to be used.

Overall, this release provides an improved and more flexible solution for displaying HVAC products on a website, with support for various types of products and advanced filtering and sorting options.

## v19 - Famine

This update expands upon the functionality of the previous release by adding support for more types of HVAC products and more options for filtering and sorting. The display_products() function is written in PHP and is used to generate and display HVAC products. The function accepts an array of shortcode attributes as a parameter, which determines what type of products to display. These attributes can be overridden by URL parameters, if present.

In addition to displaying HVAC products, this release also includes a JavaScript function named updateProductTitle(title, price) that is called when a user clicks on a radio button to select a product. The function takes two arguments: title and price, which represent the title and price of the selected product. The function logs a message to the console indicating that it has been called and the values of its arguments. The function then selects the elements on the page that have the CSS classes "product_title" and "product_price" using the querySelector() method. If these elements are found, the function sets their values to the title and price arguments. If these elements are not found, an error message is logged to the console.

Another function named updateSelectedClass(event) is called when a user clicks on a radio button to select a product. This function removes the "selected" class from all product columns on the page, and then adds the "selected" class to the product column that contains the selected radio button. This allows the selected product to be visually highlighted on the page.

## v18 - Conquer

Fix Pricing Issue Re-establish Radio Selector
Link Conditionals and Tree
CSS Consolidation

## v17

Re-Arrange Conditionals
Pull Different Products with 6 different Price
Re-Arrange Conditionals

## v16

CSS Consolidation
Re-Arrange Conditionals
Pull Different Products with 5 different Price
Add Videos

## v15

Pull All Conditions
Re-Arrange Conditionals
Link Conditionals and Tree
Expanded Plugin to Furnaces, Split and Packaged Scripts
Move from 12 Conditionals  to 34 Conditionals

## v14

Push Title and Price
Re-Arrange Conditionals

## v13

Insert Featured Item Client Selection
Add Radio Button for Selection

## v12

Split Contact and Onboarding for (To Allow mid session Email Send)
Create Conditional With Metal and PVC vent material
Create Conditionals with 80 and 90 rating

## v11

Pull Same Product Products with 4 different Price
Re-Arrange Conditionals

## v10

Create a Selectable Block
Create A Title and Price Pull Information
Re-Arrange Conditionals

## v9

Create 404 Redirect
Colorize the CSS on 404 and Pull
CSS Consolidation
Re-Arrange Conditionals

## v8

Re-Arrange Conditionals to include Good, Better, Best, Fantastic Pricing
Pull Pricing Array

## v7

Re-Arrange Conditionals - again
Pull Different Products and arrange by Good, Better, Best, Fantastic Manually

## v6

Select by Venting Material
Recode The snippet to pull in by Venting Material
Re-Arrange Conditionals to include Venting Material
Pull Price Information

## v5

Re-Arrange Conditionals
Separate All Products to Singular Product
Recode The snippet to pull in by Heating Type
Re-Arrange Conditionals to include Heating Type

## v4

Link Conditionals and Tree
Select by Heating Type
Recode The snippet to pull in by Heating Type
Re-Arrange Conditionals to include Heating Type

## v3

Select by Tier
Recode The snippet to pull in by Tier
Re-Arrange Conditionals to include tier

## v2

Recode Snippet
Pull by SEER and AVUE Value
Pull Different Products with single Price

# v1

Create Conditional Tree on Paper to follow
Follow First Conditional Tree
Pull Brand Squares and Filter Array
Initilize Coding of a Snippet
Pull by Product Type