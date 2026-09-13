window.addEventListener("DOMContentLoaded", (event) => {
  // Navbar shrink function
  var navbarShrink = function () {
    const navbarCollapsible = document.body.querySelector("#mainNav");
    if (!navbarCollapsible) {
      return;
    }
    if (window.scrollY === 0) {
      navbarCollapsible.classList.remove("navbar-shrink");
    } else {
      navbarCollapsible.classList.add("navbar-shrink");
    }
  };

  // Shrink the navbar
  navbarShrink();

  // Shrink the navbar when page is scrolled
  document.addEventListener("scroll", navbarShrink);

  //  Activate Bootstrap scrollspy on the main nav element
  const mainNav = document.body.querySelector("#mainNav");
  if (mainNav) {
    new bootstrap.ScrollSpy(document.body, {
      target: "#mainNav",
      rootMargin: "0px 0px -40%",
    });
  }
});

$("#carousel-1").owlCarousel({
  loop: true,
  margin: 10,
  autoWidth: false,
  autoHeight: true,
  autoplay: true,
  dots: false,
  slideBy: 1,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
  },
});

const nameInput = $("#input-nama");
const nohpInput = $("#input-nohp");
const umurInput = $("#input-umur");

function sendForm(category) {
  //send ajax OTP here
  var form_data = new FormData();

  form_data.append("category", category);
  form_data.append("nama", nameInput.val());
  form_data.append("nohp", nohpInput.val());
  form_data.append("umur", umurInput.val());

  $.ajax({
    url: "func/sendform.php",
    type: "POST",
    data: form_data,
    processData: false,
    contentType: false,
    success: function (result) {
      var res = jQuery.parseJSON(result);
      if (res["error"] == -1) {
        iziToast.show({
          message: "“Terima kasih! Form berhasil terkirim.",
          color: "green",
          position: "topCenter",
        });
      } else {
        iziToast.show({
          message:
            "Form gagal terkirim! Silakan coba kembali. (Error: " +
            res["error"] +
            ")",
          color: "red",
          position: "topCenter",
        });
      }
    },
  });
}
