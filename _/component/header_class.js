export class Header_class 
{
    element
    current_page_name = ""
    root_folder = ""
    height = 0
    first_apereance = true
    visible = true
    logo_is_visible = false
    message_is_visible = false
    navigation_is_visible = false

    constructor(element, page_name, root_folder) 
    {
        this.element = element
        this.current_page_name = page_name
        this.root_folder = root_folder
        this.height = this.element.getBoundingClientRect().height
        if(window.scrollY > 0)
        {
            this.first_apereance = false
        }
        if(window.scrollY > this.height)
        {
            this.visible = false
        }

    }

    print_height()
    {
        return this.visible
    }

}