class Blog {
  constructor(url) {
    this.url = url;
  }

  LoadStoryFromEndPoints (q) {
      //alert("ffff");
    const blog_list_Container = document.querySelector(".blog_it_all");

    const xhr = new XMLHttpRequest();
    const url = this.url+q;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
          //console.log(xhr.responseText);
          localStorage.setItem("story_to_world",xhr.responseText);
             let g = JSON.parse(xhr.responseText);
             g.forEach((e,i) => {
               let s = `<div class="col-12 col-md-4">
                         <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                            <img src="../forAllImage/${e.image}" alt="blogimage">
                            <div class="blog-content">
                                <h5><a href="static-page.html">${e.title}</a></h5>
                                <p>${e.address.substr(0,150)}...</p>
                                <button data-theindex="${i}" style=" cursor: pointer;border: none;padding: 10px;background-color: #4BAE3C;color: #fff;" class="learnt_on_it_even_more">Learn More</button>
                            </div>
                        </div>
                    </div>`;

               blog_list_Container.insertAdjacentHTML("beforeend",s);
             });
             //               DivContainer.insertAdjacentHTML("beforeend",s);
      }
    }
    xhr.send();
        //  this.doRead(s);
  }

  doAllClicks (){

    this.LoadStoryFromEndPoints("story");

     document.querySelector(".blog_it_all").addEventListener('click', t => {
         if (t.target.matches('.learnt_on_it_even_more, .learnt_on_it_even_more *')) {
               localStorage.setItem("theindex_",t.target.dataset.theindex);
               window.location.replace("../OhunEdumare/blog.php");
         }
       });
  }

}

const cd = new Blog("../controllers/masterController.php?q=");
cd.doAllClicks ();
