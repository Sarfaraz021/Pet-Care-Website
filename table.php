<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&family=Noto+Sans:ital,wght@1,100&family=Poppins:wght@100;300&family=Roboto&family=Staatliches&family=Ubuntu:ital,wght@0,300;0,400;0,500;1,500&display=swap');
        table{
            font-family: 'Poppins', sans-serif;
            border: 2px solid #FFF;
            text-align: center;
            margin: auto;
            width: 800px;
            margin-top: 25px;
            background-color: #2b2d42;
            color: #FFF;
        }

        @media screen and (max-width:800px){
            table{    
            width: 500px;
            }
        }
        td,th{  
            padding: 25px 0;
            width: 100px;
        }
        th{
            font-size: 30px;
        }
        td{
            font-size: 25px;
        }
        td:hover{
            
            background-color:  #8d99ae !important;
            transition-duration: 0.75s;
        }
        td>a{
            text-decoration: none !important;
            color: #FFF;

        }

         
    </style>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>CHOOSE YOUR CITY</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="list.php?CityName=%Hyderabad%" ><span value="Hyderabad">Hyderabad</span></a></td>
            </tr>
            
            <tr>
                <td><a href="list.php?CityName=%Karachi%">Karachi</a></td>
            </tr>
            
            <tr>
                <td><a href="list.php?CityName=%Sukkur%">Sukkur</a></td>
            </tr>
            
            <tr>
                <td><a href="list.php?CityName=%Larkana%">Larkana</a></td>
            </tr>
            
            <tr>
                <td><a href="list.php?CityName=%Umerkot%">Umerkot</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>