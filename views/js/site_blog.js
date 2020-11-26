class Blog {
  constructor(url) {
    this.url = url;
  }

  extractStoredValue () {
      let f = localStorage;
      return {
         currentBlogIndex: parseInt(f.getItem("theindex_")),
         blogList:JSON.parse(f.getItem("story_to_world"))
      }

  }

  LoadStoryFromEndPoints (q) {
     let storedValue = this.extractStoredValue();

    const blog_list_Container = document.querySelector(".blog_list");

      if (storedValue.blogList.length > 0) {

             storedValue.blogList.forEach((e,i) => {
               let s = `<div class="single-populer-post">
                                  <div class="post-contents">
                                          <h6 data-idx="${i}" class="selectedTitle">${e.title}.</h6>
                                      <a class="post-date" href="#">${e.date}</a>
                                  </div>
                      </div>`;

               blog_list_Container.insertAdjacentHTML("beforeend",s);
             });

             this.setSelectedBlog (storedValue.blogList,storedValue.currentBlogIndex);
      }

  }

  setSelectedBlog (array,index){
    const main_blog_list = document.querySelector(".main-blog-list");
    let t = `<div class="row no-gutters">

            <div class="col-2 col-sm-1">
                <div class="single-post-share-info">
                    <a href="https://web.facebook.com/oladele.akinwunmi.9" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/ojogbon_akanbi" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="col-10 col-sm-11">
                <div class="single-post">
                    <!-- Post Thumb -->
                    <h4>${array[index].title}</h4>
                    <div class="post-thumb">
                        <img src="../forAllImage/${array[index].image}" alt="">
                    </div>

                    <div class="post-content">
                        <p>
                          ${array[index].address}
                        </p>
                    </div>
                </div>
            </div>
        </div>`;
        main_blog_list.innerHTML = '';
        main_blog_list.insertAdjacentHTML("beforeend",t);
  }

  doAllClicks (){
    alert(77);
    this.LoadStoryFromEndPoints("story");

    document.querySelector(".blog_list").addEventListener('click', t => {
        if (t.target.matches('.selectedTitle, .selectedTitle *')) {
              localStorage.setItem("theindex_",t.target.dataset.idx);
              let storedValue = this.extractStoredValue();
              this.setSelectedBlog (storedValue.blogList,storedValue.currentBlogIndex);
        }
      });
  }

}

const cd = new Blog("../controllers/masterController.php?q=");
cd.doAllClicks ();
