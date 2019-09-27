<?php
  echo '<pre/>';
  print_r($_POST);
  if(isset($_POST['btn'])){
  $frist_number = $_POST['frist_number'];
  $last_number = $_POST['last_number'];
  $btn=$_POST['btn'];
  if($btn == '+'){
    $result = $frist_number+$last_number;
  }
  else if($btn == '-'){
    $result = $frist_number-$last_number;
  }
  else if($btn == '*'){
    $result = $frist_number*$last_number;
  }
  else if($btn == '/'){
    $result = $frist_number/$last_number;
  }
}

?>
<form action="#" method="post">
  <table>
    <tr>
     <td>First number</td>
     <td><input type="text" name="frist_number"></td>
    </tr>
    <tr>
    <td>Last number</td>
     <td><input type="text" name="<?php if(isset($_POST['last_number'])){echo $_POST['last_number'];}?>"></td>
    </tr>
    <tr>
      <td>value</td>
      <td><input type="number" name="result" value="<?php if(isset($result)){echo $result;}?>"></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="btn" value="+"/>
        <input type="submit" name="btn" value="-"/>
        <input type="submit" naem="btn" value="*"/>
        <input type="submit" name="btn" value="/"/>
        <input type="reset" name="btn" value="reset"/>
      </td>
    </tr>
  
  </table>
  </form>