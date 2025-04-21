let section_1_h2 = document.getElementsByClassName("section_1_h2_hidden")[0]
  
window.addEventListener("load", e => 
{
    section_1_h2.classList.remove("section_1_h2_hidden") 
    section_1_h2.classList.add("section_1_h2_visible") 
})