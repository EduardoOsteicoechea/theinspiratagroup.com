let section_3_background_image = document.getElementById("section_3_background_image")
let section_3_background_image_image = section_3_background_image.children[0]


window.addEventListener("scroll", e => 
{
    let image = section_3_background_image_image
    let image_top = section_3_background_image_image.getBoundingClientRect().y - window.innerHeight
    if (image_top < 0) 
    {
        section_3_background_image_image.style.top = (Math.abs(image_top)/1.5) + "px"
    }
})