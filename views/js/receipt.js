class Receipt {
  constructor(url) {
    this.url = url;
  }

  LoadStoryFromEndPoints (q,div) {
      //alert("ffff");
    const DivContainer = document.querySelector(div);
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    console.log("story,.....");
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
          //console.log(xhr.responseText);
          localStorage.setItem("Story",xhr.responseText);
             let g = JSON.parse(xhr.responseText);
             console.log(g+"Story...");
             g.forEach((e,i) => {
               let v = "forAllImage/"+e.image;
               let s = `	<li class="bog" data-ids="${i}">
           				<img src="${v}" alt="Atunfato Story">
           				<h3><a href="story_page.php" data-ids="${i}">${e.title}</a></h3>
           				<span>${e.date}</span>
           				<p>
           					${e.address}
           				</p>
           			</li>`;

               DivContainer.insertAdjacentHTML("beforeend",s);
             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }

  doAddIkilo (array,coverDiv){
      const divCover = document.querySelector(coverDiv);
      divCover.innerHTML = "";
      array.forEach((value,index) => {
          let element  = `<div class="col-md-12 ikiloCoverCard">${value}<span class="closeIT" data-index="${index}"><i data-index="${index}" class="ti-close"></i></i></span></div>`;
          divCover.insertAdjacentHTML("beforeend",element);
      });
  }
  doAddOhunEtutu (array,coverDiv,totalPrice){
      const divCover = document.querySelector(coverDiv);
      const totalPrices = document.querySelector(totalPrice);
      divCover.innerHTML = "";
      let total = 0;
      array.forEach((value,index) => {
          let valueSplit = value.split(",");
          total += parseInt(valueSplit[1]);
          let element  = `<div class="col-md-12 ohunEtutuCoverCard">${valueSplit[0]} -> ${valueSplit[1]}<span class="closeUp" data-index="${index}"><i data-index="${index}" class="ti-close"></i></i></span></div>`;
          divCover.insertAdjacentHTML("beforeend",element);
      });
      totalPrices.value = total+".00";
  }

  doRemoveArrayContent (array,index){
      array.splice(index,1);
  }

  doAllClicks (){
      const dataSet = {
          ikilo : [],
          ohunEtutu : []
      }

      let ikiloInput,ikiloSelect,ohunEtutuSelect,OhunEtutuInput,OhunEtutuPrice,ikilo,ohunEtutu,realIkilo,realOhunEtutu;
      ikilo = null;
      ohunEtutu = null;
      realIkilo = document.querySelector(".realIkilo");
      realOhunEtutu = document.querySelector(".realOhunEtutu");
      ikiloInput = document.querySelector(".ikiloInput");
      ikiloSelect = document.querySelector(".ikiloSelect");
      ohunEtutuSelect = document.querySelector(".OhunetutuSelect");
      OhunEtutuInput = document.querySelector(".OhunetutuInput");
      OhunEtutuPrice = document.querySelector(".OhunetutuPrice");

    document.querySelector(".clickable").addEventListener('click', t => {
        if (t.target.matches('.addIkilo, .addIkilo *')) {

            if (ikiloInput.value == "" && ikiloSelect.value == ""){
                alert("Ikilo kole sofo!");
            }else if (ikiloInput.value != "" && ikiloSelect.value != ""){
                alert("Eni lati mo kon ni nu ila yi ni");
            }else if (ikiloInput.value != "" || ikiloSelect.value != ""){
                 if (ikiloInput.value != ""){
                        ikilo  = ikiloInput.value;
                        ikiloInput.value ="";
                 }else if (ikiloSelect.value != ""){
                     ikilo = ikiloSelect.value;
                     ikiloSelect.selectedIndex = 0;
                 }

                 dataSet.ikilo.push(ikilo);
                this.doAddIkilo(dataSet.ikilo,".ikiloCover");
                realIkilo.value = JSON.stringify(dataSet.ikilo);
            }else {
                alert("Ejowo  ye awon ila ikilo wo dada! ");
            }
            console.log(dataSet);
        }
      });

    document.querySelector(".clickableTeam").addEventListener('click', t => {
        if (t.target.matches('.addOhunEtutu, .addOhunEtutu *')) {
            if (OhunEtutuPrice.value == "" && OhunEtutuInput.value == "" && ohunEtutuSelect.value == ""){
                alert("OhunEtutu kole sofo!");
            }
            else if (OhunEtutuPrice.value != "" && OhunEtutuInput.value != "" && ohunEtutuSelect.value != ""){
                alert("Eni lati mo kon ni nu ila yi ni");
            }
            else if (OhunEtutuPrice.value != "" && OhunEtutuInput.value != "" || ohunEtutuSelect.value != ""){
                if (OhunEtutuPrice.value != "" && OhunEtutuInput.value != ""){
                    ohunEtutu  = OhunEtutuInput.value +","+ OhunEtutuPrice.value;
                    OhunEtutuInput.value = "";
                    // OhunEtutuPrice.value = "";
                }else if (ohunEtutuSelect.value != ""){
                    ohunEtutu = ohunEtutuSelect.value;
                    ohunEtutuSelect.selectedIndex = 0;
                }

                dataSet.ohunEtutu.push(ohunEtutu);
                this.doAddOhunEtutu(dataSet.ohunEtutu,".ohunEtutuCover",".totalInprice");
                realOhunEtutu.value = JSON.stringify(dataSet.ohunEtutu);
            }else {
                alert("Ejowo  ye awon ila Ohun Etutu wo dada! ");
            }

            console.log(dataSet);
        }
      });
    document.querySelector(".ikiloCover").addEventListener('click', t => {
        if (t.target.matches('.closeIT, .closeIT *')) {
            let index = t.target.dataset.index;
            this.doRemoveArrayContent(dataSet.ikilo,index);
            this.doAddIkilo(dataSet.ikilo,".ikiloCover");
            realIkilo.value = JSON.stringify(dataSet.ikilo);
        }
      });
    document.querySelector(".ohunEtutuCover").addEventListener('click', t => {
        if (t.target.matches('.closeUp, .closeUp *')) {
            let index = t.target.dataset.index;
            this.doRemoveArrayContent(dataSet.ohunEtutu,index);
            this.doAddOhunEtutu(dataSet.ohunEtutu,".ohunEtutuCover",".totalInprice");
            realOhunEtutu.value = JSON.stringify(dataSet.ohunEtutu);
        }
      });

  }




}

const receipt = new Receipt("./controllers/masterController.php?q=");
receipt.doAllClicks ();
