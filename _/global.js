function toogle_visibility_by_class(element)
{
    let class_name = element.className.split(" ")[1]
    if (element.className.split(" ")[1].includes("hidden"))
    {
        let inverse_class_name = class_name.replace("hidden","visible")
        element.classList.remove(class_name)
        element.classList.add(inverse_class_name)
    }
    else
    {
        let inverse_class_name = class_name.replace("visible","hidden")
        element.classList.remove(class_name)
        element.classList.add(inverse_class_name)
    }
}

function set_visibility_by_class(element,visibility)
{
    let class_name = element.className.split(" ")[1]
    if (element.className.split(" ")[1].includes("hidden"))
    {
        let inverse_class_name = class_name.replace("hidden",visibility)
        element.classList.remove(class_name)
        element.classList.add(inverse_class_name)
    }
    else
    {
        let inverse_class_name = class_name.replace("visible",visibility)
        element.classList.remove(class_name)
        element.classList.add(inverse_class_name)
    }
}

function set_all_classes_to_hidden(class_list)
{
    for (x = 0; x < class_list.length ; x++) 
    { 
        let element = class_list[x]
        set_visibility_by_class(element,"hidden") 
    }
    return true
}

function set_all_classes_to_visible(class_list)
{
    for (x = 0; x < class_list.length ; x++) 
    { 
        let element = class_list[x]
        set_visibility_by_class(element,"visible") 
    }
    return true
}

function activate_top_condition(element)
{
    return element.getBoundingClientRect().top - window.innerHeight < 0
}

function unactivate_bottom_condition(element)
{
    return element.getBoundingClientRect().top - window.innerHeight < - window.innerHeight * 1.25
}

function unactivate_top_condition(element)
{
    return element.getBoundingClientRect().top - window.innerHeight > -window.innerHeight / 2
}