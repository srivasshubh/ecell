<?php  
require("checking.php");
if(check_session()){
?>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin|Satisfy|Pacifico" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Nunito|Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corben|Karla|Lato|Modern+Antiqua|Muli|Source+Sans+Pro" rel="stylesheet">
    <style>
        body {
            background-color: lightgrey;
        }

        .header {
            color: #fff;
            top: 0px;
            position: absolute;
            width: 100vw;
            z-index: 3;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 8px 20px;
            box-sizing: border-box;

        }

        .menu_items {
            padding: 5px 20px;
            margin: auto;
        }

        .menu_items a {
            font-family: Fira Sans;
            text-decoration: none;
            color: azure;
            display: inline-block;
            padding: 5px;
            font-size: 20px;
            background: rgba(250, 250, 250, 0.1);
            letter-spacing: 2px;
            border: solid 1px transparent;
        }

        .menu_items a:hover {
            border-color: white;
        }

        .top_div {
            top: 0px;
            left: 0px;
            width: 100%;
            height: 12%;
            background-color: #214168;
            border-radius: 8px;
            z-index: 99;
            position: fixed;
            margin-left: 0px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            min-width: 331px;
        }

        .event_form {
            box-sizing: border-box;
            padding: 50px;
            text-align: center;
            margin: 50px 0px;
            background: rgba(40, 60, 73, 1.00);
            font-family: karla;
            font-size: 18px;
            margin-left: 50px;
        }

        .event_form span {
            font-family: karla;
            letter-spacing: 2px;
            color: #fff;
            display: inline-block;
        }

        .form input[type='text'],
        .form input[type='file'],
        .form input[type='date'],
        textarea {
            background: white;
            height: 35px;
            width: 90%;
            margin: 18px auto;
            border: none;
            padding: 5px 10px;
            color: black;
            margin-left: 50px;
            font-size: 18px;
            box-sizing: border-box;
            max-width: 96vw;
            border-radius: 15px;
        }

        textarea {
            height: auto;
            font-family: karla;
            resize: none;
            font-size: 20px;
        }

        .form input[type='submit'] {
            cursor: pointer;
            background-color: darkslateblue;
            color: #fff;
            border-radius: 15px;
            padding: 6px 35px;
            font-family: Corben;
            font-size: 18px;
            margin: auto;
            display: flex;
        }

    </style>
</head>

<body>
    <header class="header">
        <div class="top_div">
            <div class="menu_items"><a href="event_categories.php">Group</a></div>
            <div class="menu_items"><a href="add_member.php">Add Member</a></div>
            <div class="menu_items"><a href="event_upload.php">Add Event</a></div>
            <div class="menu_items"><a href="Articles_Upload.php">Add Interview</a></div>
            <div class="menu_items"><a href="freshers_talk_admin.php">Freshers Talk</a></div>
            <div class="menu_items"><a href="display.php">Subscribers</a></div>
            <div class="menu_items"><a href="#">Home</a></div>
        </div>
    </header>
    <h1 style="font-family: muli; font-size: 30px; margin-top: 100px; text-align: center;"> Add the event in the respective group</h1>
    <div class="form">
        <div class="form">
            <form id="event_form" action="article_php.php" method="post" enctype="multipart/form-data">
                <input type="text" id="image" placeholder="Article Poster" name="image" onfocus="this.type='file'" required />
                <br/>
                <input type="text" placeholder="Name of Entrepreneur" name="name" required />
                <br>
                <input type="date" placeholder="Date" name="date" required />
                <br>
                <input type="text" placeholder="College and Batch" name="college" required />
                <br/>
                <input type="text" id="image" placeholder="Publisher Image" name="ent_image" onfocus="this.type='file'" required />
                <br/>
                <input type="text" placeholder="Designation" name="designation" required />
                <br/>
                <input type="text" placeholder="Publish By" name="publisher" required />
                <br/>
                <input type="submit" name="submit" value="Submit" />
            </form>
        </div>
    </div>
</body>

</html>
<?php } ?>
