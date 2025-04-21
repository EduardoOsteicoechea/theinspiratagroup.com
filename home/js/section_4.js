let card_project = document.getElementsByClassName("card_project")
let card_project_information_container = document.getElementsByClassName("card_project_information_container_hidden")
for (var x = 0; x < card_project.length; x++)
{
    let element = card_project[x]
    let container = card_project_information_container[x]
    element.addEventListener("pointerenter", e => 
    {
        container.classList.remove("card_project_information_container_hidden")
        container.classList.add("card_project_information_container_visible")
    })
    element.addEventListener("pointerleave", e => 
    {
        container.classList.remove("card_project_information_container_visible")
        container.classList.add("card_project_information_container_hidden")
    })
}