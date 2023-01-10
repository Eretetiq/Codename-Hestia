<script type="text/javascript">
function updateProductTitle(title, price) {
  console.log("updateProductTitle called with title: " + title + " and price: " + price);

  // Select the elements with the "product_title" and "product_price" classes
  let productTitleElement = document.querySelector(".product_title input");
  let productPriceElement = document.querySelector(".product_price input");

  // Check if the elements exist
  if (productTitleElement && productPriceElement) {
    console.log("Selected elements:", productTitleElement, productPriceElement);
    // Set the values of the elements to the "title" and "price" arguments
    productTitleElement.value = title;
    productPriceElement.value = price;
  } else {
    console.error("Error: Could not find elements with the product_title and product_price classes.");
  }
}
</script>
