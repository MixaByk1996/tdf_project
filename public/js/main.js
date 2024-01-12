
class ValidatorRegisterAuth{
  static CheckIsNull(val,errors_mess){
    let errors=[];
    for(let i=0;i<val.length;i++){
      if(String(val[i])==""){
        errors.push("Поле "+errors_mess[i]+" не должно быть пустым!");
      }
    }
    return errors;
  }
  static CheckEmail(val) {
    let re = new RegExp("^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4}$");
    if (re.test(val)) {
      return "Значение не является email'ом!";
    } else {
      return "";
    }
  }
  static CheckPhone(val){
    let erros_phone=[];
    val=String(val).replace("+","");
    if(typeof(parseInt(val)) === 'number' ){
      erros_phone.push("");
    }
    else {
      erros_phone.push("Введённое значение не является номером телефона!");
    }

    if(String(val).length<6 && String(val).length>15){
      erros_phone.push("В номере телефона должно быть от 6 до 15 символов!");
    }
    return ValidatorRegisterAuth.RemoveNONE(erros_phone);
  }
  static CheckPass(val) {
    let re = new RegExp("^([a-zA-Z0-9])$");
    if (re.test(val)) {
      return "Пароль должен быть только из латинских симвлолов и цифр!";
    } else {
      return "";
    }
  }
  static EqualPass(val1,val2) {
    if(val1!==val2){
      return "Пароли не совпадают!";
    }
    else{
      return "";
    }
  }
  static CheckPolitics(){
    if(document.getElementById("chks").hasAttribute("checked")==true){
      return "";
    }
    else{
      return "Вы не выбрали политику конфиденциальности";
    }
  }
  static RemoveNONE(vals){
    let new_Arr=[];
    for (let i = 0; i < vals.length; i++) {
      if (String(vals[i]).length!==0){
        new_Arr.push(String(vals[i]));
      }
    }
    return new_Arr;
  }
}


function show_hide_modals(event) {
  if (event.target.hasAttribute("id") == true) {
      let ids = event.target.getAttribute("id");
      switch (ids) {
        case "register-modal":
          document.getElementById("register-modal").setAttribute("class", "register-modal-frame register-modal-frame-none");
          break;
        case "auth-modal":
          document.getElementById("auth-modal").setAttribute("class", "auth-modal-frame auth-modal-frame-none");
          break;
      }
  }
}
function show_register_modal(){
  document.getElementById("register-modal").setAttribute("class","register-modal-frame");
}
function show_auth_modal(){
  document.getElementById("auth-modal").setAttribute("class","auth-modal-frame");
}
function add_errors_auth(dates){
  let sqsd=document.getElementsByClassName("errors-auth-container")[0];
  sqsd.innerHTML='';
  for(let i=0;i<dates.length;i++){
    let p=document.createElement('span');
    p.textContent=dates[i];
    p.setAttribute("class","errors-auth-container-text");
    sqsd.appendChild(p);
  }
}
function check_errors_auth(data) {
  let messa=["email","пароля"];
  let erroses=ValidatorRegisterAuth.CheckIsNull(data,messa);
  if(erroses.length==0){
    return true;
  }
  else{
    add_errors_auth(erroses);
    return false;
  }
}
function add_errors(daters){
  let s=document.getElementsByClassName("errors-register-container")[0];
  s.innerHTML='';
  for(let i=0;i<daters.length;i++){
    let q=document.createElement('span');
    q.textContent=daters[i];
    q.setAttribute("class","errors-register-container-text");
    s.appendChild(q);
  }
}
function check_errors_registration(data) {
  let values_to_null=["ФИО","города","email","телефона","пароля","повторения пароля"];
  let errs=ValidatorRegisterAuth.CheckIsNull(data,values_to_null);
    if(errs.length==0){
      errs=ValidatorRegisterAuth.CheckPhone(data[2]);
      errs.push(ValidatorRegisterAuth.CheckEmail(data[3]));
      errs=ValidatorRegisterAuth.RemoveNONE(errs);
      if(errs.length==0){
        errs=[ValidatorRegisterAuth.CheckPass(data[4]),ValidatorRegisterAuth.CheckPass(data[5]),
        ValidatorRegisterAuth.EqualPass(data[4],data[5]),ValidatorRegisterAuth.CheckPolitics()];
        if(errs.length==0){
          return true;
        }
        else{
          add_errors(errs);
          return false;
        }
      }
      else{
        add_errors(errs);
        return false;
      }
    }
    else{
      add_errors(errs);
      return false;
    }
  }

function get_values_input(vls){
  let vals=[];
  for(let i=0;i<vls.length;i++){
    vals.push(String(document.getElementsByName(vls[i])[0].value));
  }
  return vals;
}
function clear_err_reg(){
  document.getElementsByClassName("errors-register-container")[0].innerHTML='';
}
function clear_err_auth(){
  document.getElementsByClassName("errors-auth-container")[0].innerHTML='';
}
function send_reg_form(){
  let datas=get_values_input(["fioreg","cityreg","emailreg","phonereg","passreg","passrepreg"]);
  if(check_errors_registration(datas)!=false){
    $.ajax({
      url: '/register',
      method: 'post',
      dataType: "json",
      async:false,
      data: $("#regform").serialize(),
      success: function(data){
        if(data.status=="true"){
          window.location.href="/cabinet";
        }
        else{
          clear_err_reg();
          let p=document.createElement('span');
          p.setAttribute("class","errors-register-container-text");
          p.textContent=data.message;
          document.getElementsByClassName("errors-register-container")[0].appendChild(p);
          }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert(errorThrown);
        }
    });
  }
}
function send_auth_form(){
  let datas=get_values_input(["emailauth","passwordauth"]);
  if(check_errors_auth(datas)!=false){
    $.ajax({
        url: '/auth',
        method: 'post',
        dataType: "json",
        async:false,
        data: $("#authform").serialize(),
        success: function(data){
          if(data.status=="true"){
            window.location.href="/cabinet";
          }
          else{
            let s=document.getElementsByClassName("errors-auth-container")[0];
            s.innerHTML='';
            let qp=document.createElement('span');
            qp.setAttribute("class","errors-auth-container-text");
            qp.textContent=data.message;
            s.appendChild(qp);
          }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert(errorThrown);
        }
      });
    }
}
function send_logout(event){
  $.ajax({
      url: '/logout',
      method: 'post',
      dataType: "json",
      async:false,
      data:{"_token":event.currentTarget.getAttribute("tokendat")},
      success: function(data){
        window.location.href="/";
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert(errorThrown);
     }
  });
}
document.addEventListener("DOMContentLoaded",()=>{
    if(document.getElementsByTagName('body').length!=0){
      document.getElementsByTagName('body')[0].addEventListener("click",show_hide_modals);
    }
    if(document.getElementsByClassName("register-btn-shows").length!=0){
      document.getElementsByClassName("register-btn-shows")[0].addEventListener("click",show_register_modal);
    }
    if(document.getElementsByClassName("auth-btn-shows").length!=0){
      document.getElementsByClassName("auth-btn-shows")[0].addEventListener("click",show_auth_modal);
    }
    if(document.getElementsByClassName("register-submit-btn").length!=0){
      document.getElementsByClassName("register-submit-btn")[0].addEventListener("click",send_reg_form);
    }
    if(document.getElementsByClassName("auth-submit-btn").length!=0){
      document.getElementsByClassName("auth-submit-btn")[0].addEventListener("click",send_auth_form);
    }
    if(document.getElementsByClassName("logout-btn-shows").length!=0){
      document.getElementsByClassName("logout-btn-shows")[0].addEventListener("click",send_logout);
    }
    if(document.getElementsByClassName("register-input").length!=0){
      let s=document.getElementsByClassName("register-input");
      for(let i=0;i<s.length;i++){
        s[i].addEventListener("click",clear_err_reg);
      }
    }
    if(document.getElementsByClassName("auth-input").length!=0){
      let s=document.getElementsByClassName("auth-input");
      for(let i=0;i<s.length;i++){
        s[i].addEventListener("click",clear_err_auth);
      }
    }
    if(document.getElementsByClassName("register-input-small").length!=0){
      let s=document.getElementsByClassName("register-input-small");
      for(let i=0;i<s.length;i++){
        s[i].addEventListener("click",clear_err_reg);
      }
    }
    if(document.getElementById("txtmarq")!=null){
      $(function() {
        $('.marquee-text').marquee({
          startVisible: true,
          duplicated: true,
          delayBeforeStart: 0,
          direction: 'left',
          speed:70,
          });
      });
    }
  });
