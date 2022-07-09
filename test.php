<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>

<body>
    <?php
    $row = 5;
    ?>
    <button type="button" class="btn btn-success btn-sm" id="<?php echo $row; ?>" onclick="savestatus(this)">Activate</button>
    <script>
        function savestatus(ele) {
            var id = ele.id;
            $.ajax({
                type: "POST",
                url: "<?php 'http://localhost/testGuzzle/jsOnChange2.php'; ?>",
                data: {
                    test: id,
                },
                success: function(data) {
                    $("#" + id).html("Deactivate");
                }
            });
        }
    </script>
</body>

</html>