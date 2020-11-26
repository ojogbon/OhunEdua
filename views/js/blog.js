class Blog {
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

  doAllClicks (){
    alert(77);
    document.querySelector(".blog").addEventListener('click', t => {
        if (t.target.matches('.bog, .bog *')) {
              localStorage.setItem("index",t.target.dataset.ids);
              window.location.replace("story_page.php");
              //console.log("ffff");
        }
      });
  }

}

const cd = new Blog("./controllers/masterController.php?q=");
cd.LoadStoryFromEndPoints("story",".blog");
cd.doAllClicks ();
