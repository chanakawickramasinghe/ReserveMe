function myFunctionCustomer() {
    var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // for column one
         td1 = tr[i].getElementsByTagName("td")[2]; // for column two
         td2 = tr[i].getElementsByTagName("td")[1]; // for column three
    /* ADD columns here that you want you to filter to be used on */
        if (td) {
          if ( (td.innerHTML.toUpperCase().indexOf(filter) > -1) || (td1.innerHTML.toUpperCase().indexOf(filter) > -1) || (td2.innerHTML.toUpperCase().indexOf(filter) > -1) )  {            
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    } 

    function suspendFunction() {
      var txt;
      var r = confirm("Are you sure want to suspend this Account?");
      if (r == true) {
        // txt = "You pressed OK!";
        window.location = "admin-view-customer.php";
        alert("Account Suspended");
      } else {
        // txt = "You pressed Cancel!";
      }
      // document.getElementById("demo").innerHTML = txt;
    }



               