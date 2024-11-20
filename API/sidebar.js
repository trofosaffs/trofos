'use strict';

import { api_key, fetchDataFromServer } from "./api.js";


export function sidebar () {
    const genreList = {};

    fetchDataFromServer(`https://api.themoviedb.org/3/movie/changes?api_key=${api_key}`, function({ genres}) {
        for (const { id, name } of genres ) {
            genreList[id] = name;
        }

        genreLink();
    });


    const sidebarInner = document.createElement("div");
    sidebarInner.classList.add("siderbar-inner");

    sidebarInner.innerHTML = html`
    <div class="siderbar-list">

       <p class="title">Genre</p>
      
      </div>
      `;
    

      const genreLink = function () {

        for (const [genreId, genreName] of Object.entries(genreList)) {
            const link = document.createElement("a");
            link.classList.add("sidebar-link");
            link.setAttribute("href", "./movie-list.html");
            link.setAttribute("menu-close", "");
            // link.setAttribute("onclick", `getMovieList("with_genres=${genreId}", "${genreName}")`);
            link.textContent = genreName;

            sidebarInner.querySelectorAll("sidebar-list")[0].appendChild(link);
        
        }

        const sidebar = document.querySelector("[sidebar]");
        sidebar.appendChild(sidebarInner);
        toggleSidebar(sidebar);
  
    }

    const toggleSidebar = function(sidebar) {
        /**
         * Toggle 
         */
    }

}  

