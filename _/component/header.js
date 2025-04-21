// The header variable and class are declared in header.php to resolve the 
// header_class.js Routing issue

let header_navigation = document.getElementById("header_navigation")
let header_navigation_links = document.getElementById("header_navigation").children

window.addEventListener("load", e =>
{
    let counter = 0

    const interval_id = setInterval(() =>
    {
        let link = header_navigation_links[counter]
        if(counter < header_navigation_links.length)
        {
            link.style.bottom = "0"
            counter++
        }
        else
        {
            clearInterval(interval_id)
        }
    }, 200);

})
