function dropdownBtn(element)
{
    if (element.getAttribute("aria-expanded") == "true") {
        var btn = element.querySelector(".btn-content");
        btn.style.display = "none";
        element.setAttribute("aria-expanded", "false");

    } else {
        var btn = element.querySelector(".btn-content");
        btn.style.display = "block";
        btn.style.flexDirection = "column";
        element.setAttribute("aria-expanded", "true");
    }
}