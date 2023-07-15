function Updatestatus(e) {
    var response = confirm("Are you sure you want to update this order?");
    if (response == true) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function validateDelete(e) {
    var response = confirm("Are you sure you want to delete this category?");
    if (response == true) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function Deleteproduct(e) {
    var response = confirm("Are you sure you want to delete this product?");
    if (response == true) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}
