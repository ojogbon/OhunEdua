class Brain {

  constructor(containDiv ,url) {
      this.containDiv  = containDiv;
      this.url = url;
  }

  LoadAllBrainsFromEndPoints (q) {

    const DivContainer = document.querySelector(this.containDiv);
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
             let g = JSON.parse(xhr.responseText);
             console.log(g+" ----------------->");
             localStorage.setItem("Heritage",xhr.responseText);
             g.forEach((e,i) => {

               let d = e.content.split(" ");

               let s = ` <div class="col-lg-4 col-md-6">
                         <div class="speaker" data-dert="${i}">
                           <img style="    width: 100%;" src="${e.path}" data-dert="${i}" alt="Speaker 1" class="img-fluid">
                           <div class="details" data-dert="${i}">
                             <h3 class="yit" data-dert="${i}">${e.title}</h3>
                             <p data-dert="${i}">${d[0] +" "+d[1]+" "+d[2]+" "+d[3]+" "+d[4]+"..."}</p>
                             <div class="social" data-dert="${i}">
                               <a href="${e.media}"><i class="fa fa-twitter"></i></a>
                               <a href="${e.media}"><i class="fa fa-facebook"></i></a>
                               <a href="${e.media}"><i class="fa fa-google-plus"></i></a>
                               <a href="${e.media}"><i class="fa fa-linkedin"></i></a>
                             </div>
                           </div>
                         </div>
                   </div>
               `;
               DivContainer.insertAdjacentHTML("beforeend",s);
             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }
  LoadOurServiceFromEndPoints (q,div) {
    let DivContainer = "";
    const xhr = new XMLHttpRequest();
    const url = this.url+q;

    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
             let g = JSON.parse(xhr.responseText);
             console.log(g);

              g.forEach(e => {
                    console.log(e.type+"sd dfgdf");
                if (e.type === "celebration") {
                console.log(e+"sdds");
                  let dip = div+"1";
                  DivContainer = document.querySelector(dip);
                  let s = ` <div class="row schedule-item">
                              <div class="col-md-2"><i>${e.title}</i></div>
                                  <div class="col-md-10">
                                    <div class="speaker">
                                      <img src="./admin/file/${e.image}" alt="${e.title}">
                                    </div>
                                    <h4>${e.note}</h4>
                                    <p> ${e.tag}</p>
                                  </div>
                            </div>
                  `;

                   DivContainer.insertAdjacentHTML("beforeend",s);
                }
                else if (e.type === "Voice over") {

                    let dip = div+"2";
                  DivContainer = document.querySelector(dip);
                  let s = ` <div class="row schedule-item">
                                <div class="col-md-2"><i>${e.title}</i></div>
                                    <div class="col-md-10">
                                      <div class="speaker">
                                        <img src="./admin/file/${e.image}" alt="${e.title}">
                                      </div>
                                      <h4>${e.note}</h4>
                                      <p> ${e.tag}</p>
                                    </div>
                            </div>
                  `;
                   DivContainer.insertAdjacentHTML("beforeend",s);
                }
                else if (e.type === "performance") {
                    let dip = div+"3";
                  DivContainer = document.querySelector(dip);
                  let s = ` <div class="row schedule-item">
                                <div class="col-md-2"><i>${e.title}</i></div>
                                    <div class="col-md-10">
                                      <div class="speaker">
                                        <img src="./admin/file/${e.image}" alt="${e.title}">
                                      </div>
                                      <h4>${e.note}</h4>
                                      <p> ${e.tag}</p>
                                    </div>
                            </div>
                  `;
                   DivContainer.insertAdjacentHTML("beforeend",s);
                }

              });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }

  LoadFindusFromEndPoints (q,div) {

    const DivContainer = document.querySelector(div);
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
             let g = JSON.parse(xhr.responseText);
             g.forEach(e => {
               let s = `<a href="img/venue-gallery/${e.image}" data-img="${e.path}" class="venobox" data-gall="gallery-carousel" > <div class="col-lg-3 col-md-4">
                           <div class="venue-gallery" data-img="${e.path}">
                             <a data-toggle="modal" data-target="#myModalfive" data-img="${e.path}" href="img/venue-gallery/${e.image}" class="venobox innerForTheModal" data-gall="venue-gallery">
                               <img src="img/venue-gallery/${e.image}"  data-img="${e.path}" alt="" class="img-fluid">
                             </a>
                           </div>
                        </div></a>
               `;


               DivContainer.insertAdjacentHTML("beforeend",s);
             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }

  LoadGalleryFromEndPoints (q,div) {

    const DivContainer = document.querySelector(div);
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    console.log("jmsdmnbdsm,");
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
             let g = JSON.parse(xhr.responseText);
             console.log(g+"Gallery...");
             g.forEach(e => {
               let v = "forAllImage/"+e.image;
               let s = `<li  class="lit" data-toggle="modal" data-target="#myModalfive" data-img="${v}"  style="float:left;margin:5px;">
                						<img  data-img="${v}"  src="${v}" alt="Loading...">
                						<h4>Atunfato Image</h4>
        					      </li>`;

               DivContainer.insertAdjacentHTML("beforeend",s);
             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }
  LoadStoryFromEndPoints (q,div) {
    //  alert("ffff");
    const DivContainer = document.querySelector(div);
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    console.log("story,");
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
          console.log(xhr.responseText);
             let g = JSON.parse(xhr.responseText);
             console.log(g+"Story...");
             g.forEach(e => {
               let v = "forAllImage/"+e.image;
               let s = `	<li>
           				<img src="${v}" alt="Atunfato Story">
           				<h3><a href="story_page.php">${e.title}</a></h3>
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
  LoadSponsorFromEndPoints (q,div) {

    const DivContainer = document.querySelector(div);
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
             let g = JSON.parse(xhr.responseText);
             //console.log(g);
             g.forEach(e => {
               let s = `<div class="col-lg-3 col-md-4 col-xs-6">
                           <div class="supporter-logo">
                             <img src="img/supporters/1.png" class="img-fluid" alt="">
                           </div>
                         </div>
               `;

               DivContainer.insertAdjacentHTML("beforeend",s);
             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }
  LoadFaqFromEndPoints (q,div) {

    const DivContainer = document.querySelector(div);
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
             let g = JSON.parse(xhr.responseText);
             g.forEach((e,i) => {
               let s = `  <li>
                   <a data-toggle="collapse" class="collapsed" href="#faq${i+1}">${e.title}<i class="fa fa-minus-circle"></i></a>
                   <div id="faq${i+1}" class="collapse" data-parent="#faq-list">
                     <p>
                       ${e.content}
                     </p>
                   </div>
                 </li>
               `;

               DivContainer.insertAdjacentHTML("beforeend",s);
             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }
  LoadPackageFromEndPoints (q,div,dic,dis) {
console.log("Pakage---------");
    const DivContainer = document.querySelector(div);
    const DivContainers = document.querySelector(dic);
    const DivContainerz = document.querySelector(dis);
    const ticke = document.querySelector(".opy");
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        console.log(xhr.responseText);
             let g = JSON.parse(xhr.responseText);
             console.log(g+" gggggggg");
             g.forEach((e,i) => {
               console.log(e+' hh');
               let s = `  <li>
               <span class="fa-li"><i class="fa fa-check"></i></span>
               ${e.cat}</li>
               `;
               let l = ` <option value="${e.cat}">${e.cat}</option>
               `;

               DivContainer.insertAdjacentHTML("beforeend",s);
               DivContainers.insertAdjacentHTML("beforeend",s);
               DivContainerz.insertAdjacentHTML("beforeend",s);
               ticke.insertAdjacentHTML("beforeend",l);
             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }
  LoadContactdeatislFromEndPoints (q,div,dic,dis) {
    console.log("Contactdeatisl---------");
    const DivContainer = document.querySelector(div);
    const DivContainers = document.querySelector(dic);
    const DivContainerz = document.querySelector(dis);
    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        console.log(xhr.responseText);
             let g = JSON.parse(xhr.responseText);

             g.forEach((e,i) => {
               if (e.type == "address") {
                        DivContainer.textContent = e.content;
               }else if (e.type == "phonenumber") {
                 let x =  `<a href="tel:${e.content}">+234 ${e.content}</a>`;
                 DivContainers.insertAdjacentHTML("beforeend",x);
               }else if (e.type == "email") {
                  let x =  `<a href="${e.content}">${e.content}</a>`;
                  DivContainerz.insertAdjacentHTML("beforeend",x);
               }


             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }

  doAllClicks (){

    // document.querySelector(".heri").addEventListener('click', t => {
    //         if (t.target.matches('.speaker, .speaker *')) {
    //               localStorage.setItem("index",t.target.dataset.dert);
    //             window.location.replace("speaker-details.html");
    //         }
    // });
    // document.querySelector(".forTheModal").addEventListener('mouseover', t => {
    //
    //         if (t.target.matches('.innerForTheModal, .innerForTheModal *')) {
    //           document.querySelector(".mode").src = t.target.dataset.img;
    //         }
    // });
    // document.querySelector(".forTheModals").addEventListener('mouseover', t => {
    //
    //         if (t.target.matches('.innerForTheModal, .innerForTheModal *')) {
    //           document.querySelector(".mode").src = t.target.dataset.img;
    //         }
    // });
    document.querySelector(".section").addEventListener('mouseover', t => {
                console.log("00000");
            if (t.target.matches('.lit, .lit *')) {
              document.querySelector(".cope").src = t.target.dataset.img;
            }else {
              document.querySelector(".cope").src = "forAllImage/egunugun.jpg";
            }
    });


  }


}
const brain = new Brain(".heri","./controllers/masterController.php?q=");
// brain.LoadAllBrainsFromEndPoints("heritage");
// brain.LoadOurServiceFromEndPoints("service","#day-");
// brain.LoadStoryFromEndPoints("story",".blog");
 brain.LoadGalleryFromEndPoints("gallery",".section");
// brain.LoadSponsorFromEndPoints("sponsor",".spons");
// brain.LoadFaqFromEndPoints("faq",".faa");
// brain.LoadPackageFromEndPoints("package",".fa-ul",".ui",".uls");
// brain.LoadContactdeatislFromEndPoints("contactdeatisl","address",".ps",".ps1");
  brain.doAllClicks();
