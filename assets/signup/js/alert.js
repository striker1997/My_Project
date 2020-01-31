function val(){
    $(document).ready(function () {

        $('#btnSubmit').click(function () {
            $('#myAlert').show('fade');
        });

        $('#linkClose').click(function () {
            $('#myAlert').hide('fade');
        });

    })};