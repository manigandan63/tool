<!DOCTYPE html>
<html>
    <head>
        <style> 
        table{
           float:left;
           width:48%;
           margin:0 15px;
           
        }
            table,tr,td{
                border:1px solid red;
            }
            td{
                
                padding:10px;
            }
        </style>
    </head>
<body>


<?php
echo '<b style="
position: absolute;
left: 22px;
">Width Animation: </b>';
echo "<br><br>";
echo "<table>";
$dir_path = "file/";

if (is_dir($dir_path))
{
    $files = scandir($dir_path);
    for ($i = 0;$i < count($files);$i++)
    {
        if ($files[$i] != '.' && $files[$i] != '..')
        {
            $imageSize = getimagesize("$dir_path$files[$i]");
            echo "<td>";
            echo "&#60;div class=&#39;$files[$i]  width$i delay$i&#39&#62;";
            echo "</td>";
            echo "<td>";
            echo ".$files[$i]{width: $imageSize[0]px;height: $imageSize[1]px;position: absolute; top: 10px; left: 10px; background: url('../images/html_data/$files[$i]');background-size:  $imageSize[0]px  $imageSize[1]px;}";
            echo "<br><br>";
            echo ".delay$i{-webkit-animation-delay: 0.5s;-moz-animation-delay: 0.5s;animation-delay: 0.5s;}";
            echo "<br><br>";
            echo ".width$i { animation-name: width$i; -webkit-animation-name: width$i; animation-duration: .5s; -webkit-animation-duration: .5s; 
                animation-fill-mode: both; -webkit-animation-fill-mode: both; animation-timing-function: ease-in; -webkit-animation-timing-function: ease-in; }";
            echo "<br><br>";
            echo "
            @-webkit-keyframes width$i { from {
                width:0px;
                }
                to { width: $imageSize[0]px; }
                }
                @-moz-keyframes width$i { from {
                width:0px;
                }
                to { width: $imageSize[0]px; }
                }
                @keyframes width$i { from {
                width:0px;
                }
                to { width: $imageSize[0]px; }
                }
            ";
            echo "</td>";
            echo "</tr>";
        }
    }
}
echo "</table>";




echo "<b style='    position: absolute;
top: 11px;
left: 805px;'>height Animation: </b>";
echo "<br>";
echo "<table style='position: relative;
top: -17px;'>";
$dir_path = "file/";

if (is_dir($dir_path))
{
    $files = scandir($dir_path);
    for ($i = 0;$i < count($files);$i++)
    {
        if ($files[$i] != '.' && $files[$i] != '..')
        {
            $imageSize = getimagesize("$dir_path$files[$i]");
            echo "<td>";
            echo "&#60;div class=&#39;$files[$i]  height$i delay$i&#39&#62;";
            echo "</td>";
            echo "<td>";
            echo ".$files[$i]{width: $imageSize[0]px;height: $imageSize[1]px;position: absolute; top: 10px; left: 10px; background: url('../images/html_data/$files[$i]')  no-repeat bottom right;background-size:  $imageSize[0]px  $imageSize[1]px;}";
            echo "<br><br>";
            echo ".delay$i{-webkit-animation-delay: 0.5s;-moz-animation-delay: 0.5s;animation-delay: 0.5s;}";
            echo "<br><br>";
            echo ".height$i { -webkit-animation-name: height$i; animation-name: height$i; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; }";
            echo "<br><br>";
            echo "
            @-webkit-keyframes height$i { from {
                height: 0;
               }
               to { height: 108px; }
               }
                @keyframes height$i { from {
                height: 0;
               }
               to { height: 108px; }
               }
            ";
            echo "</td>";
            echo "</tr>";
        }
    }
}
echo "</table>";
echo "<br><br>";



?>

</body>
</html>