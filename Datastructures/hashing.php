<?php
/**********
 *program to read a set of numbers from a file and take user input to search a number
 through hashing function method
 *@authour harikrishna
 *@version 2.0
 *Date 28/01/2019
 */
/**
 * requried to get input from another class
 */
require('utility.php');
require('linkedList.php');
$myfile=fopen("numberOne.txt","r") or die("Unable to open the file");
$str=fread($myfile,filesize("numberOne.text"));
$numarr=explode(" ",$str);
$arr=[];
for($i=0;$i<11;$i++)
{
    $arr[$i]=new linkedList();
}
for ($i=0;$i<count($numarr);$i++) 
{
    $l = (int)$numarr[$i]%11;
    $arr[$l]->add((int)$numarr[$i]);
}
function listArr($arr)
{
    $s = "";
    for ($i=0;$i<count($arr);$i++) 
    {
        if($arr[$i]->getData()!=null)
        $s .= $arr[$i]->getData()." ";
    }
    return substr($s,0 ,-1)."\n";
}
echo "list is ".listArr($arr);
echo "Enter no to search\n";
$num = utility::getInt();
$y = (int)$num%11;
if($arr[$y]->search($num))
{
    echo "number found \n";
    $arr[$y]->remove($num);
}
else
{
    echo "number not found \n";
    $arr[$y]->add($num);
    echo "added to the list \n";
}
$myfile = fopen("numberOne.txt","w") or die("Unable to open file ");
fwrite($myfile,listArr($arr));
fclose($myfile);


?>