// Hamburger


yii.confirm = function (message) {
    let modal =  $('#DeleteModal');
    var myModal = new bootstrap.Modal(document.getElementById('DeleteModal'), {
        keyboard: false
    })
    myModal.show();
    modal.find('a.btn-warning').attr('href', $(this).attr('href'));
    modal.modal({modalContent: modal.find('.content-text').text(message)});
};




