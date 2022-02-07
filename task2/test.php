<!DOCTYPE html>
<html></html>
<body>
<h2>Registration Form</h2><br>
<hr>
<form action="Control/results.php" methods="post">
<table>
<tr>
<td>Fist Name : </td>
<td><input type="text" name="fname" ></td>

</tr>

<tr>
    <td>Last Name : </td>
    <td><input type="text" name="lname" ></td>
    
    </tr>
    
    <tr>
        <td>Age : </td>
        <td><input type="text" name="age" ></td>
        
        </tr>
        
Designation : 
<input type="radio" name="d1">Junior Programmer
<input type="radio" name="d11">Senior Programmer
<input type="radio" name="d111">Project Lead<br>
Preferred language : 
<input type="checkbox" name="d12">JAVA
<input type="checkbox" name="d112">PHP
 
<input type="checkbox" name="d1112">C++
<tr>
    <td>E-mail : </td>
    <td><input type="text" name="ename" ></td>
    
    </tr>
    
    <tr>
        <td>Password : </td>
        <td><input type="text" name="pass" ></td>
        
        </tr><br>
Please choose a file<input type="submit"name="b" value="Choose File"> No file chosen
<input type="submit"name="b11" value="Submit">
<input type="submit"name="b111" value="Reset">
</table>
</form>
</body>