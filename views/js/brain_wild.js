class Wild {

  constructor(containDiv ,url) {
      this.containDiv  = containDiv;
      this.url = url;
  }

  gatherFormData (form) {

  let leng = form.length;
  const array = [];
  for (var i = 0; i < leng ; i++) {

      if (form[i].name === "Submit") {

      }
      let arr  = form[i].name + '='+form[i].value ;
      array.push(arr);
  }

return array.join('&');

}

  LoadAllBrainsFromEndPoints (q,formClass,sucClass) {

    const success = document.querySelector(formClass);
    const suc = document.querySelector(sucClass);

   const form_data = this.gatherFormData(success);
   // console.log(form_data);
   // console.log("sdsdf");
   const url = this.url+q;
       const xhr = new XMLHttpRequest();
       xhr.open('POST', url, true);
       xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
       xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
       xhr.onreadystatechange = function () {
         if (xhr.readyState == 4 && xhr.status == 200) {
         //  console.log('uuiui');
          let s = xhr.responseText;
          // console.log(s);
          if (s.trim() === "true") {
            for (var i = 0; i < success.length ; i++) {

                if (success[i].name == "Submit") {

                }

                success[i].value = "" ;
                suc.textContent = "Sent! we will get back to you as son as posible. ";
            }
          }
         }
       }
      xhr.send(form_data);

  }


  doSetText (text,element){
      console.log(element);
      element.value = ` ${text}`;
  }


  doAllAction () {

    document.querySelector(".contactUS").addEventListener('click',e =>{
      e.preventDefault();
      this.LoadAllBrainsFromEndPoints("contactUSForm",'.contactForm',".suc");
      //document.querySelector(".successContact").style.display = "inline";
      console.log("foot");
    });



  }



}
const wild = new Wild(".heri","./controllers/masterController.php?q=");
wild.doAllAction();
