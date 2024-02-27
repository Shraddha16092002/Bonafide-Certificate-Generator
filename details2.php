<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <style>
        #complete {
            height: 700px;
            width: 700px;
            border: 2px solid black;
            margin: auto;
            border-radius: 36px;

        }

        legend {
            /* height: 30px; */
            margin: auto;
            text-shadow: 3px 5px 3px #5d575d75;
        }

        fieldset {
            height: 625px;
            width: 520px;
            /* border: 2px solid black; */
            border-radius: 30px;
            margin: auto;
            padding-top: 30px;
            background-color: rgb(20 17 20 / 63%);

        }
        #sname {
            margin-left: 62px;
            width: 359px;
            height: 25px;
        }
        #sroll {
            margin-left: 49px;
            width: 360px;
            margin-top: 20px;
            height: 25px;
        }

        #smob {
            margin-left: 22px;
            width: 359px;
            margin-top: 20px;
            height: 25px;

        }
        

        #syear {
            margin-left: 74px;
            width: 368px;
            height: 23px;
            margin-top: 20px;
            height: 32px;
        }

        #sbranch {
            margin-left: 50px;
            width: 368px;
            height: 23px;
            margin-top: 20px;
            height: 32px;
        }

        #sdob {
            margin-left: 3px;
            width: 362px;
            margin-top: 20px;
            height: 32px;

        }

        label {
            font-size: 20px;
        }

        #btn {


            font-size: 22px;
            border-radius: 31px;
            margin-top: 93px;
            margin-left: 190px;

            height: 42px;
            width: 172px;
            border: 2px solid black;

        }
        body{
            /* background-image: url("https://cutewallpaper.org/23/hd-wallpaper-for-website-background/175844200.jpg"); */
            background-color: #337ab7;
            background-repeat: no-repeat;
            background-size: cover;
        }

        label{
            color: azure;
            
        }
        #btn:hover{
            font-size: 22px;
            border-radius: 31px;
            margin-top: 93px;
            margin-left: 190px;

            height: 42px;
            width: 172px;
            border: 2px solid white;

            background-color: rgb(24, 1, 1);
            color: azure;
        }
    </style>
</head>

<body>
    <form action="up_doc.php" method="POST">
        <div>
            <fieldset>
                <legend>
                    <h1 style="color: azure;">Student Details</h1>
                </legend>
                <label >Name : </label>
                <input type="text" id="sname" name="fname" placeholder="Enter Your Name" required><br /><br>
                <label>Roll no : </label>
                <input type="text" placeholder="Enter Your Roll No" id="sroll" name="froll" required><br /><br>
                <label>Year : </label>
                <select name="year" id="syear" required>
                    <option selected disabled hidden>Select your College Year</option>
                    <option>First year</option>
                    <option>Second year</option>
                    <option>Third year</option>
                </select><br /><br>
                <label>Branch : </label>
                <select name="Branch" id="sbranch"  required>
                    <option selected disabled hidden>Select your Branch</option>
                    <option>Civil Engineering</option>
                    <option>Mechanical Engineering</option>
                    <option>Plastic Engineering</option>
                    <option>Electrical Engineering</option>
                    <option>Information Technology</option>
                    <option>Computer Technology</option>
                    <option>Electronic & Telecommunication</option>
                    <option>Automobile Engineering</option>
                    <option>Interior Design & Decoration</option>
                    <option>Dress Design & Manufacturing </option>
                    <option>Other Department</option>


                </select><br /><br>
                <label>Date of Birth : </label>
                <input  type="date" id="sdob" name="fdob"required><br /><br>

                
                <!-- hidden field -->
                <input id="m1" type="hidden" name="freason"><br/><br> 

                
                <input type="submit" id="btn" name="submit" value="Next">
            </fieldset>
        </div>
    </form>
</body>


</html>
<script> 
        document.getElementById("m1").value = localStorage.getItem("choose"); //getting reason value that is present in localstorage in 'choose' variable and setting in hidden field

</script>
<!-- script for application in notepad file -->