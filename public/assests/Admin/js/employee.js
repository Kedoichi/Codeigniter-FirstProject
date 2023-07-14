$(document).ready(function () {
  $(".edit").click(function () {
    var employeeName = $(this).parent().parent().parent().find(".employeeName");
    var currentName = employeeName.text();

    // Prompt the user for a new name
    var newName = prompt("Please enter a new name", currentName);
    if (newName !== null && newName !== "") {
      // Set the new name
      employeeName.text(newName);
    }
  });

  $(".delete").click(function () {
    var confirmation = confirm(
      "Are you sure you want to delete this employee?"
    );
    if (confirmation) {
      let employeeId = $(this).data('id');
      
      $.ajax({
        url: "/admin/employee/delete", // The endpoint on your server that handles delete requests
        type: "POST",
        data: { id: employeeId }
      });
    }
  });

  $(".add").click(function () {
    window.location.href = "https://quocchic.net/admin/employee/add";
  });
});
