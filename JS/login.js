$(function(){
  $("#input_mail").blur(function(){
    if($(this).val() == ""){
      $('#label_mail').removeClass('focus');
    }else{return;}
  })
//↑メールのテキストボックス空ならfocus取り除く
  $("#input_pass").blur(function(){
    if($(this).val() == ""){
      $('#label_pass').removeClass('focus');
    }else{return;}
  })
//↑パスワードのテキストボックス空ならfocus取り除く
  $('#input_mail').focus(function(){
    $('#label_mail').addClass('focus');
  })
  $('#input_pass').focus(function(){
    $('#label_pass').addClass('focus');
  })
//↑フォーカスでクラス名focusを追加
});
