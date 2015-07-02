<html>
    <head>
        <title>WhatsOn</title>
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css')?>">
        <script src="<?php echo base_url('/assets/js/jquery.min.js')?>"></script>
        
        <script>
        $(document).ready(function() {
            $("#target").autoGrow();
        });
        </script>
    </head>
    <body>
        <h2>Form Status</h2>
        <div style="width: 200px">
        <textarea id="target" rows="10" cols="50"></textarea>
        <button style="float: right">Update</button>
        </div>
    </body>
</html>