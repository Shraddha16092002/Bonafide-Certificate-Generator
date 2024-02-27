<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reason</title>
    <style>
        body {
            /* background-image: url("https://images.pexels.com/photos/1939485/pexels-photo-1939485.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"); */
            
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
            background-color:#d7d7d7;
        }
        #img1 {
            height: 200px;
            width: 200px;
            border: 1px solid black;
            margin: 14px;
            border-radius: 15px
        }
        #img2 {
            height: 200px;
            width: 200px;
            border: 1px solid black;
            margin: 14px;
            border-radius: 15px
        }
        #img3 {
            height: 200px;
            width: 200px;
            border: 1px solid black;
            margin: 14px;
            border-radius: 15px
        }
        #overall {
            height: 700px;
            width: 700px;
            /* border: 2px solid black; */
            margin: auto;
            border-radius: 36px;
            background-color: #528bbd;
        }
        #title1 {
            padding-top: 40px;
            padding-left: 156px;
            text-shadow: 3px 5px 3px #5d575d75;
            color: white;
        }
        #btn1,
        #btn2,
        #btn3 {
            margin: 14px;
            width: 200px;
            height: 45px;
            border: 2px solid black;
            border-radius: 23px;
            font-size: 20px;
        }
        h3 {
            margin: 14px;
            padding-top: 34px;
            padding-left: 295px;
            color: white;
        }
        #other_t1 {
            height: 32px;
            width: 529px;
            margin-left: 75px;
            border-radius: 21px;
        }
        #next_btn {
            height: 42px;
            width: 172px;
            border: 2px solid black;
            border-radius: 30px;
            /* padding: 54px; */
            margin-left: 256px;
            margin-top: 71px;
            font-size: 20px;
        }

        button:hover {
            margin: 14px;
            width: 200px;
            height: 45px;
            border: 2px solid black;
            border-radius: 23px;
            font-size: 20px;
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <!-- form -->
    <form action="details2.php">
        <div id="overall">
            <h2 id="title1">Why you require Bonafide Certificate ?</h2>
            <img id="img1"
                src="data:image/jpeg;base64,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">
            <img id="img3"
                src="data:image/jpeg;base64,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">
            <img id="img2"
                src="https://pr0.nicelocal.in/GUGd7ICtgE9i16EsSRZ2Xw/430x440,q85/4px-BW84_n2aGZJPv2Q_uysuQlRKXWAtkzmuAfqDQITUrwUCDSAWUMsYbaLr-ddSgMLr27xeKQmAtW9CBnBQ2WY42dT84A_4mcayKm2Q8LfBQ2WK4VRfEkkTUsejZf35R2O4b0WfnjpQo08NqJWpITVWrOMiKcfAhRzT71olD8iXOrtKm7LkfwMZQP_VLFbe2uch95oCQ40zI3d416l80JKV12NSHN3oCSKlOPLW3Tg">

            <br />
            <button id="btn1" onclick="again('Scholarship')">Scholarship</button>
            <button id="btn2" onclick="again('Bus Pass')">Bus Pass</button>
            <button id="btn3" onclick="again('Caste Validity')">Caste Validity</button>
            <h3>Other</h3>
            <input type="text" id="other_t1"><br />
            <button onclick="for_other()" id="next_btn">Next</button>
        </div>
    </form>

</body>
<script type="text/javascript">
    function for_other() {
        var once = document.getElementById("other_t1").value;
        again(once);

    }
    function again(trial) {

        localStorage.setItem("choose", trial); //storing reason in 'choose' variable in localstorage
    }
</script>

</html>