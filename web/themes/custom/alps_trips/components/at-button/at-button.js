/**
 * Attach a click event listener to every instance of the button component in
 * the page.
 */
(function (Drupal, once) {
  Drupal.behaviors.at_button = {
    attach(context) {
      once("at-button", ".at-button", context).forEach((item) => {
        item.addEventListener("click", function (event) {
          event.preventDefault();
          alert("Hello World!");
        });
      });
    },
  };
})(Drupal, once);
