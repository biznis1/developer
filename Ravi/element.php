
<?php
    $data = "ravi php developer";
    echo "<textarea name='mydata'>\n";
    echo htmlspecialchars($data)."\n";
    echo "</textarea>";
?>
<br>

<?php
    //echo '<a href="' . htmlspecialchars("/nextpage.php?stage=23&data=".urlencode($data)) . '">'."\n";
?>


<?php
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>

<?php

echo "<a href='foo.php?text=".urlencode("foo?&bar!")."'>link</a>";
?>

<br>

<?php
if (isset($_GET['width']) AND isset($_GET['height'])) {
  // output the geometry variables
  echo "Screen width is: ". $_GET['width'] ."<br />\n";
  echo "Screen height is: ". $_GET['height'] ."<br />\n";
} else {
  // pass the geometry variables
  // (preserve the original query string
  //   -- post variables will need to handled differently)

  echo "<script language='javascript'>\n";
  echo "  location.href=\"${_SERVER['SCRIPT_NAME']}?${_SERVER['QUERY_STRING']}"
            . "&width=\" + screen.width + \"&height=\" + screen.height;\n";
  echo "</script>\n";
  exit();
}
?>

<br>

<?php
$array = array(1, 2, 3, 4);
?>

<table>
<thead><tr><th>Number</th></tr></thead>
<tbody>
<?php foreach ($array as $num) : ?>
<tr><td><?= htmlspecialchars($num) ?></td></tr>
<?php endforeach ?>
</tbody>
</table>

<br>


<?php
    function fun($s)
    {
        $val = str_replace("_"," ",$s);
        return ucwords($val);
    }
    $state = array("gujarat","andhra_pradesh","madhya_pradesh","uttar_pradesh");
    $result = array_map('fun',$state);
    print_r($result);
?>

<br>
<?php
$string = "RaviKumarGupta";
$string = explode( "-", $string );
$first = true;
foreach( $string as &$v ) {
    if( $first ) {
        $first = false;
        continue;
    }
    $v = ucfirst( $v );
}
return implode( "", $string );

?>