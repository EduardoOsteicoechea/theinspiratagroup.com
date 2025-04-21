let section_2 = document.getElementById("section_2")
let service_card_paragraph = document.getElementsByClassName("service_card_paragraph_hidden")
let service_card_button = document.getElementsByClassName("service_card_button")

for (var x = 0; x < service_card_button.length; x++)
{
    let element = service_card_button[x]
    let container = service_card_paragraph[x]

    element.addEventListener("pointerenter", e =>
    {
        container.classList.remove("service_card_paragraph_hidden")
        container.classList.add("service_card_paragraph_visible")
    })
    element.addEventListener("pointerleave", e =>
    {
        container.classList.remove("service_card_paragraph_visible")
        container.classList.add("service_card_paragraph_hidden")
    })
}

let service_card_horizontal_line = document.getElementsByClassName("service_card_horizontal_line_hidden")[0]
let service_card_vertical_line = document.getElementsByClassName("service_card_vertical_line_hidden")[0]
let service_card_title_bottom = document.getElementsByClassName("service_card_title_bottom_hidden")[0]

window.addEventListener("scroll", e => 
{
    let scroll = window.scrollY
    let section_2_top = section_2.getBoundingClientRect().top
    let section_2_bottom = section_2.getBoundingClientRect().bottom
    let window_inner_height = window.innerHeight

    if (section_2_top < window_inner_height * .85 && section_2_bottom > window_inner_height/3) 
    {
        service_card_vertical_line.classList.add("service_card_vertical_line_visible")
        service_card_vertical_line.classList.remove("service_card_vertical_line_hidden")

        service_card_horizontal_line.classList.add("service_card_horizontal_line_visible")
        service_card_horizontal_line.classList.remove("service_card_horizontal_line_hidden")

        // service_card_title_bottom.classList.add("service_card_title_bottom_visible")
        // service_card_title_bottom.classList.remove("service_card_title_bottom_hidden")
    }
    else if (section_2_bottom < window_inner_height/3)
    {
        service_card_vertical_line.classList.remove("service_card_vertical_line_visible")
        service_card_vertical_line.classList.add("service_card_vertical_line_hidden")

        service_card_horizontal_line.classList.add("service_card_horizontal_line_hidden")
        service_card_horizontal_line.classList.remove("service_card_horizontal_line_visible")

        // service_card_title_bottom.classList.add("service_card_title_bottom_hidden")
        // service_card_title_bottom.classList.remove("service_card_title_bottom_visible")
    }
    else 
    {
        service_card_vertical_line.classList.remove("service_card_vertical_line_visible")
        service_card_vertical_line.classList.add("service_card_vertical_line_hidden")

        service_card_horizontal_line.classList.add("service_card_horizontal_line_hidden")
        service_card_horizontal_line.classList.remove("service_card_horizontal_line_visible")

        // service_card_title_bottom.classList.add("service_card_title_bottom_hidden")
        // service_card_title_bottom.classList.remove("service_card_title_bottom_visible")
    }
})