
$.validator.addMethod(
  "regex",
  function(value, element, regexp) {
    return this.optional(element) || regexp.test(value);
  },
  "無効な文字があります。"
);


$('form').validate({
//ルール作成
  rules:{
    login:{required: true,
           regex: /^[0-9a-zA-Z]*$/,
           maxlength: 20,
           minlength: 5
    },
    namae:{required:true,
           regex: /^[^\x20-\x7e]*$/,
           maxlength: 20,
           minlength: 2
    },
    furigana:{required:true,
              regex:/^[ァ-ンヴー]*$/,
              maxlength:20,
              minlength:2
    },
    pass:{required:true,
          regex:/^[0-9a-zA-Z]*$/,
          maxlength:20,
          minlength:6
    },
    pass2:{required:true,
           equalTo:'#signup_password',
           regex:/^[0-9a-zA-Z]*$/,
},

},
//エラーメッセージ
  messages:{
    login:{required:'必須項目です',
           maxlength:'20字以内で入力してください',
           minlength:'5文字以上で入力してください'
    },
    namae:{required:'必須項目です',
           maxlength:'20字以内で入力してください',
           minlength:'2文字以上で入力してください'
    },
    furigana:{required:'必須項目です',
              maxlength:'20字以内で入力してください',
              minlength:'2文字以上で入力してください'
    },
    pass:{required:'必須項目です',
          maxlength:'20文字以内で入力してください',
          minlength:'6文字以上で入力してください'
    },
    pass2:{required:'必須項目です',
           equalTo:'パスワードが一致しません'
    }
},

//エラー表示場所指定
errorPlacement:function(err,element){
  var a = element.attr('name');
  err.appendTo($('#err_'+ a))
},

submitHandler:function(form) {
  // ボタンを非活性
  $('#modal_submit').prop('disabled', true);
  form.submit();
 }
});

$('#form').blur(function(){
  $("#form").valid();
});

$(function(){
  $('#signup_submit').click(function(){
   const login = $('#signup_id').val();
   const namae = $('#signup_namae').val();
   const furigana = $('#signup_furigana').val();
   const mail = $('#signup_mail').val();
   const birthday = $('#signup_birthday').val();
   const pass = $('#signup_password').val();

   $('#modal_login').html(`ログインID：${login}`);
   $('#modal_namae').html(`名前：${namae}`);
   $('#modal_furigana').html(`フリガナ：${furigana}`);
   $('#modal_mail').html(`メールアドレス：${mail}`);
   $('#modal_birthday').html(`生年月日：${birthday}`);
   $('#modal_pass').html(`パスワード：${pass}`);

   $('#over').css("display","inline");
   $('#modal').fadeIn();
  })
  });


$(function(){
  $('.modal_button').click(function(){
      $('#modal').css("display","none");
      $('#over').css("display","none");
  })
});

