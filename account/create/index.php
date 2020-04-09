<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="57x57" href="../apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
        <link rel="manifest" href="../manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="shortcut icon" href="../ms-icon-70x70.png" type="image/png">
        <link rel="icon" href="../ms-icon-70x70.png" type="image/png">
        <meta property="og:title" content="Kixtoo" />
        <meta property="og:type" content="website" />
        <meta property="fb:app_id" content="742264052568626" />
        <meta property="og:url" content="https://Kixtoo.com/" />
        <meta property="og:description" content="Kixtoo is an interests-based network containing news, information and resources from highly reputable sources. Our platform allows you to organize websites and blogs into your own personalized Lists." />
        <meta property="og:image" content="https://Kixtoo.com/kixtoocover.png" />
        <meta name="description" content="Kixtoo is an interests-based network containing news, information and resources from highly reputable sources. Our platform allows you to organize websites and blogs into your own personalized Lists.">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <!-- Fontawesome CSS -->
        <script src="https://kit.fontawesome.com/d1a747dde9.js" crossorigin="anonymous"></script>
        <!-- Pace CSS -->
        <link rel="stylesheet" href="../../css/pace.css" />
        <link rel="stylesheet" href="../../css/animate.css" />

        <title>Kixtoo</title>
        <style>
            a{color:#ff8000;}
            a:hover{color:#000000;text-decoration:none;}
            html, body{width:100%;height:100%;font-size:14px;}
        </style>
    </head>
    <body class="animated fadeIn">
        <table style="position:absolute;top;0px;left:0px;width:100%;height:100%;margin-bottom:100px;">
            <tr>
                <td style="padding:5px;" valign="middle" align="center">
                    <div style="width:360px;height:auto;background:#f2f2f2;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
                    <h3 style="font-weight:100;color:#ff5400;text-align:center;margin-bottom:25px;">Create Kixtoo Account</h3>
                        <form action="do.register.php" method="post" style="padding:10px;padding-bottom:100px;">
                            <p>
                                Email Address<br/>
                            <input type="email" name="email" id="email" class="form-control" required/>
                            </p>
                            <p>
                                Password<br/>
                            <input type="password" name="password" id="password" class="form-control" required/>
                            </p>
                            <p>
                                Location<br/>
                            <input type="text" name="userLocation" id="userLocation" class="form-control" required/>
                            </p>
                            <p>
                                First Name<br/>
                            <input type="text" name="userFirstName" id="userFirstName" class="form-control" required/>
                            </p>
                            <p>
                                Last Name<br/>
                            <input type="text" name="userLastName" id="userLastName" class="form-control" required/>
                            </p>
                            <p>
                            Gender<br/>
                                <select name="userGender" id="userGender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </p>
                            Date of Birth<br/>
                            <table width="100%">
                                <tr>
                                    <td style="padding:5px;">Month</td>
                                    <td style="padding:5px;">Day</td>
                                    <td style="padding:5px;">Year</td>
                                </tr>
                                <tr>
                                    <td style="padding:5px;">
                                        <select name="userDOBmonth" id="userDOBmonth" class="form-control">
                                            <option value="1">Jan</option>
                                            <option value="2">Feb</option>
                                            <option value="3">Mar</option>
                                            <option value="4">Apr</option>
                                            <option value="5">May</option>
                                            <option value="6">Jun</option>
                                            <option value="7">Jul</option>
                                            <option value="8">Aug</option>
                                            <option value="9">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                    </td>
                                    <td style="padding:5px;">
                                        <select name="userDOBday" id="userDOBday" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </td>
                                    <td style="padding:5px;">
                                        <select name="userDOByear" id="userDOByear" class="form-control">
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>
                                            <option value="1921">1921</option>
                                            <option value="1920">1920</option>
                                            <option value="1919">1919</option>
                                            <option value="1918">1918</option>
                                            <option value="1917">1917</option>
                                            <option value="1916">1916</option>
                                            <option value="1915">1915</option>
                                            <option value="1914">1914</option>
                                            <option value="1913">1913</option>
                                            <option value="1912">1912</option>
                                            <option value="1911">1911</option>
                                            <option value="1910">1910</option>
                                            <option value="1909">1909</option>
                                            <option value="1908">1908</option>
                                            <option value="1907">1907</option>
                                            <option value="1906">1906</option>
                                            <option value="1905">1905</option>
                                            <option value="1904">1904</option>
                                            <option value="1903">1903</option>
                                            <option value="1902">1902</option>
                                            <option value="1901">1901</option>
                                            <option value="1900">1900</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <p style="margin-top:15px;">
                                <input type="submit" class="btn btn-success btn-block" value="Register"/>
                            </p>
                            <p>
                            Forgot password? <a href="../reset/">Reset Password</a>
                            </p>
                            <p>
                            Already have an account? <a href="../login/">Login to your account</a>
                            </p>
                        </form>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.4.1.slim.min.js"></script>
        <script src="../js/popper.min.js" ></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/pace.min.js"></script>
    </body>
</html>