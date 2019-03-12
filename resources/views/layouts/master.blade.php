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
    @include('layouts.sidebar')

    <form>
    <table style="width:100%" >
    <tr>
            <th> SIDEBAR </th>
            <th> CONTENT </th>
        </tr>
    </table>
</form>
</div>
    
<div class="container">
    @yield('content') <!-- content ini nama yield -->
</div>
</body>
</html>