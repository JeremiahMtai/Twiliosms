<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send SMS</title>

    <!-- cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div>
            <style>
                label{
                    display: inline-block;
                    width: 100px;
                    padding: 15px;
                }
            </style>
            <center>
                <h2 style="padding-top: 100px; color: skyblue">Sending SMS</h2>

                <form action="{{url('/sendsms')}}" method="get">
                    <div>
                        <label>Receiver Phone :</label>
                        <input type="text" name="phone">
                    </div>

                    <div>
                        <label>Receiver Message :</label>
                        <input type="text" name="message">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Send SMS">
                    </div>
                </form>
            </center>
          </div>
    
</body>
</html>