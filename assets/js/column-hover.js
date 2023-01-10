<script type="text/javascript">
 // Remove the "selected" class from all columns
  let div = document.querySelectorAll(".product_column");
  div.forEach(div => div.classList.remove("selected"));

  // Add the "selected" class to the column of the selected radio button
  let radioButton = event.target;
  let div = radioButton.closest(".product_column");
  div.classList.add("selected");
 </script>