function checkout() {
  var rentConfirm = confirm("Are you sure you want to Rent?");
    if(rentConfirm){
        window.alert("Adding to cart!");

        window.location.href="homepage.php";
    }
}