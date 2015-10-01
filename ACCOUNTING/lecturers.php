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
.style2 {
	font-size: large;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="#9933CC">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="720" border="0" align="center">
  <tr>
    <td><div align="center" class="style1">
      <p><font color="#FFFFFF">SLAU ACCOUNT MANAGEMENT SYSTEM</font></p>
      <p>&nbsp; </p>
    </div></td>
  </tr>
</table>
<table width="915" height="404" border="1" align="center">
    <tr>
      <td width="185">&nbsp;</td>
      <td width="500"><table width="500" border="0" align="center">
        <tr>
          <th width="63" scope="col"><a href = "students.php">Students</a></th>
          |
          <th width="68" scope="col"><a href = "teachers.php">Teachers</a></th>
          <th width="66" scope="col"><a href = "faculties.php">Faculties</a></th>
          <th width="43" scope="col"><a href = "users.php">Users</a></th>
          <th width="49" scope="col"><a href = "article.php">Article</a></th>
          <th width="69" scope="col"><a href = "aboutus.php">About us</a></th>
          <th width="123" scope="col"><a href = "contact.php">Contact</a></th>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><table width="197" border="1">
        <tr>
          <th width="187" height="31" scope="row"><div align="left"><a href="students.php">STUDENTS ENTRY </a></div></th>
        </tr>
        <tr>
          <th height="31" scope="row"><div align="left">TEACHERS ENTRY </div></th>
        </tr>
        <tr>
          <th height="30" scope="row"><div align="left">FACULTIES ENTRY </div></th>
        </tr>
        <tr>
          <th height="34" scope="row"><div align="left">USERS ENTRY </div></th>
        </tr>
        <tr>
          <th height="31" scope="row"><div align="left">ARTICLE ENTRY </div></th>
        </tr>
        <tr>
          <th height="35" scope="row"><div align="left">ABOUT US </div></th>
        </tr>
        <tr>
          <th height="26" scope="row"><div align="left">CONTACT</div></th>
        </tr>
      </table></td>
      <td><table width="492" height="206" border="1" align="center">
        <tr>
          <th height="29" scope="col"><span class="style2">Lectureres Entry </span></th>
        </tr>
        <tr>
          <td height="108"><table width="483" height="68" border="1">
            <tr>
              <th scope="col"><table width="374" border="0">
                <tr>
                  <th width="107" scope="col"><div align="left">First Name </div></th>
                  <th width="251" scope="col"><div align="left">
                    <form id="form2" name="form2" method="post" action="lecturer.php">
                      <label></label>
                    </form>
                    </div></th>
                </tr>
                <tr>
                  <td>Last Name </td>
                  <td><form id="form3" name="form3" method="post" action="">
                    <label>
                      <input type="text" name="textfield2" />
                      </label>
                  </form>
                  </td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td><form id="form4" name="form4" method="post" action="">
                    <label>
                      <input name="radiobutton" type="radio" value="radiobutton" />
                      Male</label>
                    <label>
                    <input name="radiobutton" type="radio" value="radiobutton" />
                    Female</label>
                  </form>
                  </td>
                </tr>
                <tr>
                  <td>Date of birth </td>
                  <td><form id="form1" name="form1" method="post" action="">
                    <label>
                      <select name="select" size="1">
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                      </select>
                      </label>
                    <select name="select3">
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                      <select name="select2" size="1">
                      <option value="Jan">Jan</option>
                      <option value="Feb">Feb</option>
                          </select>
                  </form>                  </td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td><form id="form5" name="form5" method="post" action="">
                    <label>
                      <input type="text" name="textfield3" />
                      </label>
                  </form>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                
              </table></th>
              <th scope="col"><table width="200" border="1">
                <tr>
                  <th scope="col"><div align="left">Degree</div></th>
                  <th scope="col"><div align="left">
                    <form id="form11" name="form11" method="post" action="">
                      <label for="textfield"></label>
                      <input type="text" name="textfield" id="textfield" />
                    </form>
                    </div></th>
                </tr>
                <tr>
                  <td>Salary</td>
                  <td><form id="form10" name="form10" method="post" action="">
                    <label>
                      <input type="text" name="textfield6" />
                      </label>
                  </form>
                  </td>
                </tr>
                <tr>
                  <td>Married </td>
                  <td><form id="form9" name="form9" method="post" action="">
                    <label>
                    <input name="radiobutton" type="radio" value="radiobutton" />
                    Yes</label>
                                    <label>
                                    <input name="radiobutton" type="radio" value="radiobutton" />
                                    No</label>
                  </form>
                  </td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td><form id="form8" name="form8" method="post" action="">
                    <label>
                      <input type="text" name="textfield5" />
                      </label>
                  </form>
                  </td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><form id="form7" name="form7" method="post" action="">
                    <label>
                      <input type="text" name="textfield4" />
                      </label>
                  </form>
                  </td>
                </tr>
                <tr>
                  <td>Note</td>
                  <td><form id="form6" name="form6" method="post" action="">
                    <label>
                    <textarea name="textarea"></textarea>
                    </label>
                                    </form>
                  </td>
                </tr>
              </table></th>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">St Lawrence University </div></td>
    </tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</body>
</html>
