function deleteUSer(id) {
    var question = confirm('you want to delete the selected contact?');
    if (question === true) {
        window.location.href = '../src/delete.php?id=' + id;
       
    }
}


