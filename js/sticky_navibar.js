(function () {

    console.log("here");
    const App = function () {
        let app = this;

        app.init = function () {

            app.hidePages();

            let defaultPage = document.querySelector(".defaultPage");

            app.showPage(defaultPage);

            // setup my link bindings...
            app.bindLinks();
        }

        // add event listeners to the page links
        app.bindLinks = function () {
            let links = document.querySelectorAll(".naviLink");
            links.forEach(link => {

                link.addEventListener("click", function () {
                    /// show a specific page.... 
                    let showWhichPageID = link.getAttribute("data-page");
                    let thePage = document.getElementById(showWhichPageID); // get the dom element

                    app.hidePages();
                    app.showPage(thePage);
                })
            })
        }

        app.showPage = function (thePageToShow) {
            thePageToShow.style.display = "block";
        }

        app.hidePages = function () {
            // hide all my pages... 
            let pages = document.querySelectorAll(".page");
            pages.forEach(page => {
                // hide my pages by default
                page.style.display = "none";
            })
        }

        app.init();
    }

    new App();

})(); // ();で実行