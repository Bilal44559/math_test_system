//  Dropdown toggle
function setupDropdownToggle(linkId, menuId) {
    const link = document.getElementById(linkId);
    const menu = document.getElementById(menuId);

    link.addEventListener("click", function (event) {
        event.preventDefault();
        menu.classList.toggle("show");
        link.classList.toggle("collapsed");
    });
}
setupDropdownToggle("bookingRecordLink", "bookingRecordMenu");
setupDropdownToggle("serviceLink", "serviceMenu");
setupDropdownToggle("ConfigurationLink", "ConfigurationMenu");


document.addEventListener("click", function (event) {
    if (
        !productManagementLink.contains(event.target) &&
        !productManagementMenu.contains(event.target) &&
        !bookingRecordLink.contains(event.target) &&
        !bookingRecordMenu.contains(event.target)
    ) {
        productManagementMenu.style.display = "none";
    }
    if (
        !pagesExamplesLink.contains(event.target) &&
        !pagesExamplesMenu.contains(event.target)
    ) {
        pagesExamplesMenu.style.display = "none";
    }
});

// notification icon
const icon = document.getElementById("notificationIcon");
const container = document.getElementById("notificationContainer");

container.style.display = "none"; // hide by default

icon.addEventListener("click", () => {
    container.style.display =
        container.style.display === "none" ? "block" : "none";
});
