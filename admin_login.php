<?php
if(!empty($_POST["my_id"])){
  if($_POST["my_ber"] == $_SESSION["r3"]){
    $sql = "select * from admin_member where a_m_id = '".$_POST["my_id"]."' and a_m_pw = '".$_POST["my_pw"]."'";
    $rr =mysqli_query($link,$sql);
    $login = mysqli_num_rows($rr);
    if($login == 1){
      $_SESSION["acc"] = $_POST["my_id"];
      ?><script>document.location.href="admin.php"</script><?php
    }
  }else{
    ?><script>alert("對不起，您輸入的驗證碼有誤請您重新登入");</script><?php
  }
}
$r1 = rand(0,99);
$r2 = rand(0,99);
$r3 = $r1 + $r2;
$_SESSION["r3"] = $r3;
?>
<input type="button" value="返回" onclick = "document.location.href='/'"><br>
<form method="post" name="ccc">
<table width="95%" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" width="30%">帳號</td>
    <td align="left"><input name="my_id" value="<?php if(!empty($_POST["my_id"])){ echo $_POST["my_id"];}?>"></td>
  </tr>
  <tr>
    <td align="center">密碼</td>
    <td align="left"><input type="password" name="my_pw" value="<?php if(!empty($_POST["my_pw"])){ echo $_POST["my_pw"];}?>"></td>
  </tr>

  <tr>
    <td align="center">驗證碼</td>
    <td align="left">
      <?=$r1?> + <?=$r2?> = <input name="my_ber">
    </td>
  </tr>


  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="確認">
    </td>
  </tr>

</table>
</form>
