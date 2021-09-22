<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #cityList {
            position: fixed;
            width: 27.3%;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <header>
            <div class="row justify-content-center bg-warning p-5">
                <div class="col-md-6">
                    <h3>AJAX INSERT CHECK BOX VALUES</h3>
                </div>
            </div>
        </header>

        <div class="row mt-2 py-2 bg-dark text-white justify-content-center">
            <form id="submitForm">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" id="fname" class="form-control">
                </div>

                <div class="form-group">
                    <label>Languages:</label><br>
                    <input type="checkbox" value="PHP" class="lang"> PHP <br>
                    <input type="checkbox" value="Python" class="lang"> Python <br>
                    <input type="checkbox" value="C++" class="lang"> C++ <br>
                    <input type="checkbox" value="C#" class="lang"> C# <br>
                    <input type="checkbox" value="Ruby" class="lang"> Ruby <br>
                    <input type="checkbox" value="Java" class="lang"> Java <br>
                    <input type="checkbox" value="Javascript" class="lang"> Javascript <br>
                    <input type="checkbox" value="Swift" class="lang"> Swift <br>
                </div>
                <input type="submit" value="Submit" id="submit" class="btn btn-primary">
            </form>
    </div>

    </div>



    <script src="js/jquery.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#submitForm").submit(function(e){
                e.preventDefault();
                var fname = $("#fname").val();
                var languages = [];

                $(".lang").each(function(){
                    if($(this).is(":checked")){
                        languages.push($(this).val());
                    }
                })
                languages = languages.toString();
                console.log(languages);

                if(fname != '' && languages.length !== 0){
                    $.ajax({
                        url : "code.php",
                        method : "POST",
                        data : {
                            fname : fname,
                            languages : languages
                        },
                        success : function(data){
                            $("#submitForm").trigger("reset")
                            alert(data);
                        }
                    })
                }else{
                    alert("Please fill all the required fields")
                }
            })
        })
    </script>
</body>

</html>