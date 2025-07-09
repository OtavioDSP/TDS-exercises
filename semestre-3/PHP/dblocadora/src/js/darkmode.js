

  // Alterna o modo noturno
  function toggleDarkMode() {
    document.body.classList.toggle("dark-mode");
    // Salvar preferência no localStorage
    if (document.body.classList.contains("dark-mode")) {
      localStorage.setItem("modoNoturno", "on");
    } else {
      localStorage.setItem("modoNoturno", "off");
    }
  }

  
  document.addEventListener('DOMContentLoaded', function () {
    const darkModeButton = document.getElementById('modo-noturno-btn');
    if (darkModeButton) {
        darkModeButton.addEventListener('click', toggleDarkMode);
    }

    // Aplica modo noturno salvo
    if (localStorage.getItem("modoNoturno") === "on") {
      document.body.classList.add("dark-mode");
    }
  });
