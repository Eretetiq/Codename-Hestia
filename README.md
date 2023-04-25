# BxB Product Selector Plugin

# Last Changelog Entry

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

The HVAC Product Selector Plugin is a WordPress plugin that helps homeowners make informed decisions about HVAC products by pulling information from a products database hand selected of the country's most popular HVAC providers. The information is curated based on answers to questions in a separate form. Based on the answers, the plugin creates an array from our database and presents the top 4 products that match those answers. Our clients can choose what products they want to feature, select pricing, and even the selling points. If they do not want to fill out the selling points, the plugin grabs an excerpt instead.

In addition to product selection, the plugin has a dashboard in the backend with General settings, branding settings, service area selection, and updating options. This allows our clients to easily manage their product offerings and customize their branding.
# Features

Easy product selection for customers
Customizable product offerings
General settings, branding settings, service area selection, and updating options
Automated product selection based on customer input
Target Audience
The target audience for this plugin is homeowners who need help with their HVAC product selection. Our clients are HVAC providers who want to offer their customers an easy way to make informed decisions about their HVAC products.
# Installation

Download the plugin ZIP file from the GitHub repository
Log in to your WordPress website as an administrator
Go to Plugins > Add New > Upload Plugin
Upload the ZIP file and click Install Now
Activate the plugin
# Usage

Install and activate the plugin
Configure the General settings, branding settings, service area selection, and updating options in the plugin dashboard
Embed the product selector form on your website using the shortcode [display-products] where you would like to display the options.
Embed the Service  Area Selector where you would like to filter by zip codes by using the shortcode [sac-check].
Customers can fill out the form and receive product recommendations based on their answers
# Support

If you have any questions or issues with the HVAC Product Selector Plugin, please contact our support team at dev@bxbmedia.com.
# Roadmap

## **Daniel and Nick**

### **Video and Video Thumbnails JPEG**

- [ ]  Daniel and Nick will head this.
- [ ]  Need to know what kind of graphic we want to use (Single Image for all Videos, or a thumbnail for each)
- [ ]  Also I faintly recall Nick saying that one of the later options might need another video. Please check again.

### **Last Step**

- [ ]  Text needs to be added (already provided just needs to be added).
- [ ]  See What else needs to be added on to the final step
- [ ]  (Email confirmation, a message to the [our] client from [their] customer, best time to reach or any final questions before submission)

### **Submission Forms**

- [ ]  Looking over What the Customer and Client sees, nothing has been done to customize this so its set to default settings.

## **Development

Functional Elements:**

- [ ]  311 Message

### **Design Elements:**

- [ ]  404 pages
- [ ]  Confirmation pages
- [ ]  Internal form pages
- [ ]  stabilizing color from plugin to form

### **Manufactured Icon - Lance and Krystian - Design is working on this**

- [ ]  Would like Line Icons instead of JPG Icons.
- [ ]  Preferably with a CSS Call that we can easily call and customize the color for (Like we do with social Icons)

### **Full Install**
- [ ]  Name Split
- [ ]  ACF Settings
- [ ]  404 Messages
- [ ]  Page Creation
- [ ]  Page Links
- [ ]  Color Change
- [ ]  Shortcode Auto Install
- [ ]  Page Creation
- [ ]  Customer Info - logo, phone custom 404 (both)
- [ ]  Add Pages and Link Forms on Installation - Might not be necessary if we create a site per form (which now that its lighter may not be needed. This is a feature that would install all the necessary components without having to do it manually.
- [ ]  Plugin Pipeline (Git Push and Pull)
- [ ]  Clean and Re - push
- [ ]  API and Hosting to other sites
# License
  License:           GPL v2 or later
  License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
