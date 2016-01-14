$(document).ready(function() {
    "use strict";

    // Grab all the remove buttons and attached a click event listener to them
    $(".btn-delete").click(function() {
        // Pull out the id and name of the item we want to remove
        var postId   = $(this).data("id");
        var postTitle = $(this).data("name");
        
        // Make sure the user actually wanted to delete that park
        if (confirm("Are you sure you want to delete " + postTitle + "?")) {
            // Put that ID into our hidden form field
            $("#delete-id").val(postId);
            
            // Submit the form
            $("#delete-form").submit();
        } else {
        	event.preventDefault();
        }
    });
});
