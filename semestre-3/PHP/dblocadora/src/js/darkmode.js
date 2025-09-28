

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

  
<<<<<<< HEAD
  window.onload = function () {
    const btn = document.createElement("button");
    btn.innerText = "Modo Noturno";
    btn.className = "dark-toggle-btn";
    btn.onclick = toggleDarkMode;
    document.body.appendChild(btn);
=======
  document.addEventListener('DOMContentLoaded', function () {
    const darkModeButton = document.getElementById('modo-noturno-btn');
    if (darkModeButton) {
        darkModeButton.addEventListener('click', toggleDarkMode);
    }
>>>>>>> 11b26fb8377b29cdf3d8b60aebff4b49b7d9493e

    // Aplica modo noturno salvo
    if (localStorage.getItem("modoNoturno") === "on") {
      document.body.classList.add("dark-mode");
    }
<<<<<<< HEAD
  };
=======
  });
>>>>>>> 11b26fb8377b29cdf3d8b60aebff4b49b7d9493e
