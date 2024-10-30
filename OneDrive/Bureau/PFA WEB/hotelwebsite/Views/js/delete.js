$(document).ready(function () {

    $('.delete_costumer').click(function(event){
        event.stopPropagation(); // Prevent event propagation

        var id = $(this).attr('id');
        var func = "del_customer";
        if (confirm("Sure you want to delete this Customer?")) {
            $.ajax({
                type: "POST",
                url: "../Controllers/del_customer.php",
                data: {id: id, func:func},
            });
        }
    });

    $('.delete_room').click(function(event){
        event.stopPropagation(); // Prevent event propagation

        var id = $(this).attr('id');
        var func = "del_room";
        if (confirm("Sure you want to delete this room? There is NO undo!")) {
            $.ajax({
                type: "POST",
                url: "../Controllers/del_customer.php",
                data: {id: id,func:func},
            });
        }
    });

    $('.delete_reserv').click(function(event){
        event.stopPropagation(); // Prevent event propagation

        var id = $(this).attr('id');
        var func = "del_reserv";
        if (confirm("Sure you want to delete this reservation? There is NO undo!")) {
            $.ajax({
                type: "POST",
                url: "../Controllers/del_customer.php",
                data: {id: id,func:func},
            });
        }
    });
});
