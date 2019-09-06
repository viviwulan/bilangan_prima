<!DOCTYPE HTML>
<html>
<head>
<title>Bilangan Prima</title>
 
<style>
#form_prima{
    background-color:#ccc;
    width:400px;
    margin:0 auto 0 auto;
}
body{
    padding:0px;
    margin:0px;
}
</style>
 
</head>
 
<body>
    <form id="form_prima" action="proses.php" method="POST">
        <table>
            <tr>
                <td colspan="3" align="center">
                    <h1>Deret Bilangan Prima</h1>
                </td>
            </tr>
 
            <tr>            
                <td>Bilangan Akhir</td>
                <td>:</td>
                <td><input name="bilangan" type="text" placeholder="Bilangan Akhir"></td>
            </tr>
 
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="HITUNG">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
