

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

  
  window.onload = function () {
    const btn = document.createElement("button");
    btn.innerText = "Modo Noturno";
    btn.className = "dark-toggle-btn";
    btn.onclick = toggleDarkMode;
    document.body.appendChild(btn);

    // Aplica modo noturno salvo
    if (localStorage.getItem("modoNoturno") === "on") {
      document.body.classList.add("dark-mode");
    }
  };
