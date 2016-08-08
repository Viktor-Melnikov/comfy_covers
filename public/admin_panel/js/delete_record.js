/**
 * Created by Viktor on 22.10.15.
 */

$(function() {

    var body = $('body');

    body
    /**
     * Удаление записей из БД с подтверждением
     */
        .on('click', '.delete_item', function (e) {
            e.preventDefault();

            var $this = $(this);

            swal(
                {
                    title: "Вы действительно хотите удалить запись?",
                    text: "Удаление приведет к потере данных.",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonText: "Да, удалить.",
                    cancelButtonText: "Отмена",
                    closeOnConfirm: false,
                    closeOnCancel: false,
                    showLoaderOnConfirm: true
                },
                function (isConfirm)
                {
                    if (isConfirm)
                    {
                        $.ajax({
                            type: "DELETE",
                            url: $this.attr('href'),
                            dataType : 'json'
                        }).done(function(data)
                        {
                            if (data.status == 'success')
                            {
                                swal({
                                    title: "Запись удалена!",
                                    text: data.result.message,
                                    type : 'success'
                                }, function() {
                                    window.location.href = $this.data('reload');
                                });
                            }
                            else
                            {
                                swal("Ошибка", data.result.message, "error");
                            }

                        }).error(function(data)
                        {
                            swal("Ошибка", "Изменения не были внесены. Запись не удалена.", "error");
                        });
                    }
                    else
                    {
                        swal("Удаление отменено", "Изменения не были внесены. Запись не удалена.", "error");
                    }
                }
            );
        });

});