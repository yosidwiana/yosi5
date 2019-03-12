<!DOCTYPE html>
<html>
<head>
<style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body style="background-color:skyblue">
<div>
    

    <form>
    <table style="width:100%" >
    <tr>
            <th> @include('layouts.sidebar') </th>
            <th> @yield('content') </th>
        </tr>
    </table>
</form>
</div>
    
<div class="container">
     <!-- content ini nama yield -->
</div>
</body>
</html>