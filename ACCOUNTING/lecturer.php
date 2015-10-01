<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-weight: bold;
}
.style3 {color: #FFFFFF}
.style5 {font-size: medium; }
.style7 {font-size: x-large; font-weight: bold; color: #FF6699; }
-->
</style>
</head>

<body bgcolor="#9933CC">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="755" border="0" align="center">
  <tr>
    <td><div align="center" class="style1">
      <p><font color="#FFFFFF">SLAU ACCOUNTING MANAGEMENT SYSTEM</font></p>
      <table width="578" border="1" align="center">
        <tr>
          <th width="63" scope="col"><a href = "students.php" class="style5">Students</a></th>
          <th width="68" scope="col"><a href = "lecture.php" class="style5">Lecturer</a></th>
          <th width="69" scope="col"><a href = "aboutus.php" class="style5">About us</a></th>
          <th width="123" scope="col"><a href = "contact.php" class="style5">Contact</a></th>
        </tr>
      </table>
    
    </div></td>
  </tr>
</table>
<table width="915" height="404" border="0" align="center">
    
    <tr>
      <td width="305"><table width="234" height="269" border="1">
        <tr>
          <th width="224" height="31" scope="row"><div align="left"><a href="students.php">STUDENTS ENTRY </a></div></th>
        </tr>
        <tr>
          <th height="31" scope="row"><div align="left"><a href="Lecture.php">LECTURERS ENTRY</a> </div></th>
        </tr>
        
       
        <tr>
          <th height="35" scope="row"><div align="left"><a href="aboutus.php">ABOUT US</a> </div></th>
        </tr>
        <tr>
          <th height="26" scope="row"><div align="left"><a href="contact.php">CONTACT</a></div></th>
        </tr>
      </table></td>
      <td width="600"><table width="492" height="206" border="1" align="center">
        <tr>
          <th height="29" scope="col"><div align="left"><span class="style7">Lecturers Entry </span>
               <a href="index.php"><img src="images/back36.png" /></a>
              <table width="222" border="0" align="right">
              <tr>
                <th width="119" scope="row">view Lecturers </th>
                <td width="78">
				<form id="form14" name="form14" method="post" action="lecture_process.php">
                  <label>
                    <select name="select5">
                      <option value="Mr. Lubega">Mr. Lubega</option>
                      <option value="Mr. Kevin">Mr. Kevin</option>
                      <option value="Mr. Nkanji">Mr. Nkanji</option>
                    </select>
                    </label>
                               </td>
              </tr>
            </table>
          </div></th>
        </tr>
        <tr>
          <td height="108"><table width="483" height="68" border="0">
            <tr>
              <th width="273" scope="col"><table width="432" height="205" border="0">
                <tr>
                  <th width="113" scope="row">First Name </th>
                  <td width="144">
                    <label for="textfield"></label>
                    <input type="text" name="fname" id="textfield" />
                                    </td>
                </tr>
                <tr>
                  <th scope="row">Second Name </th>
                  <td>
                    <label for="label"></label>
                    <input type="text" name="sname" id="label" />
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Gender</th>
                  <td><form id="form3" name="form3" method="post" action="lecture_process.php">
                    <input name="radiobutton" type="radio" value="male" id="radiobutton" />
                    <label for="radiobutton">male</label>
                    <input name="radiobutton" type="radio" value="female" id="radio" />
                    <label for="radio">female</label>
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Date of Birth </th>
                  <td><form id="form4" name="form4" method="post" action="lecture_process.php">
                    <label for="select"></label>
                    <select name="dob" size="1" id="select">
                      <option value="31">31</option>
                      <option value="30">30</option>
                    </select>
                    <label for="label2"></label>
                    <select name="select2" id="label2">
                      <option value="Dec">Dec</option>
                      <option value="Novr">Nov</option>
                      <option value="Oct">Oct</option>
                                                            </select>
                  
                    <label for="label3"></label>
                    <select name="select3" id="label3">
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                                        </select>
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Place of birth </th>
                  <td><form id="form5" name="form5" method="post" action="lecture_process.php">
                    <label for="label4"></label>
                    <input type="text" name="pob" id="label4" />
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Address</th>
                  <td><form id="form6" name="form6" method="post" action="lecture_process.php">
                    <label for="label5"></label>
                    <input type="text" name="address" id="label5" />
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">&nbsp;</th>
                  <td>&nbsp;</td>
                </tr>
              </table></th>
              <th width="200" scope="col"><table width="200" border="0">
                <tr>
                  <th scope="row">Degree</th>
                  <td><form id="form7" name="form7" method="post" action="lecture_process.php">
                    <label for="label6"></label>
                    <select name="degree" id="label6">
                      <option value="Business Administration">Business Administration</option>
                      <option value="Public Service">Public Service</option>
                      <option value="ICT">ICT</option>
                    </select>
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Salary</th>
                  <td><form id="form8" name="form8" method="post" action="lecture_process.php">
                    <label for="label7"></label>
                    <input type="text" name="salary" id="label7" />
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Married</th>
                  <td><form id="form9" name="form9" method="post" action="lecture_process.php">
                    <input name="radiobutton" type="radio" value="radiobutton" id="radio2" />
                    <label for="radio2">YES</label>
                    <input name="radiobutton" type="radio" value="radiobutton" id="radio3" />
                    <label for="radio3">NO</label>
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Phone</th>
                  <td><form id="form10" name="form10" method="post" action="lecture_process.php">
                    <label for="label8"></label>
                    <input type="text" name="phone" id="label8" />
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Email</th>
                  <td><form id="form11" name="form11" method="post" action="lecture_process.php">
                    <label for="label9"></label>
                    <input type="text" name="email" id="label9" />
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">Note</th>
                  <td><form id="form12" name="form12" method="post" action="lecture_process.php">
                    <label for="textarea"></label>
                    <textarea name="note" id="textarea"></textarea>
                  </form>                  </td>
                </tr>
                <tr>
                  <th scope="row">&nbsp;</th>
                  <td><form id="form13" name="form13" method="post" action="lecture_process.php">
                    <label for="Submit"></label>
                    <input type="submit" name="Submit" value="Register" id="Submit" />
                    <label>
                    <input type="submit" name="Submit2" value="Cancel" />
                    </label>
                  </form>                  </td>
                </tr>
              </table></th>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style3">St Lawrence University </div></td>
    </tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</body>
</html>
