
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="css/modal.css">

<div class="modal fade" id="EpicModal" tabindex="-1" aria-labelledby="EpicModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EpicModalLabel">Edit room details</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="x">&times;</span>
                </button>
            </div>

            <div class="modal-body">


                <form id="roomForm" method="POST">
                    <input type="hidden" id="roomId" name="roomId">
                    <table class="tb">
                        <tr>
                            <td>Room name:</td>
                            <td><input type="text" name="rname" class="form-control" placeholder="Room Name"></td>
                        </tr>
                        <tr>
                            <td>Room price:</td>
                            <td><input type="text" name="rprice" class="form-control" placeholder="Room Price"></td>
                        </tr>
                    </table>
                    <div class="space"></div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn sa editbtn">Save</button>
                </div>
                 </form>
                    <div class="space"></div>



            </div>
        </div>
    </div>
</div>
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('roomForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(form);

        fetch('../Controllers/update-room-script.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Log response from server
            if (data.success) {
                alert("Room updated"); // Show success message
                // Optionally, you can perform additional actions here
                // Close the modal or update the room list, etc.
            } else {
                alert('Error: ' + data.message); // Show error message
            }
        })
        .catch(error => console.error('Error:', error));
    });

    $('.edit_room').click(function() {
        var roomId = this.id; // Extract roomId from the ID attribute of the button
        // Set the value of roomId directly in formData
        form.querySelector('input[name="roomId"]').value = roomId;
    });
});


</script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="css/modal.css">

<div class="modal fade" id="EpicModal2" tabindex="-1" aria-labelledby="EpicModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EpicModalLabel">Edit pension details</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="x">&times;</span>
                </button>
            </div>

            <div class="modal-body">


                <form id="penForm" method="POST">
                    <input type="hidden" id="penId" name="penId">
                    <table class="tb">
                        <tr>
                            <td>Pension name:</td>
                            <td><input type="text" name="pname" class="form-control" placeholder="Pension name"></td>
                        </tr>
                        <tr>
                            <td>Pension price:</td>
                            <td><input type="text" name="pprice" class="form-control" placeholder="Pension Price"></td>
                        </tr>
                    </table>
                    <div class="space"></div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn sa editbtn">Save</button>
                </div>
                 </form>
                    <div class="space"></div>



            </div>
        </div>
    </div>
</div>
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('penForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(form);

        fetch('../Controllers/update-pension-script.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Log response from server
            if (data.success) {
                alert("Pension Updated"); // Show success message
                // Optionally, you can perform additional actions here
                // Close the modal or update the room list, etc.
            } else {
                alert('Error: ' + data.message); // Show error message
            }
        })
        .catch(error => console.error('Error:', error));
    });

    $('.edit_pension').click(function() {
        var penId = this.id; // Extract roomId from the ID attribute of the button
        // Set the value of roomId directly in formData
        form.querySelector('input[name="penId"]').value = penId;
    });
});


</script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="css/modal.css">

<div class="modal fade" id="EpicModal3" tabindex="-1" aria-labelledby="EpicModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EpicModalLabel">Add room details</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="x">&times;</span>
                </button>
            </div>

            <div class="modal-body">


                <form id="addForm" method="POST">
                    <input type="hidden" id="idroom" name="idroom">
                    <table class="tb">
                        <tr>
                            <td>Room name:</td>
                            <td><input type="text" name="rrname" class="form-control" placeholder="Room name"></td>
                        </tr>
                        <tr>
                            <td>Room price:</td>
                            <td><input type="text" name="rrprice" class="form-control" placeholder="Room Price"></td>
                        </tr>
                    </table>
                    <div class="space"></div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn sa editbtn">Save</button>
                </div>
                 </form>
                    <div class="space"></div>



            </div>
        </div>
    </div>
</div>
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('addForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(form);

        fetch('../Controllers/add-room-script.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Log response from server
            if (data.success) {
                alert("Room Added"); // Show success message
                // Optionally, you can perform additional actions here
                // Close the modal or update the room list, etc.
            } else {
                alert('Error: ' + data.message); // Show error message
            }
        })
        .catch(error => console.error('Error:', error));
    });

    $('.add_room').click(function() {
       
    });
});


</script>