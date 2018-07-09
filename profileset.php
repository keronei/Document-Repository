<html lang="en">
<head>
    <title>Change image on select new image from file input</title>
    <script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>

<input type="file" name="file" id="profile-img">


<img src="profile" id="profile-img-tag" width="200px" />

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>

</body>
</html>