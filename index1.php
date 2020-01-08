<!DOCTYPE html>
<html>
    <head>
        <style> 
            table,tr,td{
                border:1px solid black;
                padding:10px;
            }
            table {
                border-collapse: collapse;
            }
            td{
                padding-left: 0;
    width: 700px;
            }
        </style>
    </head>
<body>


<?php
echo "<b>HTML</b>";
echo "<br><br>";
echo "&#60;div class=&#39;src02_wrapper&#39&#62;";
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
            echo "&#60;div class=&#39;";
            echo "$files[$i]";
            echo "&#39;&#62;&#60;/div&#62;";
            echo "</td>";
            echo "</tr>";
        }
    }
}
echo "</table>";
echo "&#60;div&#62;";
echo "<br><br>";
echo "<b>CSS</b>";
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
            echo ".$files[$i]{width: $imageSize[0]px;height: $imageSize[1]px;position: absolute; top: 10px; left: 10px; background: transparent url('../images/html_data/$files[$i]')  no-repeat center center;background-size: 100%;-webkit-animation-duration: 0ms;-webkit-animation-delay: 0ms;}";
            echo "</td>";
            echo "</tr>";
        }
    }
}
echo "</table>";
echo "<br><br>";
echo "<b>Width & Height</b>";
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
            echo ".$files[$i]{width: $imageSize[0]px;height: $imageSize[1]px;}";            
            echo "</td>";
            echo "</tr>";
        }
    }
}
echo "</table>";
?>
</body>
</html>