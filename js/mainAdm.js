$('#delete-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('adms');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Gerente ' + id);
    modal.find('#confirm').attr('href', 'deleteAdm.php?id=' + id);
  })