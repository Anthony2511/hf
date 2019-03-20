$(".nav__menu-bloc").accessibleMegaMenu({
    /* prefix for generated unique id attributes, which are required
       to indicate aria-owns, aria-controls and aria-labelledby */
    uuidPrefix: "accessible-megamenu",

    /* css class used to define the megamenu styling */
    menuClass: "nav__menu",

    /* css class for a top-level navigation item in the megamenu */
    topNavItemClass: "nav__item",

    /* css class for a megamenu panel */
    panelClass: "nav__sub-nav",

    /* css class for a group of items within a megamenu panel */
    panelGroupClass: "sub-nav-group",

    /* css class for the hover state */
    hoverClass: "hover",

    /* css class for the focus state */
    focusClass: "focus",

    /* css class for the open state */
    openClass: "open",

    closeDelay: 250, // default open delay when opening menu via mouseover
    openOnMouseover: true // default setting for whether menu should open on mouseover
});