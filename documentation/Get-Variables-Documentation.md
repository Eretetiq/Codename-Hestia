# HVAC Product Selector Plugin - GET Variables Documentation
The HVAC Product Selector Plugin uses GET variables to dynamically generate product recommendations based on customer input. Here's a breakdown of the available GET variables and how to use them:

## FOR CONTACT
First: The customer's first name
Last: The customer's last name
Phone: The customer's phone number
Email: The customer's email address
Zip: The customer's zip code
These GET variables are used to capture the customer's contact information and are required for the plugin to generate product recommendations.

## FOR INFORMATION
Site: The type of site where the product will be installed (e.g. Garage / Closet / Basement)
Home: The type of home where the product will be installed (e.g. Single Family)
These GET variables are used to capture information about the installation site and home and are used to generate more relevant product recommendations.

## FOR CONDITIONALS
Tier: The customer's product tier selection (1-5)
Type: The type of equipment selected (Gas Furnace, Air Conditioner, Packaged Unit, Heat Pump)
Rating: The equipment efficiency rating selected (80, 90)
Split: Whether or not the selected equipment is a split system (Yes or not filled in)
FurnaceSource: The heating source selected for Gas Furnaces (Natural Gas, Electric)
PackagedSource: The heating source selected for Packaged Units (Natural Gas, Heat Pump)
SplitSource: The heating source selected for Air Conditioners and Heat Pumps (Natural Gas or Electric)
These GET variables are used to filter the product recommendations based on the customer's selections. The Type variable is required, and the other variables are optional depending on the selected equipment type.

## EXAMPLE URL
Here's an example URL with all the available GET variables:


https://a24hvacestimationsource.local/results/?First=John&Last=Smith&Phone=000-000-0000&Email=zlovlokvi@gmail.com&Zip=98051&Site=Garage%20/%20Closet%20/%20Basement&Home=Single%20Family&Tier=4&Systems=1&Type=Gas-Furnace&FurnaceSource=Natural%20Gas&Rating=80
In this example, the customer's contact information is provided, as well as information about the installation site and home. The Tier, Type, Rating, and FurnaceSource variables are used to filter the product recommendations for a Gas Furnace with a 80 rating and Natural Gas heating source, for a Tier 4 customer. The Systems variable is not used in this example.