class BlogStory {
  constructor(url) {
    this.url = url;
  }

  LoadRecentStoryFromEndPoints (q,div) {
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
               let s = `
               <li class="bops" data-ids="${i}">
                 <h4 data-ids="${i}"><a href="story_page.php" data-ids="${i}">${e.title}</a></h4>
                 <span>${e.date} </span>
               </li>
                    `;

               DivContainer.insertAdjacentHTML("beforeend",s);
             });
      }
    }
    xhr.send();
        //  this.doRead(s);
  }

  theStory(){
    const DivContainer = document.querySelector(".article");

    let content = JSON.parse(localStorage.getItem("Story"));

    let index = content[parseInt(localStorage.getItem("index"))];

    let df = `
      <div class="col-md-12">
        <h3>${index.title}</h3>
        <span>${index.date} </span>
        <img src="forAllImage/${index.image}" alt="Loading...">
        <p>
          ${index.address}
        </p>

      </div>
      `;

      DivContainer.innerHTML = '';
      DivContainer.innerHTML = df;
  }
  doTheStory () {

      this.theStory();

      document.querySelector(".recentAll").addEventListener('click', t => {
          if (t.target.matches('.bops, .bops *')) {
                localStorage.setItem("index",t.target.dataset.ids);
                window.location.replace("story_page.php");
                //console.log("ffff");
          }
        });
  }


}

const cd = new BlogStory("./controllers/masterController.php?q=");
cd.LoadRecentStoryFromEndPoints("story_page",".recentAll");
cd.doTheStory();
