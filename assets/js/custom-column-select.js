<<<<<<< Updated upstream
=======
//Update Title and Price
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
}

 // Remove the "selected" class from all columns
 function updateSelectedClass(event) {
    // Remove the "selected" class from all columns
    let divs = document.querySelectorAll(".product_column");
    divs.forEach(div => div.classList.remove("selected"));
  
    // Add the "selected" class to the column of the selected radio button
    let radioButton = event.target;
    let div = radioButton.closest(".product_column");
    div.classList.add("selected");
  }
  

  let radioButtons = document.querySelectorAll('input[type="radio"]');
  radioButtons.forEach(radioButton => radioButton.addEventListener('click', updateSelectedClass));
=======
} 
function updateSelectedClass(event) {
  // Remove the "selected" class from all columns
  let divs = document.querySelectorAll(".div-box-product");
  divs.forEach(div => {
    div.classList.remove("selected");
    div.classList.add("grey-product");
  });
  
  // Add the "selected" class to the column of the selected radio button
  let radioButton = event.target;
  let div = radioButton.closest(".div-box-product");
  div.classList.remove("grey-product");
  div.classList.add("selected");
}

//Radio Buttons Add listener
let radioButtons = document.querySelectorAll('input[type="radio"]');
radioButtons.forEach(radioButton => radioButton.addEventListener('click', updateSelectedClass));

// Selector to uncheck other radio buttons
$('input[type="radio"]').click(function() {
  if ($(this).prop('checked')) {
    $('input[type="radio"]').not(this).prop('checked', false);
  }
});
>>>>>>> Stashed changes
