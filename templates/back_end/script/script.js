
$(document).ready(function(){
    if ($("#save_success").val() == 'success') {
        swal(
            {
                title: "Success!",
                text: "Category has been added successfully!",
                type: "success",
                timer: 2000
            }
        );
    }

    if ($("#isDelete").val() == 'success') {
        swal(
            {
                title: "Success!",
                text: "Category has been deleted successfully!",
                type: "success",
                timer: 2000
            }
        );
    }

    if ($("#update_success").val() == 'success') {
        swal(
            {
                title: "Success!",
                text: "Category has been updated successfully!",
                type: "success",
                timer: 2000
            }
        );
    }

    if ($("#save_success").val() == 'success') {
        swal(
            {
                title: "Success!",
                text: "Product has been added successfully!",
                type: "success",
                timer: 2000
            }
        );
    }

    if ($("#update_product_success").val() == 'success') {
        swal(
            {
                title: "Success!",
                text: "Product has been updated successfully!",
                type: "success",
                timer: 2000
            }
        );
    }

});

function deleteCategory(id){
    var isDelete = confirm("Do you want to delete this Category?");
    if (isDelete)
        window.location = "delete_category/"+id;
    else
        return false;
}

function deleteProduct(id){
    var isDelete = confirm("Do you want to delete this Product?");
    if (isDelete)
        window.location = "delete_product/"+id;
    else
        return false;
}